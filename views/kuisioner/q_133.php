 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <?php
                                                 $q_133 = mysql_query("select * from q_1_3_3 where data_id = '$data_id'");
												
												while($r_133 = mysql_fetch_array($q_133)){
												?>
                                                <th><?= $r_133['q_name'] ?></th>
                                                <?php
												}
												?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                         for($i_133=1; $i_133<=10; $i_133++){
										 ?>
                                            <tr>
                                            <td><?= $i_133?></td>
                                                 <?php
                                                 $q_133 = mysql_query("select * from q_1_3_3 where data_id = '$data_id'");
												 while($r_133 = mysql_fetch_array($q_133)){
												
													$q_answer_133 = mysql_query("select * from a_1_3_3 where q_id = '".$r_133['q_id']."' AND  a_answer_number='".$i_133."'");
													$r_answer_133 = mysql_fetch_array($q_answer_133);
												?>
                                                <td><?= $r_answer_133['oa_answer'] ?></td>
                                                <?php
												}
												?>
                                                
                                            </tr>
                                           <?php
										 }
										   ?>
                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                           <div class="table_note"> note : Dilampirkan Sertifikat atau data pendukung lainnya.</div>
                                            
                                            </td>
                                           
                                          </tr> 