<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 6/1/21
	File Name: about.php
	
	This is the about page for the Dealership website.
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
		
		<!-- About Us -->
		<div id="about_grid">
			<div id="about_title1" class="title relative">
				<div id="our_history" class="ancor_offset"></div>
				<h3>Our History</h3>
			</div>
			<div id="about_text1" class="about_text">
				<p class="basic"> <!-- Source: https://www.bmwnorthwest.com/ -->
					Whether it's your first BMW ride, just browsing our page or if you're one of our loyal customers, we
					welcome you to BMW Northwest. We have been a family-owned dealership since 1972 and are celebrating
					50 years of integrity, elite customer service and business transparency. We are proud to be the only
					family owned BMW dealership in Western Holly and an M Certified Dealership.
				</p>
				<p class="basic"> <!-- Source: https://www.bmwnorthwest.com/ -->
					While we may talk a big game about our customer experience, the evidence is there and we are happy
					to back it up. We have recently won the 2018 family business of the year award and are immensely
					proud of the hard work it took to achieve this feat. We have a commitment to our local community,
					especially our military and military family partners from Joint Base Brian Mclean. We have stellar
					military discounts available and special financing to show our gratitude.
				</p>
				<p class="basic"> <!-- Source: https://www.bmwnorthwest.com/ -->
					At the end of the day, we have made our name through the fantastic BMW inventory we deliver, as our
					dealership consistently displays best practices. We make purchasing a BMW easy whether you are from
					Sunnyville or any other neighboring communities.
				</p>
			</div>
			<div id="about_img1" class="about_img">
				<img class="grid_img" src="https://www.bmwofridgefield.com/wp-content/themes/DealerInspireDealerTheme/images/map-image.jpg"
					 alt="BMW Dealership">
			</div>
			
			<div id="about_title2" class="title relative">
				<div id="bmw_m_performance" class="ancor_offset"></div>
				<h3>BMW M Performance</h3>
			</div>
			<div id="about_text2" class="about_text">
				<p class="basic"> <!-- source: https://www.bmwnorthwest.com/bmw-m-certified-dealer.htm -->
					M. The most powerful letter in the world. M generates performance unlike anything else. And after
					four decades of delivering hair-raising thrills, it's still pushing the limits. But don't just take
					our word for it. See for yourself when you grip the wheel of any vehicle from our M Family. BMW M is
					all about the fascination of driving both in day-to-day traffic and on the racetrack. The brand
					radiates power and superiority and remains supreme at all times.
				<p>
				<p class="basic">
					We know our M customers are extraordinary - and deserve customer service to match. First-class
					advice and assistance is integral to the BMW M Brand experience. BMW M sales and service experts are
					the crème de la crème at BMW. Handpicked, they receive extensive training at various locations. They
					know our Automobiles inside and out - so our customers can be sure of in-depth, up-to-the-minute
					advice.
				</p>
			</div>
			<div id="about_img2" class="about_img">
				<img class="grid_img" src="https://images.hgmsites.net/hug/2022-bmw-m4-gt3-race-car_100793839_h.jpg"
					 alt="BMW M4 and BMW M4 GT3 Race Car">
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