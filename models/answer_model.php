<?php

function select($data_id){
	$query = mysql_query("select *
		from questions1
		where data_id = '$data_id'
		order by q1_id
			");
	return $query;
}

function select_config($table, $parameter, $order_by){
	
	$order_by = ($order_by) ? " order by ".$order_by : "";
	$parameter = ($parameter) ? " where ".$parameter : "";
	
	$query = mysql_query("select *
		from $table
		$parameter
		$order_by
			");
	return $query;
}

function select_config_test($table, $parameter, $order_by){
	
	$order_by = ($order_by) ? " order by ".$order_by : "";
	$parameter = ($parameter) ? " where ".$parameter : "";
	
	$query = "select *
		from $table
		$parameter
		$order_by
			";
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

function select_sub_category($cat_id){
	$query = mysql_query("select *
		from sub_categories
		where cat_id = '$cat_id'
		and sub_cat_parent_id = '0'
		order by sub_cat_id
			");
	return $query;
}


function select_question2($data_id, $sub_cat_id){
	$query = mysql_query("select *
		from questions2
		where data_id = '$data_id'
		and q2_sub_cat_id = '$sub_cat_id'
		order by q2_id
			");
	return $query;
}

function select_question2_detail($q2_id){
	$query = mysql_query("select *
		from questions2_details
		where q2_id = '$q2_id'
		order by q2d_id
			");
	return $query;
}

function select_identitas($data_id){
	$query = mysql_query("select *
		from questions3
		where data_id = '$data_id'
		order by q3_id
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
function get_point_132($answer_id){
		$query_132_1=mysql_query("SELECT  SUM(a_answer / 4) as total1 FROM  a_1_3_2 WHERE  	a_answer_number  = '1' and answer_id = '".$answer_id."'");
		$year_1 = mysql_fetch_object($query_132_1);
		$year_1->total1;
		$query_132_2=mysql_query("SELECT  SUM(a_answer / 4) as total2 FROM  a_1_3_2 WHERE  	a_answer_number 	 = '2' and answer_id = '".$answer_id."'");
		$year_2 = mysql_fetch_object($query_132_2);
		$year_2->total2;
		if($year_1->total1 == '0'){
			$total_1_2 = $year_1->total2 * 100;
		}else{
			$total_1_2 = ($year_2->total2 / $year_1->total1) * 100;
			$total_1_2 = $total_1_2 - 100;
		}
		
		$query_132_3=mysql_query("SELECT  SUM(a_answer / 4) as total3 FROM  a_1_3_2 WHERE  	a_answer_number 	 = '3' and answer_id = '".$answer_id."'");
		$year_3 = mysql_fetch_object($query_132_3);
		$year_3->total3;
		if($year_2->total2 == '0'){
			$total_2_3 = $year_1->total3 * 100;
		}else{
			$total_2_3 = ($year_3->total3 / $year_2->total2) * 100;
			$total_2_3 = $total_2_3 - 100;
		}
		
		$query_132_4=mysql_query("SELECT  SUM(a_answer / 4) as total4 FROM  a_1_3_2 WHERE  	a_answer_number 	 = '4' and answer_id = '".$answer_id."'");
		$year_4 = mysql_fetch_object($query_132_4);
		$year_4->total4;
		if($year_3->total3 == '0'){
			$total_3_4 = $year_1->total4  * 100;
		}else{
			$total_3_4 = ($year_4->total4 / $year_3->total3) * 100;
			$total_3_4 = $total_3_4 - 100;
		}
		
		
		$rata_rata = ($total_1_2 + $total_2_3 + $total_3_4) / 3;
		return $rata_rata;
}
function get_point_133($answer_id){
		$query =mysql_query("SELECT  COUNT(a_id) AS total FROM  a_1_3_3 WHERE a_answer <> '' and a_answer_type = '2' and answer_id = '".$answer_id."'");
		$row = mysql_fetch_object($query);
		$row->total;
	return $row->total;
}
function get_point_141($answer_id){
		$query =mysql_query("SELECT  COUNT(a_id) AS total FROM  a_1_4_1 WHERE a_answer = '1' AND answer_id = '".$answer_id."'");
		$row = mysql_fetch_object($query);
		$row->total;
	return $row->total;
}
function get_point_113($answer_id){
		$query =mysql_query("SELECT  SUM(a_answer_point) AS total FROM  a_1_1_3 WHERE answer_id = '".$answer_id."'");
		$row = mysql_fetch_object($query);
		$row->total;
	return $row->total;
}
function get_answer_122($answer_id){
	$jumlah =0;
	for($i=1; $i<=4; $i++){
		$query =mysql_query("SELECT  COUNT(a_answer) AS total FROM  a_1_2_2 WHERE answer_id = '".$answer_id."' AND a_answer_number ='".$i."' AND a_answer_point = '1'");
		$row = mysql_fetch_object($query);
		if($row->total > 0){
			$jumlah = $jumlah + 1;
		}
	}
	return $jumlah;
}

?>