<?php

function select($data_id){
	$query = mysql_query("select *
		from questions_pma1
		where data_id = '$data_id'
			
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


function read_id($id){
	$query = mysql_query("select *
			from questions_pma1 
			where qp1_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_id_identitas($id){
	$query = mysql_query("select *
			from questions_pma3
			where qp3_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function read_child_id($id){
	$query = mysql_query("select *
			from questions_pma1_details
			where qp1d_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_question_pma_id($id){
	$query = mysql_query("select *
			from questions_pma2 
			where qp2_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}

function read_opsi_id($id){
	$query = mysql_query("select *
			from questions_pma2_details
			where qp2d_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}



function create($data){
	mysql_query("insert into questions_pma1 values(".$data.")");
}

function update($data, $id){
	mysql_query("update questions_pma1 set ".$data." where qp1_id = '$id'");
}

function delete($id){
	mysql_query("delete from questions_pma1  where qp1_id = '$id'");
}


function create_identitas($data){
	mysql_query("insert into questions_pma3 values(".$data.")");
}

function update_identitas($data, $id){
	mysql_query("update questions_pma3 set ".$data." where qp3_id = '$id'");
}

function delete_identitas($id){
	mysql_query("delete from questions_pma3  where qp3_id = '$id'");
}


function create_child($data){
	mysql_query("insert into questions_pma1_details values(".$data.")");
}

function update_child($data, $id){
	mysql_query("update questions_pma1_details set ".$data." where qp1d_id = '$id'");
	
}

function delete_child($id){
	mysql_query("delete from questions_pma1_details  where qp1d_id = '$id'");
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
	mysql_query("update $table set ".$data." where qp2d_id = '$id'");
	
}

function delete_opsi($table, $id){
	mysql_query("delete from $table where qp2d_id = '$id'");
}

function update_data($table, $parameter, $data, $id){
	mysql_query("update $table set ".$data." where $parameter = '$id'");
}

?>