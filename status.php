<?php
session_start();
include 'config.php' ;

    $status1 =$_GET['status'];
    $name =$_GET['name'];

    $link=" UPDATE task set status='$status1' where worker_name='$name'";
    $lvl1= mysqli_query($conn,$link) OR die(mysqli_error());
    echo "Success";
   ?>
  