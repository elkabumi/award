


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
                }else if(isset($_GET['err']) && $_GET['err'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-warning alert-dismissable">
                <i class="fa fa-warning"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan Gagal !</b>
               Pilih Data Kabupaten / Kota terlebih dahulu
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
                 <form role="form" action="<?= $action?>" method="post" name="testform">
                 
                  <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                             <div class="title_page"> TAHAP KUISIONER</div>

                         
                                        
                                        <div class="form-group">
                                          
                                           
                                        <select id="basic" name="i_phase_id" class="selectpicker show-tick form-control" data-live-search="true" disabled="disabled">
                                      <option value="0">---</option>
                                           <?php
										$phase_id = get_phase_id($answer_id);
                                        $query_phase = mysql_query("select * from phase");
                                        while($row_phase= mysql_fetch_array($query_phase)){
                                        ?>
                                         <option value="<?= $row_phase['phase_id']?>"  <?php if($phase_id == $row_phase['phase_id']){?> selected="selected"<? } ?>><?= $row_phase['phase_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                        </div>
                                       
                                    
                                    
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                 
                 <br />
                 
                    <div class="row">
                        <div class="col-xs-12">
                            
                           <div class="title_page"> A. DATA UMUM KABUPATEN / KOTA</div>
                            
                            <div class="box">
                               <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                       
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">Data Umum Kabupaten / Kota</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                       <table width="100%" class="table" id="">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th width="30%">Uraian</th>
                                                <th width="65%">Penjelasan</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td><?= $no?></td>
                                                <td><?= $row['answer1_question']?></td>
                                                <td>
                                                           <input readonly="readonly" type="text" name="i_name" class="form-control" placeholder="Enter name ..." value="<?=$row['answer1_answer'] ?>"/>
                                                </td>
                                                
                                            </tr>
                                              <?php
                                            	$get_child=get_child($row['q1_id']);
											
												if($get_child == 1){
											   ?>
                                             	<?php
												$query_child = mysql_query("select * from answers1_details where answer1_id = '".$row['answer1_id']."'");
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
													 
                                                ?>
                                           	 <tr>
                                           
                                           			 <td>&nbsp;</td>
                                            		 <td  >
                                             			<?= $no_child.". ".$row_child['answer1_detail_question'];?>
                                                		</td>
                                                		<td>
                                                           <input readonly="readonly" type="text" name="i_name" class="form-control" placeholder="Enter name ..." value="<?=$row_child['answer1_detail_answer'] ?>"/>
                                              			 </td>
                                               
                                               
                                                </tr> 
												<?php
												$no_child++;
												 }
												?>
                                                <tr>
                                                <td>&nbsp;</td>
                                                 <td colspan="3">
                                                <a href="question.php?page=form_child&q1_id=<?= $row['q1_id'] ?>" class="btn btn-info " >Add</a>
                                             </td>
                                            </tr>
                                        	<? 
											}
											$no++;
											} 
											?>
                                            </tbody></table>
                                             <table width="100%" class="table table-bordered" id="table_participant">
                                              <tbody>
                                      

                                          
                                          
                                        </tbody>
                                         
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               