<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 6/1/21
	File Name: listings.php
	
	This is the page for displaying the available listings on the Dealership website. (links to New and Used pages)
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
		
		<div class="container-fluid">
			<div class="row">
				<!-- New Cars Panel -->
				<div class="col-12 col-md-6 panel panel_left margin26">
					<a href="new_listings.php">
						<div class="black_box2"></div> <!-- 1920 x 1080 -->
						<img class="panel_img" src="https://cdn.motor1.com/images/mgl/vklJq/s1/2021-bmw-m5-m5-competition.jpg"
							 alt="Red BMW M5">
						<!-- Grey internal box -->
						<h2>New Vehicles</h2>
					</a>
				</div>
				
				<!-- Used Cars Panel -->
				<div class="col-12 col-md-6 panel panel_right margin26">
					<a href="used_listings.php">
						<div class="black_box2"></div>
						<img class="panel_img" src="https://editorials.autotrader.ca/media/157433/2018-bmw-x5-xdrive35i-05-jm.jpg?center=0.539906103286385,0.5&mode=crop&width=1920&height=1080&rnd=131793230380000000"
							 alt="White BMW X5">
						<!-- Grey internal box -->
						<h2>Used Vehicles</h2>
					</a>
				</div>
			</div>
		</div>
		
		<!-- All Inventory -->
		<div class="listings_grid">
			<div id="listings_title1" class="title relative">
				<div id="all_listings" class="anchor"></div>
				<h3 >All Listings</h3>
			</div>
			
			
			<div id="listings_435i" class="panel">
				<a href="listings/f32_435i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://f30.bimmerpost.com/forums/attachment.php?attachmentid=1119846&stc=1&d=1416349116"
						 alt="">
					<h2 class="listings_h2">2016 BMW 435i</h2>
					<p>$21,995</p>
				</a>
			</div>
			
			<div id="listings_b7" class="panel">
				<a href="listings/alpina_xb7_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://s.aolcdn.com/commerce/autodata/images/USD00BMC321A021001.jpg"
						 alt="Black 2021 Alpina B7">
					<h2 class="listings_h2">2021 Alpina B7</h2>
					<p>$156,850</p>
				</a>
			</div>
			
			<div id="listings_330ci" class="panel">
				<a href="listings/e46_330ci_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://bringatrailer.com/wp-content/uploads/2017/06/LF.jpg?fit=940%2C624"
						 alt="">
					<h2 class="listings_h2">2002 BMW 330ci</h2>
					<p>$5500</p>
				</a>
			</div>
			
			<div id="listings_z4" class="panel">
				<a href="listings/e89_z435i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://www.exclusiveautomotivegroup.com/galleria_images/191/191_p2_l.jpg"
						 alt="">
					<h2 class="listings_h2">2012 Z4 sDrive35i</h2>
					<p>$12,700</p>
				</a>
			</div>
			
			<div id="listings_m5comp" class="panel">
				<a href="listings/f90_m5_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/p90390718-highres-1592255347.jpg"
						 alt="">
					<h2 class="listings_h2">2021 M5 Competition</h2>
					<p>$137,500</p>
				</a>
			</div>
			
			<div id="listings_m8comp" class="panel">
				<a href="listings/f92_m8comp_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://cdn.carbuzz.com/gallery-images/840x560/742000/700/742755.jpg"
						 alt="">
					<h2 class="listings_h2">2021 M8 Competition</h2>
					<p>$168,200</p>
				</a>
			</div>
			
			<div id="listings_m3" class="panel">
				<a href="listings/f80_m3_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="http://www.marinoperformancemotors.com/imagetag/12652/36/l/Used-2018-BMW-M3.jpg"
						 alt="">
					<h2 class="listings_h2">2018 BMW M3</h2>
					<p>$58,600</p>
				</a>
			</div>
		
			<div id="listings_550i" class="panel">
				<a href="listings/f10_550i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://static.cargurus.com/images/forsale/2021/05/05/05/29/2014_bmw_5_series-pic-8753317275895974308-1024x768.jpeg"
						 alt="">
					<h2 class="listings_h2">2013 BMW 550i</h2>
					<p>$24,995</p>
				</a>
			</div>
			
			
			<div id="listings_m240i" class="panel">
				<a href="listings/f22_m240i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="https://www.autocar.co.uk/sites/autocar.co.uk/files/bmw-m240i.jpg"
						 alt="">
					<h2 class="listings_h2">2018 BMW M240i</h2>
					<p>$49,600</p>
				</a>
			</div>

			<div id="listings_i3" class="panel">
				<a href="listings/i01_i3_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="//cdn.carbuzz.com/gallery-images/840x560/406000/500/406561.jpg"
						 alt="">
					<h2 class="listings_h2">2021 BMW i3</h2>
					<p>$45,700</p>
				</a>
			</div>
			
			<div id="listings_x5" class="panel">
				<a href="listings/g05_x5_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="//motorillustrated.com/wp-content/uploads/2021/01/2021-BMW-X5-01.jpg"
						 alt="">
					<h2 class="listings_h2">2021 X5 xDrive35e</h2>
					<p>$62,800</p>
				</a>
			</div>
			
			<div id="listings_330i" class="panel">
				<a href="listings/g20_330i_listing.html">
					<div class="black_box3"></div>
					<img class="panel_img" src="//cdn.carbuzz.com/gallery-images/1600/515000/200/515213.jpg"
						 alt="Blue 2021 BMW 330i xDrive from the front right">
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