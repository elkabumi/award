 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th rowspan="2">Uraian</th>
                                            <th colspan="3" style="text-align:center">Isian</th>
                                            <th rowspan="2">Kriteria Penilaian</th>
                                            </tr>
                                            <tr>
                                            <th>Kawasan</th>
                                            <th>Zona</th>
                                             <th>Sentra</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                        $q_142 = mysql_query("select * from q_1_4_2 where data_id = '$data_id'");
										$no_142 = 1;
										while($r_142 = mysql_fetch_array($q_142)){
										 ?>
                                            <tr>
                                            <td><?= get_abjad($no_142).". ".$r_142['q_name'] ?></td>
                                           <?php
                                            $q_answer_142 = mysql_query("select * from a_1_4_2 where q_id = '".$r_142['q_id']."' AND  	answer_id ='".$answer_id."'");
                                           	$r_answer_142  = mysql_fetch_array($q_answer_142);
										   ?>
                                            
                                            <td><?=	$r_answer_142['a_answer1']?></td>
                                            <td><?=$r_answer_142['a_answer2']?></td>
                                            <td><?=	$r_answer_142['a_answer3']?></td>
                                             <td><?= $r_142['q_kriteria_penilaian']?></td>
                                            </tr>
                                            
                                            <?php
                                           
												$q_142_detail = mysql_query("select * from q_1_4_2_details where q_parent_id = '".$r_142['q_id']."'");
												$a_id=get_a_id_142($answer_id);
												while($r_142_detail = mysql_fetch_array($q_142_detail)){
											
											?>
                                            
                                             <tr>
                                            <td><?= "&nbsp;&nbsp;&nbsp; - ".$r_142_detail['q_name'] ?></td>
                                           <?php
                                            $q_answer_142_d = mysql_query("select * from a_1_4_2_details where q_detail_id = '".$r_142_detail['q_id']."' AND a_id ='".$a_id."'");
                                           	$r_answer_142_d = mysql_fetch_array($q_answer_142_d);
											
										   ?>
                                            
                                            <td><?=	$r_answer_142_d['a_answer1']?>   </td>
                                            <td><?=$r_answer_142_d['a_answer2']?></td>
                                            <td><?=	$r_answer_142_d['a_answer3']?></td>
                                             <td><?= $r_142_detail['q_kriteria_penilaian']?></td>
                                            </tr>
                                            
                                           <?php
												}
										   $no_142++;
										 }
										   ?>
                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                           <div class="table_note"> note : Sebutkan nama-nama yang dimaksud, lampirkan bukti pendukung</div>
                                            
                                            </td>
                                           
                                          </tr> 