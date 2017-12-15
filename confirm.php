<?php
session_start();
require_once('helper.php');
require_once('connect.php');

//case user not login yet
if (!isset($_SESSION['current_ID'])){
	header('Location: homepage.php');
	exit;
}
//case user type isn't Customer
if (isset($_SESSION['current_type'])){
	if ($_SESSION['current_type']!="Customer"){
		header('Location: homepage.php');
		exit;
	}
}else{
	header('Location: homepage.php');
	exit;
}

if (isset($_POST['submit'])) {
	if (($_POST['number1']==0) and ($_POST['number2']==0)) {
		header('Location: detail.php');
	}else{
		$t1 = $_POST['number1'];
		$_SESSION['type1'] = $t1;
		$p1 = 500*$t1;
		$t2 = $_POST['number2'];
		$_SESSION['type2'] = $t2;
		$p2 = 1000*$t2;
	}
}
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

	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.10";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <header id="nino-header2">
        <?php header_zone(); ?>
    </header><!--/#header-->

	<!-- Story About Us
		================================================== -->

		<!-- 	<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Who we are</span>
				Meet our team
			</h2>
			<p class="nino-sectionDesc">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			</p> -->

			
					<!-- <div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="images/our-team/img-1.jpg" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Matthew Dix</h4>
							<span class="regency">Graphic Design</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="images/our-team/img-2.jpg" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Christopher Campbell</h4>
							<span class="regency">Branding/UX design</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="images/our-team/img-3.jpg" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Michael Fertig </h4>
							<span class="regency">Developer</span>
						</div>
					</div> -->
					<!--/#nino-whatWeDo-->

    <!-- Testimonial
    	================================================== -->
    <!-- <section class="nino-testimonial">
    	<div class="container">
    		<div class="nino-testimonialSlider">
				<ul>
					<li>
						<div layout="row">
							<div class="nino-symbol fsr">
								<i class="mdi mdi-comment-multiple-outline nino-icon"></i>
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Jon Doe</span>
							</div>
						</div>
					</li>
					<li>
						<div layout="row">
							<div class="nino-symbol fsr">
								<i class="mdi mdi-wechat nino-icon"></i>	
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Jon Doe</span>
							</div>
						</div>
					</li>
					<li>
						<div layout="row">
							<div class="nino-symbol fsr">
								<i class="mdi mdi-message-text-outline nino-icon"></i>
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Jon Doe</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
    	</div>
    </section> --><!--/#nino-testimonial-->

    <!-- Our Team
    	================================================== -->
	<!-- <section id="nino-ourTeam">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Who we are</span>
				Meet our team
			</h2>
			<p class="nino-sectionDesc">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			</p>
			<div class="sectionContent">
				<div class="row nino-hoverEffect">
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="images/our-team/img-1.jpg" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Matthew Dix</h4>
							<span class="regency">Graphic Design</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="images/our-team/img-2.jpg" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Christopher Campbell</h4>
							<span class="regency">Branding/UX design</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<div class="overlay" href="#">
								<div class="content">
									<a href="#" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
									<a href="#" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
								</div>
								<img src="images/our-team/img-3.jpg" alt="">
							</div>
						</div>
						<div class="info">
							<h4 class="name">Michael Fertig </h4>
							<span class="regency">Developer</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --><!--/#nino-ourTeam-->

	<!-- Brand
		================================================== -->
		<section id="nino-brand">
			<div class="verticalCenter fw" >
				<div class="container">
					<div class="detail">
						<?php
						$q = "SELECT paymentLog.payment_ID FROM paymentLog ORDER BY payment_ID DESC LIMIT 0,1";
						$result=$mysqli->query($q);                    
						if(!$result){
							echo "Select failed. Error: ".$mysqli->error ;
						}
						while($row=$result->fetch_array()){
							$bookId = $row['payment_ID']+1;
						}
						?>
						<div class="box"> 
							<br>
							<p class="topic4">Payment Confirm!!</p>
							<br>
							<p class="quote1">Your payment detail
							</p>
							<br><br>
							<div class="box3">
								<p class='quotet'>
									<?php echo "PAYMENT ID : ".$bookId;
									$date = date_create(date_default_timezone_get());
									$datename = date_format($date, 'jS F Y');
									echo "<br>PAYMENT DATE : ".$datename."<br>";?>
								</p>
								<?php 
								echo ("<p class='quotet'>Standard ticket ".$t1." x 500฿  = ".$p1." ฿</p>");
								echo ("<p class='quotet'>Premium ticket ".$t2." x 1,000฿  = ".$p2." ฿</p>");?>
								<p class='quotet'>
									<?php
									echo ("TOTAL ".($p1+$p2)." ฿");
									$_SESSION['total'] = ($p1+$p2);
									?>
								</p>
							</div>


							<form action="success_login.php" method="post">
								<div class="row">
									<div class="row">
										<div>
											<div class="form-group">
												<label class="col-md-4 control-label text-right"><strong>Payment Method</strong></label>
												<div class="col-md-3">
													<select class="form-control" name="method" required="">
														<option value="MasterCard">MasterCard</option>
														<option value="VISA">VISA</option>
														<option value="American Express">American Express</option>
													</select>
												</div>
											</div>
										</div>										
									</div>
									<div class="row">
										<div class="col-md-12" style="padding-top: 10px">
											<label class="col-sm-4 control-label text-right">Card Number</label>
											<div class="col-sm-3"><input name="cardnum" type="text" pattern="\d{16}" maxlength="16" class="form-control border-bottom" required=""></div>
										</div>
									</div>
									<label class="col-md-4 control-label text-right">Expiry Date :</label>
									<div class="col-md-12">
										<div class="form-group" style="padding-top: 10px">
											<label class="col-sm-4 control-label text-right">Month</label>
											<div class="col-sm-3">
												<select class="form-control" name="month" required="">
													<option selected="selected" value="">Month</option>
													<option value="1">January</option>
													<option value="2">Febuary</option>
													<option value="3">March</option>
													<option value="4">April</option>
													<option value="5">May</option>
													<option value="6">June</option>
													<option value="7">July</option>
													<option value="8">August</option>
													<option value="9">September</option>
													<option value="10">October</option>
													<option value="11">November</option>
													<option value="12">December</option>
												</select>
											</div>
											<label class="col-sm-1 control-label text-right">Year</label>
											<div class="col-sm-2"><input name="year" type="text" pattern="\d{4}" minlength="4" maxlength="4" max="2017" class="form-control border-bottom" required></div>
										</div>
									</div>
								</div>
								<div style="padding-right: 230px; padding-left: 230px; padding-top: 30px; padding-bottom: 30px">
									<a href="detail.php" class="nino-btnh pull-left">Cancle</a>
									<input type="submit" name="submit" value="CONFIRM" class="nino-btnb pull-right">
									<div style="clear:both;"></div>
								</div>
							</form>
						</div>
					</div>								

				</div>
			</div>
		</div>
		<br><br>

	</div>

