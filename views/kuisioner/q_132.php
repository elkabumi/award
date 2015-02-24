 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th>Keterangan</th>
                                                <?php
									 	$q_a_132 = mysql_query("select MAX(a_answer_year)AS tahun_max from a_1_3_2 where  answer_id  = '$answer_id '");
										while($r_a_132 = mysql_fetch_array($q_a_132)){
										 ?>
                                           
  s
                                             <?php
												 for($y=$r_a_132['tahun_max']-3; $y<=$r_a_132['tahun_max']; $y++){
												 ?>
                                                	<th><?=$y?></th>
                                                <?php
												 }
												?>
                                          
                                        	   <?php
											 }
										   ?>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                        $q_132 = mysql_query("select * from q_1_3_2 where data_id = '$data_id'");
										while($r_132 = mysql_fetch_array($q_132)){
										 ?>
                                            <tr>
                                            <td><?= $r_132['q_name'] ?></td>
                                            
                                             <?php
												 $q_answer_132 = mysql_query("select * from a_1_3_2 where answer_id = '$answer_id' AND q_id = '".$r_132['q_id']."' 
												 								ORDER BY a_answer_year DESC " );
													while($r_answer_132 = mysql_fetch_array($q_answer_132)){
												 ?>
                                                	<th><?=$r_answer_132['a_answer'] ?></th>
                                                <?php
												 }
												?>
                                            </tr>
                                           <?php
										 }
										   ?>
                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                           <div class="table_note"> note : Menghitung prosentase dan melihat tren + skala penilaian</div>
                                            
                                            </td>
                                           
                                          </tr> 