<?php
session_start();
require_once('helper.php');
require_once('connect.php');

//case user not login yet
if (!isset($_SESSION['current_ID'])) {
    header('Location: homepage.php');
    exit;
}
//case user type isn't Organ
if (isset($_SESSION['current_type'])) {
    if ($_SESSION['current_type'] != "Organizer") {
        header('Location: homepage.php');
        exit;
    }
} else {
    header('Location: homepage.php');
    exit;
}

$pageAction=NULL;

$fromUser = $_POST['fromUser'];
//echo "<br>user: " . $fromUser;
$fromEvent = $_POST['fromEvent'];
//echo "<br>event: " . $fromEvent;
$eventName = $_POST['eventName'];
//echo "<br>eventname: " . $eventName;
$submitAct = $_POST['submitAction'];
//echo "<br>submit: " . $submitAct;

if ($submitAct == "Cancel") {
    $qcancle = "UPDATE event SET event_approveStatus = '2' 
                WHERE event_ID = '$fromEvent' 
                AND event_organizerID = '$fromUser' ";

    $resultcancle = $mysqli->query($qcancle);
    if (!$resultcancle) {
        //echo "<br>CANCEL event failed. Error: " . $mysqli->error;
    } else {
        //insert success
        //echo "<br>CANCEL event suc";
    }

    //echo "<br>MANAGE EVENT PAGE REACH";
    $pageAction="Cancel";

}elseif ($submitAct == "Statistic"){
    header('Location: org_each_event_stat.php?event='.$fromEvent);
    exit;
}elseif ($submitAct == "Edit"){
    $pageAction="Edit";
}else{
    header('Location: organizer_index.php');
    exit;
}

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

<!-- Header
================================================== -->
<header id="nino-header2">
    <?php header_zone(); ?>
</header><!--/#header-->

<?php
///for cancel event
///

