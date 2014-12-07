<?php

function select($data_id){
	$query = mysql_query("select *
		from questions1
		where data_id = '$data_id'
		order by q1_id
			");
	return $query;
}

function select_participant($participant_id){
	$query = mysql_query("select *
		from participants1
		where participant_id = '$participant_id'
		order by participant1_id
			");
	return $query;
}

function select_participant_detail($participant1_id){
	$query = mysql_query("select *
		from participants1_details
		where participant1_id = '$participant1_id'
		order by participant1_detail_id
			");
	return $query;
}


function select_identitas($data_id){
	$query = mysql_query("select *
		from questions3
		where data_id = '$data_id'
			
			");
	return $query;
}


function read_id($id){
	$query = mysql_query("select *
			from questions1 
			where q1_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_id_identitas($id){
	$query = mysql_query("select *
			from questions3
			where q3_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function read_child_id($id){
	$query = mysql_query("select *
			from questions1_details
			where q1d_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_question_id($id){
	$query = mysql_query("select *
			from questions2 
			where q2_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_opsi_id($id){
	$query = mysql_query("select *
			from questions2_details
			where q2d_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}



function create($data){
	mysql_query("insert into questions1 values(".$data.")");
}

function update($data, $id){
	mysql_query("update questions1 set ".$data." where q1_id = '$id'");
}

function delete($id){
	mysql_query("delete from questions1  where q1_id = '$id'");
}


function create_identitas($data){
	mysql_query("insert into questions3 values(".$data.")");
}

function update_identitas($data, $id){
	mysql_query("update questions3 set ".$data." where q3_id = '$id'");
}

function delete_identitas($id){
	mysql_query("delete from questions3  where q3_id = '$id'");
}


function create_child($data){
	mysql_query("insert into questions1_details values(".$data.")");
}

function update_child($data, $id){
	mysql_query("update questions1_details set ".$data." where q1d_id = '$id'");
	
}

function delete_child($id){
	mysql_query("delete from questions1_details  where q1d_id = '$id'");
}


function create_config($table, $data){
	mysql_query("insert into $table values(".$data.")");
}

function update_config($table, $data, $id){
	mysql_query("update $table set ".$data." where q1d_id = '$id'");
}

function delete_config($table, $id){
	mysql_query("delete from $table where q1d_id = '$id'");
}

function update_opsi($table, $data, $id){
	mysql_query("update $table set ".$data." where q2d_id = '$id'");
	
}

function delete_opsi($table, $id){
	mysql_query("delete from $table where q2d_id = '$id'");
}

function update_data($table, $parameter, $data, $id){
	mysql_query("update $table set ".$data." where $parameter = '$id'");
}

?>