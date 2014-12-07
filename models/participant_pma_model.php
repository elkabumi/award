<?php

function select(){
	$query = mysql_query("select *
		from participants  WHERE participant_type = '2'
		order by participant_id
			");
	return $query;
}

function select_questions_pma1($data_id){
	$query = mysql_query("select *
		from questions_pma1
		where data_id = '$data_id'
		order by qp1_id
		");
	return $query;
}


function select_participants_pma1($id){
	$query = mysql_query("select a.*, b.qp1_get_child
		from participants_pma1 a
		join questions_pma1 b on b.qp1_id = a.qp1_id
		where participant_id = '$id'
		order by participant_id
		");
	return $query;
}

function select_child( $id){
	
		$query = mysql_query("select * from questions_pma1_details where qp1_id = '".$id."'
												order by qp1d_id");
	
	return $query;
}


function read_id($id){
	$query = mysql_query("select *
			from questions1 
			where q1_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function create($table, $data){
	mysql_query("insert into $table values(".$data.")");
}

function update($data, $id){
	mysql_query("update questions1 set ".$data." where q1_id = '$id'");
}

function delete($id){
	mysql_query("delete from questions1  where q1_id = '$id'");
}

function delete_all($id){
	
	
	mysql_query("delete from participants where participant_id = '$id'");
	mysql_query("delete from participants_pma1 where participant_pma1_id = '$id'");

}

?>