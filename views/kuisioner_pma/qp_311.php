 <tr>
                                            <td colspan="3">
                                     
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                                 <?php
                                        $qp_311 = mysql_query("select * from qp_3_1_1 where data_id = '$data_id'");
										$no_311 = 1;
										while($r_311 = mysql_fetch_array($qp_311)){
										 ?>
                                          		<th width="5%">No</th>
                                                <th><?= $r_311['qp_name']?></th>
                                           <? } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       	 <?php
                                        $qp_311 =mysql_query("select a.*,b.*
												 							from answers_qp_311 a
																			JOIN answers_qp_311_details b ON a.answer_qp_311_id  = b.answer_qp_311_id  
																			where  answer_pma_id='".$answer_pma_id."' ");
										$no_311 = 1;
										while($r_311 = mysql_fetch_array($qp_311)){
										
										 ?>
                                            <tr>
                                      		<td><?=$no_311?></td>
                                            <td><?=$r_311['answer_qp_311_detail_answer']?></td>
                                         
                                         
											
     
                                            </tr>
  	                                     <?php
											$no_311++;
											}
											?>
                                       
                                        </tbody>
                                        
                                    </table>
                                   