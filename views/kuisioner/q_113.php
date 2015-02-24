 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Fasilitas</th>
                                                <th>Baik</th>
                                                
                                                   <th>Sedang</th> 
                                                   <th>Kurang</th> 
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q_opsi = mysql_query("select * from q_1_1_3 where data_id = '$data_id'");
											$no_113 = 1;
                                            while($r_opsi = mysql_fetch_array($q_opsi)){
												$point_113=get_point_113($r_opsi['q_id'],$answer_id);
                                            ?>
                                            <tr>
                                            <td><?= $no_113; ?></td>
                                                <td><?= $r_opsi['q_name']?></td>
                                                <td style="color:#F4543C; font-weight:bold;">
												<input type="radio" name="i_answer_113_<?=$r_opsi['q_id']?>" class="minimal" value="<?=$r_opsi['q_point1'] ?>"
  												<?php if($r_opsi['q_point1'] == $point_113 ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/> 
												</td>
                                                <td style="color:#F4543C; font-weight:bold;">
												<input type="radio" name="i_answer_113_<?=$r_opsi['q_id']?>" class="minimal" value="<?=$r_opsi['q_point2'] ?>"
  												<?php if($r_opsi['q_point2'] == $point_113 ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/> 
												</td>
                                                <td style="color:#F4543C; font-weight:bold;">
												
												<input type="radio" name="i_answer_113_<?=$r_opsi['q_id']?>" class="minimal" value="<?=$r_opsi['q_point3'] ?>"
  												<?php if($r_opsi['q_point3'] == $point_113 ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/> 
												</td>
                                              
                                            </tr>
                                            <?php
											$no_113++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="question.php?page=form_opsi&q2_id=<?= $_GET['id']?>" class="btn btn-info " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                            
                                            
                                            </td>
                                           
                                          </tr> 