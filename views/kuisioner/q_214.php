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
                                        $q_214 = mysql_query("select * from q_2_1_4 where data_id = '$data_id'");
										$no_214 = 1;
										while($r_214 = mysql_fetch_array($q_214)){
										?>
                                        
										<?
											if($r_214['q_type'] == 0){
											$point_214=get_point_214($r_214['q_id'],$answer_id);
										 ?>
                                      
                                      		
                                                 <tr>
                                        	<td><?= get_abjad($no_214).". ".$r_214['q_name']?></td>
											 <td >  <input type="radio" name="i_answer_214_<?=$r_214['q_id']?>" class="minimal" value="1"
  												<?php if($point_214 ==  1){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/></td>
                                           
                                           
                                               <td ><input type="radio" name="i_answer_214_<?=$r_214['q_id']?>" class="minimal" value="2"
  												<?php if($point_214 ==  2){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/></td>
                                           	
                                              <td ><input type="radio" name="i_answer_214_<?=$r_214['q_id']?>" class="minimal" value="3"
  												<?php if($point_214 ==  3){ ?>  checked  <?php }else{ ?> <?php } ?> disabled="disabled"/></td>
                                            </tr>
                                             <?php
											}else{
												$q_answer_214=mysql_query("SELECT * FROM a_2_1_4 WHERE a_id='".$r_214['q_type']."'");
												$r_answer_214=mysql_fetch_object($q_answer_214);
											?>
                                            	<tr>
                                      			<td><?= get_abjad($no_214).". ".$r_214['q_name']?></td>
                                            	
                                                <td colspan="3">
                                             <div class="col-md-6">
                                            Jumlah<input readonly="readonly"  type="text" name="i_answer2_214_jumlah_<?= $no_214 ?>" class="form-control" placeholder="" value="<?=$r_answer_214->q_answer?>"/>
                                            </div>
                                             <div class="col-md-6">
                                            Poin<input readonly="readonly"  type="text" name="i_answer2_214_point_<?= $no_214 ?>" class="form-control" placeholder="" value="<?=$r_answer_214->q_point?>"/>
                                            </div>
                                            
                                            </td>
                                                
											<?
											
											}
											 $no_214++;
										 }
											?>
                                    
                                        </tbody>
                                        
                                    </table>
                                       <div class="table_note"> note :(Lampirkan buktinya)</div>
                                 
                                          
                                            
</td>
                                           
                                          </tr> 