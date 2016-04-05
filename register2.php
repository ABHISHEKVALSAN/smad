<!DOCTYPE html>
<html class=" ">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Task Manager | Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/icheck/skins/square/orange.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->


    <!-- BEGIN BODY -->
    <body class=" login_page">

        <div class="register-wrapper">

            <div id="register" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-2 col-xs-8">

                <h1 font-family: "Times New Roman;",color:white>S M A D</h1>
                <form name="loginform" id="loginform" action="reg1.php" method="post">
                    <p>
                        <label for="user_login">Full Name<br />
                            <input type="text" name="name" id="user_login" class="input" placeholder="Name" size="20" /></label>
                    </p>

                    <p>
                        <label for="user_login">Email<br />
                            <input type="text" name="email" id="user_login" class="input" placeholder="Email ID" size="20" /></label>
                    </p>

                    <p>
                        <p id="Invalid" style="padding-top:.75em; color:#FF0000;">USERNAME ALREADY EXISTS!!!</p>
                        <label for="user_login">Username<br />
                            <input type="text" name="u_name" id="user_login" class="input" placeholder="Username" size="20" /></label>
                                
                    </p>
                    <p>
                        <input type="radio" name="USERTYPE" value="head"         checked>  HEAD<br><br>
                        <input type="radio" name="USERTYPE" value="supervisor"  >  SUPERVISOR<br><br> 
                        <input type="radio" name="USERTYPE" value="member"       >  MEMBER<br><br> 
                    </p>
                

                    <p>
                        <label for="user_pass"> Password<br />
                            <input type="password" name="pwd" id="user_pass1" class="input" placeholder=" Password" size="20" /></label>
                    </p>

                    <p>
                        <label for="user_pass">Confirm Password<br />
                            <input type="password" name="cpwd" id="user_pass1" class="input" placeholder="Confirm Password" size="20" /></label>
                    </p>

                                  
                    <p class="submit">
                        <input type="submit" name="submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign Up" />
                    </p>

                </form>

                <p id="nav">
                      <a class="pull-right" href="login.html" title="Sign in">Sign In</a>
                </p>

                <div class="clearfix"></div>
               
            </div>

        </div>





        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 



        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 



        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 


       
    </body>
</html>      

