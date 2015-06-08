 <tr>
 <td>&nbsp;</td>
                                            <td colspan="2">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                          		<th rowspan="2">Jenis Upaya</th>
                                                <th rowspan="2">Tingkat</th>
                                                 <th colspan="2"  style="text-align:center">Pilihan Jawaban</th>
                                                  <th rowspan="2" style="text-align:center">Jumlah</th>
                                          </tr>
                                            <tr>
                                          		<th style="text-align:center">Ada</th>
                                                  <th style="text-align:center">Tidak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_212 = mysql_query("select * from q_2_1_2 where data_id = '$data_id' order by q_id");
										$no_212 = 1;
										while($r_212 = mysql_fetch_array($q_212)){
										 if($r_212['q_type'] != 1){
										 ?>
                                            <tr>
                                      		<td><?= $r_212['q_name']?></td>
                                            <td>&nbsp;</td>
                                            <td style="text-align:center">
                                            <label>
                                           		<input type="radio" name="i_answer2_212_<?= $no_212 ?>" class="minimal" value="1"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                              <label>
                                           		<input type="radio" name="i_answer2_212_<?= $no_212 ?>" class="minimal" value="2"/>
                                        	</label>
                                            </td>
                                            <td>
                                            <input  type="text" name="i_answer2_212_<?= $no_212 ?>" class="form-control" placeholder="" value=""/>
                                            </td>
                                            </tr>
                                             <?php
										 }
											$q_212_detail = mysql_query("select * from q_2_1_2_details where q_parent_id = '".$r_212['q_id']."' order by q_id");
											$no_212_detail = 1;
											while($r_212_detail = mysql_fetch_array($q_212_detail)){
											 ?>
                                             <tr>
                                             <td><?php if($r_212_detail['q_type']==1){ echo $r_212['q_name']; }?></td>
                                            <td><?= $r_212_detail['q_name']?></td>
                                            <td style="text-align:center">
                                           	<label>
                                           		<input type="radio" name="i_answer2_212_detail_<?= $no_212_detail ?>" class="minimal" value="1"/>
                                        	</label>
                                            </td>
                                            <td style="text-align:center">
                                            <label>
                                           		<input type="radio" name="i_answer2_212_detail<?= $no_212_detail ?>" class="minimal" value="2"/>
                                        	</label>
                                            </td>
                                            <td> <input type="text" name="i_answer2_212_detail_<?= $no_212_detail ?>" class="form-control" placeholder="" value=""/></td>
                                            </tr>
                                            <?php
											$no_212_detail++;
											}
											?>
                                          </tr>
                                          <?php
										  $no_212++;
										}
										   ?>
                                        </tbody>
                                        
                                    </table>
                                    <br />
                                          
                                            
</td>
                                           
                                          </tr> 