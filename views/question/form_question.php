<!-- Content Header (Page header) -->
        
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
              Simpan berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                          

                             <form action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                                   
                                        <div class="col-md-12">
                                        
                                        <div class="form-group">
                                            <label>Soal</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="Masukkan soal ..." value="<?= $row->q2_name ?>"/>
                                        </div>
                                       
                                       	<div class="form-group"> 
                                                <label>Bobot</label>
                                            <input required type="text" name="i_weight" class="form-control" placeholder="Masukkan bobot soal ..." value="<?= $row->q2_weight ?>"/>             
                                       
                                       
                                    </div>
                                        
                                        </div>
                                       <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer">
                                <input class="btn btn-info" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-info" >Close</a>
</div>
                                
                          
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
              
              <?php
              if(isset($_GET['id'])){
			  ?>
                    <div class="row">
                        <div class="col-xs-12">
                            
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Opsi</th>
                                                <th>Poin</th>
                                                
                                                   <th>Config</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q_opsi = mysql_query("select * from questions2_details where q2_id = '".$_GET['id']."'");
                                            while($r_opsi = mysql_fetch_array($q_opsi)){
                                            ?>
                                            <tr>
                                            <td><?= $r_opsi['q2d_number']?></td>
                                                <td><?= $r_opsi['q2d_name']?></td>
                                                <td><?= $r_opsi['q2d_point']?></td>
                                              
                                                 <td style="text-align:center;">

                                                    <a href="question.php?page=form_opsi&id=<?= $r_opsi['q2d_id']?>&q2_id=<?= $_GET['id']?>" class="btn btn-danger" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $r_opsi['q2d_id']; ?>,'question.php?page=delete_opsi&q2_id=<?= $_GET['id'] ?>&id=')" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
											
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="question.php?page=form_opsi&q2_id=<?= $_GET['id']?>" class="btn btn-info " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                    <?php
			  }
					?>

                </section><!-- /.content -->