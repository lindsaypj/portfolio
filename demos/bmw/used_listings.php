<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 6/1/21
	File Name: used_listings.php
	
	This is the page for displaying the used listings on the stealership website.
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
		
		<!-- Used Inventory -->
		<div class="used_listings_grid">
			<div id="listings_title1" class="title relative">
				<div id="used_listings" class="anchor"></div>
				<h3 >Used Vehicles</h3>
			</div>
			
			<div id="listings_435i" class="panel">
				<a href="listings/f32_435i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://f30.bimmerpost.com/forums/attachment.php?attachmentid=1119846&stc=1&d=1416349116" alt="">
					<h2 class="listings_h2">2016 BMW 435i</h2>
					<p>$21,995</p>
				</a>
			</div>
			
			<div id="listings_330ci" class="panel">
				<a href="listings/e46_330ci_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://bringatrailer.com/wp-content/uploads/2017/06/LF.jpg?fit=940%2C624" alt="">
					<h2 class="listings_h2">2002 BMW 330ci</h2>
					<p>$5500</p>
				</a>
			</div>
			
			<div id="listings_z4" class="panel">
				<a href="listings/e89_z435i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://www.exclusiveautomotivegroup.com/galleria_images/191/191_p2_l.jpg" alt="">
					<h2 class="listings_h2">2012 Z4 sDrive35i</h2>
					<p>$12,700</p>
				</a>
			</div>
			
			<div id="listings_m3" class="panel">
				<a href="listings/f80_m3_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="http://www.marinoperformancemotors.com/imagetag/12652/36/l/Used-2018-BMW-M3.jpg" alt="">
					<h2 class="listings_h2">2018 BMW M3</h2>
					<p>$58,600</p>
				</a>
			</div>
		
			<div id="listings_550i" class="panel">
				<a href="listings/f10_550i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://static.cargurus.com/images/forsale/2021/05/05/05/29/2014_bmw_5_series-pic-8753317275895974308-1024x768.jpeg" alt="">
					<h2 class="listings_h2">2013 BMW 550i</h2>
					<p>$24,995</p>
				</a>
			</div>
			
			
			<div id="listings_m240i" class="panel">
				<a href="listings/f22_m240i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://www.autocar.co.uk/sites/autocar.co.uk/files/bmw-m240i.jpg" alt="">
					<h2 class="listings_h2">2018 BMW M240i</h2>
					<p>$49,600</p>
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