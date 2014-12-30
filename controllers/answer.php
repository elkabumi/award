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

		$action = "answer.php?page=save_answer";
	


		$add_button = "answer.php?page=form";
		$add_button_identitas = "answer.php?page=form_identitas";
		$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : null;
		$action = "answer.php?page=save_jawaban&data_id=$data_id";
		

		include '../views/answer/list.php';
		include '../views/answer/list_institusi.php';
		include '../views/answer/list_identitas.php';
		
		
		
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
		
		// simpan data answers2
		$select_sub_category = select_sub_category(1);
		while($row_sub_category = mysql_fetch_array($select_sub_category)){
			
		// tipe soal 3422
		if($row_sub_category['sub_cat_id'] == 11){
			  $q_sub_cat_2 = mysql_query("select * from sub_categories where sub_cat_parent_id = '11' order by sub_cat_id");
			  while($r_sub_cat2 = mysql_fetch_array($q_sub_cat_2)){
				   $q_question2_3422 = mysql_query("select * from questions2 where q2_sub_cat_id = '".$r_sub_cat2['sub_cat_id']."' and data_id = '$data_id' order by q2_id");
					$no_question2_3422 = 1;
					while($r_question2_3422 = mysql_fetch_array($q_question2_3422)){
						
						// simpan question2 3422 soal normal
						
						if($r_question2_3422['q2_type'] == 0){
							$i_answer2_3422 = get_isset($_POST["i_answer2_3422_".$no_question2_3422."_".$r_sub_cat2['sub_cat_id']]);
							$i_answer2_3422_value = explode("_", $i_answer2_3422);
							$point_value_3422 = ($r_question2_3422['q2_weight'] / 100) * $i_answer2_3422_value[1];
							$i_jawaban_3422 = $i_answer2_3422_value[0];
							$i_poin_3422 = $i_answer2_3422_value[1];
						}else{
							$point_value_3422 = '';
							$i_jawaban_3422 = '';
							$i_poin_3422 = '';
						}
			
						$data_answer2_3422 = "'',
						'$answer_id',
						'".$r_question2_3422['q2_type']."',
						'".$r_question2_3422['q2_number']."',
						'".$r_question2_3422['q2_name']."',
						'".$i_jawaban_3422."',
						'".$r_question2_3422['q2_sub_cat_id']."',
						'".$r_question2_3422['q2_weight']."',
						'".$r_question2_3422['q2_description']."',
						'".$i_poin_3422."',
						'$point_value_3422',
						''
						";
			
						//echo $data_answer2;
						create_config("answers2", $data_answer2);
						$answer2_3422_id = mysql_insert_id();
						
						$q_q_d2 = mysql_query("select * from questions2_details where q2_id = '".$r_question2_3422['q2_id']."' order by q2d_id");
						 $no_q_q_d2 = 1;
						 while($r_q_d2 = mysql_fetch_array($q_q_d2)){
							 
							// simpan detail 3422
							$select_question2_3422_detail = select_question2_detail($r_question2_3422['q2_id']);
			
							while($row_question2_3422_detail = mysql_fetch_array($select_question2_3422_detail)){
								
								$data_answer2_3422_detail = "'',
											'$answer2_3422_id',
											'".$row_question2_3422_detail['q2d_type']."',
											'".$row_question2_3422_detail['q2d_number']."',
											'".$row_question2_3422_detail['q2d_name']."',
											'".$row_question2_3422_detail['q2d_point']."'
								";
								//echo $data_answer2_detail;
								create_config("answers2_details", $data_answer2_3422_detail);
								
							}
							 
						}
					
						// simpan tipe 3422
						if($r_question2_3422['q2_type'] == 13){
												
										$q_3422 = mysql_query("select * from q_3_4_2_2 where data_id = '$data_id' order by q_id");
									    $no_3422 = 1;
										while($r_3422 = mysql_fetch_array($q_3422)){
											
											$i_3422 = get_isset($_POST["i_answer2_3422_detail_".$no_3422]);
											$i_3422_value = explode("_", $i_3422);
											
											$point_value = $r_3422['q_weight'] / 100 * $i_3422_value[1];
											
											$data_3422  = "'',
														'$answer_id',
														'".$r_3422['q_id']."',
														'".$i_3422_value[0]."',
														'".$i_3422_value[1]."',
														'".$point_value."'
														";
										
											create_config("a_3_4_2_2", $data_3422);
										
										$no_3422++;
										}
						}
						
					$no_question2_3422++;
					}
			  }
			  
		}else{
		
		$select_question2 = select_question2($data_id, $row_sub_category['sub_cat_id']);
		
		$no_answer2 = 1;
		while($row_question2 = mysql_fetch_array($select_question2)){
			
			$i_attachment = get_isset($_POST["i_attachment_".$no_answer2."_".$row_sub_category['sub_cat_id']]);
			
			if($row_question2['q2_type'] == 0){
				$i_answer2 = get_isset($_POST["i_answer2_".$no_answer2."_".$row_sub_category['sub_cat_id']]);
				$i_answer2_value = explode("_", $i_answer2);
				$point_value = ($row_question2['q2_weight'] / 100) * $i_answer2_value[1];
				$i_jawaban = $i_answer2_value[0];
				$i_poin = $i_answer2_value[1];
				
			}else{
				$point_value = '';
				$i_jawaban = '';
				$i_poin = '';
			}
			
			$data_answer2 = "'',
						'$answer_id',
						'".$row_question2['q2_type']."',
						'".$row_question2['q2_number']."',
						'".$row_question2['q2_name']."',
						'".$i_jawaban."',
						'".$row_question2['q2_sub_cat_id']."',
						'".$row_question2['q2_weight']."',
						'".$row_question2['q2_description']."',
						'".$i_poin."',
						'$point_value',
						'$i_attachment'
						";
			
			//echo $data_answer2;
			create_config("answers2", $data_answer2);
			$answer2_id = mysql_insert_id();
			
		
			
			if($row_question2['q2_type'] == 0){
			$i_jawaban;
			
			$select_question2_detail = select_question2_detail($row_question2['q2_id']);
			
			while($row_question2_detail = mysql_fetch_array($select_question2_detail)){
			
				
				$data_answer2_detail = "'',
							'$answer2_id',
							'".$row_question2_detail['q2d_type']."',
							'".$row_question2_detail['q2d_number']."',
							'".$row_question2_detail['q2d_name']."',
							'".$row_question2_detail['q2d_point']."'
				";
				//echo $data_answer2_detail;
				create_config("answers2_details", $data_answer2_detail);
				$id =mysql_insert_id();
				
				if($row_question2_detail['q2d_type'] == '1'){
					
					
					
					if($i_jawaban == '1'){
					
						$select_113 = select_config("q_1_1_3", "data_id = ".$data_id, "q_id");
						$no_113 = 1;
						while($row_113 = mysql_fetch_array($select_113)){
							
							
								$i_a_113 = get_isset($_POST["i_answer2_113_".$no_113.""]);
								
						
								$data_113 = "'',
														'$answer_id',
														'".$row_113['q_id']."',
														'".$i_a_113."'
										";
								
								create_config("a_1_1_3", $data_113);
								$no_113++;
						}
						$point = get_point_113($answer_id);
						mysql_query("UPDATE answers2_details SET answer_detail_point ='".$point."' WHERE   	answer2_detail_id ='".$id."' ");
						$point_value = ($point / 100) * $row_question2['q2_weight'];
						mysql_query("UPDATE answers2 SET answer2_point ='".$point."',answer2_point_value ='".$point_value."' WHERE answer2_id = '".$answer2_id."'");
						
					}
				}
				
				if($row_question2_detail['q2d_type'] == '2'){
					if($i_jawaban != ''){}
					$select_122 = select_config("q_1_2_2", "data_id = ".$data_id, "q_id");
					$no_122 = 1;
						while($row_122 = mysql_fetch_array($select_122)){
						$no_122_2= 1;
							for($i=1; $i<=4; $i++){
						
								
							$i_a_122 = get_isset($_POST["i_answer2_122_".$no_122."_".$no_122_2."_".$i_jawaban.""]);
							if($i_a_122 != ''){
								
								$data_122 = "'',
														'$answer_id',
														'".$row_133['q_id']."',
														'".$no_122_2."',
														'".$no_122."',
														'".$i_a_122."'
										";
										
										
								//echo $data_132."<br>";
								create_config("a_1_2_2", $data_122);
								//$a_id_132 = mysql_insert_id();
							}
							$no_122_2++;
							}
						
						$no_122++;
						}
					
				
				
				}
			
			}
			
				
			
			}else if($row_question2['q2_type'] == 1){
				
				
				$select_132 = select_config("q_1_3_2", "data_id = ".$data_id, "q_id");
				$no_132 = 1;
				while($row_132 = mysql_fetch_array($select_132)){
					$no_132_2 = 1;
					for($y=date("Y")-3; $y<=date("Y"); $y++){
						
						$i_a_132_2 = get_isset($_POST["i_answer2_132_".$y."_".$no_132."_2"]);
						$i_a_132_1 = get_isset($_POST["i_answer2_132_".$y."_".$no_132."_1"]);
						
						//echo $i_a_132_2."|";
						//echo $i_a_132_1."|".$row_142['q_name']."|<br>";
				
				
						$data_132 = "'',
												'$answer_id',
												'".$row_132['q_id']."',
												'".$no_132_2."',
												'".$i_a_132_2."',
												'".$i_a_132_1."'
								";
						//echo $data_132."<br>";
						create_config("a_1_3_2", $data_132);
						//$a_id_132 = mysql_insert_id();
						$no_132_2++;
					}
					
				
				$no_132++;
				
				}
				
				$answer = get_point_132($answer_id);
				if($answer >= '1' and $answer <= '4') {
					$point = 25;
				}else if($answer >= '5' and $answer <= '9') {
					$point = 50;
				}else if($answer >= '10' and $answer <= '14') {
					$point = 75;
				}else if($answer > '14') {
					$point = 100;
				}else{
					$point = 0;
				}
				
				$point_value = ($point / 100) * $row_question2['q2_weight'];
			
				mysql_query("UPDATE answers2 SET answer2_point ='".$point."', answer2_answer ='".$answer."', answer2_point_value ='".$point_value."' where answer_id = '".$answer_id."' AND answer2_type = '1'");
			// tipe soal 142
			}
			else if($row_question2['q2_type'] == 2){

				$select_133 = select_config("q_1_3_3", "data_id = ".$data_id, "q_id");
				$no_133 = 1;
				while($row_133 = mysql_fetch_array($select_133)){
				$no_133_2= 1;
					for($i=1; $i<=10; $i++){
						
						
						$i_a_133 = get_isset($_POST["i_answer2_133_".$no_133_2."_".$no_133.""]);
						
						//echo $i_a_132_2."|";
						//echo $i_a_132_1."|".$row_142['q_name']."|<br>";
				
					
						$data_133 = "'',
												'$answer_id',
												'".$row_133['q_id']."',
												'".$no_133_2."',
												'".$no_133."',
												'".$i_a_133."'
								";
								
								
						//echo $data_132."<br>";
						create_config("a_1_3_3", $data_133);
						//$a_id_132 = mysql_insert_id();
						
					$no_133_2++;
					}
				
				$no_133++;
				
				}
				
				$answer = get_point_133($answer_id);
				
				if($answer >= '1' and $answer <= '4') {
					$point = 25;
				}else if($answer >= '5' and $answer <= '9') {
					$point = 50;
				}else if($answer >= '10' and $answer <= '14') {
					$point = 75;
				}else if($answer > '14') {
					$point = 100;
				}else{
					$point = 0;
				}
				$point_value = ($point / 100) * $row_question2['q2_weight'];
				
				
				mysql_query("UPDATE answers2 SET answer2_point ='".$point."', answer2_answer ='".$answer."', answer2_point_value ='".$point_value."' where answer_id = '".$answer_id."' AND answer2_type = '2'");
				
			}else if($row_question2['q2_type'] == 3){

				$select_141 = select_config("q_1_4_1", "data_id = ".$data_id, "q_id");
				$no_141 = 1;
				while($row_141 = mysql_fetch_array($select_141)){
				
						
						
						$i_a_141 = get_isset($_POST["i_answer2_141_".$no_141.""]);
						$i_a_141_jumlah = get_isset($_POST["i_answer2_141_jumlah_".$no_141.""]);
						
						//echo $i_a_132_2."|";
						//echo $i_a_132_1."|".$row_142['q_name']."|<br>";
				
					
						$data_141 = "'',
												'$answer_id',
												'".$row_141['q_id']."',
												'".$i_a_141."',
												'".$i_a_141_jumlah."'
								";
								
								
						//echo $data_132."<br>";
						create_config("a_1_4_1", $data_141);
						//$a_id_132 = mysql_insert_id();
						
				
				$no_141++;
				
				}
				
				$answer = get_point_141($answer_id);
				
				if($answer  == '2') {
					$point = 67;
				}else if($answer == '1') {
					$point = 50;
				}else if($answer == '0') {
					$point = 0;
				}else{
					$point = 100;
				}
				$point_value = ($point / 100) * $row_question2['q2_weight'];
				
				mysql_query("UPDATE answers2 SET answer2_point ='".$point."', answer2_answer ='".$answer."', answer2_point_value ='".$point_value."' where answer_id = '".$answer_id."' AND answer2_type = '3'");
				
			}
			
			else if($row_question2['q2_type'] == 4){

				$select_142 = select_config("q_1_4_2", "data_id = ".$data_id, "q_id");
				$no_142 = 1;
				while($row_142 = mysql_fetch_array($select_142)){
					
					if($row_142['q_type'] == 0){
						$i_a_142_1 = get_isset($_POST["i_answer2_142_1_".$no_142]);
						$i_a_142_2 = get_isset($_POST["i_answer2_142_2_".$no_142]);
						$i_a_142_3 = get_isset($_POST["i_answer2_142_3_".$no_142]);
					}else{
						$i_a_142_1 = '';
						$i_a_142_2 = '';
						$i_a_142_3 = '';
					}
						
				
					$data_142 = "'',
												'$answer_id',
												'".$row_142['q_id']."',
												'".$row_142['q_type']."',
												'".$i_a_142_1."',
												'".$i_a_142_2."',
												'".$i_a_142_3."'
								";
					
					create_config("a_1_4_2", $data_142);
					$a_id_142 = mysql_insert_id();
				
					if($row_142['q_type'] == 1){
						$select_142_detail = select_config("q_1_4_2_details", "q_parent_id = ".$row_142['q_id'], "q_id");
						
						$no_142_detail = 1;
						
						while($row_142_detail = mysql_fetch_array($select_142_detail)){
						
						$i_a_142_1_detail = get_isset($_POST["i_answer2_142_1_detail_".$no_142_detail]);
						$i_a_142_2_detail = get_isset($_POST["i_answer2_142_2_detail_".$no_142_detail]);
						$i_a_142_3_detail = get_isset($_POST["i_answer2_142_3_detail_".$no_142_detail]);
						
						$data_142_detail = "'',
												'$a_id_142',
												'".$row_142_detail['q_id']."',
												'".$i_a_142_1_detail."',
												'".$i_a_142_2_detail."',
												'".$i_a_142_3_detail."'
								";
						create_config("a_1_4_2_details", $data_142_detail);
						
						$no_142_detail++;
					}
					
				}
				
				
				$no_142++;
				}
			
			// tipe soal 211
			}else if($row_question2['q2_type'] == 5){
				$select_211 = select_config("q_2_1_1", "data_id = ".$data_id, "q_id");
				$no_211 = 1;
				while($row_211 = mysql_fetch_array($select_211)){
					
					$data_211 = "'',
											'$answer_id',
											'".$row_211['q_id']."',
											'0',
											'0'
					";
					
					// simpan data 211
					create_config("a_2_1_1", $data_211);
					$a_id_211 = mysql_insert_id();
					
					$isi[$no_211] = 0;
					for($i_211=1; $i_211<=20; $i_211++){
					
					$i_a_211 = get_isset($_POST["i_answer2_211_".$no_211."_".$i_211]);
					
					
					if($i_a_211){ 
						// simpan data detail 211
						$data_211_detail = "'','$a_id_211', '$i_a_211'";
						
						create_config("a_2_1_1_details", $data_211_detail);
						$isi[$no_211]++; 
						
					}
			
					}
					
					if($no_211 == 1){
						if($isi[$no_211] >= 20){ $point_211 = 25; }
						if($isi[$no_211] >= 15 && $isi[$no_211] <= 19){ $point_211 = 50; }
						if($isi[$no_211] >= 10 && $isi[$no_211] <= 14){ $point_211 = 75; }
						if($isi[$no_211] < 10){ $point_211 = 100; }
					}else{
						if($isi[$no_211] >= 20){ $point_211 = 100; }
						if($isi[$no_211] >= 15 && $isi[$no_211] <= 19){ $point_211 = 75; }
						if($isi[$no_211] >= 10 && $isi[$no_211] <= 14){ $point_211 = 50; }
						if($isi[$no_211] < 10){ $point_211 = 25; }
					}
					
					// update data 211 total dan point
					 update_data("a_2_1_1", "a_id", " a_total_answer = '".$isi[$no_211]."', a_point = '".$point_211."' ", $a_id_211);
					
					
				$no_211++;
				}
			
			// tipe soal 212
			// skip karena kurang paham
			
			// tipe soal 214
			}else if($row_question2['q2_type'] == 7){
				$select_214 = select_config("q_2_1_4", "data_id = ".$data_id, "q_id");
				$no_214 = 1;
				while($row_214 = mysql_fetch_array($select_214)){
					if($row_214['q_type'] == 0){
						$i_a_214 = get_isset($_POST["i_answer2_214_".$no_214]);
						
						if($i_a_214 == 1){ $point_214 = $row_214['q_point1'];  }
						else if($i_a_214 == 2){ $point_214 = $row_214['q_point2'];  }
						else if($i_a_214 == 3){ $point_214 = $row_214['q_point3'];  }
						
						
					}else{
						$i_a_214 = get_isset($_POST["i_answer2_214_jumlah_".$no_214]);
						$point_214 = get_isset($_POST["i_answer2_214_point_".$no_214]);
						
						
					}
					
					$data_214 = "'',
												'$answer_id',
												'".$row_214['q_id']."',
												'".$row_214['q_type']."',
												'".$i_a_214."',
												'".$point_214."'
								";
					
				create_config("a_2_1_4", $data_214);
				$no_214++;
				}
			
			// tipe soal 215
			}else if($row_question2['q2_type'] == 8){
				$select_215 = select_config("q_2_1_5", "data_id = ".$data_id, "q_id");
				$no_215 = 1;
				while($row_215 = mysql_fetch_array($select_215)){
					$i_a_215 = get_isset($_POST["i_answer2_215_".$no_215]);
					
					if($i_a_215 == 1){ $point_215 = $row_215['q_point1'];  }
					else if($i_a_215 == 2){ $point_215 = $row_215['q_point2'];  }
					else if($i_a_215 == 3){ $point_215 = $row_215['q_point3'];  }
					
					$data_215 = "'',
											'$answer_id',
											'".$row_215['q_id']."',
											'".$i_a_215."',
											'".$point_215."'
				";
				//echo $data_answer2_detail;
				create_config("a_2_1_5", $data_215);
				$no_215++;
				}
			
			// tipe soal 22
			}else if($row_question2['q2_type'] == 9){
				$select_22 = select_config("q_2_2", "data_id = ".$data_id, "q_id");
				$no_22 = 1;
				while($row_22 = mysql_fetch_array($select_22)){
					$i_a_22 = get_isset($_POST["i_answer2_22_".$no_22]);
					$i_a_description_22 = get_isset($_POST["i_answer2_22_description_".$no_22]);
					
					if($i_a_22 == 1){ $point_22 = $row_22['q_point1'];  }
					else if($i_a_22 == 2){ $point_22 = $row_22['q_point2'];  }
					else if($i_a_22 == 3){ $point_22 = $row_22['q_point3'];  }
					else if($i_a_22 == 4){ $point_22 = $row_22['q_point4'];  }
					
					$data_22 = "'',
											'$answer_id',
											'".$row_22['q_id']."',
											'".$i_a_22."',
											'".$point_22."',
											'$i_a_description_22'
				";
				//echo $data_answer2_detail;
				create_config("a_2_2", $data_22);
				$no_22++;
				}
				
			// tipe soal 321
			}else if($row_question2['q2_type'] == 10){
				$select_321 = select_config("q_3_2_1", "data_id = ".$data_id, "q_id");
				$no_321 = 1;
				while($row_321 = mysql_fetch_array($select_321)){
					$i_a_321 = get_isset($_POST["i_answer2_321_".$no_321]);
					
					if($i_a_321 == 1){ $point_321 = $row_321['q_point1'];  }
					else if($i_a_321 == 2){ $point_321 = $row_321['q_point2'];  }
					else if($i_a_321 == 3){ $point_321 = $row_321['q_point3'];  }
					
					$data_321 = "'',
											'$answer_id',
											'".$row_321['q_id']."',
											'".$i_a_321."',
											'".$point_321."'
				";
				//echo $data_answer2_detail;
				create_config("a_3_2_1", $data_321);
				$no_321++;
				}
			}
			
			// tipe soal 36
			else if($row_question2['q2_type'] == 11){
				$select_36 = select_config("q_3_6", "data_id = ".$data_id, "q_id");
				$no_36 = 1;
				while($row_36 = mysql_fetch_array($select_36)){
					$i_a_36 = get_isset($_POST["i_answer2_36_".$no_36]);
					
					if($i_a_36 == 1){ $point_36 = $row_36['q_point1'];  }
					else if($i_a_36 == 2){ $point_36 = $row_36['q_point2'];  }
					else if($i_a_36 == 3){ $point_36 = $row_36['q_point3'];  }
					
					$data_36 = "'',
											'$answer_id',
											'".$row_36['q_id']."',
											'".$i_a_36."',
											'".$point_36."'
				";
				//echo $data_answer2_detail;
				create_config("a_3_6", $data_36);
				$no_36++;
				}
			}
			
			
			// update data poin 142 
			if($row_question2['q2_type'] == 4){
					
				$point_142 = get_isset($_POST["i_answer2_142_point"]);
				$point_value_142 = $row_question2['q2_weight'] / 100 * $point_142;
				
				update_data("answers2", "answer2_id", " answer2_point = '".$point_142."', answer2_point_value = '".$point_value_142."' ", $answer2_id);
			}
			
			$no_answer2++;
			
		}
		}
		
		// simpan data answers3
		/*
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
		*/
		
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
	
	case "test":
	echo select_config("q_3_6", "", "");
	break;
	
	
}

?>