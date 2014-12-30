 <tr>
 <td>&nbsp;</td>
                                            <td colspan="2">
                                             <table width="100%" class="table table-bordered table-striped" id="" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%">NO</th>
                                             <?php
                                        $q_122 = mysql_query("select * from q_1_2_2 where data_id = '$data_id' order by q_id");
										while($r_122 = mysql_fetch_array($q_122)){
										 ?>
                                                <th><?= $r_122['q_name'] ?></th>
                                               <?php
										}
											   ?> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                         for($i_122=1; $i_122<=4; $i_122++){
										 ?>
                                            <tr>
                                            <td><?= $i_122?></td>
                                                 <?php
												 $no_122 = 1;
                                        $q_122 = mysql_query("select * from q_1_2_2 where data_id = '$data_id' order by q_id");
										while($r_122 = mysql_fetch_array($q_122)){
										 ?>
                                                <td>
                                               i_answer2_122_<?= $i_122?>_<?= $no_122?>_<?=$no_q_q_d?>
                                                <input type="text" name="i_answer2_122_<?= $i_122?>_<?= $no_122?>_<?=$no_q_q_d?>" class="form-control" placeholder="" value="<?=$r_122['q_name']."_".$i_122.""?>"/></td>
                                               <?php
											   $no_122++;
										}
											   ?> 
                                                
                                            </tr>
                                           <?php
										 }
										   ?>
                                           
                                          
                                        </tbody>
                                        
                                    </table>
                                           <div class="table_note"> note : Dilampirkan Sertifikat atau data pendukung lainnya.</div>
                                            
                                            </td>
                                           
                                          </tr> 