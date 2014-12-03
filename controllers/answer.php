<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/answer_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("daftar isian pertanyaan");

$_SESSION['menu_active'] = 6;
$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : 0;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select($data_id);
		$query_js1 = select(0);
		$query_js2 = select(0);
		$query_js3 = select(0);
		$query_identitas = select_identitas($data_id);
		$add_button = "answer.php?page=form";
		$add_button_identitas = "answer.php?page=form_identitas";

		include '../views/answer/list.php';
		include '../views/answer/list_institusi.php';
		include '../views/answer/list_identitas.php';
		
		echo "</section>";
		
		get_footer();
	break;
	
	case 'form':
		get_header();

		$close_button = "answer.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);
		
			$action = "answer.php?page=edit&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->q1_name = false;
			$row->q1_get_child = 0;
			
			$action = "answer.php?page=save";
		}

		include '../views/answer/form.php';
		get_footer();
	break;
	
	case 'form_identitas':
		get_header();

		$close_button = "answer.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id_identitas($id);
		
			$action = "answer.php?page=edit_identitas&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->q3_name = false;
			
			$action = "answer.php?page=save_identitas";
		}

		include '../views/answer/form_identitas.php';
		get_footer();
	break;
	
	case 'form_child':
		get_header();

		$close_button = "answer.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_child_id($id);
		
			$action = "answer.php?page=edit_child&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->q1d_name = false;
			$q1_id = (isset($_GET['q1_id'])) ? $_GET['q1_id'] : null;
			$action = "answer.php?page=save_child&q1_id=$q1_id";
		}

		include '../views/answer/form_child.php';
		get_footer();
	break;
	
	case 'form_answer':
		get_header();

		$close_button = "answer.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_answer_id($id);
		
			$action = "answer.php?page=edit_answer&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->q2_name = false;
			$row->q2_weight = 0;
			$row->q2_description = false;
			$sub_cat_id = (isset($_GET['sub_cat_id'])) ? $_GET['sub_cat_id'] : null;
			$action = "answer.php?page=save_answer&sub_cat_id=$sub_cat_id";
		}

		include '../views/answer/form_answer.php';
		get_footer();
	break;
	
	case 'form_opsi':
		get_header();
		
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		$q2_id = (isset($_GET['q2_id'])) ? $_GET['q2_id'] : null;
		
		$close_button = "answer.php?page=form_answer&id=$q2_id";

		
		if($id){

			$row = read_opsi_id($id);
		
			$action = "answer.php?page=edit_opsi&id=$id&q2_id=$q2_id";
		} else{
			
			//inisialisasi
			$row = new stdClass();
			
			$row->q2d_number = false;
			$row->q2d_name = false;
			$row->q2d_point	 = 0;
			
			$action = "answer.php?page=save_opsi&q2_id=$q2_id";
		}

		include '../views/answer/form_opsi.php';
		get_footer();
	break;

	case 'save':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_get_child  = get_isset($i_get_child);
		
		$data = "'',
					'$i_name',
					'$i_get_child',
					'0'
			";

		create($data);
			
		header('Location: answer.php?page=list&did=1');
		
	break;
	
	case 'save_identitas':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		
		$data = "'',
				 '0',
					'$i_name'
			";

		create_identitas($data);
			
		header('Location: answer.php?page=list&did=1');
		
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
			
		header('Location: answer.php?page=list&did=1');
		
	break;
	
	case 'save_answer':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_weight = get_isset($i_weight);
		$i_description = get_isset($i_description);
		
		$sub_cat_id = (isset($_GET['sub_cat_id'])) ? $_GET['sub_cat_id'] : null;
		
		$data = "'',
				'0',
				'',
				'$i_name',
				'$sub_cat_id',
				'$i_weight',
				'$i_description',
				'0'
			";

		create_config("answers2", $data);
		$new_id = mysql_insert_id();
			
		header("Location: answer.php?page=form_answer&did=1&id=$new_id");
		
	break;
	
	case 'save_opsi':
	
		extract($_POST);

		//$i_number = get_isset($i_number);
		$i_name = get_isset($i_name);
		$i_point = get_isset($i_point);
		
		$q2_id = (isset($_GET['q2_id'])) ? $_GET['q2_id'] : null;
		
		$data = "'',
				'0',
				'$q2_id',
				'',
				'$i_name',
				'$i_point'
			";

		create_config("answers2_details", $data);
		$new_id = mysql_insert_id();
			
		header("Location: answer.php?page=form_answer&did=1&id=$q2_id");
		
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
			
		header('Location: answer.php?page=list&did=2');

	break;
	
	case 'edit_identitas':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
					
					$data = " q3_name = '$i_name'

			";

			
		update_identitas($data, $id);
			
		header('Location: answer.php?page=list&did=2');

	break;
	
	case 'edit_child':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
					
					$data = " q1d_name = '$i_name'
		
			";

			update_child($data, $id);
			
		header('Location: answer.php?page=list&did=2');

	break;
	
	case 'edit_answer':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
		$i_weight = get_isset($i_weight);	
		$i_description = get_isset($i_description);	
		
		$data = " q2_name = '$i_name',
				  q2_weight = '$i_weight',
				  q2_description = '$i_description'
			";

		update_data("answers2", "q2_id", $data, $id);
			
		header('Location: answer.php?page=list&did=2');

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

		update_opsi("answers2_details", $data, $id);
			
		header("Location: answer.php?page=form_answer&did=2&id=$q2_id");

	break;

	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: answer.php?page=list&did=3');

	break;
	
	case 'delete_identitas':

		$id = get_isset($_GET['id']);	

		delete_identitas($id);

		header('Location: answer.php?page=list&did=3');

	break;
	
	case 'delete_child':

		$id = get_isset($_GET['id']);	

		delete_child($id);

		header('Location: answer.php?page=list&did=3');

	break;
	
	case 'delete_answer':

		$id = get_isset($_GET['id']);	

		delete_config("answers2", $id);

		header('Location: answer.php?page=list&did=3');

	break;
	
	case 'delete_opsi':

		$id = get_isset($_GET['id']);	

		delete_opsi("answers2_details", $id);

		$q2_id = (isset($_GET['q2_id'])) ? $_GET['q2_id'] : null;
			
		header("Location: answer.php?page=form_answer&did=2&id=$q2_id");

	break;
}

?>