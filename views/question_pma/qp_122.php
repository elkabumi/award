 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%">NO</th>
                                             <?php
                                        $q_122 = mysql_query("select * from q_1_2_2 where data_id = '$data_id'");
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
                                        $q_122 = mysql_query("select * from q_1_2_2 where data_id = '$data_id'");
										while($r_122 = mysql_fetch_array($q_122)){
										 ?>
                                                <td>&nbsp;</td>
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