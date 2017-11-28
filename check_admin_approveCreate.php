<?php
session_start();
require_once('helper.php');
require_once('connect.php');

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


<?php

$eventID = $_POST['eventIDsend'];
$eventName = $_POST['eventNamesend'];
$button = $_POST['appcrtact'];
echo "<br>eventID id : " . $eventID;

if ($button == "Approve") {
    $q = "UPDATE event SET event_approveStatus = '1' WHERE event_ID = '$eventID'";
    $result = $mysqli->query($q);
    if (!$result) {
        echo "<br>Set 1 failed. Error: " . $mysqli->error;
    } else {
        echo "<br>Set 1 succ.";

    }
} elseif ($button == "Disapprove") {
    $q = "UPDATE event SET event_approveStatus = '0' WHERE event_ID = '$eventID'";
    $result = $mysqli->query($q);
    if (!$result) {
        echo "<br>Set 0 failed. Error: " . $mysqli->error;
    } else {
        echo "<br>Set 0 succ.";

    }
} else {
    echo "<br>do nothing with approve";
}

echo "<br><a href='organizer_index.php'>index</a>";

if ($button == "Approve") {

    ?>

    <section id="nino-services">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Alright,</span>

                <?php echo $eventName; ?> Already Approved!



            </h2>
            <br><br>
            <h4 style='text-align: center; color: #3f97c2;'> Now this event will show up
                <br><br>on our website so that any customer
                <br><br>can take a look or pay for this event's tickets.</h4><br>
            <br>

            <div class="box4">
                <hr>
                <div class="row">
                    <form action="createinbox.php" method="post">
                        <input type="submit" name="BACK" class="nino-btnorgsta " value="Back"></input>
                    </form>
                    <div style="clear:both;"></div>
                </div>
            </div>

        </div>
    </section><!--/#nino-name-->


    <?php
}elseif ($button == "Disapprove") {

    ?>

    <section id="nino-services">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Alright,</span>

                <?php echo $eventName; ?> Already Rejected!



            </h2>
            <br><br>
            <h4 style='text-align: center; color: #79091b;'> Now this event will never show up
                <br><br>on our website and no customers can see it.
                <br><br>Fill out the reason why you disapproved this event.</h4><br>
            <br>

            <div class="box4">
                <hr>
                <div class="row">
                    <form action="createinbox.php" method="post">
                        <input type="submit" name="BACK" class="nino-btnorgsta " value="Back"></input>
                    </form>
                    <div style="clear:both;"></div>
                </div>
            </div>

        </div>
    </section><!--/#nino-name-->


    <?php
}


?>



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
    </footer>

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
    <script src="js/custom-file-input.js"></script>
    <script src="js/addInput.js" type="text/javascript"></script>
</body>
</html>

