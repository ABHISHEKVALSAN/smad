<?php
session_start();

include 'config.php' ;

$query = " SELECT * FROM task ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result))

{
  $taskid=$row['id']+1;
  $task="task".$taskid;

}
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
    <link rel="stylesheet" href="../../plugins/dropzone/css/dropzone.css">
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
  <body class="hold-transition skin-green sidebar-mini">
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
                <ul class="dropdown-menu">
                  <li class="header"> notifications...</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                                    
                     
                      <li>
                           <?php

                          
                            $qu= "SELECT * FROM notifications where `receiver_id`= '{$_SESSION['nam']}' and `read`=0" ;
                            $result= mysqli_query($conn,$qu);
                            echo "<ul>";
                              while($row = mysqli_fetch_array($result))

                                 {
                                   echo "<div><a href='#'><li>".$row['notification']."</li></a></div><hr>";
                                    
                                  }
                                  echo "</ul>";
                                   $li=" UPDATE notifications set `read` = 1 where `receiver_id` = '{$_SESSION["nam"]}'";
                                   $lvl1=mysqli_query($conn,$li);
                             
                                  ?>
                      </li>
                    </ul>
                  </li>
                 
                     </ul>
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
                      <a href="profile1.php" class="btn btn-default btn-flat">Profile</a>
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
            <img src="fa fa-user" class="img-circle" alt="fa fa-user" style="visibility: hidden;">
            
            </div>
            
            <div class="pull-right info">
               <?php
                      include 'config.php' ;

                    
                    echo "<h4>".$_SESSION['nam']."</h4>";


                     ?>
                     <br />
           
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
          Supervisor Profile
          </h1>
          
        </section>
         
        <!-- Main content -->
        <section class="content-body">

          <div class="row">
            <div class="col-md-9">

              <!-- Profile Image -->
              <div class="box box-primary">
                <div class="box-body box-profile">
                 
                 <h2>All Tasks</h2>
                  

                 


      <div>
      <style  >
      table{
          cellpadding :5;
          cellspacing: 0; 
          style:border-collapse: collapse;
           bordercolor:#808080;
           width:70%;
           height: 30px;
            id:AutoNumber2;
             bgcolor:#C0C0C0;

       

      }
      th{
      border-bottom: 2px solid #000;
      }
      td{
        border-bottom: 1px solid #666;
      }
      </style>
    </div>

<?php

include 'config.php' ;

      

$query = "SELECT * FROM task where worker_name = '{$_SESSION['nam']}'";
$result = mysqli_query($conn,$query);
echo "<table>";
echo "<tr><th>TASK</th><th>ASSIGNED BY</th><th>DEADLINE</th><th>STATUS</th></tr>";
while($row = mysqli_fetch_array($result))
{ 
  
  echo "<tr><td>";
  echo $row['task_name'];
  echo "</td><td>";
  echo $row['parent'];
  echo "</td><td>";
  echo $row['submission_date'];
  echo "</td> <td>";
   echo <<<EOT
   <td>
   <form  action= 'status.php' method= 'post'>
      <select id="status" name="status">
        <option type="text" value="progressing">progressing</option>
        <option type="text" value="complete">complete</option>
        <option type="text" value="incomplete">incomplete</option>
         </select>
  </form>
  </td>
</tr>

EOT;
}

echo "</table>";

?>

<h2>List of tasks delegated</h2>

<?php

include 'config.php' ;



$query = " SELECT * FROM task where parent='{$_SESSION['nam']}'";
$result = mysqli_query($conn,$query);
echo "<table>";
echo "<tr><th>TASK</th><th>ASSIGNED TO</th><th>DEADLINE</th><th>        STATUS</th></tr>";
while($row = mysqli_fetch_array($result))
{ 

  
  echo "<tr><td>";
  echo $row['task_name'];
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

<h2>List of new members</h2>
 <?php

include 'config.php' ;

#$dbname = 'cbtm';
#mysql_select_db($dbname);

$query = " SELECT uname,level FROM users where level='2' and free='-2' ";
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
<div class="box box-green">
                <div class="box-header with-border">
                  <h3 class="box-title">DELEGATE TASK </h3>
                </div>
                <form name='task_form' method='post' action='dele.php'>

                <div class="box-body">
                  <div class="row">

                   
                    <div class="col-xs-3">
                      <input type="text" name="task" class="form-control" placeholder="TASK NAME">
                    </div>
                    <div class="col-xs-3">
                      <input type="text" name="worker" class="form-control" placeholder="ASSIGNED TO">
                    </div>
                    <div class="col-xs-2">
                      <input type="text" name="date" class="form-control" placeholder="TIME LIMIT">
                    </div>
                     <div class="col-xs-2">
                      <a href="#"  class="btn btn-primary btn-large"  data-toggle="modal" data-target="#upload"> Upload File</a>
                    </div>
                    <div class="col-xs-2">
                   <input type="submit" class="btn btn-primary btn-block">
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
     
      <div id="upload" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload File</h4>
      </div>
      <div class="modal-body">
       <form action="upload.php?taskid=<?php echo $task ?>" class="dropzone"></form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <script src="../../plugins/dropzone/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <script>
             $(document).ready(function() {
    $('select').change(function(){
      var name=<?php echo json_encode($_SESSION['nam']); ?>;

        $.ajax({
                type: 'GET',
                url: 'status.php',
                data: {"status": $('select').val(),"name":name}
         });
    });
});
    </script>
  </body>
</html>
