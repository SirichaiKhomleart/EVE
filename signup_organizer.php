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

    <link rel="stylesheet" href="CSS2/signupformorganstyle.css">
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
            <span class="nino-subHeading">Become an Organizer</span>
            Join us here, at EVE.
        </h1>
        <div id="login-box">
            <div class="left">
                <h1>Organizer Details</h1>
                <br>
                <form method="post" action="checksignup_organizer.php">

                    <input type="text" name="organizer_name" placeholder="Name of Your Organization" />
                    <input type="text" name="organizer_email" placeholder="Organization's Email" />
                    <input type="text" name="organizer_phone" placeholder="Organization's Phone Number" />

                    <p style="text-align:left; color: #aaaaaa"> Organization's Address  </p>
                    <input type="text" name="organizer_address">

                    <br><br>
                    <input type="submit" name="organizer_signup_submit" value="SUBMIT" /></form>
                    <br>
                    <a class="nino-subHeading" href="logout.php">Cancel</a>
                <br><br><br>

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