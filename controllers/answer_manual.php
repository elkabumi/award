<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/answer_manual_model.php';
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
		$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : null;
		$action = "answer_manual.php?page=save_jawaban&data_id=$data_id";
		

		include '../views/answer_manual/list.php';
		include '../views/answer_manual/list_institusi.php';
		include '../views/answer_manual/list_identitas.php';
		get_footer();
	break;
	
	case 'save_jawaban':
	
		$participant_id = (isset($_POST['i_participant_id'])) ? $_POST['i_participant_id'] : null;
		$participant_name = (isset($_POST['i_answer1_1'])) ? $_POST['i_answer1_1'] : null;
		$assessor_name = (isset($_POST['i_answer3_2'])) ? $_POST['i_answer3_2'] : null;
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
						'$phase_id',
						'1'
		";
		create_config("answers", $data_answers);	
		$answer_id = mysql_insert_id();
		
		
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
	
		
		// simpan data answers2
			$select_sub_category = select_sub_category();
			while($row_sub_category = mysql_fetch_array($select_sub_category)){
			
			if($row_sub_category['sub_cat_id'] == 11){
			  $q_sub_cat_2 = mysql_query("select * from sub_categories where sub_cat_parent_id = '11' order by sub_cat_id");
			  while($r_sub_cat2 = mysql_fetch_array($q_sub_cat_2)){
				   $q_question2 = mysql_query("select * from questions2 where q2_sub_cat_id = '".$r_sub_cat2['sub_cat_id']."' and data_id = '$data_id' order by q2_id");
					$no_question2 = 1;
					while($r_question2 = mysql_fetch_array($q_question2)){
					$answer_point2 = get_isset($_POST['answer2_'.$no_question2.'_'.$r_question2['q2_id'].'_'.$r_question2['q2_type'].'']);
					
					$data_answer2 = "'',
						'$answer_id',
						'".$r_question2['q2_type']."',
						'".$r_question2['q2_number']."',
						'".$r_question2['q2_name']."',
						'".$answer_point2."',
						'".$r_question2['q2_sub_cat_id']."',
						'".$r_question2['q2_weight']."',
						'".$r_question2['q2_description']."',
						'".$answer_point2."',
						'".$answer_point2."',
						'1'
						";
			
				create_config("answers2", $data_answer2);
				$no_question2++;
				}
			  }
			  
			}else{
				$select_question = select_question2($data_id, $row_sub_category['sub_cat_id']);
				$no_question = 1;
			
				while($row_question= mysql_fetch_array($select_question)){
					$answer_point = get_isset($_POST['answer_'.$no_question.'_'.$row_question['q2_id'].'_'.$row_question['q2_type'].'']);
				
					$data_answer = "'',
						'$answer_id',
						'".$row_question['q2_type']."',
						'".$row_question['q2_number']."',
						'".$row_question['q2_name']."',
						'".$answer_point."',
						'".$row_question['q2_sub_cat_id']."',
						'".$row_question['q2_weight']."',
						'".$row_question['q2_description']."',
						'".$answer_point."',
						'".$answer_point."',
						'1'
						";
				
					create_config("answers2", $data_answer);
					$no_question++;
			}
		}
		}
		
		$select_question3 = select_identitas($data_id);
		
		$no_answer3 = 1;
		while($row_question3 = mysql_fetch_array($select_question3)){
			$i_answer3 = get_isset($_POST["i_answer3_".$no_answer3]);
			$data_answer3 = "'',
						'$answer_id',
						'".$row_question3['q3_name']."',
						'$i_answer3'
			";
			create_config("answers3", $data_answer3);
			$no_answer3++;
		}
		
		header('Location: answer.php?page=list&did=1');	
		}
	break;
}
?>