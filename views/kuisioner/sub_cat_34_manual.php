 <?php
 
						   $q_sub_cat2 = mysql_query("select * from sub_categories where sub_cat_parent_id = 11");
						   while($r_sub_cat2 = mysql_fetch_array($q_sub_cat2)){
						  
						   ?>
                           	  <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8;" >
                                <div class="col-md-12">
                               <?= $r_sub_cat2['sub_cat_number'].". ".$r_sub_cat2['sub_cat_name']; ?><?=$r_sub_cat['sub_cat_id']?>
                                </div>
                                </div>
								
							 <?php
                                        $q_question2 = mysql_query("select * from answers2 where  answer2_sub_cat_id = '".$r_sub_cat2['sub_cat_id']."' and answer_id = '$answer_id'");
										$no_question2 = 1;
										while($r_question2 = mysql_fetch_array($q_question2)){
										?>
                                       
                                      
                                        
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8;" >
                                
                                <div class="col-md-12">
                                        
                                        <table id="" width="100%"  cellpadding="5">
                                          <tr>
                                        	 <td width="3%" valign="top" align="center"><strong><?= $no_question2."."; ?></strong></td>
                                            <td colspan="2" width="84%"><b> <?= $r_question2['answer2_question'] ?></b></td>
                                         </tr>
                                             <td>&nbsp;</td>
                                          	 <td>Input NIlai </td>
                                         	 <td>
                 					  <input required="required" readonly="readonly" type="text" name="i_answer_pma2_<?= $no_question ?>"class="form-control" placeholder="" value=" <?= $r_question2['answer2_point_value'] ?>"/>
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
										