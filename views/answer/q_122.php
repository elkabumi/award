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
                                        $q_122 = mysql_query("select * from q_1_2_2 where data_id = '$data_id' order by q_id");
										while($r_122 = mysql_fetch_array($q_122)){
										 ?>
                                                <td> <input required="required" type="text" name="i_answer2_122_<?= $i_122?>" class="form-control" placeholder="" value=""/></td>
                                               <?php
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