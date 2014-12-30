 <tr>
 <td>&nbsp;</td>
                                            <td colspan="2">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%" rowspan="2">No</th>
                                            <th width="60%" rowspan="2">Jenis Lembaga /Organisasi Pendukung Penanaman Modal</th>
                                            <th colspan="2">Pilihan Jawaban</th>
                                            <th width="15%" rowspan="2">Jumlah</th>
                                            </tr>
                                            <tr>
                                            <th width="10%">Ada</th>
                                            <th width="10%">Tidak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                        $q_141 = mysql_query("select * from q_1_4_1 where data_id = '$data_id' order by q_id");
										$no_141 = 1;
										while($r_141 = mysql_fetch_array($q_141)){
										 ?>
                                            <tr>
                                            <td><?= $no_141 ?></td>
                                            <td><?= $r_141['q_name'] ?></td>
                                            <td>     
                                            <label>
                                                <input type="radio" name="i_answer2_141_<?= $no_141 ?>" class="minimal" value="1"/>
                                            </label>
                                        	</td>
                                            <td>
                                             <label>
                                                <input type="radio" name="i_answer2_141_<?= $no_141 ?>" class="minimal" value="0"/>
                                            </label>
                                            </td>
                                            <td> <input type="text" name="i_answer2_141_jumlah_<?= $no_141 ?>" class="form-control" placeholder="" value=""/></td>
                                            </tr>
                                           <?php
										   $no_141++;
										 }
										   ?>
                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                           <div class="table_note"> note : Sebutkan nama-nama yang dimaksud, lampirkan bukti pendukung</div>
                                            
                                            </td>
                                           
                                          </tr> 