<?php
session_start();
require_once('helper.php');
require_once('connect.php');

$keyword = $_GET['keyword'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css"/>
    <link rel="stylesheet" type="text/css" href="css/unslider.css"/>
    <link rel="stylesheet" type="text/css" href="css/template.css"/>

</head>

<body data-target="#nino-navbar" data-spy="scroll">
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Header
================================================== -->
<header id="nino-header2">
    <?php header_zone(); ?>
</header><!--/#header--><!--/#header-->

<!-- Brand
================================================== -->
<section id="nino-brand">
    <div class="verticalCenter fw">
        <div class="container">
            <div class="detail">
                <!--    				<img src="images/search/banner.jpg" width="100%">-->
                <div class="box">
                    <br>
                    <h4 class="topic5">Search Result</h4>
                    <br><br>
                    <form action="search_login.php">
                        <div class="box2">
                            <div>
                                <input name="keyword" type="text" class="form-control"
                                       value=<?php echo $keyword; ?> required>
                                <br>
                                <span><button class="btn btn-success" type="submit">Search</button></span>
                            </div>

                    </form>
                    <!--                        <br><br>-->
                    <!---->
                    <!--						<div>-->
                    <!--							<p class="quote1">Your keyword is " -->
                    <?php //echo $keyword; ?><!-- ".</p>-->
                    <!--						</div>						-->
                </div>


                <!--                    db link-->
                <?php
                //echo $keyword;
                $qfind = "SELECT * FROM event, eventType  
                              WHERE event_approveStatus='1' 
                              AND event_dateEnd >= CURRENT_DATE
                              AND event_TypeID=eventType_ID
                              AND (event_name LIKE '%" . $keyword . "%' OR eventType_name LIKE '%" . $keyword . "%' OR event_Location LIKE '%" . $keyword . "%' OR event_detail LIKE '%" . $keyword . "%')
                              ORDER BY event_dateEnd ASC";

                $result = $mysqli->query($qfind);
                if (!$result) {
                    echo "Select failed. Error: " . $mysqli->error;
                } else {
                    while ($row = $result->fetch_array()) {
                        //echo "<br>found" . $row['event_name'];
                        ?>
                        <div class="box4">
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src=<?php echo $row['event_iconPicture']; ?> width="150">
                                </div>
                                <div class="col-md-8">
                                    <h2><?php echo $row['event_name']; ?></h2>
                                    <p class="quotet1">

                                        <br>Location: <?php echo $row['event_location']; ?>
                                        <br>Date: <?php echo $row['event_dateStart']; ?>
                                    </p>

                                    <p class="date1">
                                        <br>Detail: <?php echo $row['event_detail']; ?>

                                    </p><br>
                                    <br><br>
                                    <a href="event_seeDetail.php?eventID=<?php echo $row['event_ID']; ?>&&compareMode=off" class="nino-btnb">More Detail</a>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                        <?php

                    }
                }
                ?>




            </div>
            <br><br>
        </div>
    </div>
</section> <!--/#nino-brand-->


<!-- Footer
================================================== -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="colInfo">
                    <div class="footerLogo">
                        <a href="#">EVE</a>
                    </div>
                    <p>
                        We believed that everyone should has a chance to find their own inspiration. So, we create a
                        single place that bring creators and people come together in the purpose of linking their
                        creativity.
                        Our vision is to envision a world where all people – even in the most remote areas of the globe
                        – hold the power to create opportunity for themselves and others.
                        <br><br>"All our dreams can come true if we have the courage to pursue them."
                        <br><br> - From us, EVE.
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
                    <div class="fb-page" data-href="https://www.facebook.com/siittu/" data-tabs="timeline"
                         data-height="400" data-small-header="false" data-adapt-container-width="true"
                         data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/siittu/" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/siittu/">Sirindhorn International Institute of
                                Technology (SIIT)</a></blockquote>
                    </div>


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