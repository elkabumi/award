
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
                            
                            
                            <div class="box">
                               <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                       
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">A. DATA UMUM KABUPATEN/ KOTA</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                       <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Uraian</th>
                                                <th>Penjelasan</th>
                                                <th>Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                                <td><?= $row['q1_name']?></td>
                                              
                                            
                                                 <td></td>
                                               
                                               <td style="text-align:center;">

                                                    <a href="question.php?page=form&id=<?= $row['q1_id']?>" class="btn btn-danger" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['q1_id']; ?>,'question.php?page=delete&id=')" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
                                            if($row['q1_get_child'] == 1){
											?>
                                            <tr>
                                            <td>&nbsp;</td>
                                             <td colspan="3">
                                             	<?php
												$query_child = mysql_query("select * from questions1_details where q1_id = '".$row['q1_id']."'");
                                                 while($row_child = mysql_fetch_array($query_child)){
													 echo $row_child['q1d_name']."<br>";
												 }
												
												 
                                                ?>
                                                
                                                <a href="question.php?page=form_child&q1_id=<?= $row['q1_id'] ?>" class="btn btn-info " >Add</a>
                                             </td>
                                            </tr>
                                            <?php
											}
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="<?= $add_button ?>" class="btn btn-info " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->