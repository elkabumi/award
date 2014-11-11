<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/question_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("daftar isian pertanyaan");

$_SESSION['menu_active'] = 6;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select();
		$add_button = "question.php?page=form";

		include '../views/question/list.php';
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "question.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);
		
			$action = "question.php?page=edit&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->q1_name = false;
			$row->q1_get_child = 0;
			
			$action = "question.php?page=save";
		}

		include '../views/question/form.php';
		get_footer();
	break;
	
	case 'form_child':
		get_header();

		$close_button = "question.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);
		
			$action = "question.php?page=edit_child&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->q1d_name = false;
			$q1_id = (isset($_GET['q1_id'])) ? $_GET['q1_id'] : null;
			$action = "question.php?page=save_child&q1_id=$q1_id";
		}

		include '../views/question/form_child.php';
		get_footer();
	break;

	case 'save':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_get_child  = get_isset($i_get_child);
		
		$data = "'',
					'$i_name',
					'$i_get_child'
			";

		create($data);
			
		header('Location: question.php?page=list&did=1');
		
	break;
	
	case 'save_child':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		$q1_id = (isset($_GET['q1_id'])) ? $_GET['q1_id'] : null;
		
		$data = "'',
				'$q1_id',
					'$i_name'
			";

		create_child($data);
			
		header('Location: question.php?page=list&did=1');
		
	break;

	case 'edit':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
		$i_get_child  = get_isset($i_get_child);
					
					$data = " q1_name = '$i_name',
								q1_get_child = '$i_get_child'

			";

			
		update($data, $id);
			
		header('Location: question.php?page=list&did=2');

	break;
	
	case 'edit_child':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
					
					$data = " q1d_name = '$i_name',
		
			";

			
		update_child($data, $id);
			
		header('Location: question.php?page=list&did=2');

	break;

	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: question.php?page=list&did=3');

	break;
	
	case 'delete':

		$id = get_isset($_GET['id']);	

		delete_child($id);

		header('Location: question.php?page=list&did=3');

	break;
}

?>