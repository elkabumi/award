<?php			  
	include'../../lib/config.php';
	$participant_id = $_GET['participant_id'];
	
		
?>
	     <?php
                                           $no = 1;
										   $query_participant =mysql_query("SELECT a.*, b.q1_get_child 
										   						FROM participants1 a
																join questions1 b on b.q1_id = a.q1_id
																
																 where participant_id = '$participant_id'");
                                            while($row = mysql_fetch_array($query_participant)){
                                            ?>
                                           
                                            <tr>
                                            <td width="5%"><?= $no+1; ?></td>
                                                <td width="30%"><?= $row['participant1_question']?></td>
                                              
                                            
                                                 <td width="65%">
                                             
                                     <?php 
									 if($row['q1_get_child']==0){
									 ?>
                                     <div id="i_answer1_<?= $no ?>">
                                     <input required type="text" name="i_answer1_<?= $no ?>" class="form-control" placeholder="" value="<?= $row['participant1_answer']?>" readonly="readonly" />
                                     </div>
                                     <?php
									 }else{
									 ?>
                                      <div id="i_answer1_<?= $no ?>">
                                     <input required type="hidden" name="i_answer1_<?= $no ?>" class="form-control" placeholder="" value="" readonly="readonly" />
                                     </div>
                                     <?php
									 }
									 ?>
                                      
                                                 </td>
                                               
                                             
                                            </tr>
                                            <?php
                                            if($row['q1_get_child'] == 1){
											?>
                                             <?php
												$query_child = mysql_query("select * from participants1_details where participant1_id = '".$row['participant1_id']."'
												order by participant1_id");
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
													 
                                                ?>
                                            <tr>
                                           
                                            <td>&nbsp;</td>
                                             <td  >
                                             	<?= $no_child.". ".$row_child['participant1_detail_question'];?></td>
                                                <td>
                                                <input readonly="readonly" required="required" type="text" name="i_answer1_detail_<?= $no_child ?>" class="form-control" placeholder="" value="<?= $row_child['participant1_detail_answer']; ?>"/>
                                                </td>
                                                </tr> 
												<?php
												$no_child++;
												 }
												?>
                                            <?php
											}
											$no++;
                                            }
                                            ?>


