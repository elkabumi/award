
<?php

               $q_cat = mysql_query("select * from categories_pma order by cat_pma_id");
			   $no_cat  = 1;
			   while($r_cat = mysql_fetch_array($q_cat)){
?>
                          <div class="title_page"> <?= strtoupper($r_cat['cat_pma_number'].".".$r_cat['cat_pma_name']);?></div>

                <!-- Main content -->
           
                    <div class="row">
                        <div class="col-xs-12">         
                            
                        
                            <div class="box">
                          
                              <div class="box-header">
                                    <!-- tools box -->
                                <div class="pull-right box-tools">
                                 
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                   </div><!-- /. tools -->
                                   <h3 class="box-title"><?= ucwords($r_cat['cat_pma_name'])?></h3>
                                   
                                </div><!-- /.box-header -->
                        <?php
                                     $q_question = mysql_query("select * from questions_pma2 where qp2_cat_pma_id = '$r_cat[cat_pma_id]' and data_id = '$data_id' order by qp2_id");
									 
										$no_question = 1;
										while($r_question = mysql_fetch_array($q_question)){
										?>
                                       
                                        
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; " >
                                
                                <div class="col-md-12">
                                        
                                        <table id="" width="100%"  cellpadding="5">
                                          <tr>
                                          <td width="3%" valign="top" align="center"><strong><?= $no_question."."; ?></strong></td>
                                            <td colspan="2" width="84%"><b> <?= $r_question['qp2_name'] ?>  </b> </td>
                                           
                                           </tr> 
                                          <tr>
                                          <?php
										  if($r_question['qp2_type'] == 0){
											  $point=get_point_manual($r_question['qp2_id']);
										  }else if($r_question['qp2_type'] == 1){
											  $point=get_point_manual_132($r_question['qp2_id']);
										  }else if($r_question['qp2_type'] == 2){
											  $point=get_point_manual_133($r_question['qp2_id']);
										  }else if($r_question['qp2_type'] == 3){
											  $point=get_point_manual_211($r_question['qp2_id']);
										  }else if($r_question['qp2_type'] == 4){
											  $point=get_point_manual_311($r_question['qp2_id']);
										  }
										  
										  ?>
                                         	 <td>&nbsp;</td>
                                          	 <td>Input NIlai</td>
                                         	 <td> <input required="required" readonly="readonly" type="number" name="i_answer_pma2_<?= $no_question ?>_<?=$r_question['qp2_cat_pma_id']?>_<?=$r_question['qp2_type']?>_<?=$r_question['qp2_id']?>"class="form-control" placeholder="" value="<?=$point?>"/>
                                        	 </td>
                   						 </tr>
                                    </table>
                                
                                       
                                </div>
                                	  
                                </div><!-- /.box-body -->
                                
                                 <?php
										$no_question++;
										}
										?>
                               
                            </div><!-- /.box -->
                        
                            
                        </div>
                    </div>
                    
             <?
             }
			 ?>