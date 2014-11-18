 <tr>
                                            <td colspan="3">
                                          <?php
                                        $q_211 = mysql_query("select * from q_2_1_1");
										$no_211 = 1;
										while($r_211 = mysql_fetch_array($q_211)){
										 ?>
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                          		<th width="5%">No</th>
                                                <th><?= $r_211['q_name']?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	 <?php
											 
											 for($i_211=1; $i_211<=20; $i_211++){
											 ?>
                                            <tr>
                                      		<td><?= $i_211?></td>
                                            <td>&nbsp;</td>
                                          </tr>
                                          <?php
											 }
										  ?>
                                        </tbody>
                                        
                                    </table>
                                    <br />
                                           <?php
										}
										   ?>
                                            
                                            </td>
                                           
                                          </tr> 