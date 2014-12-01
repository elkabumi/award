 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                        		<th rowspan="2">No</th>
                                          		<th rowspan="2">Kegiatan</th>
                                                <th colspan="4" style="text-align:center;">Pilihan Jawaban</th>
                                          </tr>
                                            <tr>
                                          		<th>Selalu</th>
                                                  <th>Kadang</th>
                                                  <th>Belum</th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_321 = mysql_query("select * from q_3_2_1 where data_id = '$data_id'");
										$no_321 = 1;
										while($r_321 = mysql_fetch_array($q_321)){
										
										 ?>
                                            <tr>
                                            <td><?= $no_321 ?></td>
                                      		<td><?= $r_321['q_name']?></td>
                                             <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_321['q_point1']?></td>
                                           <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_321['q_point2']?></td>
                                            <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_321['q_point3']?></td>
                                            
                                            </tr>
                                            
                                             <?php
											 $no_321++;
										 	 }
											 ?>
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> note : lampirkan data pendukung(laporan,foto,bukti surat & e-mail)</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 