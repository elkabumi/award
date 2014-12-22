<?php

function select(){
	$query = mysql_query("select *
		from kuisioner where kuisioner_type ='2'
			
			");
	return $query;
}
function select_detail(){
	$query = mysql_query("select *
		from  answer_pma where phase_id = ''
			
			");
	return $query;
}
function select_answer(){
	$query = mysql_query("select a.*,b.phase_name,c.answer_pma3_answer
	FROM answers_pma a
	JOIN phase b ON b.phase_id = a.phase_id
	JOIN answers_pma3 c ON c.answer_pma_id = a.answer_pma_id
	WHERE answer_pma3_question = 'Nama Pejabat Pengisi'
			
			");
	return $query;
}
function select_answer_detail($answer_pma_id){
	$query = mysql_query("select *
		from  answers_pma1
		where  answer_pma_id = '$answer_pma_id'
		order by qp1_id
			");
	return $query;
}
function get_answer_pma2($answer_id,$qp2_id){
	$query =mysql_query("SELECT qp2d_id FROM answers_pma2 WHERE  answer_pma_id = '".$answer_id."' AND qp2_id='".$qp2_id."'");
	$row = mysql_fetch_object($query);
	return $row->qp2d_id;
}
function get_attachment_pma2($answer_id,$qp2_id){
	$query =mysql_query("SELECT answer_pma2_attachment  FROM answers_pma2 WHERE  	answer_pma_id = '".$answer_id."' AND qp2_id='".$qp2_id."'");
	$row = mysql_fetch_object($query);
	return $row->answer_pma2_attachment;
}
function select_identitas($data_id){
	$query = mysql_query("select *
		from questions_pma3
		where data_id = '$data_id'
			
			");
	return $query;
}

function select_answer_identitas($answer_pma_id){
	$query = mysql_query("SELECT * FROM answers_pma3 WHERE answer_pma_id = '".$answer_pma_id."'
			
			");
	return $query;
}
function get_total_nilai($answer_pma_id){
	$query = mysql_query("select SUM(b.answer_pma2_point + c.answer_qp_132_point + d.answer_qp_133_point + e.answer_qp_211_point + f.answer_qp_311_point) AS total_point
							FROM answers_pma a
							JOIN answers_pma2  b ON  a.answer_pma_id = b.answer_pma_id
							JOIN answers_qp_132 c ON  a.answer_pma_id = c.answer_pma_id
							JOIN answers_qp_133 d ON  a.answer_pma_id = d.answer_pma_id
							JOIN answers_qp_211 e ON  a.answer_pma_id = e.answer_pma_id
							JOIN answers_qp_311 f ON  a.answer_pma_id = f.answer_pma_id
							WHERE a.answer_pma_id = '".$answer_pma_id."'
						");
	$row=mysql_fetch_object($query);
	return $row->total_point;
		
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
	
	// load questions_pma 1
	$q1 = mysql_query("select * from questions_pma1 where data_id = 0");
	while($r1 = mysql_fetch_array($q1)){
		// masukkan data question1 baru
		mysql_query("insert into questions_pma1 values('', '".$r1['qp1_name']."', '".$r1['qp1_get_child']."', '$new_id')");
		$new_id1 = mysql_insert_id();
		
		// load data questions_pma1_details
		$q1d = mysql_query("select * from questions_pma1_details where qp1_id = '".$r1['qp1_id']."'");
		while($r1d = mysql_fetch_array($q1d)){
			// masukkan data question1_detail baru
			mysql_query("insert into questions_pma1_details values('', '$new_id1', '".$r1d['qp1d_name']."')");
		
		}
		
	}
	
	// load questions_pma 2
	$q2 = mysql_query("select * from questions_pma2 where data_id = 0");
	while($r2 = mysql_fetch_array($q2)){
		// masukkan data question2 baru
		mysql_query("insert into questions_pma2 values('', '".$r2['qp2_type']."', '".$r2['qp2_number']."', '".$r2['qp2_name']."', 
		'".$r2['qp2_cat_pma_id']."', '".$r2['qp2_weight']."', '".$r2['qp2_description']."', '$new_id')");
		$new_id2 = mysql_insert_id();
		
		// load data questions_pma2_details
		$q2d = mysql_query("select * from questions_pma2_details where qp2_id = '".$r2['qp2_id']."'");
		while($r2d = mysql_fetch_array($q2d)){
			// masukkan data question1_detail baru
			mysql_query("insert into questions_pma2_details values('', '".$r2d['qp2d_type']."', '$new_id2', '".$r2d['qp2d_number']."', '".$r2d['qp2d_name']."', '".$r2d['qp2d_point']."')");
		
		}
		
	}
	

	
	// load qp132
	$q_132 = mysql_query("select * from qp_1_3_2 where data_id = 0");
	while($r_132 = mysql_fetch_array($q_132)){
		mysql_query("insert into qp_1_3_2 values('', '".$r_132['qp_name']."', '".$r_132['qp_type']."','$new_id')");
	}
	
	// load qp133
	$q_133 = mysql_query("select * from qp_1_3_3 where data_id = 0");
	while($r_133 = mysql_fetch_array($q_133)){
		mysql_query("insert into qp_1_3_3 values('', '".$r_133['qp_name']."', '".$r_133['qp_type']."','$new_id')");
	}
	
	
	
	// load qp211
	$q_211 = mysql_query("select * from qp_2_1_1 where data_id = 0");
	while($r_211 = mysql_fetch_array($q_211)){
		mysql_query("insert into qp_2_1_1 values('', '".$r_211['qp_name']."', '$new_id')");
	}
	


		// load qp311
	$q_311 = mysql_query("select * from qp_3_1_1 where data_id = 0");
	while($r_311 = mysql_fetch_array($q_311)){
		mysql_query("insert into qp_3_1_1 values('', '".$r_311['qp_name']."', '$new_id')");
	}
	


	
	// load questions_pma 3
	$q3 = mysql_query("select * from questions_pma3 where data_id = 0");
	while($r3 = mysql_fetch_array($q3)){
		// masukkan data question3 baru
		mysql_query("insert into questions_pma3 values('', '$new_id', '".$r3['qp3_name']."')");
		
	}
	
	
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