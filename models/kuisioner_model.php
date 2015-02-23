<?php

function select(){
	$query = mysql_query("select *
		from kuisioner where kuisioner_type ='1'
			
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

function select_answer_detail($answer_id){
	$query = mysql_query("select *
		from  answers1
		where answer_id = '$answer_id'
		order by q1_id 	
			");
	return $query;
}

function select_answer_identitas($answer_id){
	$query = mysql_query("SELECT * FROM answers3 WHERE answer_id = '".$answer_id."'
			
			");
	return $query;
}
function select_participant($data_id){
	$query = mysql_query("SELECT a.participant_id,a.participant_name,b.data_id
							FROM participants a
						JOIN (SELECT max(  	answer_id ) AS answer_id,data_id,participant_id
							FROM answers h
							group by participant_id) AS b
						on b.participant_id = a.participant_id
						WHERE b.data_id = '".$data_id."'");
	return $query;
}
function get_phase(){
	$query =mysql_query("SELECT *  FROM phase ");
	
	return $query;
}
function get_phase_id($answer_id){
	$query = mysql_query("select  *
	FROM answers  
	where answer_id = '$answer_id'
			
			");
	$row = mysql_fetch_object($query);
	return $row->phase_id;
}
function get_child($q1_id){
	$query = mysql_query("select  q1_get_child
	FROM questions1  
	where q1_id = '$q1_id'
			
			");
	$row = mysql_fetch_object($query);
	return $row->q1_get_child;
}
function get_total_answer($data_id,$phase_id){
	$query = mysql_query("SELECT MAX(b.sama) AS ans_id, b.participant_id
							FROM answers a
						JOIN (
						
						SELECT COUNT( participant_id ) AS sama, participant_id
						FROM answers h
						WHERE h.participant_id = participant_id
						GROUP BY participant_id
						) AS b ON b.participant_id = a.participant_id
				where a.data_id = '".$data_id."' AND phase_id ='".$phase_id."'
			");
	$row = mysql_fetch_object($query);
	return $row->ans_id;
}
function get_answer_id($data_id,$phase_id,$participant_id){
	$query = mysql_query("select  a.answer_id
			FROM answers a
			where a.data_id = '".$data_id."' AND phase_id ='".$phase_id."' AND participant_id ='".$participant_id."'
			");
	return $query;
}
function get_total_answer_participant($data_id,$phase_id,$participant_id){
	$query = mysql_query("SELECT COUNT(answer_id) AS ans_id
							FROM answers
						where data_id = '".$data_id."' AND phase_id ='".$phase_id."' AND participant_id ='".$participant_id."'
			");
	$row = mysql_fetch_object($query);
	return $row->ans_id;
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
		
		// load data questions1_details
		$q1d = mysql_query("select * from questions1_details where q1_id = '".$r1['q1_id']."'");
		while($r1d = mysql_fetch_array($q1d)){
			// masukkan data question1_detail baru
			mysql_query("insert into questions1_details values('', '$new_id1', '".$r1d['q1d_name']."')");
		
		}
		
	}
	
	// load questions 2
	$q2 = mysql_query("select * from questions2 where data_id = 0");
	while($r2 = mysql_fetch_array($q2)){
		// masukkan data question2 baru
		mysql_query("insert into questions2 values('', '".$r2['q2_type']."', '".$r2['q2_number']."', '".$r2['q2_name']."', '".$r2['q2_sub_cat_id']."', '".$r2['q2_weight']."', '".$r2['q2_description']."', '$new_id')");
		$new_id2 = mysql_insert_id();
		
		// load data questions2_details
		$q2d = mysql_query("select * from questions2_details where q2_id = '".$r2['q2_id']."'");
		while($r2d = mysql_fetch_array($q2d)){
			// masukkan data question1_detail baru
			mysql_query("insert into questions2_details values('', '".$r2d['q2d_type']."', '$new_id2', '".$r2d['q2d_number']."', '".$r2d['q2d_name']."', '".$r2d['q2d_point']."')");
		
		}
		
	}
	
	// load q113
	$q_113 = mysql_query("select * from q_1_1_3 where data_id = 0");
	while($r_113 = mysql_fetch_array($q_113)){
		// masukkan data question3 baru
		mysql_query("insert into q_1_1_3 values('', '".$r_113['q_name']."', '".$r_113['q_point1']."', '".$r_113['q_point2']."', '".$r_113['q_point3']."', '$new_id')");

	}
	
	// load q122
	$q_122 = mysql_query("select * from q_1_2_2 where data_id = 0");
	while($r_122 = mysql_fetch_array($q_122)){
		mysql_query("insert into q_1_2_2 values('', '".$r_122['q_name']."', '$new_id')");

	}
	
	// load q132
	$q_132 = mysql_query("select * from q_1_3_2 where data_id = 0");
	while($r_132 = mysql_fetch_array($q_132)){
		mysql_query("insert into q_1_3_2 values('', '".$r_132['q_name']."', '$new_id')");
	}
	
	// load q133
	$q_133 = mysql_query("select * from q_1_3_3 where data_id = 0");
	while($r_133 = mysql_fetch_array($q_133)){
		mysql_query("insert into q_1_3_3 values('', '".$r_133['q_name']."', '$new_id')");
	}
	
	// load q141
	$q_141 = mysql_query("select * from q_1_4_1 where data_id = 0");
	while($r_141 = mysql_fetch_array($q_141)){
		mysql_query("insert into q_1_4_1 values('', '".$r_141['q_name']."', '$new_id')");
	}
	
	// load q142
	$q_142 = mysql_query("select * from q_1_4_2 where data_id = 0");
	while($r_142 = mysql_fetch_array($q_142)){
		mysql_query("insert into q_1_4_2 values('', '".$r_142['q_name']."', '".$r_142['q_kriteria_penilaian']."', '$new_id')");
		$new_id_142 = mysql_insert_id();
		
		// load data q142_detail
		$q_142_detail = mysql_query("select * from q_1_4_2_details where q_parent_id = '".$r_142['q_id']."'");
		while($r_142_detail = mysql_fetch_array($q_142_detail)){
			// masukkan data question1_detail baru
			mysql_query("insert into q_1_4_2_details values('', '$new_id_142', '".$r_142_detail['q_name']."', '".$r_142_detail['q_kriteria_penilaian']."')");
		
		}
	}
	
	// load q211
	$q_211 = mysql_query("select * from q_2_1_1 where data_id = 0");
	while($r_211 = mysql_fetch_array($q_211)){
		mysql_query("insert into q_2_1_1 values('', '".$r_211['q_name']."', '$new_id')");
	}
	
	// load q212
	$q_212 = mysql_query("select * from q_2_1_2 where data_id = 0");
	while($r_212 = mysql_fetch_array($q_212)){
		mysql_query("insert into q_2_1_2 values('', '".$r_212['q_type']."', '".$r_212['q_name']."', '$new_id')");
		$new_id_212 = mysql_insert_id();
		
		// load data q142_detail
		$q_212_detail = mysql_query("select * from q_2_1_2_details where q_parent_id = '".$r_212['q_id']."'");
		while($r_212_detail = mysql_fetch_array($q_212_detail)){
			// masukkan data question1_detail baru
			mysql_query("insert into q_2_1_2_details values('', '".$r_212_detail['q_type']."',  '$new_id_212', '".$r_212_detail['q_name']."')");
		
		}
	}
	
	// load q214
	$q_214 = mysql_query("select * from q_2_1_4 where data_id = 0");
	while($r_214 = mysql_fetch_array($q_214)){
		mysql_query("insert into q_2_1_4 values('', '".$r_214['q_name']."', '".$r_214['q_type']."', '".$r_214['q_point1']."', '".$r_214['q_point2']."', '".$r_214['q_point3']."', '$new_id')");
	}
	
	// load q215
	$q_215 = mysql_query("select * from q_2_1_5 where data_id = 0");
	while($r_215 = mysql_fetch_array($q_215)){
		mysql_query("insert into q_2_1_5 values('', '".$r_215['q_name']."', '".$r_215['q_point1']."', '".$r_215['q_point2']."', '".$r_215['q_point3']."', '$new_id')");
	}
	
	// load q22
	$q_22 = mysql_query("select * from q_2_2 where data_id = 0");
	while($r_22 = mysql_fetch_array($q_22)){
		mysql_query("insert into q_2_2 values('', '".$r_22['q_name']."', '".$r_22['q_point1']."', '".$r_22['q_point2']."', '".$r_22['q_point3']."', '".$r_22['q_point4']."', '$new_id')");
	}
	
	// load q321
	$q_321 = mysql_query("select * from q_3_2_1 where data_id = 0");
	while($r_321 = mysql_fetch_array($q_321)){
		mysql_query("insert into q_3_2_1 values('', '".$r_321['q_name']."', '".$r_321['q_point1']."', '".$r_321['q_point2']."', '".$r_321['q_point3']."', '$new_id')");
	}
	
	// load q3422
	$q_3422 = mysql_query("select * from q_3_4_2_2 where data_id = 0");
	while($r_3422 = mysql_fetch_array($q_3422)){
		mysql_query("insert into q_3_4_2_2 values('', '".$r_3422['q_name']."',  '".$r_3422['q_weight']."', '$new_id')");
		$new_id_3422 = mysql_insert_id();
		
		// load data q3422_detail
		$q_3422_detail = mysql_query("select * from q_3_4_2_2_details where q_parent_id = '".$r_3422['q_id']."'");
		while($r_3422_detail = mysql_fetch_array($q_3422_detail)){
			// masukkan data question1_detail baru
			mysql_query("insert into q_3_4_2_2_details values('', '$new_id_3422', '".$r_3422_detail['q_name']."', '".$r_3422_detail['q_point']."')");
		}
	}
	
	// load q36
	$q_36 = mysql_query("select * from q_3_6 where data_id = 0");
	while($r_36 = mysql_fetch_array($q_36)){
		mysql_query("insert into q_3_6 values('', '".$r_36['q_name']."', '".$r_36['q_point1']."', '".$r_36['q_point2']."', '".$r_36['q_point3']."', '$new_id')");
	}
	
	// load q43
	$q_43 = mysql_query("select * from q_4_3 where data_id = 0");
	while($r_43 = mysql_fetch_array($q_43)){
		mysql_query("insert into q_4_3 values('', '".$r_43['q_name']."', '".$r_43['q_type']."', '$new_id')");
	}
	
	// load questions 3
	$q3 = mysql_query("select * from questions3 where data_id = 0");
	while($r3 = mysql_fetch_array($q3)){
		// masukkan data question3 baru
		mysql_query("insert into questions3 values('', '$new_id', '".$r3['q3_name']."')");
		
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
function get_total_nilai($answer_id){
	$row_1 = mysql_fetch_object(mysql_query("select SUM(b.answer2_point) AS total_point
							FROM answers a
							JOIN answers2  b ON  a.answer_id = b.answer_id
							WHERE a.answer_id 	  = '".$answer_id."'   
						"));

	$nama_identitas= mysql_fetch_object(mysql_query("select  a.assessor_name 	
							FROM answers a
						
							WHERE a.answer_id  = '".$answer_id."'     
						"));
					
	$result= $row_1->total_point."(".$nama_identitas->assessor_name.")";
	return $result;
		
}
function get_rata_nilai($data_id,$phase_id,$participant_id,$total_answer){
	$row_1 = mysql_fetch_object(mysql_query("select SUM(b.answer2_point) AS total_point
							FROM answers a
							JOIN answers2  b ON  a.answer_id = b.answer_id
							WHERE a.data_id = '".$data_id."' AND  a.phase_id = '".$phase_id."'  AND  a.participant_id = '".$participant_id."'     
						"));
	
					
	$total_point = $row_1->total_point/$total_answer;
	
	return $total_point;
		
}
function get_point_113($q_id,$answer_id){
	$query = mysql_query("select *
		from a_1_1_3 
		WHERE answer_id =".$answer_id." AND q_id=".$q_id."
		order by a_id
			");
	$row=mysql_fetch_object($query);
	return $row->a_answer_point;
}
function get_a_id_142($answer_id){
	$query = mysql_query("select *
		from a_1_4_2 
		WHERE answer_id =".$answer_id." AND q_type 	='1'
		order by a_id
			");
	$row=mysql_fetch_object($query);
	return $row->a_id;
}

function get_a_id_211($id,$answer_id){
	$query = mysql_query("SELECT 	a_id 
						FROM a_2_1_1 
						WHERE q_id='".$id."' AND answer_id='".$answer_id."'
			");
	$row=mysql_fetch_object($query);
	return $row->a_id;
}
function get_point_214($q_id,$answer_id){
	$query = mysql_query("select *
		from a_2_1_4 
		WHERE answer_id =".$answer_id." AND q_id=".$q_id."
		order by a_id
			");
	$row=mysql_fetch_object($query);
	return $row->q_answer;
}
function get_point_215($q_id,$answer_id){
	$query = mysql_query("select *
		from a_2_1_5 
		WHERE answer_id =".$answer_id." AND q_id=".$q_id."
		order by a_id
			");
	$row=mysql_fetch_object($query);
	return $row->	a_answer 	;
}
function get_point_22($q_id,$answer_id){
	$query = mysql_query("select *
		from a_2_2 
		WHERE answer_id =".$answer_id." AND q_id=".$q_id."
		order by a_id
			");
	$row=mysql_fetch_object($query);
	return $row->a_answer 	;
}
function get_point_321($q_id,$answer_id){
	$query = mysql_query("select *
		from a_3_2_1 
		WHERE answer_id =".$answer_id." AND q_id=".$q_id."
		order by a_id
			");
	$row=mysql_fetch_object($query);
	return $row->a_answer 	;
}
?>