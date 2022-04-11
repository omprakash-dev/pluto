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
   <body class="inner_page project_page">
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
                              <h2>Project</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Project <small>( Listing Design )</small></h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div class="table-responsive-sm">
                                          <table class="table table-striped projects">
                                             <thead class="thead-dark">
                                                <tr>
                                                   <th style="width: 2%">No</th>
                                                   <th style="width: 30%">Project Title</th>
                                                   <th>Members</th>
                                                   <th>Project Progress</th>
                                                   <th>Status</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>1</td>
                                                   <td>
                                                      <a>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accus antium doloremque</a>
                                                   </td>
                                                   <td>
                                                      <ul class="list-inline">
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg2.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg3.png" class="rounded-circle" alt="#">
                                                         </li>
                                                      </ul>
                                                   </td>
                                                   <td class="project_progress">
                                                      <div class="progress progress_sm">
                                                         <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                                      </div>
                                                      <small>Almost Completed</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-success btn-xs">Success</button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>2</td>
                                                   <td>
                                                      <a>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium</a>
                                                   </td>
                                                   <td>
                                                      <ul class="list-inline">
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg2.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg3.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg4.png" class="rounded-circle" alt="#">
                                                         </li>
                                                      </ul>
                                                   </td>
                                                   <td class="project_progress">
                                                      <div class="progress progress_sm">
                                                         <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                                      </div>
                                                      <small>25% Complete</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-success btn-xs">Success</button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>3</td>
                                                   <td>
                                                      <a>Sed ut perspiciatis unde omnis iste natus error sit volup tatem accus antium doloremque</a>
                                                   </td>
                                                   <td>
                                                      <ul class="list-inline">
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg1.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg3.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg4.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg5.png" class="rounded-circle" alt="#">
                                                         </li>
                                                      </ul>
                                                   </td>
                                                   <td class="project_progress">
                                                      <div class="progress progress_sm">
                                                         <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%;"></div>
                                                      </div>
                                                      <small>58% Complete</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-success btn-xs">Success</button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>4</td>
                                                   <td>
                                                      <a>The point of using Lorem Ipsum</a>
                                                      <br>
                                                      <small>Created 25.july.2018</small>
                                                   </td>
                                                   <td>
                                                      <ul class="list-inline">
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg4.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg3.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg1.png" class="rounded-circle" alt="#">
                                                         </li>
                                                      </ul>
                                                   </td>
                                                   <td class="project_progress">
                                                      <div class="progress progress_sm">
                                                         <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%;"></div>
                                                      </div>
                                                      <small>47% Complete</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-success btn-xs">Success</button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>5</td>
                                                   <td>
                                                      <a>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium</a>
                                                   </td>
                                                   <td>
                                                      <ul class="list-inline">
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg1.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg2.png" class="rounded-circle" alt="#">
                                                         </li>
                                                      </ul>
                                                   </td>
                                                   <td class="project_progress">
                                                      <div class="progress progress_sm">
                                                         <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                                                      </div>
                                                      <small>63% Complete</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-success btn-xs">Success</button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>6</td>
                                                   <td>
                                                      <a>On the other hand, we denounce with righteous</a>
                                                      <br>
                                                      <small>Created 25.july.2018</small>
                                                   </td>
                                                   <td>
                                                      <ul class="list-inline">
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg1.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg2.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg3.png" class="rounded-circle" alt="#">
                                                         </li>
                                                      </ul>
                                                   </td>
                                                   <td class="project_progress">
                                                      <div class="progress progress_sm">
                                                         <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%;"></div>
                                                      </div>
                                                      <small>27% Complete</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-success btn-xs">Success</button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>7</td>
                                                   <td>
                                                      <a>Nam libero tempore, cum soluta nobis est eligendi..</a>
                                                      <br>
                                                      <small>Created 25.july.2018</small>
                                                   </td>
                                                   <td>
                                                      <ul class="list-inline">
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg4.png" class="rounded-circle" alt="#">
                                                         </li>
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg3.png" class="rounded-circle" alt="#">
                                                         </li>
                                                      </ul>
                                                   </td>
                                                   <td class="project_progress">
                                                      <div class="progress progress_sm">
                                                         <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                                      </div>
                                                      <small>85% Complete</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-success btn-xs">Success</button>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>8</td>
                                                   <td>
                                                      <a>Nor again is there anyone who loves or pursues</a>
                                                      <br>
                                                      <small>Created 25.july.2018</small>
                                                   </td>
                                                   <td>
                                                      <ul class="list-inline">
                                                         <li>
                                                            <img width="40" src="images/layout_img/msg1.png" class="rounded-circle" alt="#">
                                                         </li>
                                                      </ul>
                                                   </td>
                                                   <td class="project_progress">
                                                      <div class="progress progress_sm">
                                                         <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100" style="width: 18%;"></div>
                                                      </div>
                                                      <small>18% Complete</small>
                                                   </td>
                                                   <td>
                                                      <button type="button" class="btn btn-success btn-xs">Success</button>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
                     <!-- footer -->
                     <?php include('footer_html.php');?>
                  </div>
                  <!-- end dashboard inner -->
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <?php include('footer_js.php');?>
      
      <!-- custom js -->
      
      <!-- calendar file css -->     
      <script src="js/semantic.min.js"></script>
   </body>
</html>