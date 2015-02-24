
              <div class="title_page"> B. INSTITUSI</div>

                <!-- Main content -->
               <?php
               $q_cat = mysql_query("select * from categories");
			   $no_cat  = 1;
			   while($r_cat = mysql_fetch_array($q_cat)){
			   ?>
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="otheader_title"><span><?= $no_cat.". ".$r_cat['cat_name'];?></span></div>
                            
                            
                            <?php
						   $q_sub_cat = mysql_query("select * from sub_categories where cat_id = '".$r_cat['cat_id']."' and sub_cat_parent_id = 0");
						   while($r_sub_cat = mysql_fetch_array($q_sub_cat)){
						   ?>
                            <div class="box">
                          
                              <div class="box-header">
                                    <!-- tools box -->
                                <div class="pull-right box-tools">
                                 
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                   </div><!-- /. tools -->
                                   <h3 class="box-title"><?= $r_sub_cat['sub_cat_number'].". ".$r_sub_cat['sub_cat_name']; ?></h3>
                                   
                                </div><!-- /.box-header -->
                                <?php
								
                                if($r_sub_cat['sub_cat_description']){
								?>
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8;" >
                                <div class="col-md-12">
                                <?= $r_sub_cat['sub_cat_description']; ?>
                                </div>
                                </div>
                                <?php
								}
								?>
                                <?php
								if($r_sub_cat['sub_cat_id'] == 11){
									include 'sub_cat_34.php';
								}else{
                                ?> 
                                 <?php
                                        $q_question = mysql_query("select * from answers2 where  answer2_sub_cat_id = '".$r_sub_cat['sub_cat_id']."' and answer_id = '$answer_id'");
										$no_question = 1;
										while($r_question = mysql_fetch_array($q_question)){
										?>
                                       
                                        
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; " >
                                
                                <div class="col-md-12">
                                        
                                        <table id="" width="100%"  cellpadding="5">
                                          <tr>
                                          <td width="3%" valign="top" align="center"><strong><?= $no_question."."; ?></strong></td>
                                            <td width="84%"><b> <?= $r_question['answer2_question'] ?></b></td>
                                            <td width="10%">
                                            
                                              
                                            </td>
                                          </tr> 
                                            <?php
                                        $q_q_d = mysql_query("select * from answers2_details where answer2_id = '".$r_question['answer2_id']."' ORDER BY answer2_detail_id");
									    $no_q_q_d = 1;
										while($r_q_d = mysql_fetch_array($q_q_d)){
										?>
                                           <tr>
                                           <td valign="top" align="center">
									
   				<input type="radio" name="i_answer_pma_<?=$r_question['answer2_id']?>" class="minimal" value="<?= $r_q_d['answer2_detail_id'] ?>"
  									<?php if($no_q_q_d  == $r_question['answer2_answer'] ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/> 
                                       
										</td>
                                            <td valign="top"> <?= $r_q_d['answer_detail_question'] ?></td>
                                            <td  style="color:#F4543C; font-weight:bold;" valign="top">
                                            
                                            </td>
                                          </tr> 
                                          
                                          <?php
										  // Jika pertanyaan no 3 a
                                          if($r_q_d['answer2_detail_type'] == 1){
											  include 'q_113.php';
										  }else  if($r_q_d['answer2_detail_type'] == 2){
											  include 'q_122.php';
										  }
										  ?> 
                                         
										 <?php
										 $no_q_q_d++;
										}
										
										if($r_question['answer2_type'] == 1){
											  include 'q_132.php';
										  }else if($r_question['answer2_type'] == 2){
											  include 'q_133.php';
										  }else if($r_question['answer2_type'] == 3){
											  include 'q_141.php';
										  }else if($r_question['answer2_type'] == 4){
											  include 'q_142.php';
										  }else if($r_question['answer2_type'] == 5){
											  include 'q_211.php';
										  }else if($r_question['answer2_type'] == 6){
											  include 'q_212.php';
										  }else if($r_question['answer2_type'] == 7){
											  include 'q_214.php';
										  }else if($r_question['answer2_type'] == 8){
											  include 'q_215.php';
										  }else if($r_question['answer2_type'] == 9){
											  include 'q_22.php';
										  }else if($r_question['answer2_type'] == 10){
											  include 'q_321.php';
										  }else if($r_question['answer2_type'] == 11){
											  include 'q_36.php';
										  }else if($r_question['answer2_type'] == 12){
											  include 'q_43.php';
										  }
										  
										  
										
										 ?>
                                           <tr height="50">
                                           <td style="font-weight:bold;" valign="middle" colspan="2">Menggunakan Lampiran: 
                                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    <label>
                                         <input type="radio" name="i_attachment_<?=$r_question['answer2_id']?>" class="minimal"  value="1"
										 <?php if($r_question['answer2_attachment'] == '1'){?>  checked <? }?> disabled/>
                                         
                                       
                                        </label> Ya
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <label>
                                            <input type="radio" name="i_attachment_<?=$r_question['answer2_id']?>" class="minimal"   value="0" 
                                            <?php if($r_question['answer2_attachment'] == '0'){?>  checked <? }?>
                                            
                                            disabled/>
                                        </label> Tidak
                                        
                                        
                                        <div style="color:#F4543C; font-weight:bold;">
                                      
                                            <?php
											$total_point= ($r_question['answer2_point'] /100) *  $r_question['answer2_weight'] ;
											?>
											<?= "&nbsp;&nbsp;&nbsp;&nbsp;" ?> Bobot Soal : <?= $r_question['answer2_weight'] ?>
                                            
                                            % &nbsp; &nbsp;	Point Jawaban : <?=$r_question['answer2_point']?>  &nbsp; &nbsp;	Total point : <?=$total_point?>
                                            </div>
                                            </td>
                                            <td>
                                            
                                                
                                            </td>
                                          </tr> 
                                          
                                          <?php
                                          if($r_question['answer2_description']){
										  ?>
                                           <tr>
                                           <td style="color:#F4543C; font-weight:bold;" valign="top">Catatan: </td>
                                            <td><?= $r_question['answer2_description'] ?></td>
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
								}
										?>
                                 <?php
                                 if($r_sub_cat['sub_cat_id'] != 11){
								 ?>
                                 <div class="box-footer">
                                
                                <a href="question.php?page=form_question&sub_cat_id=<?= $r_sub_cat['sub_cat_id']?>" class="btn btn-info" >Add</a>
                                
</div>
<?php
								 }
?>
                            </div><!-- /.box -->
                            <?php
						   }
							?>
                            
                        </div>
                    </div>
                    
                 <?php
				 $no_cat++;
			   }
				 ?>