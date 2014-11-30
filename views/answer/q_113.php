 <tr>
                                            <td colspan="3">
                                             <table width="100%" class="table table-bordered table-striped" id="" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th width="50%">Fasilitas</th>
                                                <th width="15%" style="text-align:center;">Baik</th>
                                                
                                                   <th width="15%" style="text-align:center;">Sedang</th> 
                                                   <th width="15%" style="text-align:center;">Kurang</th> 
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q_opsi = mysql_query("select * from q_1_1_3 where data_id = '$data_id' order by q_id");
											$no_113 = 1;
                                            while($r_opsi = mysql_fetch_array($q_opsi)){
                                            ?>
                                            <tr>
                                            <td><?= $no_113; ?></td>
                                                <td><?= $r_opsi['q_name']?></td>
                                                <td style="text-align:center;">
                                                  <label>
                                                    <input type="radio" name="i_answer2_113_<?= $no_113 ?>" class="minimal" value="1"/>
                                                </label>
                                                </td>
                                                <td style="text-align:center;">
                                                <label>
                                                    <input type="radio" name="i_answer2_113_<?= $no_113 ?>" class="minimal" value="2"/>
                                                </label>
                                                </td>
                                                <td style="text-align:center;">
                                                <label>
                                                    <input type="radio" name="i_answer2_113_<?= $no_113 ?>" class="minimal" value="3"/>
                                                </label>
                                                </td>
                                              
                                                
                                            </tr>
                                            <?php
											$no_113++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="question.php?page=form_opsi&q2_id=<?= $_GET['id']?>" class="btn btn-info " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>
                                            
                                            
                                            </td>
                                           
                                          </tr> 