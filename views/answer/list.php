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
                }else if(isset($_GET['err']) && $_GET['err'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-warning alert-dismissable">
                <i class="fa fa-warning"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan Gagal !</b>
               Pilih Data Kabupaten / Kota terlebih dahulu
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
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->
                             <div class="title_page"> TAHAP KUISIONER</div>

                         
                                        
                                        <div class="form-group">
                                          
                                            <select id="basic" name="i_phase_id" class="selectpicker show-tick form-control" data-live-search="true" >
                                     
                                           <?php
                                        $query_phase = mysql_query("select * from phase order by phase_id");
                                        while($row_phase = mysql_fetch_array($query_phase)){
                                        ?>
                                         <option value="<?= $row_phase['phase_id']?>"><?= $row_phase['phase_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                          
                                        </select>
                                        </div>
                                       
                                    
                                    
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                 
                 <br />
                 
                    <div class="row">
                        <div class="col-xs-12">
                            
                           <div class="title_page"> A. DATA UMUM KABUPATEN / KOTA</div>
                            
                            <div class="box">
                               <div class="box-header">
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                       
                                        <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                       
                                    </div><!-- /. tools -->
                                  

                                    <h3 class="box-title">Data Umum Kabupaten / Kota</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                       <table width="100%" class="table" id="">
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
                                       
                                          
                                       
                                        <select required id="basic" name="i_participant_id" class="form-control" data-live-search="true" onChange="load_data_participant(this.value)" >
                                      <option value="">---</option>
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
                                             <table width="100%" class="table table-bordered" id="table_participant">
                                              <tbody>
                                      

                                          
                                          
                                        </tbody>
                                         
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

               