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
                                            <label>No</label>
                                            <input required type="text" name="i_number" class="form-control" placeholder="Masukkan no ..." value="<?= $row->q2d_number ?>"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Opsi</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="Masukkan opsi ..." value="<?= $row->q2d_name ?>"/>
                                        </div>
                                       
                                       	<div class="form-group"> 
                                                <label>Poin</label>
                                            <input required type="text" name="i_point" class="form-control" placeholder="Masukkan poin ..." value="<?= $row->q2d_point ?>"/>             
                                       
                                       
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
              
            
                </section><!-- /.content -->