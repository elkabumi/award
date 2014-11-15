 <?php
						   $q_sub_cat2 = mysql_query("select * from sub_categories where sub_cat_parent_id = 11");
						   while($r_sub_cat2 = mysql_fetch_array($q_sub_cat2)){
						   ?>
                           
                           <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; display:none;" >
                                <div class="col-md-12">
                               <?= $r_sub_cat2['sub_cat_number'].". ".$r_sub_cat2['sub_cat_name']; ?>
                                </div>
                                </div>
								
								<?php
                                        $q_question2 = mysql_query("select * from questions2 where q2_sub_cat_id = '".$r_sub_cat2['sub_cat_id']."'");
										$no_question2 = 1;
										while($r_question2 = mysql_fetch_array($q_question2)){
										?>
                                       
                                      
                                        
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; display:none;" >
                                
                                <div class="col-md-12">
                                        
                                        <table id="" width="100%"  cellpadding="5">
                                          <tr>
                                          <td width="3%" valign="top" align="center"><strong><?= $no_question2."."; ?></strong></td>
                                            <td width="84%"><b> <?= $r_question2['q2_name'] ?></b></td>
                                            <td width="10%">
                                            
                                              
                                            </td>
                                          </tr> 
                                          
                                            <?php
											if($r_question2['q2_id'] == 47){
												
										}else{
                                        $q_q_d2 = mysql_query("select * from questions2_details where q2_id = '".$r_question2['q2_id']."'");
									    $no_q_q_d2 = 1;
										while($r_q_d2 = mysql_fetch_array($q_q_d2)){
										?>
                                           <tr>
                                           <td valign="top" align="center"><?= "&nbsp;&nbsp;&nbsp;&nbsp;".get_abjad($no_q_q_d2).")"; ?></td>
                                            <td> <?= $r_q_d2['q2d_name'] ?></td>
                                            <td  style="color:#F4543C; font-weight:bold;" valign="top">
                                            
                                              Poin : <?= $r_q_d2['q2d_point']?>
                                            </td>
                                          </tr> 
                                        
                                        
                                         
										 <?php
										 $no_q_q_d2++;
										}
										}
										 ?>
                                           <tr height="50">
                                            <td style="color:#09F; font-weight:bold;" colspan="2"><?= "&nbsp;&nbsp;&nbsp;&nbsp;" ?> Bobot Soal : <?= $r_question2['q2_weight'] ?></td>
                                            <td>
                                            
                                                <a href="question.php?page=form_question&id=<?= $r_question2['q2_id']?>" class="btn btn-danger" >Edit</a>
                                            </td>
                                          </tr> 
                                        </table>
                                       
                                </div>
                                	  
                                </div><!-- /.box-body -->
                                
                                 <?php
										$no_question2++;
										}
										
										?>
										   <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; display:none;" >
                                <div class="col-md-12">
                                <a href="question.php?page=form_question&sub_cat_id=<?= $r_sub_cat2['sub_cat_id']?>" class="btn btn-info" >Add</a>

                                </div>
                                </div>
										<?php
										
						   }
										?>
										