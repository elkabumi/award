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
<<<<<<< HEAD
		$action = "answer.php?page=save_answer";
	

=======
		$add_button = "answer.php?page=form";
		$add_button_identitas = "answer.php?page=form_identitas";
		$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : null;
		$action = "answer.php?page=save_jawaban&data_id=$data_id";
		
>>>>>>> 648331666c2fa7a46531f871549d06fcb69940dd
		include '../views/answer/list.php';
		//include '../views/answer/list_institusi.php';
		include '../views/answer/list_identitas.php';
		
		
		
		get_footer();
	break;
	
<<<<<<< HEAD
=======
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
	
	case 'save_jawaban':
	
		$participant_id = (isset($_POST['i_participant_id'])) ? $_POST['i_participant_id'] : null;
		$participant_name = (isset($_POST['i_answer1_1'])) ? $_POST['i_answer1_1'] : null;
		$assessor_name = (isset($_POST['i_answer3_1'])) ? $_POST['i_answer3_1'] : null;
		$phase_id = (isset($_POST['i_phase_id'])) ? $_POST['i_phase_id'] : null;
		$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : null;
		
		
		
		if($participant_id == ""){
			header("Location: answer.php?data_id=$data_id&err=1");
		}else{
		
		
		// simpan data answers
		$data_answers = "'',
						'$data_id',
						'$participant_id',
						'$participant_name',
						'$assessor_name',
						'".date("Y-m-d")."',
						'".$_SESSION['user_id']."',
						'$phase_id'
		";
	
		create_config("answers", $data_answers);	
		$answer_id = mysql_insert_id();
			/*
		// simpan data answers1
		$select_participant = select_participant($participant_id);
	
		while($row_participant = mysql_fetch_array($select_participant)){
			$data_answers1 = "'',
						'".$row_participant['q1_id']."',
						'".$row_participant['participant1_question']."',
						'".$row_participant['participant1_answer']."',
						'$answer_id'
			";
			create_config("answers1", $data_answers1);
			$answer1_id = mysql_insert_id();
			
			$select_participant_detail = select_participant_detail($row_participant['participant1_id']);
	
			while($row_participant_detail = mysql_fetch_array($select_participant_detail)){
				$data_answers1_detail = "'',
							'$answer1_id',
							'".$row_participant_detail['participant1_detail_question']."',
							'".$row_participant_detail['participant1_detail_answer']."'
				";
				create_config("answers1_details", $data_answers1_detail);
				
			}
		}
		*/
		
		// simpan data answers3
		$select_question3 = select_identitas($data_id);
		
		$no_answer3 = 1;
		while($row_question3 = mysql_fetch_array($select_question3)){
			$i_answer3 = get_isset($_POST["i_answer3_".$no_answer3]);
			$data_question3 = "'',
						'$answer_id',
						'".$row_question3['q3_name']."',
						'$i_answer3'
			";
			create_config("answers3", $data_question3);
			$no_answer3++;
		}
		
		}
		
			
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
	
>>>>>>> 648331666c2fa7a46531f871549d06fcb69940dd
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
	
	
}

?>