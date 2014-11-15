 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                        		<th rowspan="2">No</th>
                                          		<th rowspan="2">Kegiatan</th>
                                                <th colspan="4" style="text-align:center;">Pilihan Jawaban</th>
                                          </tr>
                                            <tr>
                                          		<th>Selalu</th>
                                                  <th>Kadang</th>
                                                  <th>Belum</th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_36 = mysql_query("select * from q_3_6");
										$no_36 = 1;
										while($r_36 = mysql_fetch_array($q_36)){
										
										 ?>
                                            <tr>
                                            <td><?= $no_36 ?></td>
                                      		<td><?= $r_36['q_name']?></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            
                                            </tr>
                                            
                                             <?php
											 $no_36++;
										 	 }
											 ?>
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> note : lampirkan data pendukung (berita acara,foto,laporan,dll)</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 