<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 5/12/22
	File Name: company_blog.php

	This is a company blog home page
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


    <!-- Blog 1 -->
    <div class="row">
        <a href="blog_1.php" class="text-decoration-none no-underline text-dark">
            <div id="blog-1" class="col-12 col-sm-8 mx-auto">
                <h4 class="ms-2 ms-sm-0">Working With Passion</h4>
                <p class="m-0">
                    At BMW of Sunnyville we are a family of car fanatics. We are passionate about the driving experience
                    and work to share our passion with our customers. We strive to provide our customers with the best
                    experience, both when they are with our team and when they on the road after we hand them their keys...
                    <span class="text-primary">Read More</span>
                </p>
                <p class="text-right font-italic no-underline"> Patrick Lindsay - 4/26/2022</p>
            </div>
        </a>
    </div>

    <!-- Blog 2 -->
    <div class="row">
        <a href="blog_2.php" class="text-decoration-none no-underline text-dark">
            <div id="blog-1" class="col-12 col-sm-8 mx-auto">
                <h4 class="ms-2 ms-sm-0">The Ultimate Driving Experience</h4>
                <p class="m-0">
                    We pride ourselves on our passion for the driving experience. In order to celebrate our passion we hold
                    a biannual company track event. We want to share the Ultimate Driving Experience with you and your
                    family. From the comfort of the 5 Series, to the track focused M4 GTS, come experience what we offer...
                    <span class="text-primary">Read More</span>
                </p>
                <p class="text-right font-italic"> Patrick Lindsay - 5/15/2022</p>
            </div>
        </a>
    </div>

    <!-- Blog 3 -->
    <div class="row">
        <a href="blog_3.php" class="text-decoration-none no-underline text-dark">
            <div id="blog-1" class="col-12 col-sm-8 mx-auto">
                <h4 class="ms-2 ms-sm-0">All Electric by 2030</h4>
                <p class="m-0">
                    Our state governor recently signed a goal to ban the sale of new gas powered vehicles by 2030. While
                    vehicle manufactures have been working to electrify their line-up of cars, BMW currently only sells 3
                    electric models. This all sounds a little scary, but don't start panicking yet. We have 8 more years to...
                    <span class="text-primary">Read More</span>
                </p>
                <p class="text-right font-italic"> Patrick Lindsay - 5/25/2022</p>
            </div>
        </a>
    </div>

    <!-- Blog 4 -->
    <div class="row">
        <a href="blog_4.php" class="text-decoration-none no-underline text-dark">
            <div id="blog-1" class="col-12 col-sm-8 mx-auto">
                <h4 class="ms-2 ms-sm-0">Three Steps to Reduce Stress</h4>
                <p class="m-0">
                    We all tend to stay pretty busy. Cars come in and out, either through sales or for service all day.
                    With so much to do and deadlines to meet, work can get stressful. Stressed employees tend to make more
                    mistakes, thus creating more work—leading to more mistakes. We want you to be prepared for your work, so...
                    <span class="text-primary">Read More</span>
                </p>
                <p class="text-right font-italic"> Patrick Lindsay - 6/6/2022</p>
            </div>
        </a>
    </div>

</div>

<!-- Footer -->
<div id="footer" class="container-fluid mt-5">
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