<?php
session_start();
require_once('helper.php');
require_once('connect.php');
$pay_ID = $_GET['payID'];
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min2.css"/>
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
</header><!--/#header-->


<!-- Brand
    ================================================== -->
<section id="nino-brand">
    <div class="verticalCenter fw">
        <div class="container">
            <div class="detail_ticketbox">

                <div class="box">
                    <br>
                    <h4 class="nino-sectionHeading">Your Tickets</h4>
                </div>

                <div class="ticketbox">
                    <?php
                    $q = "SELECT * FROM `ticket`,`paymentLog`,`account`,`event` WHERE ticket.payment_ID=paymentLog.payment_ID AND account.account_ID=" . $_SESSION['current_ID'] . " AND paymentLog.event_ID=event.event_ID AND ticket.account_ID=account.account_ID AND paymentLog.payment_ID=" . $pay_ID . "";
                    $result = $mysqli->query($q);
                    if (!$result) {
                        echo "Select failed. Error: " . $mysqli->error;
                    }
                    $row = $result->fetch_array();
                    $ename = $row['event_name'];
                    ?>
                    <div class="row">
                        <div class="col-md-6 ">
                            <h4 class="quotet2">Order Numbers #<?php echo $row['payment_ID']; ?></h4><br>
                            <h5 class="date1"><?php echo $row['event_name']; ?></h5>
                            <p class="date1"><?php echo $row['event_dateStart']; ?></p><br>
                            <div class="col-md-3">
                                <h5 class="quotet2">Name : </h5>
                                <h5 class="date1">E-mail : </h5>
                            </div>
                            <div class="col-md-9">
                                <h5 class="date1"><?php echo $row['account_fname'] . " " . $row['account_lname']; ?></h5>
                                <h5 class="date1"><?php echo $row['account_email']; ?></h5>
                            </div>


                        </div>
                        <div class="col-md-3 ">
                            <h4 class="quotet2">Payment method</h4>
                            <p class="quotet2">Total price <?php echo $row['payment_money']; ?> ฿</p>
                            <p class="quotet2"><?php echo $row['payment_method']; ?></p>
                            <br><br>
                            <h5 class="topic6 ">Payment has done</h5>
                        </div>
                        <div class="col-md-3 ">
                            <?php
                            $q2 = "SELECT * FROM `ticket`,`paymentLog`,`account`,`event`,`ticketType` WHERE ticket.payment_ID=paymentLog.payment_ID 
                                    AND account.account_ID=" . $_SESSION['current_ID'] . " 
                                    AND paymentLog.event_ID=event.event_ID 
                                    AND ticket.account_ID=account.account_ID 
                                    AND ticketType.ticketType_ID=ticket.ticketType_ID
                                    AND paymentLog.payment_ID='$pay_ID' 
                                    ORDER BY ticketType.ticketType_name";
                            $result2 = $mysqli->query($q2);
                            if (!$result2) {
                                echo "Select failed. Error: " . $mysqli->error;
                            }
                            $scount = 0;
                            $pcount = 0;
                            while ($row2 = $result2->fetch_array()) {
                                if ($row2['ticketType_name'] == 'Standard') {
                                    $scount = $scount + 1;
                                } else {
                                    $pcount = $pcount + 1;
                                }
                            }

                            ?>

                            <h4 class="quotet2">Your Ticket</h4><br>
                            <h5 class="date1">Standard</h5>
                            <h5 class="date1"><?php echo $scount; ?> Ticket</h5>
                            <h5 class="date1">Premium</h5>
                            <h5 class="date1"><?php echo $pcount; ?> Ticket</h5>
                            <a href="customer_index.php" class="nino-btnn">See The Ticket</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <br>
                    <div class="paymentbox">
                        <h4 class="quotet2">Your Order </h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="quotet2">Order</h5><br>
                            </div>
                            <div class="col-md-2">
                                <h5 class="quotet2">price</h5><br>
                            </div>
                            <div class="col-md-2">
                                <h5 class="quotet2">Number</h5><br>
                            </div>
                            <div class="col-md-2">
                                <h5 class="quotet2">Total</h5><br>
                            </div>
                        </div>
                    </div>
                    <div class="paymentbox">

                        <?php
                        $q3 = "SELECT * FROM `ticket`,`paymentLog`,`account`,`event`,`ticketType` WHERE ticket.payment_ID=paymentLog.payment_ID 
                        AND account.account_ID=" . $_SESSION['current_ID'] . " 
                        AND paymentLog.event_ID=event.event_ID 
                        AND ticket.account_ID=account.account_ID 
                        AND ticketType.ticketType_ID=ticket.ticketType_ID 
                        AND paymentLog.payment_ID='$pay_ID' 
                        ORDER BY ticketType.ticketType_name";
                        $result3 = $mysqli->query($q3);
                        if (!$result3) {
                            echo "Select failed. Error: " . $mysqli->error;
                        }
                        $scount = 0;
                        $pcount = 0;
                        while ($row3 = $result3->fetch_array()) {
                            if ($row3['ticketType_name'] == 'Standard') {
                                $scount = $scount + 1;
                            } else {
                                $pcount = $pcount + 1;
                            }
                        }
                        ?>
                        <div class="row">

                            <?php
                            if ($scount != 0) {
                                ?>
                                <div class="col-md-6">
                                    <h5 class="topic6"><?php echo $ename; ?></h5>
                                    <p class="quotet2">Standard Ticket</p>
                                </div>
                                <div class="col-md-2 ">
                                    <?php
                                    $q4 = "SELECT * FROM `ticket`,`paymentLog`,`account`,`event`,`ticketType` WHERE ticket.payment_ID=paymentLog.payment_ID AND account.account_ID=" . $_SESSION['current_ID'] . " AND paymentLog.event_ID=event.event_ID AND ticket.account_ID=account.account_ID AND paymentLog.payment_ID=" . $pay_ID . " AND ticketType.ticketType_name='Standard'";
                                    $result4 = $mysqli->query($q4);

                                    if (!$result4) {
                                        echo "Select failed. Error: " . $mysqli->error;
                                    }
                                    $row4 = $result4->fetch_array();
                                    ?>
                                    <h5 class="topic6 pull-right"><?php echo $row4['ticketType_price']; ?> ฿</h5>
                                </div>
                                <div class="col-md-2 ">
                                    <h5 class="topic6 pull-right"><?php echo $scount; ?></h5>
                                </div>
                                <div class="col-md-2 ">
                                    <h5 class="topic6 pull-right"><?php echo $scount * $row4['ticketType_price']; ?>
                                        ฿</h5>
                                </div>
                                <br><br><br>
                            <?php } ?>

                            <?php
                            if ($pcount != 0) {
                                ?>
                                <div class="col-md-6">
                                    <h5 class="topic6"><?php echo $ename; ?></h5>
                                    <p class="quotet2">Premium Ticket</p>
                                </div>
                                <div class="col-md-2 ">
                                    <?php
                                    $q5 = "SELECT * FROM `ticket`,`paymentLog`,`account`,`event`,`ticketType` WHERE ticket.payment_ID=paymentLog.payment_ID AND account.account_ID=" . $_SESSION['current_ID'] . " AND paymentLog.event_ID=event.event_ID AND ticket.account_ID=account.account_ID AND paymentLog.payment_ID=" . $pay_ID . " AND ticketType.ticketType_name='Premium'";
                                    $result5 = $mysqli->query($q5);
                                    if (!$result5) {
                                        echo "Select failed. Error: " . $mysqli->error;
                                    }
                                    $row5 = $result5->fetch_array();
                                    ?>
                                    <h5 class="topic6 pull-right"><?php echo $row5['ticketType_price']; ?> ฿</h5>
                                </div>
                                <div class="col-md-2 ">
                                    <h5 class="topic6 pull-right"><?php echo $pcount; ?></h5>
                                </div>
                                <div class="col-md-2 ">
                                    <h5 class="topic6 pull-right"><?php echo $pcount * $row5['ticketType_price']; ?>
                                        ฿</h5>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <hr>
                    <div class="paymentbox">
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-2">
                            <h5 class="quotet2">Total</h5><br>
                        </div>
                        <div class="col-md-2">
                            <h5 class="topic6 pull-right"><?php echo $row['payment_money']; ?> ฿</h5>
                        </div>
                    </div>

                    <hr>
                    <br>
                    <p class="quotet2 pull-right">DATE:<?php echo $row['payment_timeStamp']; ?></p>
                    <br>
                </div>

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