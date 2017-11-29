<?php
    session_start();
    require_once('helper.php');
    require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
	<link rel="stylesheet" type="text/css" href="css/template.css" />
	
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
	

	<!-- Header
		================================================== -->
		<header id="nino-header2">
            <?php header_zone(); ?>
        </header>





	<!-- Brand
		================================================== -->
		<section id="nino-brand">
			<div class="verticalCenter fw" >
				<div class="container">
					<div class="detail">
<!--						<img src="images/poster/event2.jpg" width="100%">-->
						<div class="box"> 
							<br>
							<h4 class="topic">HACKATHON 2017</h4>
							<div>

								<p class="date">
                                    <br>Organizer :   SIIT
                                    <br>
                                    <br>Contact
                                    <br>Address :   Bangkadi Campus
                                    <br>Phone :   0811234567
                                    <br>Mail :   siit@mail.tu.ac.th</p>
								<div style="clear:both;"></div>
							</div>
							<br>
						</div>
					</div>
					<br><br>
					<div class="detail">
						<div class="box1">
							<h3 class="topic1"><br><br>HACKATHON 2017<br>2017-11-26  TO  2017-11-30</h3>
							<br><br>
							<h3 class="topic1">LOCATION : THAMMASAT U
                                <br>TIME : 20:21:21  TO  20:21:21</h3>
						</div>
						<div class="box1">
							<img src="images/user/hackathonold.png" width="100%">
							<br>
<!--							<p class="quote1">เริ่มจัดส่งบัตร 1 สิงหาคม เป็นต้นไป / Delivery due in August </p>-->
<!--							<p class="quotet">สถานที่จัดงาน</p>-->
							<br>
<!--							<img src="images/poster/edetail2.jpg" width="100%">-->
<!--							<h3 class="topic2">Coming Soon </h3>-->
							<p class="quotet" style="text-align: center">Coming Soon
							</p>
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
    						<div class="col-md-4">
    							<h2 class="topic">Normal</h2><br>
    						</div>
    						<div class="col-md-8">
    							<p class="quotef">฿ 500 x</p><input class="inputbox" type="number" name="number1" min="0" max="100" step="1" value="0"/>
    							<div style="clear:both;"></div>
    						</div>
    						<div style="clear:both;"></div>

    					</div>
    					<div class="box1">
    						<div class="col-md-4">
    							<h2 class="topic">Premium</h2><br>
    						</div>
    						<div class="col-md-8">
    							<p class="quotef">฿ 1000 x</p><input class="inputbox" type="number" name="number2" min="0" max="100" step="1" value="0"/>
    							<div style="clear:both;"></div>
    						</div>
    						<div style="clear:both;"></div>

    					</div>
    					<div class="box1">
    						<input type="submit" name="submit" value="BUY TICKET" class="nino-btnb">
    					</div>
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