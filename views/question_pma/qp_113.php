
                                             <table id="" class="table table-bordered table-striped" style="border-left:1px solid #e8e8e8">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Fasilitas</th>
                                                <th>Baik</th>
                                                
                                                   <th>Sedang</th> 
                                                   <th>Kurang</th> 
                                                   <th>Config</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q_opsi = mysql_query("select * from q_1_1_3 where data_id = '$data_id'");
											$no_113 = 1;
                                            while($r_opsi = mysql_fetch_array($q_opsi)){
                                            ?>
                                            <tr>
                                            <td><?= $no_113; ?></td>
                                                <td><?= $r_opsi['q_name']?></td>
                                                <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_opsi['q_point1']?></td>
                                                <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_opsi['q_point2']?></td>
                                                <td style="color:#F4543C; font-weight:bold;"><?= "Poin : ".$r_opsi['q_point3']?></td>
                                              
                                                 <td style="text-align:center;">

                                                    <a href="question.php?page=form_opsi&id=<?= $r_opsi['q2d_id']?>&q2_id=<?= $_GET['id']?>" class="btn btn-danger" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $r_opsi['q2d_id']; ?>,'question.php?page=delete_opsi&q2_id=<?= $_GET['id'] ?>&id=')" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>

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
                            