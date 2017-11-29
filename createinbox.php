<?php
session_start();
require_once('helper.php');
require_once('connect.php');
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
            <div class="detail">

                <div class="box">
                    <br>
                    <h4 class="nino-sectionHeading">Event Request</h4>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">

                        <div class="col-md-6">
                            <a href="" class="nino-btninbox1select">Create</a>
                        </div>
                        <div class="col-md-6">
                            <a href="editinbox.php" class="nino-btninbox2">Edit</a>
                        </div>
                    </div>
                </div>


                <?php
                $hasevent=false;
                $qfind = "SELECT * FROM event JOIN organizer  WHERE event.event_organizerID=organizer.account_ID 
                          AND event_approveStatus IS NULL 
                          AND event_dateEnd >= CURRENT_DATE
                          ORDER BY event_dateEnd ASC";
                $result = $mysqli->query($qfind);
                if (!$result) {
                    echo "Select failed. Error: " . $mysqli->error;
                } else {
                    while ($row = $result->fetch_array()) {
                        $eveid=$row['event_ID'];
                        $hasevent=true;
                        ?>
                        <div class="box4">
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src=<?php echo $row['event_iconPicture'];?> width="150" height="150">
                                </div>
                                <div class="col-md-8">
                                    <p class="quotet1"><?php echo $row['event_name']; ?></p>
                                    <h5 style="color: #c2185b">This event created on <?php echo $row['event_createTimeStamp'];?>.</h5>
                                    <p class="date1"><br>Location : <?php echo $row['event_location']; ?><br>Organizer : <?php echo $row['organizer_name']; ?>
                                        <br>Date: <?php echo $row['event_dateStart']; ?>  to  <?php echo $row['event_dateEnd']; ?></p><br>
                                    <br><br><br><br><br>

                                    <form action="check_admin_approveCreate.php" method="post">
                                        <input type="submit" name="appcrtact" class="nino-btnorgcancel" value="Disapprove"> </input> &emsp;
                                        <input type="submit" name="appcrtact" class="nino-btnorg" value="Approve"> </input> &emsp;
                                        <a href="event_seeDetail.php?eventID=<?php echo $eveid;?>&&compareMode=off" class="nino-btnorgsta" >More<br>Detail</a>
                                        <input type="hidden" name="eventIDsend" value="<?php echo $row['event_ID'];?>">
                                        <input type="hidden" name="eventNamesend" value="<?php echo $row['event_name'];?>">
                                    </form>
                                    </form>
                                </div>
                                <div style="clear:both;"></div>

                            </div>
                        </div>


                        <?php


                    }
                }
                if ($hasevent==false){
                    echo"<br><br><br><h4>There are no more waiting event in queue.</h4>";

                }
                ?>
                <hr>


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