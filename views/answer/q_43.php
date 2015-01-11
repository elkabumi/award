 <tr>
 <td>&nbsp;</td>
                                            <td colspan="2">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                        		<th rowspan="2">No</th>
                                                              	 <?php
                                        $q_43 = mysql_query("select * from q_4_3 where data_id = '$data_id'");
										$no_43 = 1;
										while($r_43 = mysql_fetch_array($q_43)){
										?>
                                          		<?php
												if($r_43['q_type'] == '0'){
												?>
                                                <th rowspan="2"><?=$r_43['q_name']?></th>
                                               <?php }else{ ?>
                                                <th colspan="2" style="text-align:center;"><?=$r_43['q_name']?></th>
                                       <?php
											   }
										}
										?>
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
										
										 ?>
                                            <tr>
                                            <td><?= $no_43_2 ?></td>
                                      		<?php 
											$q_43_0 = mysql_query("select q_id from q_4_3 where data_id = '$data_id' AND q_type = 0 ");
											$r_43_0 = mysql_fetch_object($q_43_0);
											$year_id = $r_43_0->q_id;
											
											if($y == date("Y")){ 
											$year = $y.'SM I & SM 2';
                                            
                                             }else{ 
												$year = $y;
											} ?>
                                            	 <td>
												 
												  <input required="required" readonly="readonly" type="text" name="i_answer2_43_1_<?=$year_id?>_<?= $no_43_2?>" class="form-control" placeholder="" value="<?=$year?>"/>
									
                                          
                                          </td>
                                            <?php
											 $q_43 = mysql_query("select * from q_4_3 where data_id = '$data_id' AND q_type <> 0 ");
											 $no_43 = 1;
											 while($r_43 = mysql_fetch_array($q_43)){
												 for($j=1; $j<=2; $j++){
											?>
												  <td>
                                                  <input required="required" type="number" name="i_answer2_43_2_<?= $no_43_2?>_<?=$r_43['q_id']?>_<?=$j?>" class="form-control" placeholder="" value=""/>
                                            	</td>
										 	<?php
											 }
                                            }
										   ?>
                                            
                                            
                                            </tr>
                                            
                                             <?php
											    $no_43_2++;
										 	 }
											 ?>
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> *) lampirkan data pendukungnya <br />*) untuk tahun anggaran 2014 realisasi sampai Semester I</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 