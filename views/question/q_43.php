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
                                     $no_43_2=1;
                                          for($y=date("Y")-2; $y<=date("Y"); $y++){
										if($y == date("Y")){ 
											$year = $y.'SM I & SM 2';
                                            
                                             }else{ 
												$year = $y;
											} ?>
										 
                                            <tr>
                                            <td><?= $no_43_2 ?></td>
                                      		<td><?= $year ?></td>
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