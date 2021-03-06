<!DOCTYPE HTML>
<html>
	<head>

	<title>WoodsHome</title>

	<style>
		@import url('https://fonts.googleapis.com/css?family=Fjalla+One|Oswald:300');
	</style>

		<meta charset="utf-8">
		<link rel="icon" type="image/gif/png" href="images/logo.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="WoodsHome Pvt. Ltd." />
		<meta name="keywords" content="Try us , We are the best in business!" />
		<meta name="author" content="Vedadnya Jadhav" />
		<link rel="stylesheet" href="css/animate.css" >
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/themify-icons.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/flexslider.css">
		<link rel="stylesheet" href="css/style.css">
	  	<link rel="stylesheet" href="css/gallery.css">
	  	<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/magnific-popup-options.js"></script>
		<script src="js/main.js"></script>
	 	<script src="js/modernizr-2.6.2.min.js"></script>
        <script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
          images[0] = "images/1.jpeg";
          images[1] = "images/2.jpeg";
          images[2] = "images/3.jpeg";
          images[3] = "images/4.jpeg";
          images[4] = "images/5.jpeg";
          images[5] = "images/6.jpeg";
          images[6] = "images/startimage.jpeg";
		</script>
<style type="text/css">
	.clickable:hover{
	  color: #7ED321 !important;
	}
</style>
	</head>
	<body onload = "startTimer()">

<div class="gtco-loader"></div>

	<div id="page">
	<nav class="gtco-nav" role="navigation">
		<div class="container">
			<div class="row" style="font-family: 'Oswald'">
				<div class="col-sm-2 col-xs-12">
					<div id="gtco-logo"><a href="index.html" style="font-family: 'Fjalla One', sans-serif;"><em>Woods</em>Home</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1 main-nav">
					<ul>
						<li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="practice-areas">Services</a></li>
						<li><a href="#" data-nav-section="our-team">Our Team</a></li>
						<li><a href="#" data-nav-section="gallery">Gallery</a></li>
						<li><a href="#" data-nav-section="contact">Contact Us</a></li>
						<?php
						if(isset($_SESSION["fname"])) {
							echo'<li><a href="#" data-nav-section="contact"> Hi' . $_SESSION["Fname"] .'</a></li>';

					}
					else{
						echo'<li class="btn-cta"><a href="ind.php" class= "external"><span>Login/Signup</span><img src="images/login1.png" style="width: 20px; height: 20px;"></a></li>';
					}
					>
					</ul>
				</div>
			</div>
		</div>
	</nav>
    <div class="gtco-cover">
		<img id="img" class="img-responsive" src="images/startimage.jpeg"/>
  </div>

<div class="overlay"></div>

