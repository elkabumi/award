<?php

function select($data_id){
	$query = mysql_query("select *
		from questions_pma1
		where data_id = '$data_id'
		order by qp1_id
			");
	return $query;
}

function select_identitas($data_id){
	$query = mysql_query("select *
		from questions_pma3
		where data_id = '$data_id'
			
			");
	return $query;
}
function select_questions_pma2($data_id,$cat_id){
	$query = mysql_query("select *
		from questions_pma2
		where data_id = '$data_id' AND qp2_cat_pma_id = '$cat_id'
		order by qp2_id
		");
	return $query;
}
function select_questions_pma3($data_id){
	$query = mysql_query("select *
		from questions_pma3
		where data_id = '$data_id' 
		order by qp3_id
		");
	return $query;
}
function select_qp_1_3_2($data_id){
	$query = mysql_query("select *
		from qp_1_3_2
		where data_id = '$data_id'
		order by qp_id
		");
	return $query;
}
function select_qp_1_3_3($data_id){
	$query = mysql_query("select *
		from qp_1_3_3
		where data_id = '$data_id'
		order by qp_id
		");
	return $query;
}
function select_qp_2_1_1($data_id){
	$query = mysql_query("select *
		from qp_2_1_1
		where data_id = '$data_id'
		order by qp_id
		");
	return $query;
}
function select_qp_3_1_1($data_id){
	$query = mysql_query("select *
		from qp_3_1_1
		where data_id = '$data_id'
		order by qp_id
		");
	return $query;
}
function select_sub_type(){
	$query = mysql_query("select cat_pma_id from categories_pma order by cat_pma_id
		");
	return $query;
}
function create($data){
	mysql_query("insert into answers_pma values(".$data.")");
}
function create_answer_pma1($id, $participant_id){
	// load questions_pma 1
	$q1 = mysql_query("select * from  participants_pma1 where participant_id = $participant_id");
	while($r1 = mysql_fetch_array($q1)){
		// masukkan data question1 baru
		mysql_query("insert into answers_pma1 values('', '".$id."','".$r1['qp1_id']."','".$r1['participant_pma1_question']."',
		'".$r1['participant_pma1_answer']."')");
		
	}
}
function create_answer_pma2($data){
	mysql_query("insert into answers_pma2 values(".$data.")");
}
function create_answer_pma3($data){
	mysql_query("insert into answers_pma3 values(".$data.")");
}

function get_point($answer_id){
		$query=mysql_query("SELECT qp2d_point FROM questions_pma2_details where qp2d_id =".$answer_id."");
		$row=mysql_fetch_array($query);
		$result = $row['0'];
		return $result.'<br>';
}
function get_answer_132($answer_id){
		$query1=mysql_query("SELECT  answer_qp_132_detail_answer FROM answers_qp_132_details where answer_qp_132_id ='".$answer_id."' AND answer_number ='1' AND  answer_qp_132_detail_type = '1'");
		$row1=mysql_fetch_object($query1);
		$query2=mysql_query("SELECT  answer_qp_132_detail_answer FROM answers_qp_132_details where answer_qp_132_id ='".$answer_id."' AND answer_number ='2' AND  answer_qp_132_detail_type = '1'");
		$row2=mysql_fetch_object($query2);
		$answer_1 = ($row2->answer_qp_132_detail_answer / $row1->answer_qp_132_detail_answer) * 100;
		$answer_1 = $answer_1 - 100;
		$query3=mysql_query("SELECT  answer_qp_132_detail_answer FROM answers_qp_132_details where answer_qp_132_id ='".$answer_id."' AND answer_number ='3' AND  answer_qp_132_detail_type = '1'");
		$row3=mysql_fetch_object($query3);
		$answer_2= ($row3->answer_qp_132_detail_answer / $row2->answer_qp_132_detail_answer) * 100;
		$answer_2 = $answer_2 - 100;
		$total_answer = ($answer_1 + $answer_2) /2;
						
		return $total_answer;
}

function get_answer_133($answer_id){
		$query1=mysql_query("SELECT  SUM(answer_qp_133_detail_answer / 2)  as answer  FROM answers_qp_133_details where answer_qp_133_id ='".$answer_id."' AND answer_number ='1' AND  answer_qp_133_detail_type = '1'");
		$row1=mysql_fetch_object($query1);
		$query2=mysql_query("SELECT   SUM(answer_qp_133_detail_answer / 2) as answer FROM answers_qp_133_details where answer_qp_133_id ='".$answer_id."' AND answer_number ='2' AND  answer_qp_133_detail_type = '1'");
		$row2=mysql_fetch_object($query2);
		
		$answer_1 = ($row2->answer / $row1->answer) * 100;
		$answer_1 = $answer_1 - 100;
		$query3=mysql_query("SELECT   SUM(answer_qp_133_detail_answer / 2)   as answer FROM answers_qp_133_details where answer_qp_133_id ='".$answer_id."' AND answer_number ='3' AND  answer_qp_133_detail_type = '1'");
		$row3=mysql_fetch_object($query3);
		$answer_2= ($row3->answer / $row2->answer) * 100;
		$answer_2 = $answer_2 - 100;
		$total_answer = ($answer_1 + $answer_2) /2;				
		return $total_answer;
}

function get_answer_211($answer_id){
		$query=mysql_query("SELECT  COUNT(answer_qp_211_detail_id)  as answer  FROM answers_qp_211_details where answer_qp_211_id ='".$answer_id."' AND answer_qp_211_detail_answer ='1'");
		$row=mysql_fetch_object($query);
			
		return $row->answer;
}
function get_answer_311($answer_id){
		$query=mysql_query("SELECT  COUNT(answer_qp_311_detail_id)  as answer  FROM answers_qp_311_details where answer_qp_311_id ='".$answer_id."'");
		$row=mysql_fetch_object($query);
			
		return $row->answer;
}
function get_point_qp_133($answer_id){
		$query=mysql_query("SELECT  answer_qp_132_detail_answer FROM answers_qp_132_details where qp_id =".$answer_id."");
		$row=mysql_fetch_array($query);
		$result = $row['0'];
		return $result.'<br>';
}


?>