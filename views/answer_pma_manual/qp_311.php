 <tr>
                                            <td colspan="3">
                                          <?php
                                        $qp_311 = mysql_query("select * from qp_3_1_1 where data_id = '$data_id'");
										$no_311 = 1;
										while($r_311 = mysql_fetch_array($qp_311)){
										 ?>
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                          		<th width="5%">No</th>
                                                <th><?= $r_311['qp_name']?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
											 for($i_311=1; $i_311<=10; $i_311++){
											 ?>
                                            <tr>
                                      		<td><?= $i_311?></td>
                                            <?php
                                            	$qp_311 = mysql_query("select * from qp_3_1_1 where data_id = '$data_id'");
												$no_311 = 1;
												while($r_311 = mysql_fetch_array($qp_311)){
											?>
                                             <th> <input  type="text" name="i_answer2_311_<?= $i_311?>_<?= $r_311['qp_id']?>" class="form-control" placeholder="" value=""/></th>
                                              
                                             <?php } ?>
                                           
                                          </tr>
                                          <?php
											 }
										  ?>
                                        </tbody>
                                        
                                    </table>
                                    <br />
                                           <?php
										}
										   ?>
                                            
                                            </td>
                                           
                                          </tr> 