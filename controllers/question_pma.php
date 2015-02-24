<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/question_pma_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("daftar isian pertanyaan");

$_SESSION['menu_active'] = 1;
$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : 0;

switch ($page) {
	case 'list':
		get_header($title);
		
		$query = select($data_id);
		$query_identitas = select_identitas($data_id);
		$add_button = "question_pma.php?page=form";
		$add_button_identitas = "question_pma.php?page=form_identitas";

		include '../views/question_pma/list.php';
		include '../views/question_pma/list_institusi.php';
	
		include '../views/question_pma/list_identitas.php';
		
		echo "</section>";
		
		get_footer();
	break;
	
	case 'form':
		get_header();
	
		$close_button = "question_pma.php?page=list&data_id=$data_id";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);
		
			$action = "question_pma.php?page=edit&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->qp1_name = false;
			$row->qp1_get_child = 0;
			
			$action = "question_pma.php?page=save";
		}

		include '../views/question_pma/form.php';
		get_footer();
	break;
	
	case 'form_identitas':
		get_header();

		$close_button = "question_pma.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
	
		if($id){

			$row = read_id_identitas($id);
		
			$action = "question_pma.php?page=edit_identitas&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->qp3_name = false;
			
			$action = "question_pma.php?page=save_identitas";
		}

		include '../views/question_pma/form_identitas.php';
		get_footer();
	break;
	
	case 'form_child':
		get_header();

		$close_button = "question_pma.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_child_id($id);
		
			$action = "question_pma.php?page=edit_child&id=$id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->qp1d_name = false;
			$qp1_id = (isset($_GET['qp1_id'])) ? $_GET['qp1_id'] : null;
			$action = "question_pma.php?page=save_child&qp1_id=$qp1_id";
		}

		include '../views/question_pma/form_child.php';
		get_footer();
	break;
	
	case 'form_question_pma':
		get_header();

		$close_button = "question_pma.php?page=list&data_id=$data_id";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		
	
		if($id){

			$row = read_question_pma_id($id);
		
			$action = "question_pma.php?page=edit_question_pma&id=$id&data_id=$data_id";
		} else{
			
			//inisialisasi
			$row = new stdClass();

			$row->qp2_name = false;
			$row->qp2_weight = 0;
			$row->qp2_description = false;
			$cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id'] : null;
			$action = "question_pma.php?page=save_question_pma&cat_id=$cat_id&data_id=$data_id";
		}

		include '../views/question_pma/form_question_pma.php';
		get_footer();
	break;
	
	case 'form_opsi':
		get_header();
		
		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		$qp2_id = (isset($_GET['qp2_id'])) ? $_GET['qp2_id'] : null;
		
		$close_button = "question_pma.php?page=form_question_pma&id=$qp2_id";

		
		if($id){

			$row = read_opsi_id($id);
		
			$action = "question_pma.php?page=edit_opsi&id=$id&qp2_id=$qp2_id";
		} else{
			
			//inisialisasi
			$row = new stdClass();
			
			$row->qp2d_number = false;
			$row->qp2d_name = false;
			$row->qp2d_point	 = 0;
			
			$action = "question_pma.php?page=save_opsi&qp2_id=$qp2_id";
		}

		include '../views/question_pma/form_opsi.php';
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
			
		header('Location: question_pma.php?page=list&did=1');
		
	break;
	
	case 'save_identitas':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		
		$data = "'',
				 '0',
				'$i_name'
			";

		create_identitas($data);
			
		header('Location: question_pma.php?page=list&did=1');
		
	break;
	
	case 'save_child':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		$qp1_id = (isset($_GET['qp1_id'])) ? $_GET['qp1_id'] : null;
		
		$data = "'',
				'$qp1_id',
				'$i_name'
			";

		create_child($data);
			
		header('Location: question_pma.php?page=list&did=1');
		
	break;
	
	case 'save_question_pma':
	
		extract($_POST);

		$i_name = get_isset($i_name);
		$i_weight = get_isset($i_weight);
		$i_description = get_isset($i_description);
		
		$cat_id = (isset($_GET['cat_id'])) ? $_GET['cat_id'] : null;
		
		$data = "'',
				'0',
				'',
				'$i_name',
				'$cat_id',
				'$i_weight',
				'$i_description',
				'0'
			";

		create_config("questions_pma2", $data);
		$new_id = mysql_insert_id();
			
		header("Location: question_pma.php?page=form_question_pma&did=1&id=$new_id");
		
	break;
	
	case 'save_opsi':
	
		extract($_POST);

		//$i_number = get_isset($i_number);
		$i_name = get_isset($i_name);
		$i_point = get_isset($i_point);
		
		$qp2_id = (isset($_GET['qp2_id'])) ? $_GET['qp2_id'] : null;
		
		$data = "'',
				'0',
				'$qp2_id',
				'',
				'$i_name',
				'$i_point'
			";

		create_config("questions_pma2_details", $data);
		$new_id = mysql_insert_id();
			
		header("Location: question_pma.php?page=form_question_pma&did=1&id=$qp2_id");
		
	break;

	case 'edit':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
		$i_get_child  = get_isset($i_get_child);
					
					$data = " qp1_name = '$i_name',
								qp1_get_child = '$i_get_child'

			";

			
		update($data, $id);
			
		header('Location: question_pma.php?page=list&did=2');

	break;
	
	case 'edit_identitas':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
					
					$data = " qp3_name = '$i_name'

			";

			
		update_identitas($data, $id);
			
		header('Location: question_pma.php?page=list&did=2');

	break;
	
	case 'edit_child':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
					
					$data = " qp1d_name = '$i_name'
		
			";

			update_child($data, $id);
			
		header('Location: question_pma.php?page=list&did=2');

	break;
	
	case 'edit_question_pma':

		extract($_POST);
		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
		$i_weight = get_isset($i_weight);	
		$i_description = get_isset($i_description);	
		
		$data = " qp2_name = '$i_name',
				   	qp2_weight 	 = '$i_weight',
				  qp2_description 	 = '$i_description'
			";

		update_data("questions_pma2", "qp2_id 	", $data, $id);
			
		header("Location: question_pma.php?page=list&did=2&data_id=$data_id");

	break;
	
	case 'edit_opsi':

		extract($_POST);
		$id = get_isset($_GET['id']);
		//$i_number = get_isset($i_number);
		$i_name = get_isset($i_name);
		$i_point = get_isset($i_point);
		
		$qp2_id = (isset($_GET['qp2_id'])) ? $_GET['qp2_id'] : null;
		
		$data = " qp2d_number = '',
				  qp2d_name = '$i_name',
				  qp2d_point = '$i_point'
			";

		update_opsi("questions_pma2_details", $data, $id);
			
		header("Location: question_pma.php?page=form_question_pma&did=2&id=$qp2_id");

	break;

	case 'delete':

		$id = get_isset($_GET['id']);	

		delete($id);

		header('Location: question_pma.php?page=list&did=3');

	break;
	
	case 'delete_identitas':

		$id = get_isset($_GET['id']);	

		delete_identitas($id);

		header('Location: question_pma.php?page=list&did=3');

	break;
	
	case 'delete_child':

		$id = get_isset($_GET['id']);	

		delete_child($id);

		header('Location: question_pma.php?page=list&did=3');

	break;
	
	case 'delete_question_pma':

		$id = get_isset($_GET['id']);	

		delete_opsi("questions_pma2", $id);
		delete_opsi("questions_pma2_details", $id);

		header('Location: question_pma.php?page=list&did=3');

	break;
	
	case 'delete_opsi':

		$id = get_isset($_GET['id']);	

		delete_opsi("questions_pma2_details", $id);

		$qp2_id = (isset($_GET['qp2_id'])) ? $_GET['qp2_id'] : null;
			
		header("Location: question_pma.php?page=form_question_pma&did=2&id=$qp2_id");

	break;
}

?>