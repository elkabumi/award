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
                                        $q_22 = mysql_query("select * from q_2_2 where data_id = '$data_id'");
										$no_22 = 1;
										while($r_22 = mysql_fetch_array($q_22)){
											$point_22=get_point_22($r_22['q_id'],$answer_id);
										
										 ?>
                                            <tr>
                                            <td><?= $no_22 ?></td>
                                      		<td><?= $r_22['q_name']?></td>
                                            <td style="text-align:center">	
                                            <label>
                                           		<input required type="radio" name="i_answer2_22_<?= $no_22 ?>" class="minimal" value="1"
                                                <?php if($point_22 == 1 ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"
                                                />
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input required  type="radio" name="i_answer2_22_<?= $no_22 ?>" class="minimal" value="2"
                                                 <?php if($point_22 == 2 ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/>
                                        	
                                            </label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input  required type="radio" name="i_answer2_22_<?= $no_22 ?>" class="minimal" value="3"
                                                 <?php if($point_22 == 3 ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled" />
                                            </td>
                                             <td style="text-align:center">
                                             <label>
                                           		<input  required type="radio" name="i_answer2_22_<?= $no_22 ?>" class="minimal" value="4"
                                                <?php if($point_22 == 4 ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/>
                                            </td>
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