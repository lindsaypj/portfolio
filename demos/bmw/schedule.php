<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 6/1/21
	File Name: schedule.php
	
	This is the scheduling page for the stealership website. (service, meetings,
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