</div>

	<section id="gtco-about" data-section="about">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12 heading animate-box" data-animate-effect="fadeIn">
					<h1>Welcome To The Modern World Furniture</h1>
					<p class="sub"></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Welcome</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="images/honesty.jpg" class="img-responsive" >
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="heading-colored">Excellence &amp; Honesty</h2>
					<p>Something, indeed, reject, or present, and when this is none other than moral wrong is a great dishonor, receives, from which impedes it, and the hardships of the labor of their choosing to follow the truth, no one encounter. Truth, criticized, and how! Things the free for regular services to obtain that result, we avoided the desire to prevent it, some never welcome.</p>
					<p><a href="#" class="read-more">Read more <i class="icon-chevron-right"></i></a></p>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-practice-areas" data-section="practice-areas">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12 heading animate-box" data-animate-effect="fadeIn">
					<h1>Services</h1>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Services <span>Provided</span></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<a href="#gtco-contact" class="clickable" data-nav-section="#contact">
						<div class="gtco-practice-area-item animate-box">
							<div class="gtco-icon">
								<img src="images/repair.png" style="width: 50px; height: 50px;" >
							</div>
							<div class="gtco-copy">
								<h3>Repair</h3>
								<p>Whether your furniture is in need of a fix or just a little TLC, WoodsHome will be at your door and ready to fight your scratches and stains, your rips and tears. </p>
							</div>
						</div>
					</a>						
				
					<a href="#gtco-contact" class="clickable" data-nav-section="gtco-contact">
						<div class="gtco-practice-area-item animate-box">
							<div class="gtco-icon">
								<img src="images/refurbish.png" style="width: 50px; height: 50px;" >
							</div>
							<div class="gtco-copy">
								<h3>Refurbish</h3>
								<p>Dont like the old look , well then give it a complete modern facelift</p>
							</div>
						</div>
					</a>	
					<div class="gtco-practice-area-item animate-box">
						<div class="gtco-copy">
							<p>To enjoy our services</p>
							<h3>Book an appointment now!</h3>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-our-team" data-section="our-team">
		<div class="container" >
			<div class="row row-pb-md">
				<div class="col-md-12 heading animate-box" data-animate-effect="fadeIn">
					<h1>Our Team</h1>
					<p class="sub"></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Our Team</p>
				</div>
			</div>
			<div class="row team-item gtco-team-reverse" >
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="images/vedadnya.jpg" class="img-responsive" height="200px" width="200px">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>Vedadnya Jadhav</h2>
					<p>Lead Developer</p>
				</div>
			</div>
			<div class="row team-item gtco-team">
				<div class="col-md-6 col-md-pull-1 animate-box"  data-animate-effect="fadeInLeft">
					<div class="img-shadow">
						<img src="images/rammya.jpg" class="img-responsive" height="200px" width="200px">
					</div>
				</div>
				<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
					<h2>Rammya Iyer</h2>
					<p>Sales Analyst</p>
				</div>
			</div>
			<div class="row team-item gtco-team-reverse">
				<div class="col-md-6 col-md-push-7 animate-box" data-animate-effect="fadeInRight">
					<div class="img-shadow">
						<img src="images/sudharshan.jpg" class="img-responsive" height="200px" width="200px">
					</div>
				</div>
				<div class="col-md-6  col-md-pull-6 animate-box" data-animate-effect="fadeInRight">
					<h2>Sudharshan M</h2>
					<p>Design Head</p>
				</div>
			</div>
		</div>
	</section>

	<section id="gtco-our-team" data-section="gallery">
			<div class="row row-pb-md">
				<div class="col-md-12 heading animate-box" data-animate-effect="fadeIn">
					<h1>Gallery</h1>
	  				<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:65% ; height: auto; margin: auto;">
	   			    <ol class="carousel-indicators">
	      				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      				<li data-target="#myCarousel" data-slide-to="1"></li>
	      				<li data-target="#myCarousel" data-slide-to="2"></li>
	    			</ol>

		        <div class="carousel-inner">
		      <div class="item active">
		        <img src="images/gallery1.jpeg" style="width:100%;">
		      </div>

		      <div class="item">
		        <img src="images/gallery2.jpg" style="width:100%;">
		      </div>
		    
		      <div class="item">
		        <img src="images/gallery3.jpg" style="width:100%;">
		      </div>

		      <div class="item">
		        <img src="images/gallery4.jpg" style="width:100%;">
		      </div>
		    
		      <div class="item">
		        <img src="images/gallery5.jpg" style="width:100%;">
		      </div>

		      <div class="item">
		        <img src="images/gallery6.jpg" style="width:100%;">
		      </div>
		    
		      <div class="item">
		        <img src="images/gallery7.jpg" style="width:100%;">
		      </div>

		      <div class="item">
		        <img src="images/gallery8.jpg" style="width:100%;">
		      </div>
		    
		      <div class="item">
		        <img src="images/gallery9.jpg" style="width:100%;">
		      </div>

		      <div class="item">
		        <img src="images/gallery10.jpg" style="width:100%;">
		      </div>
		    
		      <div class="item">
		        <img src="images/gallery11.jpg" style="width:100%;">
		      </div>
	    </div>
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
</div>

				</div>
			</div>
	</section>

	<section id="gtco-contact" data-section="contact">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-12 heading animate-box" data-animate-effect="fadeIn">
					<h1>Contact Us</h1>
					<p class="sub"></p>
					<p class="subtle-text animate-box" data-animate-effect="fadeIn">Contact Us</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
					<form action="book.php" method="POST">
<div class="form-group">
<label for="name" class="sr-only">Name</label>
<input type="text" class="form-control" placeholder="Name" name="aname">
</div>
<div class="form-group">
<label for="number" class="sr-only">Number</label>
<input type="number" class="form-control" placeholder="Number" name="anum">
</div>
<div class="form-group">
<label for="adate" class="sr-only">Appointment Date</label>
<input type="date" class="form-control" placeholder="Date" name="adate">
</div>
<div class="form-group">
<label for="email" class="sr-only">Email</label>
<input type="text" class="form-control" placeholder="Email" name="aemail">
</div>
<div class="form-group">
<label for="address" class="sr-only">Address</label>
<textarea name="aadd" id="aadd" class="form-control" cols="30" rows="7" placeholder="Address"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Book Inspection Appointment" class="btn btn-primary">
</div>
</form>
				</div>
				<div class="col-md-4 col-md-pull-6 animate-box">
					<div class="gtco-contact-info">
						<ul>
							<li class="address">WoodsHome , Plot no. 50 , BKC , Bandra</li>
							<li class="phone"><a href="tel://1235235598">022 23442344</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">help@woodshome.com</a></li>
							<li class="url"><a href="#">http://woodshome.in</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer id="gtco-footer" role="contentinfo">
		<div class="container">
			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">All Rights Reserved.</small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="www.twitter.com/login"><i class="icon-twitter"></i></a></li>
							<li><a href="www.facebook.com/login"><i class="icon-facebook"></i></a></li>
							<li><a href="www.linkedin.com/login"><i class="icon-linkedin"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	</body>
</html>
