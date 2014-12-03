
              
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                           <div class="title_page"> C. IDENTITAS PENGISI KUISONER</div>
                            
                            <div class="box">
                               <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                       
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">Data Pengisi Kuisioner</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                       <table width="100%" class="table table-bordered table-striped" id="">
                                       
                                        <tbody>
                                            <?php
                                           $no_identitas = 1;
                                            while($row_identitas = mysql_fetch_array($query_identitas)){
                                            ?>
                                            <tr>
                                            <td width="6%"><?= $no_identitas?></td>
                                                <td width="27%"><?= $row_identitas['qp3_name']?></td>
                                              
                                               <td width="67%" style="text-align:center;">

                                               <input required="required" type="text" name="i_answer3_<?= $no_identitas ?>" class="form-control" placeholder="" value=""/>

                                                </td> 
                                            </tr>
                                           <?php
											$no_identitas++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               