<?php

include 'config.php';

    $name =$_POST['name'];
    $email =$_POST['email'];
    $uname =$_POST['u_name'];
    $lvl=$_POST['USERTYPE'];
    $pwd =$_POST['pwd'];
    $cpwd =$_POST['cpwd'];

    $query=" SELECT * from users where uname = '$uname' ";
    $result=mysqli_query($conn,$query); 

    if($lvl=='head')
    {
        $lvl="0";
    }
    else if($lvl=='supervisor')
    {
        $lvl="1";
        $free="-1";
    }
    else
    {
        $lvl="2";
        $free="-2";
    }

    if($name=="" || $email=="" ||$uname=="" || $pwd=="")
    {
        $msgm="ALL FIELDS ARE MANDATORY!!!";
        echo $msgm;
        header('Location:register1.php');
    }
    else if(mysqli_num_rows($result)=="1")
    {
            $msgu= "USERNAME ALREADY EXISTS!!!";
            echo $msgu;
            header('Location:register2.php');
    }
    else if($pwd != $cpwd)
    {
        $msgp= "PASSWORD DONOT MATCH!!!";
        echo $msgp ;
        header('Location:register3.php');
    } 
   else
   {
        $msg="";
        $link=" INSERT INTO users (name,email_id,uname,level,free,password,cpassword) VALUES ('$name','$email','$uname','$lvl','$free','$pwd','$cpwd') ";
        if(mysqli_query($conn,$link))
        { 

            header('Location:index.html');
        }
        else 
        {
            echo "Error inserting ";
        }
            
    }    
?>
