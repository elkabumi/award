<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/participant_pma_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("Peserta");

$_SESSION['menu_active'] = 3;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "participant_pma.php?page=form";

		include '../views/participant_pma/list.php';
		
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "participant_pma.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){
			$type = 2;
			//$row = read_id($id);
			$query = select_participants_pma1($id);
			$action = "participant_pma.php?page=edit&id=$id";
		} else{
			$type = 1;
			//inisialisasi
			$row = new stdClass();
			$query = select_questions_pma1(0);
		
			$action = "participant_pma.php?page=save";
		}

		include '../views/participant_pma/form.php';
		get_footer();
	break;
	
	
	case 'save':	
	
		extract($_POST);
		
		// Simpan data participant_pmas
		$data1 = "'', '".$_POST['i_participants_pma1_1']."', '".date("Y-m-d")."', '','2'";
		
		create("participants", $data1);
		$participant_pma_id = mysql_insert_id();
		
		// Simpan data participant_pmas1
		$query = select_questions_pma1(0);
		$no=1;
		while($row = mysql_fetch_array($query)){
			
			
			if($row['qp1_get_child'] == '1'){
				
				
					
					$answer_detail = get_isset($_POST["i_participants_pma1_detail_".$row['qp1_id']]);
					echo $answer_detail;
					$data2 =  "'','".$row['qp1_id']."', '".$row['qp1_name']."', '$answer_detail', '$participant_pma_id'";
					
					create("participants_pma1", $data2);
					
					
			
				
			}else{
				
				$answer = get_isset($_POST["i_participants_pma1_".$no]);
				$data2 =  "'','".$row['qp1_id']."', '".$row['qp1_name']."', '$answer', '$participant_pma_id'";
				create("participants_pma1", $data2);
			}
			
			
			
			
			$participant_pmas1_id = mysql_insert_id();
			
			
			$no_child = 1;
           
			
		$no++;
		}
			
		header('Location: participant_pma.php?page=list&did=1');
		
	break;
	
	

	case 'edit':	
	
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		delete_all($id);
		
		
		extract($_POST);
		
		$data1 = "'', '".$_POST['i_participants_pma1_1']."', '".date("Y-m-d")."', '','2'";
		
		create("participants", $data1);
		$participant_pma_id = mysql_insert_id();
		
		// Simpan data participant_pmas1
		$query = select_questions_pma1(0);
		$no=1;
		while($row = mysql_fetch_array($query)){
			
			
			if($row['qp1_get_child'] == '1'){
				
				
					
					$answer_detail = get_isset($_POST["i_participants_pma1_detail_".$row['qp1_id']]);
				
					$data2 =  "'','".$row['qp1_id']."', '".$row['qp1_name']."', '$answer_detail', '$participant_pma_id'";
					
					create("participants_pma1", $data2);
					
					
			
				
			}else{
				
				$answer = get_isset($_POST["i_participants_pma1_".$no]);
				$data2 =  "'','".$row['qp1_id']."', '".$row['qp1_name']."', '$answer', '$participant_pma_id'";
				create("participants_pma1", $data2);
			}
			
			
			
			
			$participant_pmas1_id = mysql_insert_id();
			
			
			$no_child = 1;
           
			
		$no++;
		}
		header('Location: participant_pma.php?page=list&did=2');	
		
	break;
	
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: participant_pma.php?page=list&did=3');

	break;
	
}

?>