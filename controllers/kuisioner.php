<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/kuisioner_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("kuisioner Kab Kota");

$_SESSION['menu_active'] = 6;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "kuisioner.php?page=form";


		include '../views/kuisioner/list.php';
		get_footer();
	break;
	
	case 'list_detail':
		get_header($title);
		$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : null;
		
		$query = select_participant($data_id);
		
		
		$add_button = "kuisioner_pma.php?page=form";


		include '../views/kuisioner/list_detail.php';
		get_footer();
	break;
	
	
	case 'list_answer':
		get_header($title);
		$answer_id = (isset($_GET['answer_id'])) ? $_GET['answer_id'] : null;
		$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : null;
		$close_button="kuisioner.php?page=list_detail&data_id=$data_id";
		
		$query = select_answer_detail($answer_id);
		$query_identitas = select_answer_identitas($answer_id);
		$add_button = "answer_pma.php?page=form";
		$add_button_identitas = "answer_pma.php?page=form_identitas";
		
		
		include '../views/kuisioner/list_answer.php';
		include '../views/kuisioner/list_answer_institusi.php';
		include '../views/kuisioner/list_answer_identitas.php';
		
	break;
	
	case 'form':
		get_header();

		$close_button = "kuisioner.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);
			$row->kuisioner_date = format_date($row->kuisioner_date);
			
			$action = "kuisioner.php?page=edit&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->kuisioner_name = false;
			$row->kuisioner_date = false;
			$row->kuisioner_description = false;

			$action = "kuisioner.php?page=save";
		}

		include '../views/kuisioner/form.php';
		get_footer();
	break;

	case 'save':
	
	

		extract($_POST);

	
		$i_name = get_isset($i_name);
		$i_date = get_isset($i_date);
		$i_description = get_isset($i_description);
		$i_date = format_back_date($i_date);
		
				$data = "'',
					'$i_name', 
					'$i_description',
					'$i_date',
					'1'
			";

			create($data);
		

			header('Location: kuisioner.php?page=list&did=1');
		
	break;

	case 'edit':

		extract($_POST);
		$id = get_isset($_GET['id']);	
		
		$i_name = get_isset($i_name);
		$i_date = get_isset($i_date);
		$i_description = get_isset($i_description);
		$i_date = format_back_date($i_date);
		
					$data = " kuisioner_name = '$i_name', 
					kuisioner_description = '$i_description',
					kuisioner_date = '$i_date'

			";

			update($data, $id);
			
			header('Location: kuisioner.php?page=list&did=2');

		

	break;

	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: kuisioner.php?page=list&did=3');

	break;
}

?>