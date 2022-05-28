<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 5/25/22
	File Name: blog_3.php

	This is a company blog page: All Electric by 2030
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
            <a class="float-left font-weight-bold" href="blog_2.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
                <p class="float-right"> Previous: The Ultimate Driving Experience</p>
            </a>
            <a class="float-right font-weight-bold" href="blog_4.php">
                <p class="float-left">Next: Blog 4 </p>
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </a>
        </div>
    </div>


    <!-- Blog header -->
    <div class="row">
        <div id="blog-header" class="col-12">
            <h3>All Electric By 2030</h3>
            <div class="divider"></div>
        </div>
    </div>

    <div class="row">
        <div id="blog-content" class="col-12 col-sm-9 mx-auto pt-5 pb-3"> <!-- EM DASH: — -->
            <p>
                Our state governor recently signed a goal to ban the sale of new gas powered vehicles by 2030. While
                vehicle manufactures have been working to electrify their line-up of cars, BMW currently only sells 3
                electric models. This all sounds a little scary, but don't start panicking yet. We have 8 more years to
                prepare, so lets look at what we can do ease our transition to a fully electric dealership.
            </p>
            <p>
                With carbon emissions still on the rise, climate scientists cannot stress enough the crisis that we are
                in. In an effort to bring attention to the dire situation, our governor included a goal in the recent
                transportation package. This goal, to restrict the sale of new gas powered vehicles, is the most
                ambitious of any state. However, this does not mean that gas cars will simply go away. The goal
                specifically targets <span class="font-italic">new</span> vehicles, meaning that existing gas cars will
                still be in use for at least the following decade.
            </p>
            <p>
                Since we deal primarily in new BMWs, it is important for us to remain aware of our brand's status within
                the electric car market. BMW has built its brand on the ultimate driving machine, but we have yet to see
                a true electric BMW M car. It is rumored that the current generation of BMWs will be the last of their
                gas powered vehicles. But, it is unclear when the next generation will debut, as the current generation
                has just been released.
            </p>
            <p>
                Let's not forget the significance of the climate crisis which drives this change. During our transition,
                we are looking for ways to reduce our climate impact. Our first major change will be to go paperless. We
                are already on our computers and devices. We will use email for communications and the cloud for data
                backups. Our fantastic web development team has started digitizing our sales forms and internal
                documents. We will be purchasing tablets for the sales team to facilitate customer completion of forms
                and contracts, and we will only provide paper copies upon customer request. Learn more about the effects
                of going paperless
                <a href="//start.docuware.com/blog/document-management/how-going-paperless-reduces-your-companys-carbon-footprint" target="_blank">
                    here</a>.
            </p>
            <p>
                With increasing demand on our electricity bill, we continue to increase our reliance on the coal powered
                infrastructure, where we receive our energy. We believe it is worth investing in green energy and
                carbon-neutral tech for our facility. Here is a list of ideas we are considering.
            </p>

            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <ul class="text-default float-md-right">
                        <li>Solar panels</li>
                        <li>Solar parking lamps</li>
                        <li>Battery packs</li>
                        <li>LED Lights</li>
                        <li>Double glazed windows</li>
                    </ul>
                </div>
                <div class="d-none d-md-block col-md-8 col-lg-9">
                    <img class="w-100-lg-75 mb-2 mr-3 ml-5" src="images/bmw-solar.jpg" alt="Large solar panel array">
                </div>
            </div>

            <p>
                Electric vehicle technology is evolving rapidly, and we recognise that our service department staff may
                not have the requisite knowledge on electric vehicles. We are offering to help pay for our technicians'
                education in electric vehicles. We recognise that these new vehicles resemble computers more than cars.
                We want you to feel confident as the vehicles you service become higher voltage and all-electric. Here
                is a
                <a href="https://support.skillscommons.org/showcases/open-courseware/energy/e-vehicle-tech-cert/">
                    course
                </a>
                we recommend for your electric vehicle certification should you choose to pursue it.
            </p>

            <p class="divider pb-2">
                Together, we can prepare for this industry evolution. We are not afraid to do our part in fighting the
                climate crisis. The BMW of Sunnyville family is here for you, and we welcome your ideas and contributions
                towards our fully electric future.
            </p>
            <p class="text-right font-italic"> Patrick Lindsay - 5/25/2022</p>
        </div>
    </div>
</div>

<!-- Blog internal Nav -->
<div class="row">
    <div class="col-12 col-sm-9 mx-auto mb-3">
        <a class="float-left font-weight-bold" href="blog_2.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
            <p class="float-right"> Previous: The Ultimate Driving Experience</p>
        </a>
        <a class="float-right font-weight-bold" href="blog_4.php">
            <p class="float-left">Next: Blog 4 </p>
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