
               
    

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                           <div class="title_page">TAHAP</div>
                            
                            <div class="box">
                               <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                       
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div><!-- /. tools -->
                                  

                                   
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                       <table width="100%" class="table table-bordered table-striped" id="">
                                        <thead>
                                      
                                            <tr>
                                          
                                                <th width="32%"></th>
                                                <th width="63%"></th>
                                             
                                            </tr>
                                        </thead>
                                        <tr>
                                       
                                            <td>TAHAP</td>
                                            <td>
                                       
                                          
                                       
                                        <select id="basic" name="i_phase_id" class="selectpicker show-tick form-control" data-live-search="true" >
                                      <option value="0">---</option>
                                           <?php
                                        $query_phase = mysql_query("select * from phase");
                                        while($row_phase= mysql_fetch_array($query_phase)){
                                        ?>
                                         <option value="<?= $row_phase['phase_id']?>"><?= $row_phase['phase_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                     
                                       
                                            </td>
                                            </tr>
                                            </tbody>
                                            </table>
                                       
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               