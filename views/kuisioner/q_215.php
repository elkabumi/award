 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                          		<th rowspan="2">Uraian Kegiatan</th>
                                                <th colspan="3" style="text-align:center;">Pilihan Jawaban</th>
                                          </tr>
                                            <tr>
                                          		<th>Ada dan sering</th>
                                                  <th>Kadang-kadang</th>
                                                  <th>Tidak ada</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_215 = mysql_query("select * from q_2_1_5 where data_id = '$data_id'");
										$no_215 = 1;
										while($r_215 = mysql_fetch_array($q_215)){
										$point_215=get_point_215($r_215['q_id'],$answer_id);
										 ?>
                                            <tr>
                                      		<td><?= $r_215['q_name']?></td>
                                            <td style="text-align:center">	
                                            <label>
                                           		<input required type="radio" name="i_answer2_215_<?= $no_215 ?>" class="minimal" value="1"
                                                <?php if($point_215 == 1 ){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input required  type="radio" name="i_answer2_215_<?= $no_215 ?>" class="minimal" value="2"
												<?php if($point_215 == 2){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input  required type="radio" name="i_answer2_215_<?= $no_215 ?>" class="minimal" value="3"
                                                <?php if($point_215 == 3){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/>
                                        	</label>
                                            </td>
                                            </tr>
                                             <?php
											 $no_215++;
										 }
											?>
                                    
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> note : *) Lampirkan bukti laporan kegiatan & foto-fotonya.</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 