
              <div class="title_page"> B. INSTITUSI</div>

                <!-- Main content -->
               <?php

               $q_cat = mysql_query("select * from categories order by cat_id");
			   $no_cat  = 1;
			   while($r_cat = mysql_fetch_array($q_cat)){
			   ?>
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="otheader_title"><span><?= $no_cat.". ".$r_cat['cat_name'];?></span></div>
                            
                            
                            <?php
						   $q_sub_cat = mysql_query("select * from sub_categories where cat_id = '".$r_cat['cat_id']."' and sub_cat_parent_id = '0' order by sub_cat_id ");
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
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; " >
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
                                        $q_question = mysql_query("select * from questions2 where q2_sub_cat_id = '".$r_sub_cat['sub_cat_id']."' and data_id = '$data_id' order by q2_id");
										$no_question = 1;
										while($r_question = mysql_fetch_array($q_question)){
										?>
                                       
                                        
                                <div class="box-body table-responsive" style="border-bottom:1px solid #e8e8e8; padding-bottom: 0px !important;" >
                                
                                
                                        
                                        <table id="" width="100%"  cellpadding="5">
                                          <tr>
                                          	<td width="5%" valign="top" align="center"><strong><?= $no_question."."; ?></strong></td>
                                            <td width="85%" colspan="2"><b> <?= $r_question['q2_name'] ?></b></td>
                                          </tr> 
                                          <tr>
                                         	 <td>&nbsp</td>
                                          	 <td>Input NIlai</td>
                                         	 <td><input required="required" type="number" name="answer_<?= $no_question?>_<?=$r_question['q2_id']?>_<?=$r_question['q2_type']?>" class="form-control" placeholder="" value=""/>
                                                 </td>                   		
                                         </tr> 
                                    </table>
                                       
                               
                                	  
                                </div><!-- /.box-body -->
                                
                                 <?php
										$no_question++;
										}
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