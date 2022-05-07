<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 6/1/21
	File Name: listings.php

	This is a company blog page
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
    <!-- Header -->
    <div id="header" class="container-fluid">
        <!-- Logo -->
        <img src="https://di-uploads-pod16.dealerinspire.com/competitionbmwofsmithtown/uploads/2020/03/new-bmw-logo.jpg"
             alt="BMW Logo">
        <!-- Title -->
        <div class="row">
            <div class="col-12">
                <h4 id="header-company" class="d-none d-md-inline-block">BMW of Sunnyville</h4>
                <h1>Company Blog</h1>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <?php include("includes/nav.html"); ?>

    <div class="container-fluid">
        <!-- Blog header -->
        <div class="row">
            <div id="blog-header" class="col-12">
                <h3>Working With Passion</h3>
                <div class="divider"></div>
            </div>
        </div>

        <div class="row">
            <div id="blog-content" class="col-9 mx-auto pt-5 pb-3"> <!-- EM DASH: — -->
                <p>
                    At BMW of Sunnyville we are a family of car fanatics. We are passionate about the driving experience
                    and work to share our passion with our customers. We strive to provide our customers with the best
                    experience, both when they are with our team and when they on the road after we hand them their keys.
                </p>
                <p>
                    In sales, we find the perfect vehicles for customers' needs. The BMW <a href="https://www.bmwusa.com/all-bmws.html"
                    target="_blank">model range</a> is diverse, but our knowledgeable sales team can help customers
                    narrow in on the features they want. Whether it’s an SUV for off-road adventures, a commuter car for
                    the family, or a sporty coupé for the weekend, we find our customers their
                    “<a href="//www.hotcars.com/secret-origin-bmws-ultimate-driving-machine-slogan/" target="_blank">Ultimate
                    Driving Machine</a>.”
                </p>
                <p>
                    With each vehicle, the service department works with the customer to create a service schedule that
                    ensures as many hazard free miles as possible. Our customers trust us with their keys because our
                    skilled technicians work together to diagnose and address potential issues before they become
                    serious. As BMW enthusiasts, we know all the common problems and how to address them so that they
                    don't come back. We communicate our concerns with the customer and ensure that they are informed on
                    all vehicle services.
                </p>
                <p>
                    As an employee of BMW of Sunnyville, you are a part of our family. With an open door policy, we
                    value teamwork and communication between all departments. We look out for each other and are always
                    happy to help one another grow. Each team has an assigned leader whose responsibility is to mentor
                    and manage the team efficiency. We want our fellow employees to succeed so that our customers can
                    trust each and every member of our team.
                </p>
                <p class="divider pb-2">
                    We value customers at our core. We make maintenance easy to navigate. We grow as a team. We look to
                    share our passion for the driving experience. We are BMW of Sunnyville.
                </p>
                <p class="text-right font-italic"> Patrick Lindsay - 4/26/2022</p>
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