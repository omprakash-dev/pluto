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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="inner_page price_table">
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
                              <h2>Price Table</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Pricing Table</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- column price --> 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <div class="price_table_head blue1_bg">
                                                <h2>Basic</h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="blue1_color">$ <span class="price_no">18</span> Monthly</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">24/7 Tech Support</a></li>
                                                      <li><a href="#">25 Analytics Compaign</a></li>
                                                      <li><a href="#">Branded Reports</a></li>
                                                      <li><a href="#">2,453 Keywords</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="price_table_bottom">
                                                <div class="center"><a class="main_bt" href="#">Buy Now</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                    <!-- column price --> 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <div class="price_table_head green_bg">
                                                <h2>Standard</h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="green_color">$ <span class="price_no">25</span> Monthly</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">24/7 Tech Support</a></li>
                                                      <li><a href="#">25 Analytics Compaign</a></li>
                                                      <li><a href="#">Branded Reports</a></li>
                                                      <li><a href="#">2,453 Keywords</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="price_table_bottom">
                                                <div class="center"><a class="main_bt" href="#">Buy Now</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                    <!-- column price --> 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <div class="price_table_head red_bg">
                                                <h2>Plus</h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="red_color">$ <span class="price_no">32</span> Monthly</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">24/7 Tech Support</a></li>
                                                      <li><a href="#">25 Analytics Compaign</a></li>
                                                      <li><a href="#">Branded Reports</a></li>
                                                      <li><a href="#">2,453 Keywords</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="price_table_bottom">
                                                <div class="center"><a class="main_bt" href="#">Buy Now</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                    <!-- column price --> 
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                       <div class="table_price full">
                                          <div class="inner_table_price">
                                             <div class="price_table_head yellow_bg">
                                                <h2>Premium</h2>
                                             </div>
                                             <div class="price_table_inner">
                                                <div class="cont_table_price_blog">
                                                   <p class="yellow_color">$ <span class="price_no">48</span> Monthly</p>
                                                </div>
                                                <div class="cont_table_price">
                                                   <ul>
                                                      <li><a href="#">24/7 Tech Support</a></li>
                                                      <li><a href="#">25 Analytics Compaign</a></li>
                                                      <li><a href="#">Branded Reports</a></li>
                                                      <li><a href="#">2,453 Keywords</a></li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="price_table_bottom">
                                                <div class="center"><a class="main_bt" href="#">Buy Now</a></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end column price -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- footer -->
                  <?php include('footer_html.php');?>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <?php include('footer_js.php');?>
      
      <!-- custom js -->
      
      <!-- calendar file css -->    
      <script src="js/semantic.min.js"></script>
      <script></script>
   </body>
</html>