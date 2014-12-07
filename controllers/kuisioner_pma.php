<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/kuisioner_pma_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("kuisioner Pma");

$_SESSION['menu_active'] = 6;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "kuisioner_pma.php?page=form";


		include '../views/kuisioner_pma/list.php';
		get_footer();
	break;
	
	case 'list_detail':
		get_header($title);
		$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : null;
		$query = select_phase();
		$add_button = "kuisioner_pma.php?page=form";


		include '../views/kuisioner_pma/list_detail.php';
		get_footer();
	break;
	
	case 'list_kuisioner':
		get_header($title);
		
		$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : null;
		$query = select_detail();
		include '../views/kuisioner_pma/list_detail.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "kuisioner_pma.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);
			$row->kuisioner_pma_date = format_date($row->kuisioner_pma_date);
			
			$action = "kuisioner_pma.php?page=edit&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->kuisioner_pma_name = false;
			$row->kuisioner_pma_date = false;
			$row->kuisioner_pma_description = false;

			$action = "kuisioner_pma.php?page=save";
		}

		include '../views/kuisioner_pma/form.php';
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
					'2'
			";

			create($data);
		

			header('Location: kuisioner_pma.php?page=list&did=1');
		
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
			
			header('Location: kuisioner_pma.php?page=list&did=2');

		

	break;

	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: kuisioner_pma.php?page=list&did=3');

	break;
}

?>