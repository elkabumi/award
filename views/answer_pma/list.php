<script>
function load_data_participant(str)
{
	
	if (str=="" || str == 0)
	{
	
	document.getElementById("table_participant").innerHTML="";
	
	return;
	} 
	if (window.XMLHttpRequest)
	{// kode for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	}
	else
	{// kode for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		
		document.getElementById("table_participant").innerHTML=xmlhttp.responseText;
		
		
		}
	}
	
	xmlhttp.open("GET","../views/answer_pma/data_participant.php?participant_id="+str,true);
	xmlhttp.send();
	
	
	}
</script>

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
                            
                           <div class="title_page"> A. DATA UMUM KABUPATEN/ KOTA</div>
                            
                            <div class="box">
                               <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                       
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">Data Umum Kabupaten/Kota</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                       <table width="100%" class="table table-bordered table-striped" id="">
                                        <thead>
                                      
                                            <tr>
                                            <th width="5%">No</th>
                                                <th width="32%">Uraian</th>
                                                <th width="63%">Penjelasan</th>
                                             
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td>1</td>
                                            <td>Kabupaten / Kota</td>
                                            <td>
                                       
                                          
                                       
                                        <select id="basic" name="i_participan_id" class="selectpicker show-tick form-control" data-live-search="true" onChange="load_data_participant(this.value)" >
                                      <option value="0">---</option>
                                           <?php
                                        $query_owner = mysql_query("select * from participants");
                                        while($row_owner = mysql_fetch_array($query_owner)){
                                        ?>
                                         <option value="<?= $row_owner['participant_id']?>"><?= $row_owner['participant_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                     
                                       
                                            </td>
                                            </tr>
                                            </tbody>
                                            </table>
                                             <table width="100%" class="table table-bordered table-striped" id="table_participant">
                                              <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                        
                                            <tr>
                                            <td width="5%"><?= $no+1; ?></td>
                                            <td width="32%"><?= $row['qp1_name']?></td>
                                              
                                            
                                                 
                                             
                                     <?php 
									 if($row['qp1_get_child']==0){
									 ?>
                                     <td width="63%">
                                     <div id="i_answer1_<?= $no ?>">
                                     <input required type="text" name="i_answer1_<?= $no ?>" class="form-control" placeholder="" value="" readonly="readonly" />
                                     </div>
                                     </td>
                                     <?php
									 }else{
									 ?>
                                     
                                     
                                     
                                     <td width="63%">
                                     <div id="i_answer1_<?= $no ?>">
                              
                                     
                                     <input required type="hidden" name="i_answer1_<?= $no ?>" class="form-control" placeholder="" value="" readonly="readonly" />
                                     </div>
                                     </td>
                                     <?php
									 }
									 ?>
                                      
                                                 
                                               
                                             
                                            </tr>
                                            <?php
                                            if($row['qp1_get_child'] == 1){
											?>
                                             <?php
												$query_child = mysql_query("select * from questions_pma1_details where qp1_id = '".$row['qp1_id']."'
												order by qp1d_id");
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
													 
                                                ?>
                                            <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                             <td  >
                                               <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled/>	<?= $no_child.". ".$row_child['qp1d_name'];?></td>
                                               
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

                                          
                                          
                                        </tbody>
                                         
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               