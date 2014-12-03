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
	
	xmlhttp.open("GET","../views/answer/data_participant.php?participant_id="+str,true);
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
                 <form role="form" action="<?= $action?>" method="post" name="testform">
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
                                       <table width="100%" class="table table-bordered" id="">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th width="30%">Uraian</th>
                                                <th width="65%">Penjelasan</th>
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <tr>
                                            <td>1</td>
                                            <td>Kabupaten / Kota</td>
                                            <td>
                                       
                                          
                                       
                                        <select id="basic" name="i_owner_id" class="selectpicker show-tick form-control" data-live-search="true" onChange="load_data_participant(this.value)" >
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
                                            </tbody></table>
                                             <table width="100%" class="table table-bordered table-striped" id="table_participant">
                                              <tbody>
                                            <?php
                                           $no = 1;
                                            while($row = mysql_fetch_array($query)){
                                            ?>
                                        
                                            <tr>
                                            <td width="5%"><?= $no+1; ?></td>
                                                <td width="30%"><?= $row['q1_name']?></td>
                                              
                                            
                                                 <td width="65%">
                                             
                                     <?php 
									 if($row['q1_get_child']==0){
									 ?>
                                     <div id="i_answer1_<?= $no ?>">
                                     <input required type="text" name="i_answer1_<?= $no ?>" class="form-control" placeholder="" value="" readonly="readonly" />
                                     </div>
                                     <?php
									 }else{
									 ?>
                                      <div id="i_answer1_<?= $no ?>">
                                     <input required type="hidden" name="i_answer1_<?= $no ?>" class="form-control" placeholder="" value="" readonly="readonly" />
                                     </div>
                                     <?php
									 }
									 ?>
                                      
                                                 </td>
                                               
                                             
                                            </tr>
                                            <?php
                                            if($row['q1_get_child'] == 1){
											?>
                                             <?php
												$query_child = mysql_query("select * from questions1_details where q1_id = '".$row['q1_id']."'
												order by q1d_id");
												$no_child = 1;
                                                 while($row_child = mysql_fetch_array($query_child)){
													 
                                                ?>
                                            <tr>
                                           
                                            <td>&nbsp;</td>
                                             <td  >
                                             	<?= $no_child.". ".$row_child['q1d_name'];?></td>
                                                <td>
                                                <input readonly="readonly" required="required" type="text" name="i_answer1_detail_<?= $no_child ?>" class="form-control" placeholder="" value=""/>
                                                </td>
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

               