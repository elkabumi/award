 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                        		<th rowspan="2">No</th>
                                          		<th rowspan="2">Tahun</th>
                                                <th colspan="2" style="text-align:center;">Realisasi Penanaman Modal (Rp)</th>
                                                <th colspan="2" style="text-align:center;">Realisasi Tenaga Kerja (Org)</th>
                                          </tr>
                                            <tr>
                                          		<th>Target</th>
                                                  <th>Realisasi</th>
                                                  <th>Target</th>
                                                 <th>Realisasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $q_43 = mysql_query("select * from q_4_3 where data_id = '$data_id'");
										$no_43 = 1;
										while($r_43 = mysql_fetch_array($q_43)){
										
										 ?>
                                            <tr>
                                            <td><?= $no_43 ?></td>
                                      		<td><?= $r_43['q_name']?></td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            
                                            </tr>
                                            
                                             <?php
											 $no_43++;
										 	 }
											 ?>
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> *) lampirkan data pendukungnya <br />*) untuk tahun anggaran 2014 realisasi sampai Semester I</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 