
 
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
                                        $qp_211 =mysql_query("select a.*,b.*
												 							from answers_qp_211 a
																			JOIN answers_qp_211_details b ON a.answer_qp_211_id  = b.answer_qp_211_id  
																			where  answer_pma_id='".$answer_pma_id."' ");
										$no_211 = 1;
										while($r_211 = mysql_fetch_array($qp_211)){
										
										 ?>
                                            <tr>
                                      		<td><?=$no_211?></td>
                                            <td><?= $r_211['answer_qp_211_detail_question']?></td>
                                           
                                            <td>
                                          		<input type="radio" name="i_answer2_<?=$r_211['answer_qp_211_detail_id']?>" class="minimal" value=" "
                                                <?php if($r_211['answer_qp_211_detail_answer'] == '1'){ ?> checked="checked" <? } ?> disabled="disabled"/>
                                                </td><td>
                                                <input type="radio" name="i_answer2_<?=$r_211['answer_qp_211_detail_id']?>" class="minimal" value=" " 
												<?php if($r_211['answer_qp_211_detail_answer'] == '0'){ ?> checked="checked" <? } ?> disabled="disabled"/>											
                                            </td>
                                         
											
     
                                            </tr>
  	                                     <?php
											$no_211++;
											}
											?>
                                           
                                        </tbody>
                                        
                                    </table>
                                    <br />
                                          
                                            
</td>
                                           
                                          </tr> 