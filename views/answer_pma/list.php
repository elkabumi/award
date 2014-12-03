
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
                            
                           <div class="title_page"> A. DATA UMUM KABUPATEN/ KOTA</div>
                            
                            <div class="box">
                               <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                       
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">Data Umum Kabupaten/Kota</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
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
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                                <td><?= $row['qp1_name']?></td>
                                              
                                            
                                                 <td>
                                             
                                     <?php 
									 if($row['qp1_get_child']==0){
									 ?>
                                     <input required type="text" name="i_answer1" class="form-control" placeholder="" value=""/>
                                     <?php
									 }
									 ?>
                                      
                                                 </td>
                                               
                                             
                                            </tr>
                                            <?php
                                            if($row['qp1_get_child'] == 1){
											?>
                                             <?php
												$query_child = mysql_query("select * from questions_pma1_details where qp1_id = '".$row['qp1_id']."'
												order by qp1d_id");
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
													 
                                                ?>
                                            <tr>
                                           
                                            <td>&nbsp;</td>
                                             <td  >&nbsp;</td>
                                                <td>
                         
                                                   <input type="radio" name="i_answer2_<?= $no_question ?>" class="minimal" value="<?= $no_q_q_d ?>"/>
                                                   
                                            
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
                                         
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               