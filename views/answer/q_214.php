 <tr>
 <td>&nbsp;</td>
                                            <td colspan="2">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                          		<th rowspan="2">Uraian Ketersediaan</th>
                                                <th colspan="3" style="text-align:center;">Pilihan Jawaban</th>
                                          </tr>
                                            <tr>
                                          		<th style="text-align:center">Ada dan Representatif</th>
                                                  <th style="text-align:center">Ada, tidak memadai</th>
                                                  <th style="text-align:center">Tidak Tersedia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_214 = mysql_query("select * from q_2_1_4 where data_id = '$data_id' order by q_id");
										$no_214 = 1;
										while($r_214 = mysql_fetch_array($q_214)){
											if($r_214['q_type'] == 0){
										 ?>
                                            <tr>
                                      		<td><?= get_abjad($no_214).". ".$r_214['q_name']?></td>
                                            <td style="text-align:center">	
                                            <label>
                                           		<input required type="radio" name="i_answer2_214_<?= $no_214 ?>" class="minimal" value="1"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input required type="radio" name="i_answer2_214_<?= $no_214 ?>" class="minimal" value="2"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                             <label>
                                           		<input required type="radio" name="i_answer2_214_<?= $no_214 ?>" class="minimal" value="3"/>
                                        	</label>
                                            </td>
                                            </tr>
                                             <?php
											}else{
											?>
                                             <tr>
                                      		<td><?= get_abjad($no_214).". ".$r_214['q_name']?></td>
                                          	<td colspan="3">
                                             <div class="col-md-6">
                                            Jumlah<input required  type="text" name="i_answer2_214_jumlah_<?= $no_214 ?>" class="form-control" placeholder="" value=""/>
                                            </div>
                                             <div class="col-md-6">
                                            Poin<input required  type="text" name="i_answer2_214_point_<?= $no_214 ?>" class="form-control" placeholder="" value=""/>
                                            </div>
                                            
                                            </td>
                                            </tr>
                                            <?php
											}
											 $no_214++;
										 }
											?>
                                    
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> note :(Lampirkan buktinya)</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 