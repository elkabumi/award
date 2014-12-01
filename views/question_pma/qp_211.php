 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                          		<th rowspan="2">no</th>
                                                <th rowspan="2">Program CSR</th>
                                                 <th colspan="2" align="center">Pilihan Jawaban</th>
                                                
                                          </tr>
                                            <tr>
                                          		<th>Ada</th>
                                                  <th>Tidak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $qp_211 = mysql_query("select * from qp_2_1_1 where data_id = '$data_id'");
										$no_211 = 1;
										while($r_211 = mysql_fetch_array($qp_211)){
										
										 ?>
                                            <tr>
                                      		<td><?=$no_211?></td>
                                            <td><?= $r_211['qp_name']?></td>
                                            
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            </tr>
                                             <?php
										$no_211++;
										}
										?>
                                        </tbody>
                                        
                                    </table>
                                    <br />
                                          
                                            
</td>
                                           
                                          </tr> 