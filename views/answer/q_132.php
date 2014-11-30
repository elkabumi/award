 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="40%">Keterangan</th>
                                                <?php
												 for($y=date("Y")-3; $y<=date("Y"); $y++){
												 ?>
														<th width="15%"><?= $y ?></th>
                                                <?php
												 }
												?>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                        $q_132 = mysql_query("select * from q_1_3_2 where data_id = '$data_id' order by q_id");
										$no_132 = 1;
										while($r_132 = mysql_fetch_array($q_132)){
										 ?>
                                            <tr>
                                            <td><?= $r_132['q_name'] ?></td>
                                            
                                             <?php
												 for($y=date("Y")-3; $y<=date("Y"); $y++){
												 ?>
                                                	<th> <input required="required" type="text" name="i_answer2_132_<?= $y?>_<?= $no_132?>" class="form-control" placeholder="" value=""/></th>
                                                <?php
												 }
												?>
                                            </tr>
                                           <?php
										   $no_132++;
										 }
										   ?>
                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                           <div class="table_note"> note : Menghitung prosentase dan melihat tren + skala penilaian</div>
                                            
                                            </td>
                                           
                                          </tr> 