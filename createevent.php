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
	<link rel="stylesheet" type="text/css" href="css/component.css" />



	
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
		<div id="nino-header2Inner">		



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
						<a class="navbar-brand" href="homepage.html">Eve</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<a href="index.html">Home </a>
								<a href="login.php">Log in</a>
								<!-- <li><a href="#nino-services">Service</a></li>
								<li><a href="#nino-ourTeam">Our Team</a></li>
								<li><a href="#nino-portfolio">Work</a></li>
								<li><a href="#nino-latestBlog">Blog</a></li> -->
							</ul>
						</div><!-- /.navbar-collapse -->
						<ul class="nino-iconsGroup nav navbar-nav">
							<!-- <li> --><a href="usermain.php"><i class="mdi mdi-cart-outline nino-icon"></i></a><!-- </li> -->
							<!-- <a href="#" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a> -->
						</ul>
					</div>
				</div><!-- /.container-fluid -->
			</nav>






		
		</div>
	</header>

	<!-- Story About Us
    ================================================== -->

	<!-- Brand
    ================================================== -->
     <section id="nino-brand">
    	<div class="verticalCenter fw" >
    		<div class="container">
    			<div class="detail">
    				<div class="box1"> 
    					<br>
						<h4 class="nino-sectionHeading">Create Event</h4>
						<div class="box4">
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Event Name : </span>
								</div>
								<div class="col-md-9 pull-left">
									<input class="input" type="text" name="name">
								</div>	
								<div style="clear:both;"></div>
							</div>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Organizer : </span>
								</div>
								<div class="col-md-9 pull-left">
									<input class="input" type="text" name="organizer">
								</div>	
								<div style="clear:both;"></div>
							</div>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Date : </span>
								</div>
								<div class="col-md-9 pull-left">
									<input class="input" type="text" name="eventdate">
								</div>	
								<div style="clear:both;"></div>
							</div>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Time : </span>
								</div>
								<div class="col-md-3 pull-left">
									<input class="input1" type="text" name="eventtime">
								</div>
								<div class="col-md-2 pull-left">
									<span class="quoteinput">To : </span>
								</div>
								<div class="col-md-4 pull-left">
									<input class="input1" type="text" name="eventtime">
								</div>		
								<div style="clear:both;"></div>
							</div>
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
									<div class="col-md-3 pull-left ">										
									</div>
									<div class="col-md-3 pull-left">
										<input class="input3 " type="text" name="myInputs[]">
									</div>
									<div class="col-md-3 ">
										<input class="input3" type="text" name="myInputs[]">
									</div>
									<div class="col-md-3 ">
										<input class='input3' type="text" name="myInputs[]">
									</div>
								</div>
								
								<input class="nino-btnadd pull-right" type="button" value="Add another type" onClick="addInput('dynamicInput');">
								<div style="clear:both;"></div>
								<br>
							</div>
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
									<input type="file" name="file-2[]" id="file-2" class="inputfile inputfile-2" data-multiple-caption="{count} files selected" multiple />
									<label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
								</div>
								<div style="clear:both;"></div>
							</div>
							<div class="input">
								<div class="col-md-3 pull-left">
									<span class="quotet">Event Detail : </span>
								</div>
							</div>
							<div style="clear:both;"></div>
						</div>
						<div class="box1">					
							
							<textarea name="eventdetail" cols="90"	rows="10"></textarea>
							<br>
							<br>							
							<a href=".nino-testimonial" class="nino-btnb pull-right">Send Request</a>
							<div style="clear:both;"></div>
						</div>
						<br>
					</div>
				</div>
				<br><br>
				
    		</div>
    	</div>
    </section> <!--/#nino-brand-->

    <!-- Pay
    ================================================== -->

	
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