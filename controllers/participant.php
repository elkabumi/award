<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/participant_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Peserta");

$_SESSION['menu_active'] = 2;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "participant.php?page=form";

		include '../views/participant/list.php';
		
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "participant.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$type = 2;
			//$row = read_id($id);
			$query = select_participants1($id);
			$action = "participant.php?page=edit&id=$id";
		} else{
			$type = 1;
			//inisialisasi
			$row = new stdClass();
			$query = select_questions1(0);
		
			$action = "participant.php?page=save";
		}

		include '../views/participant/form.php';
		get_footer();
	break;
	
	
	case 'save':	
	
		extract($_POST);
		
		// Simpan data participants
		$data1 = "'', '".$_POST['i_participants1_1']."', '".date("Y-m-d")."', '','1'";
		create("participants", $data1);
		$participant_id = mysql_insert_id();
		
		// Simpan data participants1
		$query = select_questions1(0);
		$no=1;
		while($row = mysql_fetch_array($query)){
			
			$answer = get_isset($_POST["i_participants1_".$no]);
			$data2 =  "'','".$row['q1_id']."', '".$row['q1_name']."', '$answer', '$participant_id'";
			create("participants1", $data2);
			$participants1_id = mysql_insert_id();
			// simpan data participants1_detail
			$query_child = mysql_query("select * from questions1_details where q1_id = '".$row['q1_id']."'
												order by q1d_id");
			$no_child = 1;
            while($row_child = mysql_fetch_array($query_child)){
				
				$answer_detail = get_isset($_POST["i_participants1_detail_".$row['q1_id']."_".$no_child]);
				$data3 =  "'','".$participants1_id."', '".$row_child['q1d_id']."', '".$row_child['q1d_name']."', '$answer_detail'";
				create("participants1_details", $data3);
				
				
			$no_child++;
			}
			
		$no++;
		}
			
		header('Location: participant.php?page=list&did=1');
		
	break;
	
	

	case 'edit':	
	
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		delete_all($id);
		
		
		extract($_POST);
		
		// Simpan data participants
		$data1 = "'', '".$_POST['i_participants1_1']."', '".date("Y-m-d")."', ''";
		create("participants", $data1);
		$participant_id = mysql_insert_id();
		
		// Simpan data participants1
		$query = select_questions1(0);
		$no=1;
		while($row = mysql_fetch_array($query)){
			
			$answer = get_isset($_POST["i_participants1_".$no]);
			$data2 =  "'','".$row['q1_id']."', '".$row['q1_name']."', '$answer', '$participant_id'";
			create("participants1", $data2);
			$participants1_id = mysql_insert_id();
			// simpan data participants1_detail
			$query_child = mysql_query("select * from questions1_details where q1_id = '".$row['q1_id']."'
												order by q1d_id");
			$no_child = 1;
            while($row_child = mysql_fetch_array($query_child)){
				
				$answer_detail = get_isset($_POST["i_participants1_detail_".$row['q1_id']."_".$no_child]);
				$data3 =  "'','".$participants1_id."', '".$row_child['q1d_id']."', '".$row_child['q1d_name']."', '$answer_detail'";
				create("participants1_details", $data3);
				
				
			$no_child++;
			}
			
		$no++;
		}
			
		header('Location: participant.php?page=list&did=2');
		
	break;
	
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: participant.php?page=list&did=3');

	break;
	
}

?>