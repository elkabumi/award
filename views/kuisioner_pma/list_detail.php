
                <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Simpan Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Edit Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 3){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            
            <div class="box">
                             
               <div class="box-body2 table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th>Peserta</th>
                    <?php
					$query_phase = get_phase();
                              while($row_phase=mysql_fetch_object($query_phase)){
								$max_colom = get_total_answer($data_id,$row_phase->phase_id);
								if($max_colom == ''){
									$max_colom='1';
								}
						?>
                        <th colspan="<?=$max_colom?>"><?=$row_phase->phase_name?> </th> 
                        <th>rata-rata</th>
                        <?php
								}
						?>
                                              
                      </tr>
                     </thead>
                    <tbody>
                    <?php
						$no = 1;
						while($row = mysql_fetch_object($query)){
                 	?>
                     <tr>
                         <th width="5%"><?=$no?></th>
                         <th><?=$row->participant_name?></th>
                        <?php
							$query_phase = get_phase();
                              while($row_phase=mysql_fetch_object($query_phase)){
								$max_colom = get_total_answer($data_id,$row_phase->phase_id);
								if($max_colom == ''){
									$max_colom='1';
								}
								$query_answer_pma_id = get_answer_id($data_id,$row_phase->phase_id,$row->participant_id);	 
							 	
								$total_answer_participant=get_total_answer_participant($data_id,$row_phase->phase_id,$row->participant_id);
								if($total_answer_participant == '0'){
									for($i=1;$i<=$max_colom; $i++){
						?>
                        			<th>&nbsp;</th>
                        <?php
									}
									?>
                                   <th>0</th>
                                    <?
								}else{
								$no_2=1;
								while($row_answer_pma_id=mysql_fetch_object($query_answer_pma_id)){
								$total_nilai=get_total_nilai($row_answer_pma_id->answer_pma_id);
						?>
                        <th> <?=$total_nilai?><br /> <a href="kuisioner_pma.php?page=list_answer&answer_pma_id=<?=$row_answer_pma_id->answer_pma_id?>&data_id=<?=$data_id?>" class="btn btn-danger" >detail</i></a></th>
                        
                        <?php
								if($total_answer_participant != $max_colom){
									$kolom_tambahan = $max_colom - $total_answer_participant;
									for($kolom_baru=1;$kolom_baru<=$kolom_tambahan; $kolom_baru++){
						?>
                        			<th>&nbsp;</th>
                        <?php
									$no_2++;
									}
								}
								
									?>
                        <?
								if($no_2 == $max_colom){
						?>
                        		<th><?=$rata_nilai=get_rata_nilai($data_id,$row_phase->phase_id,$row->participant_id,$max_colom );?></th>
                        <?php
								
								}
								$no_2++;
								}
								}
								
								
						
							 	
								
							}
						?>
                                              
                      </tr>
			     
                    </tr>
                                            

                                           <?php
											$no++;
											}
											?>
                                          
                                        </tbody>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->