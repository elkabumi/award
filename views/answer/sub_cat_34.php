 <?php
						   $q_sub_cat2 = mysql_query("select * from sub_categories where sub_cat_parent_id = '11' order by sub_cat_id");
						   while($r_sub_cat2 = mysql_fetch_array($q_sub_cat2)){
						   ?>
                           
                           <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8;" >
                                <div class="col-md-12">
                               <?= $r_sub_cat2['sub_cat_number'].". ".$r_sub_cat2['sub_cat_name']; ?>
                                </div>
                                </div>
								
								<?php
                                        $q_question2 = mysql_query("select * from questions2 where q2_sub_cat_id = '".$r_sub_cat2['sub_cat_id']."' and data_id = '$data_id' order by q2_id");
										$no_question2 = 1;
										while($r_question2 = mysql_fetch_array($q_question2)){
										?>
                                       
                                      
                                        
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8;" >
                                
                                <div class="col-md-12">
                                        
                                        <table id="" width="100%"  cellpadding="5">
                                          <tr>
                                          <td width="3%" valign="top" align="center"><strong><?= $no_question2."."; ?></strong></td>
                                            <td width="84%"><b> <?= $r_question2['q2_name'] ?></b></td>
                                            <td width="15%">
                                            
                                              
                                            </td>
                                          </tr> 
                                          
                                            <?php
										if($r_question2['q2_type'] == 13){
												
										$q_3422 = mysql_query("select * from q_3_4_2_2 where data_id = '$data_id' order by q_id");
									    $no_3422 = 1;
										while($r_3422 = mysql_fetch_array($q_3422)){
										?>
                                           <tr>
                                           <td valign="top" align="center"><?= "&nbsp;&nbsp;&nbsp;&nbsp;".get_abjad_besar($no_3422).")"; ?></td>
                                            <td valign="top"> <?= $r_3422['q_name'] ?></td>
                                            <td  style="color:#0099FF; font-weight:bold;" valign="top">
                                            
                                            
                                            </td>
                                          </tr> 
                                          
                                           <?php
										
												
										$q_3422_detail = mysql_query("select * from q_3_4_2_2_details where q_parent_id = '".$r_3422['q_id']."' order by q_id");
									    $no_3422_detail = 1;
										while($r_3422_detail = mysql_fetch_array($q_3422_detail)){
										?>
                                           <tr>
                                           <td valign="top" align="center"></td>
                                            <td valign="top">
											<label>
                                           		<input type="radio" name="i_answer2_3422_detail_<?= $no_3422 ?>" class="minimal" value="<?= $no_3422_detail?>_<?= $r_3422_detail['q_point'] ?>"/>
                                        	</label>
											<?= $r_3422_detail['q_name'] ?></td>
                                            <td  style="color:#F4543C; font-weight:bold;" valign="top">
                                            
                                         
                                            </td>
                                          </tr> 
                                        
                                        
                                         
										 <?php
										 $no_3422_detail++;
										}
										?>
                                        
                                        
                                         
										 <?php
										 $no_3422++;
										}
												
										}else{
                                        $q_q_d2 = mysql_query("select * from questions2_details where q2_id = '".$r_question2['q2_id']."' order by q2d_id");
									    $no_q_q_d2 = 1;
										while($r_q_d2 = mysql_fetch_array($q_q_d2)){
										?>
                                           <tr>
                                           <td valign="top" align="center">
                                            <label>
                                           		<input required type="radio" name="i_answer2_3422_<?= $no_question2 ?>_<?= $r_sub_cat2['sub_cat_id'] ?>" class="minimal" value="<?= $no_question2 ?>_<?= $r_q_d2['q2d_point'] ?>"/>
                                        	</label>
                                           </td>
                                            <td valign="top"> <?= $r_q_d2['q2d_name'] ?></td>
                                            <td  style="color:#F4543C; font-weight:bold;" valign="top">
                                            
                                           
                                            </td>
                                          </tr> 
                                        
                                        
                                         
										 <?php
										 $no_q_q_d2++;
										}
										}
										 ?>
                                        
                                        </table>
                                       
                                </div>
                                	  
                                </div><!-- /.box-body -->
                                
                                 <?php
										$no_question2++;
										}
										
										?>
										  
										<?php
										
						   }
										?>
										