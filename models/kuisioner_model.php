<?php

function select(){
	$query = mysql_query("select *
		from kuisioner
			
			");
	return $query;
}

function read_id($id){
	$query = mysql_query("select *
			from kuisioner 
			where kuisioner_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	// masukkan data kuisioner
	mysql_query("insert into kuisioner values(".$data.")");
	$new_id = mysql_insert_id();
	
	// load questions 1
	$q1 = mysql_query("select * from questions1 where data_id = 0");
	while($r1 = mysql_fetch_array($q1)){
		// masukkan data question1 baru
		mysql_query("insert into questions1 values('', '".$r1['q1_name']."', '".$r1['q1_get_child']."', '$new_id')");
		$new_id1 = mysql_insert_id();
		
		$q2 = mysql_query("select * from questions1_details where q1_id = '".$r1['q1_id']."'");
		while($r2 = mysql_fetch_array($q2)){
			// masukkan data question1_detail baru
			mysql_query("insert into questions1_details values('', '$new_id1', '".$r2['q1d_name']."')");
		
		}
		
	}
	
	// load questions 2
	
	
}

function update($data, $id){
	mysql_query("update kuisioner set ".$data." where kuisioner_id = '$id'");
}

function delete($id){
	mysql_query("delete from kuisioners  where kuisioner_id = '$id'");
}
function cek_name_login($name){
	$query = mysql_query("select count(kuisioner_id)
							from kuisioner 
						where kuisioner_login = '".$name."'");
	$result = mysql_fetch_array($query);
	$row = $result['0'];
	return $row;
}

?>