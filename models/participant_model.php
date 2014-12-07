<?php

function select(){
	$query = mysql_query("select *
		from participants  WHERE participant_type = '1'
		order by participant_id
			");
	return $query;
}

function select_questions1($data_id){
	$query = mysql_query("select *
		from questions1
		where data_id = '$data_id'
		order by q1_id
		");
	return $query;
}


function select_participants1($id){
	$query = mysql_query("select a.*, b.q1_get_child
		from participants1 a
		join questions1 b on b.q1_id = a.q1_id
		where participant_id = '$id'
		order by participant_id
		");
	return $query;
}

function select_child($type, $id){
	if($type == 1){
		$query = mysql_query("select * from questions1_details where q1_id = '".$id."'
												order by q1d_id");
	}else{
		$query = mysql_query("select * from participants1_details where participant1_id= '".$id."'
												order by participant1_detail_id");
	}
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
	
	$query_del = mysql_query("select * from participants1 where participant_id = '$id'");
	while($row_del = mysql_fetch_array($query_del)){
		mysql_query("delete from participants1_details where participant1_id = '".$row_del['participant1_id']."'");
	}
	
	mysql_query("delete from participants where participant_id = '$id'");
	mysql_query("delete from participants1 where participant_id = '$id'");

}


?>