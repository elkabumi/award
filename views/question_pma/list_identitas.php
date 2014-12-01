
              
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
                                       <table id="" class="table table-bordered table-striped">
                                       
                                        <tbody>
                                            <?php
                                           $no_identitas = 1;
                                            while($row_identitas = mysql_fetch_array($query_identitas)){
                                            ?>
                                            <tr>
                                            <td><?= $no_identitas?></td>
                                                <td><?= $row_identitas['qp3_name']?></td>
                                              
                                               <td style="text-align:center;">

                                                    <a href="question_pma.php?page=form_identitas&id=<?= $row_identitas['qp3_id']?>" class="btn btn-danger" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row_identitas['qp3_id']; ?>,'question_pma.php?page=delete_identitas&id=')" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                           <?php
											$no_identitas++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="<?= $add_button_identitas ?>" class="btn btn-info " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               