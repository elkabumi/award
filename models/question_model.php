<?php

function select(){
	$query = mysql_query("select *
		from questions1 a 
			
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


function create($data){
	mysql_query("insert into questions1 values(".$data.")");
}

function update($data, $id){
	mysql_query("update questions1 set ".$data." where q1_id = '$id'");
}

function delete($id){
	mysql_query("delete from questions1  where q1_id = '$id'");
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


?>