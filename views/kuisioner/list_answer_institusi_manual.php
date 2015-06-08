
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
								
									include 'sub_cat_34_manual.php';
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
                                            <td  colspan="2" width="84%"><b> <?= $r_question['answer2_question'] ?></b></td>
                                             </tr>
                                             <td>&nbsp;</td>
                                          	 <td>Input NIlai </td>
                                         	 <td>
                   <input required="required" readonly="readonly" type="text" name="i_answer_pma2_<?= $no_question ?>"class="form-control" placeholder="" value=" <?= $r_question['answer2_point_value'] ?>"/>
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