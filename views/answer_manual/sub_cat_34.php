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
                                            <td width="84%" colspan="2"><b> <?= $r_question2['q2_name'] ?></b></td>
                                        </tr>
                                           <tr>
                                         	 <td>&nbsp</td>
                                          	 <td>Input NIlai</td>
                                         	 <td><input required="required" type="number" name="answer2_<?= $no_question2?>_<?=$r_question2['q2_id']?>_<?=$r_question2['q2_type']?>" class="form-control" placeholder="" value=""/>
                                            	 </td>                   		
                                         </tr>
                                          
                                      
                                          
                                        
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
										