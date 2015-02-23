 <tr>
                                            <td colspan="3">
                                          <?php
                                        $q_211 = mysql_query("select * from q_2_1_1 where data_id = '$data_id'");
										$no_211 = 1;
										while($r_211 = mysql_fetch_array($q_211)){
										 ?>
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                          		<th width="5%">No</th>
                                                <th><?= $r_211['q_name']?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?
												$no_answer_211 = 1;
                                           		$a_id=get_a_id_211($r_211['q_id'],$answer_id);
												$q_answer_211=mysql_query("SELECT  	a_answer FROM a_2_1_1_details WHERE a_id = '".$a_id."' ORDER BY  	a_detail_id ");
										    	while($r_answer_211=mysql_fetch_object($q_answer_211)){
											?>
                                            <tr>
                                      		<td><?= $no_answer_211?></td>
                                            
                                            <td><?= $r_answer_211->a_answer?></td>
                                          </tr>
											  <?php
                                                 $no_answer_211++;
												 }
                                              ?>
                                        </tbody>
                                        
                                    </table>
                                    <br />
                                           <?php
										}
										   ?>
                                            
                                            </td>
                                           
                                          </tr> 