if($pageAction=="Cancel") {


    ?>
    <!-- name
    ================================================== -->
    <section id="nino-services">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Alright,</span>

                <?php echo $eventName; ?> Already Remove!



            </h2>
            <br><br>
            <h4 style='text-align: center; color: #3f97c2;'> Please note that you have to take
                <br><br>a responsibility to refund
                <br><br>all of the ticket that your customers
                <br><br>paid for this event.</h4><br>
            <br>

            <div class="box4">
                <hr>
                <div class="row">
                    <form action="check_organizer_manageEvent.php" method="post">
                        <input type="submit" name="BACK" class="nino-btnorgsta " value="Back"></input>
                    </form>
                    <div style="clear:both;"></div>
                </div>
            </div>

        </div>
    </section><!--/#nino-name-->
    <?php
}elseif ($pageAction=="Edit"){

    $qeventsearch ="SELECT * FROM event WHERE event_ID='$fromEvent'";
    $resulteventsearch = $mysqli->query($qeventsearch);
    $roweventfound = $resulteventsearch->fetch_array();


    $event_name = $roweventfound['event_name'];
    $event_location = $roweventfound['event_location'];
    $event_typeID = $roweventfound['event_typeID'];
    $event_dateStart = $roweventfound['event_dateStart'];
    $event_dateEnd = $roweventfound['event_dateEnd'];
    $event_timeStart = $roweventfound['event_timeStart'];
    $event_timeEnd = $roweventfound['event_timeEnd'];
    $event_detail = $roweventfound['event_detail'];

    ?>

    <!-- Brand
        ================================================== -->


    <section id="nino-brand" style="background: #ffffff">
        <div class="verticalCenter fw">
            <div class="container">
                <div class="detail">
                    <div class="box1">
                        <form action="check_organizer_manageEvent.php" method="post" enctype="multipart/form-data">
                            <br>
                            <h4 class="nino-sectionHeading">
                                <span class="nino-subHeading">Something Wrong?</span>
                                Edit Your Event</h4><br>
                            <div class="box4">
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Event Name : </span>
                                    </div>
                                    <div class="col-md-9 pull-left">
                                        <input class="input" type="text" name="event_name" value="<?php echo $event_name; ?>">

                                    </div>

                                    <div style="clear:both;"></div>
                                </div>
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Type : </span>
                                    </div>
                                    <div class="col-md-9 pull-left">
                                        <select name="event_typeID">
                                            <?php
                                            $q = "SELECT eventType_name,eventType_ID FROM eventType 
                                        ORDER BY  eventType_ID ASC";
                                            $result = $mysqli->query($q);
                                            while ($row = $result->fetch_array()) {
                                                $type = $row['eventType_name'];
                                                $typeID = $row['eventType_ID'];

                                                $select="";
                                                if($event_typeID==$typeID){ $select="selected";}


                                                echo "<option value='$typeID' $select>$type</option>";
                                            }
                                            ?>

                                        </select>

                                    </div>

                                    <div style="clear:both;"></div>
                                </div>
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Location : </span>
                                    </div>
                                    <div class="col-md-9 pull-left">
                                        <textarea name="event_location" rows="4" cols="50" ><?php echo $event_location; ?></textarea>
                                    </div>

                                    <div style="clear:both;"></div>
                                </div>

                                <hr>
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Organizer : </span>
                                    </div>
                                    <div class="col-md-9 pull-left">
                                        <input class="input" type="text" name="event_organizer"
                                               placeholder="<?php echo $_SESSION['current_organizer_name']; ?>" disabled>
                                        <p><br>To change your organizer's name, go to your profile settings.</p>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <hr>
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Date : </span>
                                    </div>
                                    <div class="col-md-3 pull-left">
                                        <input class="input1" type="text" name="event_dateStart" value="<?php echo $event_dateStart; ?>">
                                    </div>
                                    <div class="col-md-2 pull-left">
                                        <span class="quoteinput">To : </span>
                                    </div>
                                    <div class="col-md-4 pull-left">
                                        <input class="input1" type="text" name="event_dateEnd" value="<?php echo $event_dateEnd; ?>">
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Time : </span>
                                    </div>
                                    <div class="col-md-3 pull-left">
                                        <input class="input1" type="text" name="event_timeStart" value="<?php echo $event_timeStart; ?>">
                                    </div>
                                    <div class="col-md-2 pull-left">
                                        <span class="quoteinput">To : </span>
                                    </div>
                                    <div class="col-md-4 pull-left">
                                        <input class="input1" type="text" name="event_timeEnd" value="<?php echo $event_timeEnd; ?>">
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <hr>
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Tickets : </span>
                                    </div>
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Type : </span>
                                    </div>
                                    <div class="col-md-3 ">
                                        <span class="quotet">Price : </span>
                                    </div>
                                    <div class="col-md-3 ">
                                        <span class="quotet">Total Tickets : </span>
                                    </div>
                                    <div id="dynamicInput">


                                        <?php
                                        $qrepticket="SELECT ticketType_name,ticketType_price,ticketType_totalSeats FROM ticketType
                                                      WHERE event_ID = '$fromEvent'";
                                        $resulttic = $mysqli->query($qrepticket);
                                        while($rowtic = $resulttic->fetch_array()) {
                                            $ticname=$rowtic['ticketType_name'];
                                            $ticprice=$rowtic['ticketType_price'];
                                            $ticseat=$rowtic['ticketType_totalSeats'];

                                            ?>
                                            <div class="col-md-3 pull-left ">
                                            </div>
                                            <div class="col-md-3 pull-left">
                                                <input class="input3 " type="text" name="dummyticket_type1" placeholder="<?php echo $ticname; ?>" disabled>
                                            </div>
                                            <div class="col-md-3 ">
                                                <input class="input3" type="text" name="dummyticket_price1" placeholder="<?php echo $ticprice; ?>" disabled>
                                            </div>
                                            <div class="col-md-3 ">
                                                <input class='input3' type="text" name="dummyticket_total1" placeholder="<?php echo $ticseat; ?>" disabled>
                                            </div>
                                            <br><br>

                                            <?php
                                        }

                                        ?>

                                        <p><br><br>Due to our policies, we are not allow you to change ticket information after published.</p>
                                        <p>You still can add more type of tickets.</p>

                                        <div class="col-md-3 pull-left ">
                                        </div>
                                        <div class="col-md-3 pull-left">
                                            <input class="input3 " type="text" name="ticket_type1">
                                        </div>
                                        <div class="col-md-3 ">
                                            <input class="input3" type="text" name="ticket_price1">
                                        </div>
                                        <div class="col-md-3 ">
                                            <input class='input3' type="text" name="ticket_total1">
                                        </div>






                                    </div>


                                    <input class="nino-btnadd pull-right" type="button" value="Add another type"
                                           onClick="addInput('dynamicInput');">
                                    <div style="clear:both;"></div>

                                </div>
                                <hr>
                                <!-- <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Ticket Price : </span>
                                    </div>
                                    <div class="col-md-3 pull-left">
                                        <input class="input1" type="text" name="eventtime">
                                    </div>
                                    <div style="clear:both;"></div>
                                </div> -->
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Event Poster :</span>
                                    </div>
                                    <div class="col-md-9 pull-left">
                                        <input type="file" name="fileToUpload" id="fileToUpload" class="inputfile inputfile-2"
                                               data-multiple-caption="{count} files selected" multiple/>
                                        <label for="fileToUpload">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17"
                                                 viewBox="0 0 20 17">
                                                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                            </svg>
                                            <span>Choose a file&hellip;</span></label>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <hr>
                                <div class="input">
                                    <div class="col-md-3 pull-left">
                                        <span class="quotet">Event Detail : </span>
                                    </div>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                            <div class="box1">

                                <textarea name="event_detail" cols="80" rows="10"><?php echo $event_detail; ?></textarea>
                                <hr>
                                <br>
                                <br>
                                <input type="hidden" name="eventIDhidden" value="<?php echo $fromEvent; ?>">
                                <input type="submit" href=".nino-testimonial" class="nino-btnb pull-right"
                                       value="Send"></input>
                                <div style="clear:both;"></div>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
                <br><br>

            </div>
        </div>
    </section> <!--/#nino-brand-->




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
<?php

header('Location: organizer_index.php');

?>