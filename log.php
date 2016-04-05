<?php

include 'config.php' ;

    $uname =$_POST['uname'];
    $pwd =$_POST['pwd'];
    $check="SELECT * FROM users WHERE uname='$uname' and password='$pwd' " ;
    $result=mysqli_query($conn,$check);

    if(mysqli_num_rows($result) == "1" )
    {
        $lvl= " SELECT * FROM users where uname='$uname' and password= '$pwd' ";
        $lvl1= mysqli_query($conn,$lvl);
        $row=mysqli_fetch_array($lvl1);
        $level=$row['level'];
        echo $level;
       

          session_start();
          $_SESSION["nam"] = $uname;

        if($level=="0") 
        {
            

               header('Location:adminpg.php'); 
        }

        else if ($level=="1"|| $level=="-1")
        {
            header('Location:super.php');
        }            
        else if ($level=="2"|| $level=="-2")
        {
            header('Location:end.php');   
        }
        else
        {
            echo "ERROR!!";
        }

    }

    else
    {
        header('Location:login.html');   
    }
?>
