 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th rowspan="2" width="40%">Uraian</th>
                                            <th colspan="3" style="text-align:center">Isian</th>
                                            <th rowspan="2" width="30%">Kriteria Penilaian</th>
                                            </tr>
                                            <tr>
                                            <th width="10%">Kawasan</th>
                                            <th width="10%">Zona</th>
                                             <th width="10%">Sentra</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                        $q_142 = mysql_query("select * from q_1_4_2 where data_id = '$data_id' order by q_id");
										$no_142 = 1;
										while($r_142 = mysql_fetch_array($q_142)){
										 ?>
                                            <tr>
                                            <td><?= get_abjad($no_142).". ".$r_142['q_name'] ?></td>
                                            <?php
                                            if($r_142['q_type'] == 0){
											?>
                                            <td> <input required="required" type="text" name="i_answer2_142_1_<?= $no_142 ?>" class="form-control" placeholder="" value=""/></td>
                                            <td><input required="required" type="text" name="i_answer2_142_2_<?= $no_142 ?>" class="form-control" placeholder="" value=""/></td>
                                            <td><input required="required" type="text" name="i_answer2_142_3_<?= $no_142 ?>" class="form-control" placeholder="" value=""/></td>
                                            <?php
											}else{
											?>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <?php
											}
											?>
                                             <td><?= $r_142['q_kriteria_penilaian']?></td>
                                            </tr>
                                            
                                            <?php
                                           
												 $q_142_detail = mysql_query("select * from q_1_4_2_details where q_parent_id = '".$r_142['q_id']."' order by q_id");
												$no_142_detail = 1;
												while($r_142_detail = mysql_fetch_array($q_142_detail)){
											?>
                                            
                                             <tr>
                                            <td><?= "&nbsp;&nbsp;&nbsp; - ".$r_142_detail['q_name'] ?></td>
                                            <td><input required="required" type="text" name="i_answer2_142_detail_1_<?= $no_142_detail ?>" class="form-control" placeholder="" value=""/></td>
                                            <td><input required="required" type="text" name="i_answer2_142_detail_2_<?= $no_142_detail ?>" class="form-control" placeholder="" value=""/></td>
                                            <td><input required="required" type="text" name="i_answer2_142_detail_3_<?= $no_142_detail ?>" class="form-control" placeholder="" value=""/></td>
                                             <td><?= $r_142_detail['q_kriteria_penilaian']?></td>
                                            </tr>
                                            
                                           <?php
										 	$no_142_detail++;
												}
										   $no_142++;
										 }
										   ?>
                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                           <div class="table_note"> note : Sebutkan nama-nama yang dimaksud, lampirkan bukti pendukung</div>
                                            
                                            </td>
                                           
                                          </tr> 