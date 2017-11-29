<?php
session_start();
//error_reporting(0);
require_once('helper.php');
require_once('connect.php');
$eventID = $_GET['eventID'];
$compareMode = $_GET['compareMode'];
//echo "e:".$eventID;
//echo "c:".$compareMode;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php html_headcode(); ?>
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
<!--endFbEmbed-->

<!---->
<!--?>-->
<!--!-- Header-->
<!--================================================== -->
<header id="nino-header2">
    <?php header_zone(); ?>
</header><!--/#header-->

<!--////////////////////////////////-->
<?php

$q = "SELECT * FROM event, organizer, eventType
      WHERE event.event_ID = '$eventID' 
      
      
      AND event.event_organizerID=organizer.account_ID
      AND organizer.organizer_status='1'
      AND event.event_typeID=eventType.eventType_ID";

$result = $mysqli->query($q);
$row = $result->fetch_array();
//if (isset($row['event_name'])) {
//    header('Location:homepage.php');
//    exit;
//} else {
$event_name = $row['event_name'];
$organizer_name = $row['organizer_name'];
$organizer_address = $row['organizer_address'];
$organizer_phone = $row['organizer_phone'];
$organizer_email = $row['organizer_email'];
$event_type = $row['eventType_name'];
$event_location = $row['event_location'];
$event_dateStart = $row['event_dateStart'];
$event_dateEnd = $row['event_dateEnd'];
$event_timeStart = $row['event_timeStart'];
$event_timeEnd = $row['event_timeEnd'];
$event_iconPicture = $row['event_iconPicture'];
$event_posterPicture = $row['event_posterPicture'];
$event_detail = $row['event_detail'];
$event_create = $row['event_createTimeStamp'];

//}


?>


<!-- Brand
    ================================================== -->
<section id="nino-brand">
    <div class="verticalCenter fw">
        <div class="container">
            <div class="detail">

                <!--                <img src="images/poster/event2.jpg" width="100%">-->
                <div class="box">
                    <br>
                    <h4 class="topic"><?php echo $event_name; ?></h4>
                    <div>
                        <p class="date">
                            <br>Organizer : &emsp; <?php echo $organizer_name; ?>
                            <br><br>Contact
                            <br>Address : &emsp; <?php echo $organizer_address; ?>
                            <br>Phone : &emsp; <?php echo $organizer_phone; ?>
                            <br>Mail : &emsp; <?php echo $organizer_email; ?>
                        </p>
                        <div style="clear:both;"></div>
                    </div>
                    <br>
                </div>


            </div>
            <?php
            if ($compareMode == "on") {
                ?>
                <br><br>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">

                        <div class="col-md-6">
                            <a href="event_seeDetail.php?eventID=<?php echo $eventID?>&&compareMode=on" class="nino-btninbox1select">Old</a>
                        </div>
                        <div class="col-md-6">
                            <a href="event_seeDetail.php_compare.php?eventID=<?php echo $eventID?>" class="nino-btninbox2">New</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>



            <br><br>
            <div class="detail">
                <div class="box1">
                    <br><br>
                    <h1><?php echo $event_name; ?>
                        <br> <?php echo $event_dateStart; ?>&emsp; to &emsp;<?php echo $event_dateEnd; ?>

                    </h1>
                    <br>
                    <h4 class="topic1">
                        <br>Location : <?php echo $event_location; ?>
                        <br>Time : <?php echo $event_timeStart; ?>&emsp; to &emsp;<?php echo $event_timeEnd; ?>

                    </h4>
                </div>
                <div class="box1">
                    <img src='<?php echo $event_posterPicture; ?>' width="100%">
                    <br><br>
                    <p class="quote1">
                        <?php echo $event_detail; ?>
                    </p>
                    <!--                    <p class="quotet">สถานที่จัดงาน</p>-->
                    <!--                    <br>-->
                    <!--                    <img src="images/poster/edetail2.jpg" width="100%">-->
                    <!--                    <h3 class="topic2">เงื่อนไขการเข้าร่วมงาน </h3>-->
                    <!--                    <p class="quotet">-การเข้างานอายุ 18 ปีบริบูรณ์เท่านั้น / Only 18+ can entry the event-->
                    <!--                        <br>-ทางทีมงานไม่รับผิดชอบกรณีบัตรสูญหาย หรือชำรุด หรือถูกทำลาย / Ticket cannot be replaced if-->
                    <!--                        lost, stolen or destroyed.-->
                    <!--                        <br>-บัตรซื้อแล้วไม่รับคืนเงินทุกกรณี / Non-refundable / Non- returnable-->
                    <!--                    </p>-->
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>
</section> <!--/#nino-brand-->


<!-- Pay
    	================================================== -->
<section class="nino-testimonial">
    <div class="container">
        <form class="form" action="confirm.php" method="post">
            <div class="detail">
                <div class="box1">
                    <br>
                    <h4 class="topic3">Ticket</h4>
                    <br><br>
                </div>

                <?php

                $q = "SELECT * FROM event, ticketType
                    WHERE event.event_ID = '$eventID' 
                    AND event.event_approveStatus = '1'
                    AND event.event_dateEND >= CURRENT_DATE
                    AND event.event_ID=ticketType.event_ID
                    AND ticketType.ticketType_approveStatus='1'";

                $no = 1;
                $result = $mysqli->query($q);

                while ($row = $result->fetch_array()) {
                    ?>
                    <div class="box1">
                        <div class="col-md-4">
                            <h2 class="topic"><?php echo $row['ticketType_name']; ?></h2><br>

                        </div>
                        <div class="col-md-8">
                            <p class="quotef">
                                ฿ <?php echo $row['ticketType_price']; ?>
                                <?php if ($_SESSION['current_type'] == "Customer") {
                                    echo "x";
                                } ?> </p>
                            <?php
                            ;
                            if ($_SESSION['current_type'] == "Customer") {
                                ?>
                                <input class="inputbox" type="number" name="number2" min="0" max="100" step="1"
                                       value="0"/>
                                <?php
                            }
                            ?>
                            <!--                            <input class="inputbox" type="number" name="number2" min="0" max="100" step="1" value="0"/>-->
                            <!--                            <div style="clear:both;"></div>-->
                        </div>
                        <div style="clear:both;"></div>

                    </div>


                    <?php

                }

                if ($_SESSION['current_type'] == "Customer") {
                    ?>
                    <div class="box1">
                        <input type="submit" name="submit" value="BUY TICKET" class="nino-btnb">
                    </div>
                    <?php
                }
                ?>


                <br>
                <br>
                <br>
            </div>
        </form>
    </div>
</section>


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