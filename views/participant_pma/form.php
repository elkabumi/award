
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
												$question = $row['qp1_name'];
												$answer = '';
												$id_child = $row['qp1_id'];
											}else{
												$question = $row['participant_pma1_question'];
												$answer = $row['participant_pma1_answer'];
												$id_child = $row['participant_pma1_id'];
											}
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                              <td><?= $question ?></td>
                                              
                                            
                                                 <td>
                                             
                                     <?php 
									 if($row['qp1_get_child']==0){
									 ?>
                                     <input required type="text" name="i_participants_pma1_<?= $no ?>" class="form-control" placeholder="" value="<?= $answer ?>"/>
                              
                                     
                                     <?php
									 }
									 ?>
                                      
                                                 </td>
                                               
                                             
                                            </tr>
                                            <?php
                                            if($row['qp1_get_child'] == 1){
											?>
                                               <?php
												$query_child = select_child($id_child);
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
														 
                                                ?>
                                            <tr>
                                           
                                            <td>&nbsp;</td>
                                             <td  >&nbsp;</td>
                                                <td>
                         
                                                   <input type="radio" name="i_participants_pma1_detail_<?= $id_child ?>" class="minimal" value="<?=$row_child['qp1d_name']?>"/>
                                            
                                             	<?= $no_child.". ".$row_child['qp1d_name'];?>
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