<?php
session_start();
include 'config.php' ;

    $task =$_POST['task'];
    $worker =$_POST['worker'];
    $date =$_POST['date'];
    $nam = $_SESSION["nam"];
    $not= 'you have a new work '.$task.' assigned by '.$nam;
   
if($task && $worker && $date)
{
     $link="INSERT INTO task (task,parent_level,worker_name,worker_level,submission_date) VALUES ('$task','0','$worker','1','$date')";
     $li="INSERT INTO notifications (`sender_id`,`receiver_id`,`notification`,`read`) VALUES ('$nam','$worker','$not','0')";

       
        $res = mysqli_query($conn,$li);
        if(!$res)
        {
          die("Invalid query");
        }
          
  if(mysqli_query($conn,$link))
  {  
     
    //echo "delegated successfully";


        
      $link=" UPDATE task set parent='$nam' where task='$task'";
     $lvl2= mysqli_query($conn,$link);
     $link1="UPDATE users set free='1' where uname='$worker'";
     $lvl3= mysqli_query($conn,$link1);
              
    header('Location:adminpg.php') ;
 
  }
   else 
 {
    echo "Error inserting ";
 }

}

 else 
 {
 	 header('Location:adminpg.php') ;
 
  
 }

?>
