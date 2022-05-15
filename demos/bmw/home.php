<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 6/1/21
	File Name: home.php
	
	This is the home page for the Dealership website.
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- Title -->
		<title>BMW Sunnyville</title>
		<!-- Icon -->
		<link rel="icon" href="icon/favicon.ico" type="image/x-icon"/> <!-- Found info at: https://stackoverflow.com/questions/2268204/favicon-dimensions/48646940 -->
		
		<!-- Screen Sizing -->
		<meta name="viewport" content="width=device-width">
		
		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;700;800&display=swap" rel="stylesheet">
		
		<!-- Bootstrap Link/Stylesheet -->
		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.css" rel="stylesheet">
		<!-- CSS Stylesheet -->
		<link href="styles.css" rel="stylesheet">	
	</head>
	
	<body>
		<!-- Header -->
		<div id="header" class="container-fluid">
			<!-- Logo -->
			<img src="https://di-uploads-pod16.dealerinspire.com/competitionbmwofsmithtown/uploads/2020/03/new-bmw-logo.jpg"
				 alt="BMW Logo">
			<!-- Title -->
			<div class="row">
				<div class="col-12">
					<h1> BMW of Sunnyville</h1>
				</div>
			</div>
		</div>
		
		<!-- Navigation -->
        <?php include("includes/nav.html"); ?>
		
		<div class="container-fluid">
			<div class="row">
				<!-- BMW M Performance Panel -->
				<div class="col-12 col-md-6 panel panel_left margin26">
					<a href="about.php#about_title2">
						<div class="black_box"></div> <!-- 4500 x 3002 -->
						<img class="panel_img" src="https://www.carbodydesign.com/media/2019/06/BMW-M8-Coupe-Exterior-Design-04.jpg"
							 alt="Blue BMW M8">
						<!-- Grey internal box -->
						<h2>BMW M Performance</h2>
					</a>
				</div>
				
				<!-- Available Listings Panel -->
				<div class="col-12 col-md-6 panel panel_right margin26">
					<a href="listings.php">
						<div class="black_box"></div> <!-- 800 x 533 -->
						<img class="panel_img" src="https://carsalesbase.com/wp-content/uploads/2019/03/BMW_3_series-US-car-sales-statistics.jpg"
							 alt="White BMW 3-series">
						<!-- Grey internal box -->
						<h2>Available Listings</h2>
					</a>
				</div>
			</div>
			
			<div class="row">
				<!-- Ultimate Driving Experience -->
				<div id="div_ultimate" class="col-12">
					<img id="img_ultimate" src="images/bmw-m4gt4.jpg" alt="BMW M4 GT4 Racecar">
					<h2 id="h2_ultimate">THE <span>ULTIMATE</span> DRIVING <br> EXPERIENCE</h2>
					<div class="learn">
						<a href="">Learn More</a>
					</div>
				</div>
			</div>
			
			<!-- Getting Started Section --> <!-- With heavy inspiration from: https://www.bmwusa.com/ -->
			<div class="row">
				<!-- Trade-In Value -->
				<div class="col-12 col-md-4">
					<div class="logobox">
						<div>
							<img src="https://www.bmwusa.com/content/dam/bmwusa/homepage/financing/Trade-In-Value_80-px@3x.png.bmwimg.xlarge.png"
								 alt="Symbol for Trade">
						</div>
						<h4>Trade-In Value</h4>
						<p>
							Get an up-to-date estimate on your vehicle's trade-in value.
						</p>
						<a href="https://www.intelliprice.com/intellipricedealer/start.htm?dealerid=952001"
						   target="_blank">Visit Black Book</a>
					</div>
				</div>
				<!-- Credit Score -->
				<div class="col-12 col-md-4">
					<div class="logobox">
						<div>
							<img src="https://www.bmwusa.com/content/dam/bmwusa/homepage/financing/Credit-Score_80px@3x.png.bmwimg.xlarge.png"
								 alt="Symbol for Credit Score">
						</div>
						<h4>Check Your Credit Score</h4>
						<p>
							See where you stand on your journey to owning a BMW.
						</p>
						<a href="https://www.intelliprice.com/intellipricedealer/start.htm?dealerID=9541001"
						   target="_blank">Visit Equifax</a>
					</div>
				</div>
				<!-- Financing -->
				<div class="col-12 col-md-4">
					<div class="logobox">
						<div>
							<img src="https://www.bmwusa.com/content/dam/bmwusa/homepage/financing/Apply-For-Financing_80-px@3x.png.bmwimg.xlarge.png"
								 alt="Symbol for Finance">
						</div>
						<h4>Apply for Financing</h4>
						<p>
							Own the BMW of your dreams with BMW Financial Services.
						</p>
						<a href="https://creditapp.bmwusa.com/" target="_blank">Get Started</a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<div id="footer" class="container-fluid">
			<div class="row">
			
				<div class="col-md-2"></div>
				
				<div class="col-md-4 col-6">
					<h4>Links:</h4>
					<ul>
						<li><a href="about.php">Our History</a></li>
						<li><a href="about.php#bmw_m_performance">BMW M Performace</a></li>
						<li><a href="schedule.php#???">The Ultimate Driving Experience</a></li>
						<li><a href="listings.php#listings_title1">View Inventory</a></li>
                        <li><a href="company_blog.php">Company Blog</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-6">
					<h4>Contact Us</h4>
					<ul>
						<li>sales@bmwsunnyville.com</li>
						<li>123-456-7890</li>
						<li>@BMWSunnyville</li>
					</ul>
				</div>
				
				<div class="col-md-2"></div>
				
			</div>
		</div>
	</body>
</html>