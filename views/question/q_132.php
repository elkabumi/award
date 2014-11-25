 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th>Keterangan</th>
                                                <?php
												 for($y=date("Y")-3; $y<=date("Y"); $y++){
												 ?>
														<th><?= $y ?></th>
                                                <?php
												 }
												?>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                        $q_132 = mysql_query("select * from q_1_3_2 where data_id = '$data_id'");
										while($r_132 = mysql_fetch_array($q_132)){
										 ?>
                                            <tr>
                                            <td><?= $r_132['q_name'] ?></td>
                                            
                                             <?php
												 for($y=date("Y")-3; $y<=date("Y"); $y++){
												 ?>
                                                	<th>&nbsp;</th>
                                                <?php
												 }
												?>
                                            </tr>
                                           <?php
										 }
										   ?>
                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                           <div class="table_note"> note : Menghitung prosentase dan melihat tren + skala penilaian</div>
                                            
                                            </td>
                                           
                                          </tr> 