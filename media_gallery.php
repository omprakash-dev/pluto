<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!-- fancy box js -->
      <link rel="stylesheet" href="css/jquery.fancybox.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page media_gallery">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <?php include('side-nav.php');?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.php"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.php">My Profile</a>
                                       <a class="dropdown-item" href="settings.php">Settings</a>
                                       <a class="dropdown-item" href="help.php">Help</a>
                                       <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Media Gallery</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column4 graph">
                        <!-- Gallery section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Media Gallery Design Elements</h2>
                                 </div>
                              </div>
                              <div class="full gallery_section_inner padding_infor_info">
                                 <div class="row">
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g1.jpg"><img class="img-responsive" src="images/layout_img/g1.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g2.jpg"><img class="img-responsive" src="images/layout_img/g2.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g3.jpg"><img class="img-responsive" src="images/layout_img/g3.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g4.jpg"><img class="img-responsive" src="images/layout_img/g4.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g5.jpg"><img class="img-responsive" src="images/layout_img/g5.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g6.jpg"><img class="img-responsive" src="images/layout_img/g6.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g7.jpg"><img class="img-responsive" src="images/layout_img/g7.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g8.jpg"><img class="img-responsive" src="images/layout_img/g8.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g9.jpg"><img class="img-responsive" src="images/layout_img/g9.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g10.jpg"><img class="img-responsive" src="images/layout_img/g10.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g11.jpg"><img class="img-responsive" src="images/layout_img/g11.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g12.jpg"><img class="img-responsive" src="images/layout_img/g12.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g13.jpg"><img class="img-responsive" src="images/layout_img/g13.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g14.jpg"><img class="img-responsive" src="images/layout_img/g14.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g15.jpg"><img class="img-responsive" src="images/layout_img/g15.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g16.jpg"><img class="img-responsive" src="images/layout_img/g16.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g1.jpg"><img class="img-responsive" src="images/layout_img/g1.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g2.jpg"><img class="img-responsive" src="images/layout_img/g2.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g3.jpg"><img class="img-responsive" src="images/layout_img/g3.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g4.jpg"><img class="img-responsive" src="images/layout_img/g4.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g5.jpg"><img class="img-responsive" src="images/layout_img/g5.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g6.jpg"><img class="img-responsive" src="images/layout_img/g6.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g7.jpg"><img class="img-responsive" src="images/layout_img/g7.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href="images/layout_img/g8.jpg"><img class="img-responsive" src="images/layout_img/g8.jpg" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <h4>Sed ut perspiciatis</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- footer -->
                     <?php include('footer_html.php');?>
                  </div>
                  <!-- end dashboard inner -->
               </div>
            </div>
            <!-- model popup -->
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <!-- Modal Header -->
                     <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <!-- Modal body -->
                     <div class="modal-body">
                        Modal body..
                     </div>
                     <!-- Modal footer -->
                     <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end model popup -->
         </div>
      </div>
      <!-- jQuery -->
      <?php include('footer_js.php');?>
      
      <!-- fancy box js -->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <!-- custom js -->
      
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
   </body>
</html>