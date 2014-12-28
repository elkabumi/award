<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/answer_pma_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("daftar isian pertanyaan");

$_SESSION['menu_active'] = 6;
$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : 0;

switch ($page) {
	case 'list':
		get_header($title);
		
		$close_button = "kuisioner_pma.php?page=list ";
		$action = "answer_pma.php?page=save_answer&data_id=$data_id ";
		$action_t_form = "answer_pma.php?page=save_qp_211&data_id=$data_id ";
		$query = select($data_id);
		$query_identitas = select_identitas($data_id);
		$add_button = "answer_pma.php?page=form";
		$add_button_identitas = "answer_pma.php?page=form_identitas";
		
		
		include '../views/answer_pma/list.php';
		include '../views/answer_pma/list_institusi.php';
		include '../views/answer_pma/list_identitas.php';
		
		echo "</section>";
		
		get_footer();
	break;
	
	
	case 'save_answer':
	
		extract($_POST);
		$i_particpant_id = (get_isset($i_particpant_id)) ? $i_particpant_id : 0;
		$i_phase_id = get_isset($i_phase_id);
		$query=select_questions_pma3($data_id);
		$asesor_id=mysql_result($query,1,0);
		
		$asesor_name=get_isset($_POST['i_answer3_2_'.$asesor_id.'']);
		$participant_name=get_participant_name($i_particpant_id);
		$date =date('Y-m-d');
		$user_id = $_SESSION['user_id'];
		$data = "'',
				'$data_id',
				'$i_particpant_id',
				'$participant_name',
				'$asesor_name',
				'$date',
				'$user_id',
				'$i_phase_id'
				
			";
		create($data);
		$answer_pma_id = mysql_insert_id();
		
		if($i_particpant_id  != '0'){
			create_answer_pma1($answer_pma_id,$i_particpant_id);
		}
		$query_sub_type=select_sub_type();
		while($row_type = mysql_fetch_array($query_sub_type)){
				
				$query = select_questions_pma2($data_id,$row_type['0']);
				
				$no=1;
				while($row = mysql_fetch_array($query)){
					if($row['qp2_type'] == '0'){
						$answer_question_id=get_isset($_POST['i_answer_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						$attachment=get_isset($_POST['i_attachment_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						if($answer_question_id != ''){
							$point = get_point($answer_question_id);
							
						}else{
							$point = 0;
						}
						$total_point = ($point * 100) / $row['qp2_weight'];
							$data2 = "
									'',
									'$answer_pma_id',
									'$row[qp2_id]',
									'$row[qp2_weight]',
									'$answer_question_id',
									'$point',
									'$total_point',
									'$attachment'";		
				 		 create_answer_pma2($data2);
					
			
					}else if($row['qp2_type'] == '1'){
						$attachment=get_isset($_POST['i_attachment_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						mysql_query("INSERT INTO  answers_qp_132 vALUES('','$answer_pma_id','$row[qp2_id]','$row[qp2_weight]','','','','$attachment')");
						$answer_qp_132_id = mysql_insert_id();
						for($no_132=1; $no_132<=3; $no_132++){
							$query_132 = select_qp_1_3_2($data_id);	
							
							while($row_132 = mysql_fetch_array($query_132)){	
								$answer_qp_132=get_isset($_POST['i_answer2_132_'.$row_132['qp_id'].'_'.$row_132['qp_type'].'_'.$no_132.'']);
							
									mysql_query("INSERT INTO  answers_qp_132_details VALUES('','".$answer_qp_132_id."','".$row_132['qp_id']."','".$no_132."','".$row_132['qp_type']."','".$answer_qp_132."')");
								
							}
							
							
						}
						$get_answer_132=get_answer_132($answer_qp_132_id);
						if($get_answer_132 >= 10){
							$point = 100;
						}else if($get_answer_132 < 10 and $get_answer_132 > 5  ){
							$point = 55;
						}else{
							$point = 5;
						}
						$total_point = ($point * 100) / $row['qp2_weight'];
						mysql_query("UPDATE answers_qp_132 SET answer_qp_132_answer = '".$get_answer_132."',answer_qp_132_point = '".$point."',answer_qp_132_point_value = '".$total_point."' WHERE answer_qp_132_id = '".$answer_qp_132_id."'");
						
						
					}else if($row['qp2_type'] == '2'){
						$attachment=get_isset($_POST['i_attachment_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						mysql_query("INSERT INTO  answers_qp_133 VALUES('','$answer_pma_id','$row[qp2_id]','$row[qp2_weight]','','','','$attachment')");
						$answer_qp_133_id = mysql_insert_id();
						for($no_133=1; $no_133<=3; $no_133++){
							$query_133 = select_qp_1_3_3($data_id);	
							$no_question_133 = 1;
							while($row_133 = mysql_fetch_array($query_133)){	
								$answer_qp_133=get_isset($_POST['i_answer2_133_'.$row_133['qp_id'].'_'.$row_133['qp_type'].'_'.$no_133.'']);
							
									mysql_query("INSERT INTO  answers_qp_133_details VALUES('','".$answer_qp_133_id."','".$row_133['qp_id']."','".$no_133."','".$row_133['qp_type']."','".$answer_qp_133."')");
								
							
							}
						
						}
						$get_answer_133=get_answer_133($answer_qp_133_id);
					
						if($get_answer_133 > 10){
							$point = 100;
						}else if($get_answer_133 <= 10 and $get_answer_133 > 5  ){
							$point = 55;
						}else{
							$point = 5;
						}
						$total_point = ($point * 100) / $row['qp2_weight'];
						mysql_query("UPDATE answers_qp_133 SET answer_qp_133_answer = '".$get_answer_133."',answer_qp_133_point = '".$point."',answer_qp_133_point_value = '".$total_point."' WHERE answer_qp_133_id = '".$answer_qp_133_id."'");
					
					}
					else if($row['qp2_type'] == '3'){
						$attachment=get_isset($_POST['i_attachment_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						mysql_query("INSERT INTO  answers_qp_211 VALUES('','$answer_pma_id','$row[qp2_id]','$row[qp2_weight]','','','','$attachment')");
						$answer_qp_211_id = mysql_insert_id();
						
							$query_211 = select_qp_2_1_1($data_id);	
							$no_211 = 1;
							while($row_211 = mysql_fetch_array($query_211)){	
								$answer_qp_211=get_isset($_POST['i_answer2_'.$no_211.'_'.$row_211['qp_id'].'']);
								if($answer_qp_211 != '1'){
									$answer_qp_211 = '0';
								}
								mysql_query("INSERT INTO  answers_qp_211_details VALUES('','".$answer_qp_211_id."','".$row_211['qp_name']."','".$answer_qp_211."')");
								$no_211++;
							}
							for($i=1; $i<=10; $i++){
								$question_esay_qp_211=get_isset($_POST['i_question_211_'.$i.'']);
								$answer_esay_qp_211=get_isset($_POST['i_answer2_211_'.$i.'']);	
								if($answer_esay_qp_211 != '1'){
									$answer_esay_qp_211 = '0';
								}
								if($question_esay_qp_211 != ''){
										mysql_query("INSERT INTO  answers_qp_211_details VALUES('','".$answer_qp_211_id."','".$question_esay_qp_211."','".$answer_esay_qp_211."')");					
								}
							}
						$get_answer_211=get_answer_211($answer_qp_211_id);
						if($get_answer_211 > 10){
							$point = 100;
						}else if($get_answer_211 <= 10 and $get_answer_211 >= 5  ){
							$point = 55;
						}else{
							$point = 5;
						}
						$total_point = ($point * 100) / $row['qp2_weight'];
						
						mysql_query("UPDATE answers_qp_211 SET answer_qp_211_answer = '".$get_answer_211."',answer_qp_211_point = '".$point."',answer_qp_211_point_value = '".$total_point."' WHERE answer_qp_211_id = '".$answer_qp_211_id."'");
					
						
					}else if($row['qp2_type'] == '4'){
						$attachment=get_isset($_POST['i_attachment_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						mysql_query("INSERT INTO  answers_qp_311 VALUES('','$answer_pma_id','$row[qp2_id]','$row[qp2_weight]','','','','$attachment')");
						$answer_qp_311_id = mysql_insert_id();
						for($no_311=1; $no_311<=10; $no_311++){
							$query_311 = select_qp_3_1_1($data_id);	
							while($row_311 = mysql_fetch_array($query_311)){	
								$answer_qp_311=get_isset($_POST['i_answer2_311_'.$no_311.'_'.$row_311['qp_id'].'']);
								
								if($answer_qp_311 != ''){
								mysql_query("INSERT INTO  answers_qp_311_details VALUES('','".$answer_qp_311_id."','".$row_311['qp_id']."','1','".$answer_qp_311."')");
								}
							}
						}
					}
					$get_answer_311=get_answer_311($answer_qp_311_id);
					if($get_answer_311 >= 5){
						$point = 100;
					}else if($get_answer_311 <= 4 and $get_answer_311 >= 2  ){
						$point = 55;
					}else{
						$point = 5;
					}
					$total_point = ($point * 100) / $row['qp2_weight'];
						
					mysql_query("UPDATE answers_qp_311 SET answer_qp_311_answer = '".$get_answer_311."',answer_qp_311_point = '".$point."',answer_qp_311_point_value = '".$total_point."' WHERE answer_qp_311_id = '".$answer_qp_311_id."'");
				
				$no++;
				}
			}	
				
					
				$query_question_pma3= select_questions_pma3($data_id);
				
				$no=1;
				while($row = mysql_fetch_array($query_question_pma3)){
						$answer_question3=get_isset($_POST['i_answer3_'.$no.'_'.$row['qp3_id'].'']);
						
						$data_question3 ="'',
											'".$answer_pma_id."',
											'".$row['qp3_id']."',
											'".$row['qp3_name']."',
											'".$answer_question3."'";
					create_answer_pma3($data_question3);
				$no++;
				}
				
		header("Location: kuisioner_pma.php?page=list&did=1");		
	break;
	
		}

?>