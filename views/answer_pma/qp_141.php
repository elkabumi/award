 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Jenis Lembaga /Organisasi Pendukung Penanaman Modal</th>
                                            <th colspan="2">Pilihan Jawaban</th>
                                            <th rowspan="2">Jumlah</th>
                                            </tr>
                                            <tr>
                                            <th>Ada</th>
                                            <th>Tidak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                        $q_141 = mysql_query("select * from q_1_4_1 where data_id = '$data_id'");
										$no_141 = 1;
										while($r_141 = mysql_fetch_array($q_141)){
										 ?>
                                            <tr>
                                            <td><?= $no_141 ?></td>
                                            <td><?= $r_141['q_name'] ?></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
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