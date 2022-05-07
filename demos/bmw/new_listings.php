<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 6/1/21
	File Name: new_listings.php
	
	This is the page for displaying the new listings on the stealership website.
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
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@700&display=swap" rel="stylesheet">
		
		<!-- Bootstrap Link/Stylesheet -->
		<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.css" rel="stylesheet">
		<!-- CSS Stylesheet -->
		<link href="styles.css" rel="stylesheet">	
	</head>
	
	<body>
		<!-- Navigation -->
        <?php include("includes/nav.html"); ?>
		
		<!-- New Inventory -->
		<div class="new_listings_grid">
			<div id="listings_title1" class="title relative">
				<div id="new_listings" class="anchor"></div>
				<h3 >New Vehicles</h3>
			</div>
			
			<div id="listings_b7" class="panel">
				<a href="listings/alpina_xb7_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://s.aolcdn.com/commerce/autodata/images/USD00BMC321A021001.jpg" alt="Black 2021 Alpina B7">
					<h2 class="listings_h2">2021 Alpina B7</h2>
					<p>$156,850</p>
				</a>
			</div>
			
			<div id="listings_m5comp" class="panel">
				<a href="listings/f90_m5_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/p90390718-highres-1592255347.jpg" alt="Red BMW M5 Competition">
					<h2 class="listings_h2">2021 M5 Competition</h2>
					<p>$137,500</p>
				</a>
			</div>
			
			<div id="listings_m8comp" class="panel">
				<a href="listings/f92_m8comp_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://cdn.carbuzz.com/gallery-images/840x560/742000/700/742755.jpg" alt="Blue BMW M8 Competition">
					<h2 class="listings_h2">2021 M8 Competition</h2>
					<p>$168,200</p>
				</a>
			</div>

			<div id="listings_i3" class="panel">
				<a href="listings/i01_i3_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://cdn.carbuzz.com/gallery-images/840x560/406000/500/406561.jpg" alt="">
					<h2 class="listings_h2">2021 BMW i3</h2>
					<p>$45,700</p>
				</a>
			</div>
			
			<div id="listings_x5" class="panel">
				<a href="listings/g05_x5_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://motorillustrated.com/wp-content/uploads/2021/01/2021-BMW-X5-01.jpg"
                         alt="">
					<h2 class="listings_h2">2021 X5 xDrive35e</h2>
					<p>$62,800</p>
				</a>
			</div>
			
			<div id="listings_330i" class="panel">
				<a href="listings/g20_330i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="//cdn.carbuzz.com/gallery-images/1600/515000/200/515213.jpg"
                         alt="2021 BMW 330i xDrive front right">
					<h2 class="listings_h2">2021 330i xDrive</h2>
					<p>$51,400</p>
				</a>
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