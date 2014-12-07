 <tr>
 <td>&nbsp;</td>
                                            <td colspan="2">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                        		<th rowspan="2">No</th>
                                          		<th rowspan="2">Kegiatan</th>
                                                <th colspan="4" style="text-align:center;">Pilihan Jawaban</th>
                                          </tr>
                                            <tr>
                                          		<th style="text-align:center;">Selalu</th>
                                                  <th style="text-align:center;">Kadang</th>
                                                  <th style="text-align:center;">Belum</th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_321 = mysql_query("select * from q_3_2_1 where data_id = '$data_id' order by q_id");
										$no_321 = 1;
										while($r_321 = mysql_fetch_array($q_321)){
										
										 ?>
                                            <tr>
                                            <td><?= $no_321 ?></td>
                                      		<td><?= $r_321['q_name']?></td>
                                           <td style="text-align:center">	
                                            <label>
                                           		<input type="radio" name="i_answer2_321_<?= $no_321 ?>" class="minimal" value="1"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input type="radio" name="i_answer2_321_<?= $no_321 ?>" class="minimal" value="2"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input type="radio" name="i_answer2_321_<?= $no_321 ?>" class="minimal" value="3"/>
                                        	</label>
                                            </td>
                                            
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