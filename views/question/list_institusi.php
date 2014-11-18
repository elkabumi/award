
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
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; display:none;" >
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
                                        $q_question = mysql_query("select * from questions2 where q2_sub_cat_id = '".$r_sub_cat['sub_cat_id']."'");
										$no_question = 1;
										while($r_question = mysql_fetch_array($q_question)){
										?>
                                       
                                        
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; display:none;" >
                                
                                <div class="col-md-12">
                                        
                                        <table id="" width="100%"  cellpadding="5">
                                          <tr>
                                          <td width="3%" valign="top" align="center"><strong><?= $no_question."."; ?></strong></td>
                                            <td width="84%"><b> <?= $r_question['q2_name'] ?></b></td>
                                            <td width="10%">
                                            
                                              
                                            </td>
                                          </tr> 
                                            <?php
                                        $q_q_d = mysql_query("select * from questions2_details where q2_id = '".$r_question['q2_id']."'");
									    $no_q_q_d = 1;
										while($r_q_d = mysql_fetch_array($q_q_d)){
										?>
                                           <tr>
                                           <td valign="top" align="center"><?= "&nbsp;&nbsp;&nbsp;&nbsp;".get_abjad($no_q_q_d).")"; ?></td>
                                            <td> <?= $r_q_d['q2d_name'] ?></td>
                                            <td  style="color:#F4543C; font-weight:bold;" valign="top">
                                            
                                              Poin : <?= $r_q_d['q2d_point']?>
                                            </td>
                                          </tr> 
                                          
                                          <?php
										  // Jika pertanyaan no 3 a
                                          if($r_q_d['q2d_id'] == 9 && $r_q_d['q2_id'] == 6){
											  include 'q_113.php';
										  }else  if(($r_q_d['q2d_id'] == 14 || $r_q_d['q2d_id'] == 15 || $r_q_d['q2d_id'] == 16 || $r_q_d['q2d_id'] == 17) && $r_q_d['q2_id'] == 8){
											  include 'q_122.php';
										  }
										  ?>
                                          
                                        
                                         
										 <?php
										 $no_q_q_d++;
										}
										
										if($r_question['q2_id'] == 11){
											  include 'q_132.php';
										  }else if($r_question['q2_id'] == 12){
											  include 'q_133.php';
										  }else if($r_question['q2_id'] == 14){
											  include 'q_141.php';
										  }else if($r_question['q2_id'] == 15){
											  include 'q_142.php';
										  }else if($r_question['q2_id'] == 16){
											  include 'q_211.php';
										  }else if($r_question['q2_id'] == 17){
											  include 'q_212.php';
										  }else if($r_question['q2_id'] == 19){
											  include 'q_214.php';
										  }else if($r_question['q2_id'] == 20){
											  include 'q_215.php';
										  }else if($r_question['q2_id'] == 22){
											  include 'q_22.php';
										  }else if($r_question['q2_id'] == 28){
											  include 'q_321.php';
										  }else if($r_question['q2_id'] == 35){
											  include 'q_36.php';
										  }else if($r_question['q2_id'] == 41){
											  include 'q_43.php';
										  }
										  
										  
										
										 ?>
                                           <tr height="50">
                                            <td style="color:#09F; font-weight:bold;" colspan="2"><?= "&nbsp;&nbsp;&nbsp;&nbsp;" ?> Bobot Soal : <?= $r_question['q2_weight'] ?></td>
                                            <td>
                                            
                                                <a href="question.php?page=form_question&id=<?= $r_question['q2_id']?>" class="btn btn-danger" >Edit</a>
                                            </td>
                                          </tr> 
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