<?php
include 'lib/config.php';
$id = $_GET['id'];
$a = mysql_query("select * from questions_pma2 where data_id = '5'");
while($b = mysql_fetch_array($a)){
	$a2 = mysql_query("select * from questions_pma2_details where qp2_id = '".$b['qp2_id']."'");
	while($b2 = mysql_fetch_array($a2)){
		mysql_query("delete from questions_pma2_details where qp2d_id = '".$b2['qp2d_id']."'");
	}
	
	mysql_query("delete from questions_pma2 where qp2_id = '".$b['qp2_id']."'");
}
?>