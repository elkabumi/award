 <tr>
 <td>&nbsp;</td>
                                            <td colspan="2">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                        		<th rowspan="2">No</th>
                                          		<th rowspan="2">Sarana-sarana Promosi dan Kerjasama</th>
                                                <th colspan="4" style="text-align:center;">Frekuensi/Th 2013</th>
                                          </tr>
                                            <tr>
                                          		<th style="text-align:center">Belum Ada Sama Sekali</th>
                                                  <th style="text-align:center">Ada Satu Kali</th>
                                                  <th style="text-align:center">Antara 2-3 Kali</th>
                                                  <th style="text-align:center">Lebih dari 3 Kali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_22 = mysql_query("select * from q_2_2 where data_id = '$data_id' order by q_id");
										$no_22 = 1;
										while($r_22 = mysql_fetch_array($q_22)){
										
										 ?>
                                            <tr>
                                            <td><?= $no_22 ?></td>
                                      		<td><?= $r_22['q_name']?></td>
                                              <td style="text-align:center">	
                                            <label>
                                           		<input type="radio" name="i_answer2_22_<?= $no_22 ?>" class="minimal" value="1"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input type="radio" name="i_answer2_22_<?= $no_22 ?>" class="minimal" value="2"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input type="radio" name="i_answer2_22_<?= $no_22 ?>" class="minimal" value="3"/>
                                        	</label>
                                            </td>
                                             <td style="text-align:center">
                                             <label>
                                           		<input type="radio" name="i_answer2_22_<?= $no_22 ?>" class="minimal" value="4"/>
                                        	</label>
                                            </td>
                                            
                                            </tr>
                                             <tr>
                                            <td></td>
                                      		<td><strong>Sebutkan</strong></td>
                                            <td colspan="4">	
                                           <input required="required" type="text" name="i_answer2_22_detail_<?= $no_22 ?>" class="form-control" placeholder="" value=""/>
                                            </td>
                                            
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