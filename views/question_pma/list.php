
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
                                             <td><?= $row['qp1_name']?></td>
                                              
                                            
                                                 <td></td>
                                               
                                               <td style="text-align:center;">

                                                    <a href="question_pma.php?page=form&id=<?= $row['qp1_id']?>" class="btn btn-danger" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['qp1_id']; ?>,'question_pma.php?page=delete&id=')" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
                                            if($row['qp1_get_child'] == 1){
											?>
                                             <?php
												$query_child = mysql_query("select * from questions_pma1_details where qp1_id = '".$row['qp1_id']."'");
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
													 
                                                ?>
                                            <tr>
                                           
                                            <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                             <td  >
                                             	<?= $no_child.". ".$row_child['qp1d_name'];?>
                                                </td>
                                               
                                                <td style="text-align:center;">
                                                  <a href="question_pma.php?page=form_child&id=<?= $row_child['qp1d_id']?>" class="btn btn-danger" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row_child['qp1d_id']; ?>,'question_pma.php?page=delete_child&id=')" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>
                                                </td>
                                               
                                                </tr> 
												<?php
												$no_child++;
												 }
												?>
                                                <tr>
                                                <td>&nbsp;</td>
                                                 <td>&nbsp;</td>
                                                 <td colspan="2">
                                                <a href="question_pma.php?page=form_child&qp1_id=<?= $row['qp1_id'] ?>" class="btn btn-info " >Add</a>
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

               