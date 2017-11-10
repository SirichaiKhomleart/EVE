<?php
error_reporting(0);

$fname="user.txt";
$error=false;
$describe="test";
//open file and wirte
$user =$_GET['email'];
$password=$_GET['password'];
$file = file_get_contents("user.txt"); // Returns a string

$result = explode(" ",$file);
$boolC= false;

for($i=0; $i< count($result); $i++)
{
    //echo "1";//justcheck
    if($result[$i] === $user)
    {
        //echo "     2";//justcheck
        $boolC=true;
        $i =$i+1;
        if($boolC === true)
        {
            //echo "     3";//justcheck
            if($result[$i]===$password)
            {
                echo 'Password and Username Correct';
                $describe=$result[$i+1]." ".$result[$i+2];
            }
        }

    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>




    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ninodezign.com, ninodezign@gmail.com">
    <meta name="copyright" content="ninodezign.com">
    <title>Eve | Event booking</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/poster/v-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="css/unslider.css" />
    <link rel="stylesheet" type="text/css" href="css/template.css" />

    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--    forSIGNUP-->
    <meta charset="UTF-8">
    <title>Material design sign up form</title>



    <link rel="stylesheet" href="CSS2/loginformstyle.css">
    <!--    endsignup-->


</head>

<body data-target="#nino-navbar" data-spy="scroll">

<!--facebook embed section-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--endFbEmbed-->

<!-- Header
================================================== -->
<header id="nino-header2">
        <div id="nino-header2Inner">        



            <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="homepage.html">Eve</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="nino-menuItem pull-right">
                        <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
                            <ul class="nav navbar-nav1">
                                <a href="index.html">Home </a>
                                <a href="login.php">Log in</a>
                                <!-- <li><a href="#nino-services">Service</a></li>
                                <li><a href="#nino-ourTeam">Our Team</a></li>
                                <li><a href="#nino-portfolio">Work</a></li>
                                <li><a href="#nino-latestBlog">Blog</a></li> -->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <ul class="nino-iconsGroup nav navbar-nav">
                            <!-- <li> --><a href="usermain.php"><i class="mdi mdi-cart-outline nino-icon"></i></a><!-- </li> -->
                            <!-- <a href="#" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a> -->
                        </ul>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>

    </div>
</header><!--/#header-->



<!-- signup
================================================== -->
<section id="nino-story">
    <div class="container">
        <h1 class="nino-sectionHeading">
            <span class="nino-subHeading">Need some inspirations?</span>
            We, EVE, are here to help you.
        </h1>
        <div id="login-box">
            <div class="left">
                
                <h1>Log In</h1>
                <form action = usermain.php>
                <input type="text" name="email" placeholder="E-mail" />
                <input type="password" name="password" placeholder="Password" />

                <input type="submit" name="signup_submit" value="LOG IN" />

                </form>

<!--                <font color="#dc143c">    --><?php //echo $describe; ?><!-- </font> <br><br>-->
                <br><br><br>
                <span>
                    <br><a class="nino-subHeading" href="signup.php">Not have an account yet, <br> Sign Up here!</a>
                </span>
            </div>

            <div class="right">
                <span class="loginwith">Log In with<br /><br>Social Network</span>

                <button class="social-signin facebook">Log In with Facebook</button>
                <button class="social-signin twitter">Log In with Twitter</button>
                <button class="social-signin google">Log In with Google</button>
            </div>
            <div class="or">OR</div>
        </div>
    </div>
</section><!--/#nino-signup-->



<!-- Search Form - Display when click magnify icon in menu
================================================== -->
<form action="" id="nino-searchForm">
    <input type="text" placeholder="Search..." class="form-control nino-searchInput">
    <i class="mdi mdi-close nino-close"></i>
</form><!--/#nino-searchForm-->

<!-- Scroll to top
================================================== -->
<a href="#" id="nino-scrollToTop">Go to Top</a>

<!-- javascript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="js/unslider-min.js"></script>
<script type="text/javascript" src="js/template.js"></script>


</body>
</html>