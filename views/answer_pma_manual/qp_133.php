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
										$no=1;
                                          for($y=date("Y")-2; $y<=date("Y"); $y++){
											  
												 ?>
                                                 <tr>
                                                 <th><?= $no ?></th>
											   <?php
                                               $q_133 = mysql_query("select * from qp_1_3_3 where data_id = '$data_id'");
												while($r_133 = mysql_fetch_array($q_133)){
												?>
                                             
											 
											
                                              <th>
                                              <input required="required" type="text" name="i_answer2_133_<?=$r_133['qp_id'] ?>_<?=$r_133['qp_type']?>_<?= $no?>" class="form-control" placeholder="" <?php  if(strtolower($r_133['qp_name']) == 'tahun'){ ?> value="<?=$y;?>" readonly="readonly"
											 <?php  }?> />
                                       
                                            
                                             </th>
                                                <?php
												}
												?>
                                                </tr>
												<?php
												$no++;
												 }
												?>
                                           
                                     
                                        </tbody>
                                        
                                    </table>
                                              <div class="table_note"> *) lampirkan data pendukungnya</div>
                                            
                                           
                                            </td>
                                           
                                          </tr> 