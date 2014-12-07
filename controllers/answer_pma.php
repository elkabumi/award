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
	$id = mysql_insert_id();
	if($i_particpant_id  != '0'){
		create_answer_pma1($id,$i_particpant_id);
	}
		$query_sub_type=select_sub_type();
		while($row_type = mysql_fetch_array($query_sub_type)){
			
			$query = select_questions_pma2($data_id,$row_type['0']);
			$no=1;
			while($row = mysql_fetch_array($query)){
				if($row['qp2_type'] == '0'){
						$answer_id=get_isset($_POST['i_answer_pma2_'.$no.'_'.$row['qp2_cat_pma_id'].'_'.$row['qp2_type'].'_'.$row['qp2_id'].'']);
						
						if($answer_id != ''){
							$point = get_point($answer_id);
						}
					
						$data2 = "
								'',
								'$row[qp2_id]',
								'$answer_id',
								'$point'";
						
						create_answer_pma2($data2);
			
		
				}else if($row['qp2_type'] == '1'){
					$no_132=1;
					for($y=date("Y")- 3; $y<=date("Y"); $y++){
								$answer_qp_132=get_isset($_POST['i_answer2_132_'.$y.'_'.$no_132.'_2']);
								if($answer_qp_132 > 10){
									$point ='100';
								}else if($answer_qp_132 < 10 and $answer_qp_132 >= 5){
									$point ='55';
								}else{
									$point ='5';
								}
								
								mysql_query ("insert into answers_qp_132 VALUES('','".$id."','".$y."','".$answer_qp_132."','$point')");
								
							$no_132++;
					}
				}else if($row['qp2_type'] == '2'){
					$no_133=1;
					for($y=date("Y")- 3; $y<=date("Y"); $y++){
								$answer_qp_133_1=get_isset($_POST['i_answer2_133_'.$y.'_'.$no_133.'_1']);
								$answer_qp_133_3=get_isset($_POST['i_answer2_133_'.$y.'_'.$no_133.'_2']);
								
								if($answer_qp_133_1 > 10){
									$point ='100';
								}else if($answer_qp_133_1 < 10 and $answer_qp_133_1 >= 5){
									$point ='55';
								}else{
									$point ='5';
								}
								
								mysql_query ("insert into answers_qp_133 VALUES('','".$id."','".$y."','".$answer_qp_133_1."','".$answer_qp_133_2."','$point')");
								
							$no_133++;
					}
				}
		
			$no++;
			}
		}	
				
		
	break;
}

?>