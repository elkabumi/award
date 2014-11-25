 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                          		<th rowspan="2">Jenis Upaya</th>
                                                <th rowspan="2">Tingkat</th>
                                                 <th colspan="2">Pilihan Jawaban</th>
                                                  <th rowspan="2">Jumlah</th>
                                          </tr>
                                            <tr>
                                          		<th>Ada</th>
                                                  <th>Tidak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_212 = mysql_query("select * from q_2_1_2 where data_id = '$data_id'");
										$no_212 = 1;
										while($r_212 = mysql_fetch_array($q_212)){
										 if($r_212['q_id'] != 1){
										 ?>
                                            <tr>
                                      		<td><?= $r_212['q_name']?></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            </tr>
                                             <?php
										 }
											$q_212_detail = mysql_query("select * from q_2_1_2_details where q_parent_id = '".$r_212['q_id']."'");
											$no_212 = 1;
											while($r_212_detail = mysql_fetch_array($q_212_detail)){
											 ?>
                                             <tr>
                                             <td><?php if($r_212_detail['q_id']==1){ echo $r_212['q_name']; }?></td>
                                            <td><?= $r_212_detail['q_name']?></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            </tr>
                                            <?php
											}
											?>
                                          </tr>
                                          <?php
										}
										   ?>
                                        </tbody>
                                        
                                    </table>
                                    <br />
                                          
                                            
</td>
                                           
                                          </tr> 