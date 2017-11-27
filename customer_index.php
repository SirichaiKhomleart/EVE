<?php
session_start();
require_once('helper.php');
require_once('connect.php');

//case user not login yet
if (!isset($_SESSION['current_ID'])){
    header('Location: homepage.php');
    exit;
}
//case user type isn't Customer
if (isset($_SESSION['current_type'])){
    if ($_SESSION['current_type']!="Customer"){
        header('Location: homepage.php');
        exit;
    }
}else{
    header('Location: homepage.php');
    exit;
}

//Only Customer type can go through this zone
/*echo "<br>".$_SESSION['current_login_status'];
echo "<br>".$_SESSION['current_id'];
echo "<br>".$_SESSION['current_fname'];
echo "<br>".$_SESSION['current_lname'];
echo "<br>".$_SESSION['current_name'];
echo "<br>".$_SESSION['current_email'];
echo "<br>".$_SESSION['current_password'];
echo "<br>".$_SESSION['current_type'];

echo "<br><a href='logout.php'>Logout</a>";*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php html_headcode(); ?>
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
<!--end facebook embed section-->

<!-- Header
    ================================================== -->
<header id="nino-header2">
    <?php header_zone(); ?>
</header><!--/#header-->


<!-- name
================================================== -->
<section id="nino-services">
    <div class="container">
        <h2 class="nino-sectionHeading">
            <span class="nino-subHeading">Welcome Back!</span>
            <?php echo $_SESSION['current_name'];?>

            <?php if($_SESSION['current_customer_status']==0){
                echo    "<br><br><br><br> <font color='#dc143c'> This account already deactivated.</font><br>";

            ?>
        </h2>
        <br><br>
        <h4 style="text-align:center;">To reactivate this account, please contact administrator.
            <br><br>
            <button class="btn btn-success" type="submit" id='contactAdmin'>Send Message to Administrator</button>
        </h4>
            <?php } ?>

    </div>
</section><!--/#nino-name-->

<?php if($_SESSION['current_customer_status']==1){ ?>
    <!-- Your ticket
    ================================================== -->
    <section id="nino-latestBlog">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Ready to go?</span>
                Your Ticket is Here.
            </h2>
            <div class="sectionContent">
                <div class="row">

                    <!--loop check event from file-->
                    <?php
                    $q = "SELECT tickettype.ticketType_name,ticket.event_dateStart,tickettype.ticketType_price,event_name,event_iconPicture,event.event_location from ticket,event,tickettype where ticket.event_ID=event.event_ID and account_ID=".$_SESSION['current_ID']." and ticket.event_dateStart>=CURRENT_DATE and ticket.ticketType_ID=tickettype.ticketType_ID";
                    $result=$mysqli->query($q);                    
                    if(!$result){
                        echo "Select failed. Error: ".$mysqli->error ;
                    }
                    while($row=$result->fetch_array()){?>
                        <div class="ticketbox">                        
                            <div class="row">
                                <div class="col-md-3">
                                    <img src=<?php echo $row['event_iconPicture']?> width="100%">
                                </div>
                                <?php
                                $date = date_create($row['event_dateStart']);
                                $datename = date_format($date, 'l jS F Y');
                                ?>
                                <div class="col-md-6 " >
                                    <h4 class="quotet2"><?php echo $row['ticketType_name']?></h4>
                                    <p class="quotet2"><?php echo "Ticket price: ".$row['ticketType_price']?></p>
                                    <h5 class="date1"><?php echo $row['event_name']?></h5>
                                    <p class="date1"><?php echo $datename ?><br><img src="images/ico/loca.png" width="15px"> <?php echo $row['event_location']?></p>
                                    <a href="detail.html" class="nino-btnn">More Details</a>
                                </div>
                                <div class="col-md-3 " >
                                    <img src="images/qrcode/qr-code.png" width="100%">
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section><!--/#nino-yourHistory-->
              <!-- Search for next event
              ================================================== -->
    <section id="nino-story">
        <div class="container">
            <h1 class="nino-sectionHeading">
                <span class="nino-subHeading">Finding your inspiration?</span>
                Search For Next Event
            </h1>
            <br>
            <form action="search_login.php">
                <div class="box2">
                    <div >
                        <input name="keyword" type="text" class="form-control"  placeholder="Name, Location, or somethings that you interest" required>
                        <br><br>
                        <span><button class="btn btn-success" type="submit">Search</button></span>
                    </div>

            </form>

            <br><br>
            <p class="nino-sectionDesc-custom">Not sure what to find? Don't worry! - Check out some "tag" that we only prepared for you here. </p>
        </div>
        <div class="sectionContent">
            <div class="row nino-hoverEffect">
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <a class="overlay" href="search_login.php?keyword=yourself">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									#FindingYourself
								</span>
                            <img src="images/user/1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <a class="overlay" href="search_login.php?keyword=developer">
								<span class="content">
									<i class="mdi mdi-airplay nino-icon"></i>
									#Deverloper
								</span>
                            <img src="images/user/2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <a class="overlay" href="search_login.php?keyword=photography">
								<span class="content">
									<i class="mdi mdi-image-filter-center-focus-weak nino-icon"></i>
									#Photography
								</span>
                            <img src="images/user/3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#nino-search-->

<?php } ?>



<!-- Footer
================================================== -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="colInfo">
                    <div class="footerLogo">
                        <a href="#" >EVE</a>
                    </div>
                    <p>
                        We believed that everyone should has a chance to find their own inspiration. So, we create a single place that bring creators and people come together in the purpose of linking their creativity.
                        Our vision is to envision a world where all people – even in the most remote areas of the globe – hold the power to create opportunity for themselves and others.
                        <br><br>"All our dreams can come true if we have the courage to pursue them."
                        <br><br>     - From us, EVE.
                    </p>
                    <div class="nino-followUs">
                        <div class="totalFollow"><span>15k</span> followers</div>
                        <div class="socialNetwork">
                            <span class="text">Follow Us: </span>
                            <a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
                            <a href="" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
                            <a href="" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
                            <a href="" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
                            <a href="" class="nino-icon"><i class="mdi mdi-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="colInfo">
                    <h3 class="nino-colHeading">Find us on Facebook</h3>
                    <!--facebook-->
                    <div class="fb-page" data-href="https://www.facebook.com/siittu/" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/siittu/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/siittu/">Sirindhorn International Institute of Technology (SIIT)</a></blockquote></div>


                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="colInfo">
                    <h3 class="nino-colHeading">Follow our instagram</h3>
                    <div class="instagramImages clearfix">
                        <a href="#"><img src="images/instagram/img-1.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-2.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-3.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-4.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-5.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-6.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-7.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-8.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-9.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-3.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-4.jpg" alt=""></a>
                        <a href="#"><img src="images/instagram/img-5.jpg" alt=""></a>
                    </div>
                    <a href="#" class="morePhoto">View more photos</a>
                </div>
            </div>
        </div>

    </div>
</footer><!--/#footer-->

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
