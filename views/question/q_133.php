 <tr>
                                            <td colspan="3">
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <?php
                                                 $q_133 = mysql_query("select * from q_1_3_3");
												
												while($r_133 = mysql_fetch_array($q_133)){
												?>
                                                <th><?= $r_133['q_name'] ?></th>
                                                <?php
												}
												?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                         for($i_133=1; $i_133<=10; $i_133++){
										 ?>
                                            <tr>
                                            <td><?= $i_133?></td>
                                                 <?php
                                                 $q_133 = mysql_query("select * from q_1_3_3");
												
												while($r_133 = mysql_fetch_array($q_133)){
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