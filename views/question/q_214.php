 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                          		<th rowspan="2">Uraian Ketersediaan</th>
                                                <th colspan="3" style="text-align:center;">Pilihan Jawaban</th>
                                          </tr>
                                            <tr>
                                          		<th>Ada dan Representatif</th>
                                                  <th>Ada, tidak memadai</th>
                                                  <th>Tidak Tersedia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_214 = mysql_query("select * from q_2_1_4");
										$no_214 = 1;
										while($r_214 = mysql_fetch_array($q_214)){
										
										 ?>
                                            <tr>
                                      		<td><?= get_abjad($no_214).". ".$r_214['q_name']?></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            </tr>
                                             <?php
											 $no_214++;
										 }
											?>
                                    
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> note :(Lampirkan buktinya)</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 