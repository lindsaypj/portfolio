<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 5/14/22
	File Name: blog_2.php

	This is a company blog page: The Ultimate Driving Experience
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
    <!-- Blog internal Nav -->
    <div class="row">
        <div class="col-12 col-sm-9 mx-auto">
            <a class="float-left font-weight-bold" href="blog_1.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
                <p class="float-right"> Previous: Working With Passion</p>
            </a>
            <a class="float-right font-weight-bold" href="blog_3.php">
                <p class="float-left">Next: All Electric by 2030</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </a>
        </div>
    </div>


    <!-- Blog header -->
    <div class="row">
        <div id="blog-header" class="col-12">
            <h3>The Ultimate Driving Experience</h3>
            <div class="divider"></div>
        </div>
    </div>

    <div class="row">
        <div id="blog-content" class="col-12 col-sm-9 mx-auto pt-5 pb-3"> <!-- EM DASH: — -->
            <p>
                We pride ourselves on our passion for the driving experience. In order to celebrate our passion we hold
                a biannual company track event. We want to share the Ultimate Driving Experience with you and your
                family. From the comfort of the 5 Series, to the track focused M4 GTS, come experience what we offer
                each one of our customers.
            </p>
            <p>
                BMW offers a wide range of vehicles, all of which offer an excellent driving experience. But each model
                is unique, and serves a slightly different role. Through these events, we hope that you can get a
                better perspective on the variety that is offered. Here is a brief overview of the models:
            </p>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <ul class="text-default float-md-right">
                        <li>2 Series</li>
                        <li>3 & 4 Series</li>
                        <li>5 & 6 Series</li>
                        <li>7 & 8 Series</li>
                        <li>X Models</li>
                        <li>I Models</li>
                        <li>M Models</li>
                    </ul>
                </div>
                <div class="d-none d-md-block col-md-8 col-lg-9">
                    <img class="w-100-lg-75 mb-2 mr-3 ml-5" src="images/bmw-m4gts.jpg" alt="BMW M4 GTS on Track" title="M4 GTS">
                </div>
            </div>

            <p>
                The 2 Series is the cheapest model offered. While compact and affordable, the BMW 2 Series is considered
                one of the most engaging models to drive. The short wheelbase provides excellent turn-in, making it a
                blast to drive on windy roads. With decent trunk space and 4 seats, this an excellent option at its
                price point.
            </p>
            <p>
                A step up from the compact 2 Series, the 3 Series and 4 Series make up the full size sedan and coupe
                respectively. Offering more luxury, more storage, and the same BMW sporty feel. These are the most
                common models, so be sure to experience them.
            </p>

            <p>
                The 5 and 6 Series focus on a smooth ride over driving performance. With plenty of space for both
                passengers and storage, the 5 Series has all the practicality you could ask for. While these models may
                not be as engaging around tight turns, they can certainly keep up when you put your foot down.
            </p>

            <p>
                The 7 and 8 Series are the pinnacle of BMW luxury. With all the
                <a href="//www.bmwusa.com/vehicles/7-series/sedan/overview.html#!#technology" target="_blank">
                    fancy features
                </a>
                and the smoothest of rides. The 7 Series is the perfect luxury chauffeur, while the 8 Series coupe
                focuses more on the driving luxury experience.
            </p>

            <p>
                The BMW X models 1 through 7 have a similar structure to the Series 2-8, however the X models are
                off-road capable SUVs. The X1 and X2 are the most compact, the X3 and X4 are full size, the X5 and X6
                are more luxury focused, and the X7 is the top of the line luxury with no compromises.
            </p>

            <p>
                The future of BMW is in the I models. The I models are BMW's all electric vehicles. Currently, there is
                the i4 and iX sedan and SUV. Experience these to experience the future of BMW.
            </p>

            <p>
                The peak of BMW performance lies in the M models. These models have their roots in
                <a href="//www.bmw-motorsport.com/en/home.html" target="_blank">Motorsports</a> and are
                designed for maximum performance. For every model mentioned, there is a Motorsport version, an M model.
                These vehicles have been upgraded to stand up to hard abuse and provide faster lap times.
            </p>

            <p>
                There is a BMW for everyone. Through events like this, we want you to experience all that we offer, so
                that you can guide our customers to the right vehicle for their needs. Come join us at the Pacific
                Raceway for the Ultimate Driving Experience!
            </p>
            <p class="divider pb-2">

            </p>
            <p class="text-right font-italic"> Patrick Lindsay - 5/15/2022</p>
        </div>
    </div>
</div>

<!-- Blog internal Nav -->
<div class="row">
    <div class="col-12 col-sm-9 mx-auto mb-3">
        <a class="float-left font-weight-bold" href="blog_1.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
            <p class="float-right"> Previous: Working With Passion</p>
        </a>
        <a class="float-right font-weight-bold" href="blog_3.php">
            <p class="float-left">Next: All Electric by 2030</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
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