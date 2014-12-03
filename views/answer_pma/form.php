<!-- Content Header (Page header) -->
        
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan gagal !</b>
               Password dan confirm password tidak sama
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
                                            <label>Name</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="Enter name ..." value="<?= $row->q1_name ?>"/>
                                        </div>
                                       
                                       	<div class="form-group"> 
                                                          
                                        <label>
                                            <input type="radio" name="i_get_child" class="minimal" value="1" <?php if($row->q1_get_child == 1){ ?>checked <?php } ?> />
                                        </label>
                                         <label>Menggunakan Opsi</label>    
                                        <br />
                                       
                                        <label>
                                            <input type="radio" name="i_get_child" class="minimal" value="0" <?php if($row->q1_get_child == 0){ ?>checked <?php } ?> />                                                    
                                        </label>
                                         <label>Tidak Menggunakan Opsi</label>      
                                       
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