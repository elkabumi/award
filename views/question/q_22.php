 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                        		<th rowspan="2">No</th>
                                          		<th rowspan="2">Sarana-sarana Promosi dan Kerjasama</th>
                                                <th colspan="4" style="text-align:center;">Frekuensi/Th 2013</th>
                                          </tr>
                                            <tr>
                                          		<th>Belum Ada Sama Sekali</th>
                                                  <th>Ada Satu Kali</th>
                                                  <th>Antara 2-3 Kali</th>
                                                  <th>Lebih dari 3 Kali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_22 = mysql_query("select * from q_2_2");
										$no_22 = 1;
										while($r_22 = mysql_fetch_array($q_22)){
										
										 ?>
                                            <tr>
                                            <td><?= $no_22 ?></td>
                                      		<td><?= $r_22['q_name']?></td>
                                             <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_22['q_point1']?></td>
                                            <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_22['q_point2']?></td>
                                             <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_22['q_point3']?></td>
                                             <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_22['q_point4']?></td>
                                            
                                            </tr>
                                             <tr>
                                            <td></td>
                                      		<td><strong>Sebutkan</strong></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            
                                            </tr>
                                             <?php
											 $no_22++;
										 	 }
											 ?>
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> note : * Nomor 1-8 lampirkan bukti/ laporan kegiatan/ dokumen kerjasama/ leaflet, brosur, buku profil dan data pendukung lainnya.</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 