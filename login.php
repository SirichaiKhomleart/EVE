<!--error_reporting(0);-->
<?php
session_start();
require_once ('helper.php');

//in case of already login
if (isset($_SESSION['current_ID'])){
    if($_SESSION['current_type']=='Customer'){
        header('Location:customer_index.php');
    }
    elseif ($_SESSION['current_type']=='Organizer'){
        header('Location:organizer_index.php');
    }
    elseif ($_SESSION['current_type']=='Admin'){
        header('Location:admin_index.php');
    }
    else{
        header('Location:logout.php');
    }
}
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
    <?php header_zone(); ?>
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
                <form action = checklogin.php method="post">
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