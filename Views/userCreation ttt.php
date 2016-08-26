<?php
require 'tempForm.php';
$tempForm = new TempForm();

?>
<!DOCTYPE html>
<html lang="en">
    
    <?php // $tempForm->getHead(); ?>
<!--  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
     Meta, title, CSS, favicons, etc. 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PTL|Admin </title>

   
      Bootstrap 
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
     Font Awesome 
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
     NProgress 
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
     jQuery custom content scroller 
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

     Custom Theme Style 
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
    <?php // include 'link-top.php';?>
    
    
    
<style>
		
#ptl-table td {
    padding-top: .5em;
    padding-bottom: .5em;
}
	
	    
    </style>
    
    
    
    -->

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>PTL Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                  <img src="images/ico-user.png" alt="..." class="img-circle profile_img">
                
                
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Administrator</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />





            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  
                  
                  <li><a><i class="fa fa-users"></i> User Manager <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">User Creation</a></li>
                      <li><a href="index2.html">View Users</a></li>
                      <li><a href="index3.html">Password Reset</a></li>
                    </ul>
                  </li>
                  
                  
                  
                  
                  
                  <li><a><i class="fa fa-edit"></i> Temp Group <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Sample</a></li>
                    </ul>
                  </li>
                 
                </ul>
              </div>
                
                
                
                
                
                
              <div class="menu_section">
                <h3>Menu Section</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-xing"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">item</a></li>
                    </ul>
                  </li>
                </ul>
                
              </div>
                
                

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    Administrator
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <?php
//                 session_start();
			  echo  $_SESSION['login_user_email'];
			  
			  ?>
                <!--<h3> User Creation <small> Just add class xxxxx <strong>menu_fixed</strong></small></h3>-->
                <h3> User Creation </h3>
                
                <?php 
                    if(isset($msg)){
                        echo $msg;
                    }
                ?>
                <form action="userCreation.php" method="post">
                
                <table width="80%" border="0" id="ptl-table">
  <tr>
    <td>First Name</td>
    <td><label for="user_fname"></label>
      <input type="text" name="user_fname" id="user_fname"></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><label for="user_lname"></label>
      <input type="text" name="user_lname" id="user_lname"></td>
  </tr>
  <tr>
    <td>User Level</td>
    <td><label for="user_level"></label>
      <select name="user_level" id="user_level">
      <option value="">--Select--</option>
      <option value="MGR">Manager</option>
       <option value="OPR">Operator</option>
      </select></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><label for="user_email"></label>
      <input type="text" name="user_email" id="user_email"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><label for="user_password"></label>
      <input type="text" name="user_password" id="user_password"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Submit"></td>
  </tr>
</table>

                
                
                
                </form>
                
                
                
                
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        
        
        
        
        
        
        

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Pearl Text Limited  <a href="#">Admin Portal</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

      
      
      
      
      
      
      
   
    
    
    
    
    
    
    
    
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    
    <?php include 'link-bottom.php';?>

    
    
    
  </body>
</html>