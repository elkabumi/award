<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/answer_pma_manual_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucfirst("daftar isian pertanyaan");

$_SESSION['menu_active'] = 5;
$data_id = (isset($_GET['data_id'])) ? $_GET['data_id'] : 0;

switch ($page) {
	case 'list':
		get_header($title);
		
		$close_button	= "kuisioner_pma.php?page=list ";
		$action 		= "answer_pma_manual.php?page=save_answer&data_id=$data_id ";
		
		///$action_t_form = "answer_pma_manual.php?page=save_qp_211&data_id=$data_id ";
		
		
		$query = select($data_id);
		$query_identitas = select_identitas($data_id);
		
		$add_button = "answer_pma_manual.php?page=form";
		$add_button_identitas = "answer_pma_manual.php?page=form_identitas";
		
		
		include '../views/answer_pma_manual/list.php';
		include '../views/answer_pma_manual/list_institusi.php';
		include '../views/answer_pma_manual/list_identitas.php';
		
		echo "</section>";
		
		get_footer();
	break;
	
	
	case 'save_answer':
	
		extract($_POST);
		$i_particpant_id = (get_isset($i_particpant_id)) ? $i_particpant_id : 0;
		$i_phase_id = get_isset($i_phase_id);
		//tampilkan form soal data pengigsi kuisioner
		$query=select_questions_pma3($data_id);
		//GET nama pejabat
		$asesor_id=mysql_result($query,1,0);
		$asesor_name=get_isset($_POST['i_answer3_2_'.$asesor_id.'']);
		//GET nama Participant
		$participant_name=get_participant_name($i_particpant_id);
		//tgl dibuat
		$date =date('Y-m-d');
		$user_id = $_SESSION['user_id'];
		$data = "'',
				'$data_id',
				'$i_particpant_id',
				'$participant_name',
				'$asesor_name',
				'$date',
				'$user_id',
				'$i_phase_id',
				'1'
				
			";
		
		//CREATE ANSWER PMA
		create($data);
		$answer_pma_id = mysql_insert_id();
		//INSERT question 1 DAta umum PMA?PMDN
		if($i_particpant_id  != '0'){
			create_answer_pma1($answer_pma_id,$i_particpant_id);
		}
		
		//INSERT question 2 Soal
		$query_sub_type=select_sub_type();
		while($row_type = mysql_fetch_array($query_sub_type)){
				
				$query = select_questions_pma2($data_id,$row_type['0']);
				
				$no=1;
				while($row = mysql_fetch_array($query)){
					if($row['qp2_type'] == '0'){
						$point=get_isset($_POST['i_answer_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						$data2 = "
									'',
									'$answer_pma_id',
									'$row[qp2_id]',
									'100',
									'0',
									'$point',
									'$point',
									'1'";		
				 		 create_answer_pma2($data2);
					
			
					}else if($row['qp2_type'] == '1'){
						$point_132=get_isset($_POST['i_answer_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						mysql_query("INSERT INTO  answers_qp_132 vALUES('','$answer_pma_id','$row[qp2_id]','100','0','$point_132','$point_132','1')");
						
					}else if($row['qp2_type'] == '2'){
						$point_133 = get_isset($_POST['i_answer_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						mysql_query ("INSERT INTO  answers_qp_133 VALUES('','$answer_pma_id','$row[qp2_id]','100','0','$point_133','$point_133','1')");
	
					}else if($row['qp2_type'] == '3'){
						$point_211=get_isset($_POST['i_answer_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						mysql_query("INSERT INTO  answers_qp_211 VALUES('','$answer_pma_id','$row[qp2_id]','100','0','$point_211','$point_211','1')");
						
					}else if($row['qp2_type'] == '4'){
						$point_311=get_isset($_POST['i_answer_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						mysql_query("INSERT INTO  answers_qp_311 VALUES('','$answer_pma_id','$row[qp2_id]','100','0','$point_311','$point_311','1')");
					}
				$no++;
				}
			}	
			
			//INSERT question 3 IDENTITAS PENGISI KUISONER 	
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