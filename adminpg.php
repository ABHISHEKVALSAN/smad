<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | User Profile</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
<script src="f_clone_Notify.js" type="text/javascript"></script>
<link href="f_clone_Notify.css" rel="stylesheet" />
</head>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">SMAD</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">S M A D</span>
          
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">**</span>
                </a>
               
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
               <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="hidden-xs">USER</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <div >
                      <?php
                      include 'config.php' ;

                    
                    echo $_SESSION['nam'];


                     ?>
           
                   </div>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="pull-left">
                      <a href="profile0.php" class="btn btn-default btn-flat">Profile</a>
                    </div> 
                    <div class="pull-right">
                      <a href="index.html" class="btn btn-default btn-flat">Sign out</a>

                    </div>
                    
                  </li>
                
                  
                </ul>
              </li>
              
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="fa fa-user" class="img-circle" alt="fa fa-user">
            
            </div>
                <div class="pull-right info">
             
           <?php
             include 'config.php' ;
          
             
                    echo $_SESSION['nam'];

                 

             ?>
           
            </div>
            
           
          </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
       </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Admin Profile
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content-body">

          <div class="row">
            <div class="col-md-9">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                 
                 <h1>ALL TASKS</h1>
                  

                 


      <div>
      <style  >
      table{
          cellpadding :5;
          cellspacing: 0; 
          style:border-collapse: collapse;
           bordercolor:#808080;
           width:100%;
            id:AutoNumber2;
             bgcolor:#C0C0C0;

       

      }
      th{
        border-bottom: 5px solid #000;
      }
      td{
        border-bottom: 2px solid #666;
      }
      </style>
    </div>

<?php

include 'config.php' ;

#$dbname = 'cbtm';
#mysql_select_db($dbname);

$query = " SELECT task,worker_name,submission_date ,status FROM task where parent_level='0'";
$result = mysqli_query($conn,$query);
echo "<table>";
echo "<tr><th>TASK</th><th>ASSIGNED TO</th><th>DEADLINE</th><th>        STATUS</th></tr>";
while($row = mysqli_fetch_array($result))
{
  echo "<tr><td>";
  echo $row['task'];
  echo "</td><td>";
  echo $row['worker_name'];
  echo "</td><td>";
  echo $row['submission_date'];
  echo "</td>   <td>";
   echo $row['status'];
  echo "</td></tr>";
}

echo "</table>";

?>

<h2>LIST OF NEW SUPERVISORS</h2>
 <?php

include 'config.php' ;

#$dbname = 'cbtm';
#mysql_select_db($dbname);

$query = " SELECT uname FROM users where level=1 and free=-1 ";
$result = mysqli_query($conn,$query);
echo "<table>";
echo "<tr><th>NAME</th></tr>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC ))
{
  echo "<tr><td>";
  echo $row['uname'];
  echo "</td></tr>";
}
echo "</table>";

?>
<div class="box box-blue">
                <div class="box-header with-border">
                  <h3 class="box-title">DELEGATE TASK </h3>
                </div>
                <form name='task_form' method='post' action='dele0.php'>

                <div class="box-body">
                  <div class="row">

                   
                    <div class="col-xs-3">
                      <input type="text" name="task" class="form-control" placeholder="TASK NAME">
                    </div>
                    <div class="col-xs-3">
                      <input type="text" name="worker" class="form-control" placeholder="ASSIGNED TO">
                    </div>
                    <div class="col-xs-3">
                      <input type="text" name="date" class="form-control" placeholder="TIME LIMIT">
                    </div>
                    <div class="col-x3-3">
                   <input type="submit" class="btn btn-primary btn-block"></a>
                    </div>


                  </div> 
                </div><!-- /.box-body -->
              </div><!-- /.bo 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </form>

              <!-- About Me Box -->
              </div class="box box-primary">
                
               
            
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
     

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
  </body>
</html>
