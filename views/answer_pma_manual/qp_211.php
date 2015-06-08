
 
 <tr>
                                            <td colspan="3">
                                         
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                        <tr>
                                          		<th rowspan="2">no</th>
                                                <th rowspan="2">Program CSR</th>
                                                 <th colspan="2" align="center">Pilihan Jawaban</th>
                                                
                                          </tr>
                                            <tr>
                                          		<th>Ada</th>
                                                  <th>Tidak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
                                        $qp_211 = mysql_query("select * from qp_2_1_1 where data_id = '$data_id' order by  	qp_id ");
										$no_211 = 1;
										while($r_211 = mysql_fetch_array($qp_211)){
										
										 ?>
                                            <tr>
                                      		<td><?=$no_211?></td>
                                            <td><input required="required" type="hidden" name="i_answer2_211_<?=$r_211['qp_id']?>_<?= $no_211?>" class="form-control" value="<?= $r_211['qp_name']?>"  /><?= $r_211['qp_name']?></td>
                                            <? for($i=1;$i<=2;$i++){ ?>
                                            <td>
                                          		<input type="radio" name="i_answer2_<?= $no_211 ?>_<?=$r_211['qp_id']?>" class="minimal" value="<?= $i ?>"/>											
                                            </td>
                                         
											<? } ?>
     
                                            </tr>
  	                                     <?php
											$no_211++;
											}
											?>
                                            <tr>
                                             <td colspan="4" background="#E9F0F5"><strong>Lainnya</strong></td>
                                            </tr>
											<?
										for($j=1; $j<=10; $j++){
												?>
                                                 <tr>
                                      		<td><?=$no_211?></td>
          <td><input type="text" name="i_question_211_<?= $j?>" class="form-control" placeholder=""  />
           </td>
                                            <? for($i=1;$i<=2;$i++){ ?>
                                            <td>
                                          		 <input type="radio" name="i_answer2_211_<?= $j ?>" class="minimal" value="<?= $i ?>"/>											</td>
											<? } ?>
     
                                            </tr>
                                                
										<?
										$no_211++;
                                        }
										?>
                                        </tbody>
                                        
                                    </table>
                                    <br />
                                          
                                            
</td>
                                           
                                          </tr> 