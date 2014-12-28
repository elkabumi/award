<?php			  
	include'../../lib/config.php';
	$participant_id = $_GET['participant_id'];
	
		
?>

  
                                                <input  type="hidden" name="i_particpant_id" class="form-control" placeholder="" value="<?=$participant_id ?>" readonly="readonly" />  
	     <?php
                                           $no = 1;
										   $query_participant =mysql_query("SELECT a.*, b.qp1_get_child 
										   						FROM participants_pma1 a
																join questions_pma1 b on b.qp1_id = a.qp1_id
																where participant_id = '$participant_id'
																order by participant_id ");
                                            
											while($row = mysql_fetch_array($query_participant)){
                                            
											?>
                                           
                                            <tr>
                                            <td width="5%"><?= $no+1; ?></td>
                                                <td width="32%"><?= $row['participant_pma1_question']?></td>
                                             
                                                 
                                             
                                     <?php 
									 if($row['qp1_get_child']==0){
									 ?>
                                     <td width="63%">
                                     <div id="i_answer1_<?= $no ?>">
                                     <input required type="text" name="i_particpant_<?= $no ?>" class="form-control" placeholder="" value="<?= $row['participant_pma1_answer']?>" readonly="readonly" />
                                     </div>
                                      </td>
                                     <?php
									 }else{
									 ?>
                                     
                                     
                                     
                                     <td width="63%">
                                     <div id="i_answer1_<?= $no ?>">
                              
                                     
                                     <input  type="hidden" name="i_particpant_<?= $no ?>" class="form-control" placeholder="" value="" readonly="readonly" />
                                     </div>
                                     </td>
                                     <?php
									 }
									 ?>
                                      
                                              </tr>
                                            <?php
                                            if($row['qp1_get_child'] == 1){
											?>
                                             <?php
												$query_child = mysql_query("select * from questions_pma1_details where qp1_id = '".$row['qp1_id']."'
												order by qp1d_id");
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
													 
                                                ?>
                                            <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td>
                                             
                                               <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled  <?
											 if($row['participant_pma1_answer'] == $row_child['qp1d_name']){ ?> checked="checked"
                                              <?php } ?>/>	<?= $no_child.". ".$row_child['qp1d_name'];?></td>
                                              
                                                </tr> 
												<?php
												$no_child++;
												 }
											}
												?>
                                        
                                        
                                            
                                            <?php
											
											$no++;
                                            }
                                            ?>


