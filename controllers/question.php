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
		include '../views/question/list_institusi.php';
		
		echo "</section>";
		
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

			$row = read_child_id($id);
		
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
	
	case 'form_question':
		get_header();

		$close_button = "question.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_question_id($id);
		
			$action = "question.php?page=edit_question&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->q2_name = false;
			$row->q2_weight = false;
			$sub_cat_id = (isset($_GET['sub_cat_id'])) ? $_GET['sub_cat_id'] : null;
			$action = "question.php?page=save_question&sub_cat_id=$sub_cat_id";
		}

		include '../views/question/form_question.php';
		get_footer();
	break;
	
	case 'form_opsi':
		get_header();
		
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		$q2_id = (isset($_GET['q2_id'])) ? $_GET['q2_id'] : null;
		
		$close_button = "question.php?page=form_question&id=$q2_id";

		
		if($id){

			$row = read_opsi_id($id);
		
			$action = "question.php?page=edit_opsi&id=$id&q2_id=$q2_id";
		} else{
			
			//inisialisasi
			$row = new stdClass();
			
			$row->q2d_number = false;
			$row->q2d_name = false;
			$row->q2d_point	 = false;
			
			$action = "question.php?page=save_opsi&q2_id=$q2_id";
		}

		include '../views/question/form_opsi.php';
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
	
	case 'save_question':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_weight = get_isset($i_weight);
		
		$sub_cat_id = (isset($_GET['sub_cat_id'])) ? $_GET['sub_cat_id'] : null;
		
		$data = "'',
				'',
				'$i_name',
				'$sub_cat_id',
				'$i_weight'
			";

		create_config("questions2", $data);
		$new_id = mysql_insert_id();
			
		header("Location: question.php?page=form_question&did=1&id=$new_id");
		
	break;
	
	case 'save_opsi':
	
		extract($_POST);

		//$i_number = get_isset($i_number);
		$i_name = get_isset($i_name);
		$i_point = get_isset($i_point);
		
		$q2_id = (isset($_GET['q2_id'])) ? $_GET['q2_id'] : null;
		
		$data = "'',
				'$q2_id',
				'',
				'$i_name',
				'$i_point'
			";

		create_config("questions2_details", $data);
		$new_id = mysql_insert_id();
			
		header("Location: question.php?page=form_question&did=1&id=$q2_id");
		
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
					
					$data = " q1d_name = '$i_name'
		
			";

			update_child($data, $id);
			
		header('Location: question.php?page=list&did=2');

	break;
	
	case 'edit_question':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
		$i_weight = get_isset($i_weight);	
		
		$data = " q2_name = '$i_name',
				  q2_weight = '$i_weight'
			";

		update_data("questions2", "q2_id", $data, $id);
			
		header('Location: question.php?page=list&did=2');

	break;
	
	case 'edit_opsi':

		extract($_POST);
		$id = get_isset($_GET['id']);
		//$i_number = get_isset($i_number);
		$i_name = get_isset($i_name);
		$i_point = get_isset($i_point);
		
		$q2_id = (isset($_GET['q2_id'])) ? $_GET['q2_id'] : null;
		
		$data = " q2d_number = '',
				  q2d_name = '$i_name',
				  q2d_point = '$i_point'
			";

		update_opsi("questions2_details", $data, $id);
			
		header("Location: question.php?page=form_question&did=2&id=$q2_id");

	break;

	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: question.php?page=list&did=3');

	break;
	
	case 'delete_child':

		$id = get_isset($_GET['id']);	

		delete_child($id);

		header('Location: question.php?page=list&did=3');

	break;
	
	case 'delete_question':

		$id = get_isset($_GET['id']);	

		delete_config("questions2", $id);

		header('Location: question.php?page=list&did=3');

	break;
	
	case 'delete_opsi':

		$id = get_isset($_GET['id']);	

		delete_opsi("questions2_details", $id);

		$q2_id = (isset($_GET['q2_id'])) ? $_GET['q2_id'] : null;
			
		header("Location: question.php?page=form_question&did=2&id=$q2_id");

	break;
}

?>