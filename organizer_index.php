<?php
session_start();
require_once('helper.php');
require_once('connect.php');

//case user not login yet
if (!isset($_SESSION['current_ID'])){
    header('Location: homepage.php');exit;
}
//case user type isn't Customer
if (isset($_SESSION['current_type'])){
    if ($_SESSION['current_type']!="Organizer"){
        header('Location: homepage.php');exit;
    }
}else{
    header('Location: homepage.php');exit;
}

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

            <?php if($_SESSION['current_organizer_status']==0){
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

<?php if($_SESSION['current_organizer_status']==1){ ?>
    <!-- Your Event
    ================================================== -->
    <section id="nino-latestBlog">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading"><?php echo $_SESSION['current_organizer_name'];?></span>
                Here are your currently active events.
            </h2>
            <div class="sectionContent">

                <?php
                $organizerID = $_SESSION['current_ID'];
                $q = "SELECT * FROM event 
                      WHERE event_organizerID = '$organizerID' 
                      AND event_approveStatus = '1'
                      AND event_dateEND < CURRENT_DATE 
                      ORDER BY  event_dateStart DESC";
                $result = $mysqli->query($q);
                while($row = $result->fetch_array()) { ?>

                <div class="box4">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo $row['event_iconPicture']; ?>" width="150">
                        </div>
                        <div class="col-md-8">
                            <h3 class="quotet1"><?php echo $row['event_name']; ?></h3>

                            <p class="date1">
                                Public Time : <?php echo $row['event_createTimeStamp']; ?>
                                <br> Location : <?php echo $row['event_location']; ?>
                                <br>Date : <?php echo $row['event_dateStart']; ?> to <?php echo $row['event_dateEnd']; ?>
                                &emsp; Time : <?php echo $row['event_timeStart']; ?> to <?php echo $row['event_timeEnd']; ?>
                                <br> Participated : people
                            </p>


                        </div>
                        <form action="organizer_manageEvent.php" method="post">
                        <input type="submit" name="cancle<?php echo $row['event_ID']; ?>" class="nino-btnorgcancel " value="Cancel"></input>
                        <input type="submit" name="edit<?php echo $row['event_ID']; ?>" class="nino-btnorg " value="Edit"></input>
                        <input type="submit" name="stat<?php echo $row['event_ID']; ?>" class="nino-btnorgsta " value="Statistic"></input>
                        <input type="hidden" name="from" value="<?php echo $_SESSION['currnt_ID']; ?>">
                        </form>
                        <div style="clear:both;"></div>
                    </div>
                </div>

                <?php } ?><hr>
            </div>
        </div>
    </section><!--/#nino-yourevent-->

                  <!-- Your wait Event
         ================================================== -->
    <section id="nino-latestBlog">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <!--                <span class="nino-subHeading">--><?php //echo $_SESSION['current_organizer_name'];?><!--</span>-->
                Here are your approve-waiting events.
            </h2>
            <div class="sectionContent">
                <div class="row">

                    <!--loop check event from file-->
                    <?php
                    $efile = file_get_contents("userevent.txt"); // Returns a string
                    $eresult = explode("\r\n",$efile);
                    //                var_dump($eresult);
                    for($i=0; $i< count($eresult); $i++)
                    {
                        $edetail=$eresult[$i];
                        $edetailsplit = explode("&&&",$edetail);
//                    echo "<br><br>";
//                    var_dump($edetailsplit);
                        $eimgscr=$edetailsplit[0];
                        $edate=$edetailsplit[1];
                        $emonth=$edetailsplit[2];
                        $etitle=$edetailsplit[3];
                        $edesc=$edetailsplit[4];
                        ?>
                        <div class="col-md-4 col-sm-4">
                            <article>
                                <div class="articleThumb">
                                    <a href="detail_login.php"><img src=<?php echo $eimgscr; ?> alt=""></a>
                                    <div class="date">
                                        <span class="number"><?php echo $edate; ?></span>
                                        <span class="text"><?php echo $emonth; ?></span>
                                    </div>
                                </div>
                                <h3 class="articleTitle"><a href="detail_login.php"><?php echo $etitle; ?></a></h3>
                                <p class="articleDesc">
                                    <?php echo $edesc; ?>
                                </p>
                                <div class="articleMeta">
                                    <a href="detail_login.php"><i class="mdi mdi-eye nino-icon"></i> 1264</a>
                                    <a href="detail_login.php"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 69</a>
                                </div>
                            </article>
                        </div>

                        <?php

                    }
                    ?>


                </div>
            </div>
        </div>
    </section><!--/#nino-yourWAITevent-->

                  <!-- Your Past Event
         ================================================== -->
    <section id="nino-latestBlog">
        <div class="container">
            <h2 class="nino-sectionHeading">
<!--                <span class="nino-subHeading">--><?php //echo $_SESSION['current_organizer_name'];?><!--</span>-->
                Here are your past events.
            </h2>
            <div class="sectionContent">
                <div class="row">

                    <!--loop check event from file-->
                    <?php
                    $efile = file_get_contents("userevent.txt"); // Returns a string
                    $eresult = explode("\r\n",$efile);
                    //                var_dump($eresult);
                    for($i=0; $i< count($eresult); $i++)
                    {
                        $edetail=$eresult[$i];
                        $edetailsplit = explode("&&&",$edetail);
//                    echo "<br><br>";
//                    var_dump($edetailsplit);
                        $eimgscr=$edetailsplit[0];
                        $edate=$edetailsplit[1];
                        $emonth=$edetailsplit[2];
                        $etitle=$edetailsplit[3];
                        $edesc=$edetailsplit[4];
                        ?>
                        <div class="col-md-4 col-sm-4">
                            <article>
                                <div class="articleThumb">
                                    <a href="detail_login.php"><img src=<?php echo $eimgscr; ?> alt=""></a>
                                    <div class="date">
                                        <span class="number"><?php echo $edate; ?></span>
                                        <span class="text"><?php echo $emonth; ?></span>
                                    </div>
                                </div>
                                <h3 class="articleTitle"><a href="detail_login.php"><?php echo $etitle; ?></a></h3>
                                <p class="articleDesc">
                                    <?php echo $edesc; ?>
                                </p>
                                <div class="articleMeta">
                                    <a href="detail_login.php"><i class="mdi mdi-eye nino-icon"></i> 1264</a>
                                    <a href="detail_login.php"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 69</a>
                                </div>
                            </article>
                        </div>

                        <?php

                    }
                    ?>


                </div>
            </div>
        </div>
    </section><!--/#nino-yourPASTevent-->

<!--    contact admin                                -->
    <section id="nino-services">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Having Problem</span>

            <h4 style="text-align:center;">If you have any problem with our services, please contact administrator.
                <br><br>
                <button class="btn btn-success" type="submit" id='contactAdmin'>Send Message to Administrator</button>
            </h4>

        </div>
    </section><!--/#nino-name-->






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
