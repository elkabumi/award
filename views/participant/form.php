
                <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Simpan Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Edit Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 3){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                           <div class="title_page"> DATA UMUM KABUPATEN/ KOTA</div>
                            
                            <div class="box">
                           
                                <div class="box-body no-padding">
                                  <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">
                                       <table width="100%" class="table table-bordered table-striped" id="">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th width="32%">Uraian</th>
                                                <th width="63%">Penjelasan</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
										 
                                            while($row = mysql_fetch_array($query)){
											if($type == 1){
												$question = $row['q1_name'];
												$answer = '';
												$id_child = $row['q1_id'];
											}else{
												$question = $row['participant1_question'];
												$answer = $row['participant1_answer'];
												$id_child = $row['participant1_id'];
											}
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                                <td><?= $question ?></td>
                                              
                                            
                                                 <td>
                                             
                                     <?php 
									 if($row['q1_get_child']==0){
									 ?>
                                     <input required type="text" name="i_participants1_<?= $no ?>" class="form-control" placeholder="" value="<?= $answer ?>"/>
                                     <?php
									 }
									 ?>
                                      
                                                 </td>
                                               
                                             
                                            </tr>
                                            <?php
                                            if($row['q1_get_child'] == 1){
											?>
                                             <?php
												$query_child = select_child($type, $id_child);
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
													 
														if($type == 1){
															$question_child = $row_child['q1d_name'];
															$answer_child = '';
														}else{
															$question_child = $row_child['participant1_detail_question'];
															$answer_child = $row_child['participant1_detail_answer'];
														} 
                                                ?>
                                            <tr>
                                           
                                            <td>&nbsp;</td>
                                             <td  >
                                             	<?= $no_child.". ".$question_child;?></td>
                                                <td>
                                                <input required="required" type="text" name="i_participants1_detail_<?= $row['q1_id']?>_<?= $no_child  ?>" class="form-control" placeholder="" value="<?= $answer_child?>"/>
                                                </td>
                                                </tr> 
												<?php
												$no_child++;
												 }
												?>
                                            <?php
											}
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                         <tfoot>
                                            <tr>
                                                <td colspan="4">     <input class="btn btn-info" type="submit" value="Save"/>  <a href="<?= $close_button?>" class="btn btn-info" >Close</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               </section>