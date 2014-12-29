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
                                     $q_question = mysql_query("select * from questions_pma2 where qp2_cat_pma_id = '$r_cat[cat_pma_id]' and data_id = '$data_id'");
										$no_question = 1;
										while($r_question = mysql_fetch_array($q_question)){
										?>
                                       
                                        
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; " >
                                
                                <div class="col-md-12">
                                        
                                        <table id="" width="100%"  cellpadding="5">
                                          <tr>
                                          <td width="3%" valign="top" align="center"><strong><?= $no_question."."; ?></strong></td>
                                            <td width="84%"><b> <?= $r_question['qp2_name'] ?></b></td>
                                            <td width="10%">
                                            
                                              
                                            </td>
                                          </tr> 
                                            <?php
                                        $q_q_d = mysql_query("select * from questions_pma2_details where qp2_id = '".$r_question['qp2_id']."'");
									    $no_q_q_d = 1;
										while($r_q_d = mysql_fetch_array($q_q_d)){
										?>
                                           <tr>
                                           <td valign="top" align="center"><?= "&nbsp;&nbsp;&nbsp;&nbsp;".get_abjad($no_q_q_d).")"; ?></td>
                                            <td valign="top"> <?= $r_q_d['qp2d_name'] ?></td>
                                            <td  style="color:#F4543C; font-weight:bold;" valign="top">
                                             
                                             Poin : <?= $r_q_d['qp2d_point']?>
                                            
                                            </td>
                                          </tr> 
                                      <?php
										 $no_q_q_d++;
										}
										
										if($r_question['qp2_type'] == 1){
											  include 'qp_132.php';
										  }else if($r_question['qp2_type'] == 2){
											  include 'qp_133.php';
										  }else if($r_question['qp2_type'] == 3){
											  include 'qp_211.php';
										  }else if($r_question['qp2_type'] == 4){
											  include 'qp_311.php';
										  }
										  
										  
										  
										
										 ?>
                                           <tr height="50">
                                            <td style="color:#09F; font-weight:bold;" colspan="2"><?= "&nbsp;&nbsp;&nbsp;&nbsp;" ?> Bobot Soal : <?= $r_question['qp2_weight'] ?></td>
                                            <td>
                                            
                                                <a href="question_pma.php?page=form_question_pma&id=<?= $r_question['qp2_id']?>&cat_id=<?=$r_cat['cat_pma_id']?>" class="btn btn-danger" >Edit </a>
                                            </td>
                                          </tr> 
                                          
                                          <?php
                                          if($r_question['qp2_description']){
										  ?>
                                           <tr>
                                           <td style="color:#F4543C; font-weight:bold;" valign="top">Catatan: </td>
                                            <td><?= $r_question['qp2_description'] ?></td>
                                            <td>
                                          
                                            </td>
                                          </tr> 
                                          <?php
										  }
										  ?>
                                          
                                        </table>
                                       
                                </div>
                                	  
                                </div><!-- /.box-body -->
                                
                                 <?php
										$no_question++;
										}
										?>
                                 <?php
                                 if($r_sub_cat['sub_cat_id'] != 11){
								 ?>
                                 <div class="box-footer">
                                
                                <a href="question_pma.php?page=form_question_pma&cat_id=<?=$r_cat['cat_pma_id']?>" class="btn btn-info" >Add</a>
                                
</div>
<?php
								 }
?>
                            </div><!-- /.box -->
                        
                            
                        </div>
                    </div>
                    
             <?
             }
			 ?>