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
		from qp_1_3_3
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
function create_answer_pma2($data){
	mysql_query("insert into answers_pma2 values(".$data.")");
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
function get_point($answer_id){
		$query=mysql_query("SELECT qp2d_point FROM questions_pma2_details where qp2d_id =".$answer_id."");
		$row=mysql_fetch_array($query);
		$result = $row['0'];
		return $result.'<br>';
}
function get_point_qp_133($answer_id){
		$query=mysql_query("SELECT  answer_qp_132_detail_answer FROM answers_qp_132_details where qp_id =".$answer_id."");
		$row=mysql_fetch_array($query);
		$result = $row['0'];
		return $result.'<br>';
}



?>