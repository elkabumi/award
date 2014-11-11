u <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image" style="text-align:center; margin-bottom:10px; margin-top:10px;">
                        	<?php
                             $user_data = get_user_data();
							if($user_data[2]==""){
								$img = "../img/user/default.jpg";
							}else{
								$img = "../img/user/".$user_data[2];
							}
							?>
                            <img src="<?= $img ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="info" style="text-align:center;">
                            <p style="color:#a0acbf; ">
                                        <?php
                                       
                                        echo "Welcome, ".$user_data[0];
                                        ?>
                                </p>

                            <a style="color:#a0acbf;  "><?= $user_data[1]?></a>
                        </div>
                    </div>
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   <?php //if(isset($_SESSION['menu_active'])) { echo $_SESSION['menu_active']; }?>
                    <ul class="sidebar-menu">
                     
                          <li class="treeview <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 1){ echo "active"; }?>">
                            <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span>Kuisioner Kab Kota</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                
                                <li><a href="izin_prinsip.php?page=list"><i class="fa fa-chevron-circle-right"></i>lembar pernyataan</a></li>
                                <li><a href="master.php?page=list"><i class="fa fa-chevron-circle-right"></i>Daftar Isi</a></li>
                                <li><a href="question.php?page=list"><i class="fa fa-chevron-circle-right"></i>Isian pertanyaan</a></li>
                             	
                            </ul>
                  </li>
                  
                
                         <li class="treeview <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){ echo "active"; }?>">
                           <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span>Kuisioner PMA/PMDN</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                
                                <li><a href="izin_prinsip.php?page=list"><i class="fa fa-chevron-circle-right"></i>lembar pernyataan</a></li>
                             
                                <li><a href="question.php?page=list"><i class="fa fa-chevron-circle-right"></i>Isian pertanyaan</a></li>
                             	
                            </ul>
                      </li>
                  
                        
                     <li class="treeview <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 3){ echo "active"; }?>">
                            <a href="#">
                                <i class="fa fa-book"></i>
                                <span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                
                                <li><a href="report_triwulan.php?page=list"><i class="fa fa-chevron-circle-right"></i>Triwulan</a></li>
                                <li><a href="report_semester.php?page=list"><i class="fa fa-chevron-circle-right"></i>Semester</a></li>
                                 <li><a href="report_tahunan.php?page=list"><i class="fa fa-chevron-circle-right"></i>Tahunan</a></li>
                             
                            </ul>
                  </li>
                  
                 
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 6){ echo "class='active'"; }?>">
                            <a href="user.php">
                                <i class="fa fa-user"></i>
                                <span>User</span>
                               
                            </a>
                            
                  </li>
                 
              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>