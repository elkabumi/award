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
		$action = "answer_pma.php?page=save_answer&data_id=$data_id ";
		$action_t_form = "answer_pma.php?page=save_qp_211&data_id=$data_id ";
		$query = select($data_id);
		$query_identitas = select_identitas($data_id);
		$add_button = "answer_pma.php?page=form";
		$add_button_identitas = "answer_pma.php?page=form_identitas";
		
		include '../views/answer_pma/form_phase.php';
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
		
		$date =date('Y-m-d');
		$user_id = $_SESSION['user_id'];
		$data = "'',
				'$data_id',
				'$i_particpant_id',
				
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
						if($answer_question_id != ''){
							$point = get_point($answer_question_id);
							
						}else{
							$point =0;
						}
							$data2 = "
									'',
									'$answer_pma_id',
									'$row[qp2_id]',
									'$answer_question_id',
									'$point'";	
							
						create_answer_pma2($data2);
				
			
					}else if($row['qp2_type'] == '1'){
						mysql_query("INSERT INTO  answers_qp_132 vALUES('','$answer_pma_id','','')");
						$answer_qp_132_id = mysql_insert_id();
						for($no_132=1; $no_132<=3; $no_132++){
							$query_132 = select_qp_1_3_2($data_id);	
							while($row_132 = mysql_fetch_array($query_132)){	
								$answer_qp_132=get_isset($_POST['i_answer2_132_'.$row_132['qp_id'].'_'.$row_132['qp_type'].'_'.$no_132.'']);
							mysql_query("INSERT INTO  answers_qp_132_details VALUES('','".$answer_qp_132_id."','".$row_132['qp_id']."','".$row_132['qp_type']."','".$answer_qp_132."')");
							}
						}
					}else if($row['qp2_type'] == '2'){
						mysql_query("INSERT INTO  answers_qp_133 vALUES('','$answer_pma_id','','')");
						$answer_qp_133_id = mysql_insert_id();
						for($no_133=1; $no_133<=3; $no_133++){
							$query_133 = select_qp_1_3_3($data_id);	
							while($row_133 = mysql_fetch_array($query_133)){	
								$answer_qp_133=get_isset($_POST['i_answer2_133_'.$row_133['qp_id'].'_'.$row_133['qp_type'].'_'.$no_133.'']);
							mysql_query("INSERT INTO  answers_qp_133_details VALUES('','".$answer_qp_133_id."','".$row_133['qp_id']."','".$row_133['qp_type']."','".$answer_qp_133."')");
							}
						}
					}else if($row['qp2_type'] == '4'){
						mysql_query("INSERT INTO  answers_qp_311 vALUES('','$answer_pma_id','','')");
						$answer_qp_311_id = mysql_insert_id();
						for($no_311=1; $no_311<=10; $no_311++){
							$query_311 = select_qp_3_1_1($data_id);	
							while($row_311 = mysql_fetch_array($query_311)){	
								$answer_qp_311=get_isset($_POST['i_answer2_311_'.$no_311.'_'.$row_311['qp_id'].'']);
								echo $answer_qp_311;
								if($answer_qp_311 != ''){
							mysql_query("INSERT INTO  answers_qp_311_details VALUES('','".$answer_qp_311_id."','".$row_311['qp_id']."','1','".$answer_qp_311."')");
								}
							}
						}
					}
				
				$no++;
				}
			}	
					
			
	break;
	
		}

?>