</section> <!--/#nino-brand-->

    <!-- Pay
    	================================================== -->

	<!-- Portfolio
		================================================== -->
	<!-- <section id="nino-portfolio">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">What we do</span>
				some of our work
			</h2>
			<p class="nino-sectionDesc">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
			</p>
		</div>
		<div class="sectionContent">
			<ul class="nino-portfolioItems">
				<li class="item">
					<a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-1.jpg">
						<img src="images/our-work/img-1.jpg" />
						<div class="overlay">
							<div class="content">
								<i class="mdi mdi-crown nino-icon"></i>
								<h4 class="title">creatively designed</h4>
								<span class="desc">Lorem ipsum dolor sit</span>
							</div>
						</div>
					</a>
				</li>
				<li class="item">
					<a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-2.jpg">
						<img src="images/our-work/img-2.jpg" />
						<div class="overlay">
							<div class="content">
								<i class="mdi mdi-cube-outline nino-icon"></i>
								<h4 class="title">creatively designed</h4>
								<span class="desc">Lorem ipsum dolor sit</span>
							</div>
						</div>
					</a>
				</li>
				<li class="item">
					<a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-3.jpg">
						<img src="images/our-work/img-3.jpg" />
						<div class="overlay">
							<div class="content">
								<i class="mdi mdi-desktop-mac nino-icon"></i>
								<h4 class="title">creatively designed</h4>
								<span class="desc">Lorem ipsum dolor sit</span>
							</div>
						</div>
					</a>
				</li>
				<li class="item">
					<a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-4.jpg">
						<img src="images/our-work/img-4.jpg" />
						<div class="overlay">
							<div class="content">
								<i class="mdi mdi-flower nino-icon"></i>
								<h4 class="title">creatively designed</h4>
								<span class="desc">Lorem ipsum dolor sit</span>
							</div>
						</div>
					</a>
				</li>
				<li class="item">
					<a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-5.jpg">
						<img src="images/our-work/img-5.jpg" />
						<div class="overlay">
							<div class="content">
								<i class="mdi mdi-gamepad-variant nino-icon"></i>
								<h4 class="title">creatively designed</h4>
								<span class="desc">Lorem ipsum dolor sit</span>
							</div>
						</div>
					</a>
				</li>
				<li class="item">
					<a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-6.jpg">
						<img src="images/our-work/img-6.jpg" />
						<div class="overlay">
							<div class="content">
								<i class="mdi mdi-gnome nino-icon"></i>
								<h4 class="title">creatively designed</h4>
								<span class="desc">Lorem ipsum dolor sit</span>
							</div>
						</div>
					</a>
				</li>
				<li class="item">
					<a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" href="images/our-work/img-7.jpg">
						<img src="images/our-work/img-7.jpg" />
						<div class="overlay">
							<div class="content">
								<i class="mdi mdi-guitar-electric nino-icon"></i>
								<h4 class="title">creatively designed</h4>
								<span class="desc">Lorem ipsum dolor sit</span>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</section> --><!--/#nino-portfolio-->

	<!-- Testimonial
		================================================== -->
    <!-- <section class="nino-testimonial bg-white">
    	<div class="container">
    		<div class="nino-testimonialSlider">
				<ul>
					<li>
						<div layout="row" class="verticalCenter">
							<div class="nino-avatar fsr">
								<img class="img-circle img-thumbnail" src="images/testimonial/img-1.jpg" alt="">
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Joshua Earle</span>
							</div>
						</div>
					</li>
					<li>
						<div layout="row" class="verticalCenter">
							<div class="nino-avatar fsr">
								<img class="img-circle img-thumbnail" src="images/testimonial/img-2.jpg" alt="">
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Jon Doe</span>
							</div>
						</div>
					</li>
					<li>
						<div layout="row" class="verticalCenter">
							<div class="nino-avatar fsr">
								<img class="img-circle img-thumbnail" src="images/testimonial/img-3.jpg" alt="">
							</div>
							<div>
								<p class="quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation."</p>
								<span class="name">Jon Doe</span>
							</div>
						</div>
					</li>
				</ul>
			</div>
    	</div>
    </section> --><!--/#nino-testimonial-->

    <!-- Happy Client
    	================================================== -->
    <!-- <section id="nino-happyClient">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Happy Clients</span>
				What people say
			</h2>
			<div class="sectionContent">
				<div class="row">
					<div class="col-md-6">
						<div layout="row" class="item">
							<div class="nino-avatar fsr">
								<img class="img-circle" src="images/happy-client/img-1.jpg" alt="">
							</div>
							<div class="info">
								<h4 class="name">Matthew Dix</h4>
								<span class="regency">Graphic Design</span>
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo cupiditate temporibus sapiente, sint, voluptatibus tempora esse. Consectetur voluptate nihil quo nulla voluptatem dolorem harum nostrum
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div layout="row" class="item">
							<div class="nino-avatar fsr">
								<img class="img-circle" src="images/happy-client/img-2.jpg" alt="">
							</div>
							<div class="info">
								<h4 class="name">Nick Karvounis</h4>
								<span class="regency">Graphic Design</span>
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo cupiditate temporibus sapiente, sint, voluptatibus tempora esse. Consectetur voluptate nihil quo nulla voluptatem dolorem harum nostrum
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div layout="row" class="item">
							<div class="nino-avatar fsr">
								<img class="img-circle" src="images/happy-client/img-3.jpg" alt="">
							</div>
							<div class="info">
								<h4 class="name">Jaelynn Castillo</h4>
								<span class="regency">Graphic Design</span>
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo cupiditate temporibus sapiente, sint, voluptatibus tempora esse. Consectetur voluptate nihil quo nulla voluptatem dolorem harum nostrum
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div layout="row" class="item">
							<div class="nino-avatar fsr">
								<img class="img-circle" src="images/happy-client/img-4.jpg" alt="">
							</div>
							<div class="info">
								<h4 class="name">Mike Petrucci</h4>
								<span class="regency">Graphic Design</span>
								<p class="desc">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo illo cupiditate temporibus sapiente, sint, voluptatibus tempora esse. Consectetur voluptate nihil quo nulla voluptatem dolorem harum nostrum
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section> --><!--/#nino-happyClient-->

    <!-- Latest Blog
    	================================================== -->
    <!-- <section id="nino-latestBlog">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Our stories</span>
				Latest Blog
			</h2>
			<div class="sectionContent">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<article>
							<div class="articleThumb">
								<a href="#"><img src="images/our-blog/img-1.jpg" alt=""></a>
								<div class="date">
									<span class="number">15</span>
									<span class="text">Jan</span>
								</div>
							</div>
							<h3 class="articleTitle"><a href="">Lorem ipsum dolor sit amet</a></h3>
							<p class="articleDesc">
								Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<div class="articleMeta">
								<a href="#"><i class="mdi mdi-eye nino-icon"></i> 543</a>
								<a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 15</a>
							</div>
						</article>
					</div>
					<div class="col-md-4 col-sm-4">
						<article>
							<div class="articleThumb">
								<a href="#"><img src="images/our-blog/img-2.jpg" alt=""></a>
								<div class="date">
									<span class="number">14</span>
									<span class="text">Jan</span>
								</div>
							</div>
							<h3 class="articleTitle"><a href="">sed do eiusmod tempor</a></h3>
							<p class="articleDesc">
								Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<div class="articleMeta">
								<a href="#"><i class="mdi mdi-eye nino-icon"></i> 995</a>
								<a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 42</a>
							</div>
						</article>
					</div>
					<div class="col-md-4 col-sm-4">
						<article>
							<div class="articleThumb">
								<a href="#"><img src="images/our-blog/img-3.jpg" alt=""></a>
								<div class="date">
									<span class="number">12</span>
									<span class="text">Jan</span>
								</div>
							</div>
							<h3 class="articleTitle"><a href="">incididunt ut labore et dolore</a></h3>
							<p class="articleDesc">
								Elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<div class="articleMeta">
								<a href="#"><i class="mdi mdi-eye nino-icon"></i> 1264</a>
								<a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 69</a>
							</div>
						</article>
					</div>
				</div>
			</div>
    	</div>
    </section> --><!--/#nino-latestBlog-->

    <!-- Map
    	================================================== -->
  <!--   <section id="nino-map">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
    			<i class="mdi mdi-map-marker nino-icon"></i>
    			<span class="text">Open map</span>
    			<span class="text" style="display: none;">Close map</span>
    		</h2>
    		<div class="mapWrap">
	    		<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d79466.26604960626!2d-0.19779784176715043!3d51.50733004537892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!3m2!1d51.5073509!2d-0.1277583!5e0!3m2!1sen!2s!4v1469206441744" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	    	</div>
    	</div>
    </section> --><!--/#nino-map-->

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