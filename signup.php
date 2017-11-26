<?php
session_start();
require_once('helper.php');
require_once('connect.php');
//error_reporting(0);

//in case already log in
if(isset($_SESSION['current_ID'])){ header('Location:homepage.php');exit; }


//echo $_SESSION['wrongSignup_status'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <?php html_headcode(); ?>

    <!-- Material Design Lite -->
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!--    forSIGNUP-->
    <meta charset="UTF-8">
    <title>Material design sign up form</title>

    <link rel="stylesheet" href="CSS2/signupformstyle.css">
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
    <?php header_zone(); ?>
</header><!--/#header-->



<!-- signup
================================================== -->
<section id="nino-story">
    <div class="container">
        <h1 class="nino-sectionHeading">
            <span class="nino-subHeading">Need some inspirations?</span>
            Join us here, at EVE.
        </h1>
        <div id="login-box">
            <div class="left">
                <h1>Sign Up</h1>
                <br>
                <h4>Quick signup using your social media account.</h4>
<!--                <h6>Don't worry, we don't use your account to post anything :)</h6>-->
                <button class="social-signin facebook">Log In with Facebook</button>
                <button class="social-signin twitter">Log In with Twitter</button>
                <button class="social-signin google">Log In with Google</button>
                <br><br>
                <h1>OR</h1>
                <br>
                <form method="post" action="checksignup.php">

                <h4>Sign up using your E-mail instead.</h4>
                <input type="text" name="email" placeholder="E-mail (will also be your username)" />
                <input type="text" name="fname" placeholder="First Name" />
                <input type="text" name="lname" placeholder="Last Name" />
                <input type="text" name="age" placeholder="Age (need to be 18 or more)" />

                    <p style="text-align:left; color: #aaaaaa"> Gender  </p>
                    <input type="radio" name="gender" value="Male" checked> Male &emsp;
                    <input type="radio" name="gender" value="Female"> Female  &emsp;
                    <input type="radio" name="gender" value="Others"> Others

                <h4><br>Choose your password,<br>your password must be 8-16 characters.</h4>
                <input type="password" name="password" placeholder="Password" />
                <input type="password" name="cpassword" placeholder="Confirm Password" />

                <h4><br>Are you an event organizer?<br>Check this box and you will able to public your own event.</h4>
                <input type="checkbox" name="OrganSignup" value=True /> &emsp;  I am an organizer<br>
                    <br>
                    <p style="text-align:left; color: #aaaaaa"> Be careful!
                        By being an organizer, you will not allow to make any purchase. <br>
                        To purchase any ticket, you have to make another account.
                        <br><br><br><br>
                        By click "SIGN UP", means that you agreed to the Terms and Conditions from EVE corporation.

                    </p>

                <input type="submit" name="signup_submit" value="SIGN UP" /></form>
                <br><br><br>
                <span>
                    <a class="nino-subHeading" href="login.php">Already have an account, Log In here!</a>


                </span>
            </div>


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

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- css3-mediaqueries.js for IE less than 9 -->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

</body>
</html>