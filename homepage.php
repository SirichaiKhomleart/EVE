<?php
session_start();
require_once ('helper.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php html_headcode(); ?>
</head>

<body data-target="#nino-navbar" data-spy="scroll">

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
<header id="nino-header">
    <div id="nino-headerInner">



        <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="homepage.php">Eve | Online Event Booking</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="nino-menuItem pull-right">
                    <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?php print_menus(); ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                </div>

            </div><!-- /.container-fluid -->
        </nav>






        <section id="nino-slider" class="carousel slide container" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h2 class="nino-sectionHeading">
                        <img src="images/poster/event1.jpg" height="330" />
                    </h2>

                    <a href="detail.php" class="nino-btn">more details</a>
                </div>
                <div class="item">
                    <h2 class="nino-sectionHeading">
                        <img src="images/poster/event2.jpg" height="330"/>
                    </h2>
                    <a href="detail.php" class="nino-btn">more details</a>
                </div>
                <div class="item">
                    <h2 class="nino-sectionHeading">
                        <img src="images/poster/event3.png" height="330"/>
                    </h2>
                    <a href="detail.php" class="nino-btn">more details</a>
                </div>
                <div class="item">
                    <h2 class="nino-sectionHeading">
                        <img src="images/poster/event4.jpg" height="330"/>
                    </h2>
                    <a href="detail.php" class="nino-btn">more details</a>
                </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators clearfix">
                <li data-target="#nino-slider" data-slide-to="0" class="active">
                    <div class="inner">
                        <span class="number">01</span> halfmoon
                    </div>
                </li>
                <li data-target="#nino-slider" data-slide-to="1">
                    <div class="inner">
                        <span class="number">02</span> waterzonic
                    </div>
                </li>
                <li data-target="#nino-slider" data-slide-to="2">
                    <div class="inner">
                        <span class="number">03</span> windows server
                    </div>
                </li>
                <li data-target="#nino-slider" data-slide-to="3">
                    <div class="inner">
                        <span class="number">04</span> tedbot
                    </div>
                </li>
            </ol>
        </section>
    </div>
</header><!--/#header-->

<!-- Story About Us
================================================== -->
<section id="nino-portfolio">
    <div class="container">
        <h2 class="nino-sectionHeading">
            <span class="nino-subHeading">Recommended</span>
            Events
        </h2>
        <p class="nino-sectionDesc">
            A lot of things happened around you, don't hold back - explore them here!<br><br>
            Festivals are a great way to experience a destination in a unique and different way.
            And with several hundred festivals all over Thailand every month -
            there are plenty to chose from! This recommend pulls together a collection of the Best Festivals
            Around Thailand in 2017 and showcases 7 festivals for each month of the year.
            Whether you’re looking for the ultimate cultural experience, the glamour of a film festival
            or the sheer joy of a music festival - there is something here for everyone.
        </p>
    </div>
    <div class="sectionContent">
        <ul class="nino-portfolioItems">
            <li class="item">
                <a href="detail.php" >
                    <img src="images/poster/sbanner1.jpg"  />
                    <div class="overlay">
                        <div class="content">
                            <i class="mdi mdi-crown nino-icon"></i>
                            <h4 class="title">The Big Brain</h4>
                            <span class="desc">Sunday, August 25 | 03.00 PM</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="detail.php">
                    <img src="images/poster/sbanner2.jpg"  />
                    <div class="overlay">
                        <div class="content">
                            <i class="mdi mdi-cube-outline nino-icon"></i>
                            <h4 class="title">Draw By Night</h4>
                            <span class="desc">Sunday, August 25 | 03.00 PM</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="detail.<?php  ?>">
                    <img src="images/poster/smallevent3.jpg"  />
                    <div class="overlay">
                        <div class="content">
                            <i class="mdi mdi-desktop-mac nino-icon"></i>
                            <h4 class="title">ST.Johns</h4>
                            <span class="desc">Sunday, August 25 | 03.00 PM</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="detail.php">
                    <img src="images/poster/sbanner4.png" />
                    <div class="overlay">
                        <div class="content">
                            <i class="mdi mdi-flower nino-icon"></i>
                            <h4 class="title">Bangkok Jam 2017</h4>
                            <span class="desc">Sunday, August 25 | 03.00 PM</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="detail.php">
                    <img src="images/poster/sbanner6.jpg" />
                    <div class="overlay">
                        <div class="content">
                            <i class="mdi mdi-gamepad-variant nino-icon"></i>
                            <h4 class="title">Bring It On Festival 2017</h4>
                            <span class="desc">Sunday, August 25 | 03.00 PM</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="detail.php">
                    <img src="images/poster/sbanner3.jpg" />
                    <div class="overlay">
                        <div class="content">
                            <i class="mdi mdi-gnome nino-icon"></i>
                            <h4 class="title">Tech And Treat</h4>
                            <span class="desc">Sunday, August 25 | 03.00 PM</span>
                        </div>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="detail.php">
                    <img src="images/poster/sbanner7.jpg" />
                    <div class="overlay">
                        <div class="content">
                            <i class="mdi mdi-guitar-electric nino-icon"></i>
                            <h4 class="title">Total Eclipse</h4>
                            <span class="desc">Sunday, August 25 | 03.00 PM</span>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
</section><!--/#nino-story-->

<!-- Counting
================================================== -->
<section id="nino-counting">
    <div class="container">
        <div layout="row" class="verticalStretch">
            <div class="item">
                <div class="number">42</div>
                <div class="text">Entertainment</div>
            </div>
            <div class="item">
                <div class="number">123</div>
                <div class="text">Sports</div>
            </div>
            <div class="item">
                <div class="number">15</div>
                <div class="text">Technology</div>
            </div>
            <div class="item">
                <div class="number">99</div>
                <div class="text">Travel</div>
            </div>
            <div class="item">
                <div class="number">24</div>
                <div class="text">WorkShop</div>
            </div>
            <div class="item">
                <div class="number">24</div>
                <div class="text">Arts</div>
            </div>
        </div>
    </div>
</section><!--/#nino-counting-->

<!-- Services
================================================== -->
<section id="nino-services">
    <div class="container">
        <h2 class="nino-sectionHeading">
            <span class="nino-subHeading">Categories</span>

        </h2>
        <div class="sectionContent">
            <div class="fw" layout="row">
                <div class="col-md-4 col-sm-6 item ">
                    <div layout="row">
                        <i class="mdi mdi-apple-keyboard-command nino-icon fsr"></i>
                        <div>
                            <h4 class="nino-serviceTitle">Entertainment</h4>
                            <p>Life is hard, and a lot of people tired from their lifestyle.
                                If they're gonna spend half an hour to do something,
                                they want some entertainment and a sense of achievement.
                                <br>Explore here!</p>
                            <a href="cata.html" class="nino-btns">See all events</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item ">
                    <div layout="row">
                        <i class="mdi mdi-blender nino-icon fsr"></i>
                        <div>
                            <h4 class="nino-serviceTitle">Sports</h4>
                            <p>The way a team plays as a whole determines its success.
                                You may have the greatest bunch of individual stars in the world,
                                but if they don't play together, the club won't be worth a dime.
                                <br>Finding the right place for yourself?</p>
                            <a href="cata.html" class="nino-btns">See all events</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item ">
                    <div layout="row">
                        <i class="mdi mdi-bookmark-plus-outline nino-icon fsr"></i>
                        <div>
                            <h4 class="nino-serviceTitle">Technology</h4>
                            <p>The digital world is changing the roles communities play in our lives, as well as the roles we play within them. How can us, humans, and artificial things live together?
                                <br>Find out answer here!</p>
                            <a href="cata.html" class="nino-btns">See all events</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item ">
                    <div layout="row">
                        <i class="mdi mdi-buffer nino-icon fsr"></i>
                        <div>
                            <h4 class="nino-serviceTitle">Travel</h4>
                            <p>Traveling without any new experiences is not real traveling, it is commuting.
                                In order to have a truly epic vacation, you need to get out there and experience as many new things as possible.
                                This includes not just seeing and doing but also eating, learning and experiencing.
                                <br> Join our trip now!</p>
                            <a href="cata.html" class="nino-btns">See all events</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item ">
                    <div layout="row">
                        <i class="mdi mdi-desktop-mac nino-icon fsr"></i>
                        <div>
                            <h4 class="nino-serviceTitle">WorkShop</h4>
                            <p>There are so many reasons why you should attend workshop.
                                You have a lot to offer and maybe you’ll learn something new,
                                laughter and relationship are immensely good for everyone’s health and well being.
                                You’ll meet new friends in the colleagues you pass in the halls every day. And a lot more...
                                <br>Why are you still holding back? </p>
                            <a href="cata.html" class="nino-btns">See all events</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 item ">
                    <div layout="row">
                        <i class="mdi mdi-diamond nino-icon fsr"></i>
                        <div>
                            <h4 class="nino-serviceTitle">Arts</h4>
                            <p>Imagine a world without art, music, poetry, and stories.
                                Such a world would lack the expression of much human creativity.
                                The arts can remind us of what is truly important in life, who we really are, and what our purpose is.
                                That is the reason why we cannot live in the world without the art.
                                <br>Exploring the art of you here!</p>
                            <a href="cata.html" class="nino-btns">See all events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#nino-services-->

<!-- Unique Design
================================================== -->
<section id="nino-uniqueDesign">
    <div class="container">

        <div class="sectionContent">
            <div class="nino-devices">
                <img class="tablet" src="images/poster/un.jpg" alt="">
                <img class="mobile" src="images/poster/stand2.png" alt="">
            </div>
        </div>
    </div>
</section><!--/#nino-uniqueDesign-->




<!-- Up Coming
================================================== -->
<section id="nino-story">
    <div class="container">
        <h2 class="nino-sectionHeading">
            <span class="nino-subHeading">Upcoming</span>
            Events
        </h2>
        <p class="nino-sectionDesc">Need some inspiration, finding yourself, or just wanna get out of boring?
            <br>Check this upcoming event here! </p>
        <div class="sectionContent">
            <div class="row nino-hoverEffect">
                <div class="col-md-4 col-sm-4">
                    <article>
                        <div class="item">
                            <a class="overlay" href="detail.php">
									<span class="content">
										<i class="mdi mdi-account-multiple nino-icon"></i>
										More details
									</span>
                                <img src="images/poster/banner1.png" alt="">
                            </a>
                        </div>
                        <br>
                        <br>
                        <h3 class="articleTitle"><a>Teen Event</a></h3>
                        <p class="articleDesc">
                            Sunday, April 23, 2017.
                            11.30AM - 02.00 PM <br>
                            <i class="mdi mdi-map-marker nino-icon">SIIT BKD</i>
                        </p>

                        <br>
                        <br>
                    </article>
                </div>

                <div class="col-md-4 col-sm-4">
                    <article>
                        <div class="item">
                            <a class="overlay" href="detail.php">
									<span class="content">
										<i class="mdi mdi-account-multiple nino-icon"></i>
										More details
									</span>
                                <img src="images/poster/banner4.jpg" alt="" >
                            </a>
                        </div>
                        <br>
                        <br>
                        <h3 class="articleTitle"><a>
                                Translational science</a></h3>
                        <p class="articleDesc">
                            April 19-21, 2017.
                            09.30AM - 04.00 PM.<br>
                            <i class="mdi mdi-map-marker nino-icon">SIIT BKD</i>
                        </p>
                        <br>
                        <br>
                    </article>
                </div>
                <div class="col-md-4 col-sm-4">
                    <article>
                        <div class="item">
                            <a class="overlay" href="detail.php">
									<span class="content">
										<i class="mdi mdi-account-multiple nino-icon"></i>
										More details
									</span>
                                <img src="images/poster/banner3.jpg" alt="" >
                            </a>
                        </div>
                        <br>
                        <br>
                        <h3 class="articleTitle"><a>IOT Tech expo</a></h3>
                        <p class="articleDesc">
                            April 19-21, 2017.
                            09.30AM - 04.00 PM.<br>
                            <i class="mdi mdi-map-marker nino-icon">SIIT BKD</i>
                        </p>
                        <br>
                        <br>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section><!--/#nino-end Upcoming-->

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
    </div>
</section><!--/#nino-search-->

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