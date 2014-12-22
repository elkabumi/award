 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <?php
                                                 $q_133 = mysql_query("select * from qp_1_3_3 where data_id = '$data_id'");
												
												while($r_133 = mysql_fetch_array($q_133)){
												?>
                                                <th><?= $r_133['qp_name'] ?></th>
                                                <?php
												}
												?>
                                            </tr>
                                        </thead>
                                         <tbody>
                                          <?php
                                         for($i=1;$i<=3;$i++){ ?>
                                         <tr>
                                       
                                            <th width="5%"><?=$i?></th>
                                                 <?php					
												 $q_132 = mysql_query("select a.*,b.*
												 							from answers_qp_133 a
																			JOIN answers_qp_133_details b ON a.answer_qp_133_id  = b.answer_qp_133_id  
																			where answer_number  = '".$i."' AND answer_pma_id='".$answer_pma_id."' ");
												
												while($r_132 = mysql_fetch_array($q_132)){
												?>
	
                                                    
                                                    <th><?= $r_132['answer_qp_133_detail_answer'] ?></th>
                                            
												
												
												
												<?php
												}
												?>
                                         </tr>
                                          
                                          <?  }?>
                                        </tbody>
                                    </table>
                                              <div class="table_note"> *) lampirkan data pendukungnya</div>
                                            
                                           
                                            </td>
                                           
                                          </tr> 