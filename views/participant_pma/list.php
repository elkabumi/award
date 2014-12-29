
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
                            
                           <div class="title_page">DATA PESERTA PMA / PMDN </div>
                            
                            <div class="box">
                              
                                <div class="box-body no-padding">
                                       <table width="100%" class="table table-bordered table-striped" id="example1">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th width="75%">Nama </th>
                                                <th width="20%">Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                                <td><?= $row['participant_name']?></td>
                                              
                                            
                                                 <td>
                                             
                                     <a href="participant_pma.php?page=form&id=<?= $row['participant_id']?>" class="btn btn-danger" ><i class="fa fa-pencil"></i></a>
                                      
                                                 </td>
                                               
                                             
                                            </tr>
                                           
                                            <?php
											
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                           <tfoot>
                                            <tr>
                                                <td colspan="4"><a href="<?= $add_button ?>" class="btn btn-info " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               </section>