 <section class="content">
                    <div class="row">
                         <div class="col-md-12">
                         
						 
						 
                            <!-- general form elements disabled -->
                             <div class="title_page"> TAHAP KUISIONER
							 </div>

                         
                                        
                                        <div class="form-group">
                                          
                                      <select id="basic" name="i_phase_id" class="selectpicker show-tick form-control" data-live-search="true"  disabled="disabled">
                                     
                                        <?php
										$phase_id = get_phase_id($answer_pma_id);
                                        $query_phase = mysql_query("select * from phase order by phase_id");
                                        while($row_phase = mysql_fetch_array($query_phase)){
                                        ?>
                                         <option value="<?= $row_phase['phase_id']?>" <?php if($phase_id == $row_phase['phase_id']){?> selected="selected"<? } ?>><?= $row_phase['phase_name'] ?></option>
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
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                             <td><?= $row['answer_pma1_question']?></td>
                                          	<td>
                                             <input readonly="readonly" type="text" name="i_name" class="form-control" placeholder="Enter name ..." value="<?=$row['answer_pma1_answer'] ?>"/>
                                          </td>
                                               
                                               
                                            </tr>
                                          <?php
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                         
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               