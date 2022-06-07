<!DOCTYPE html>
<!--
	Author: Patrick Lindsay
	Date: 6/6/22
	File Name: blog_4.php

	This is a company blog page: Three Steps to Reduce Stress
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
            <a class="float-left font-weight-bold" href="blog_3.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                </svg>
                <p class="float-right"> Previous: All Electric By 2030</p>
            </a>
        </div>
    </div>


    <!-- Blog header -->
    <div class="row">
        <div id="blog-header" class="col-12">
            <h3>Three Steps to Reduce Stress</h3>
            <div class="divider"></div>
        </div>
    </div>

    <div class="row">
        <div id="blog-content" class="col-12 col-sm-9 mx-auto pt-5 pb-3"> <!-- EM DASH: — -->
            <p>
                At BMW of Sunnyville, we all tend to stay pretty busy. Cars come in and out all day, either through
                sales or for service. With so much to do and deadlines to meet, work can get stressful. Stressed
                employees tend to make more mistakes, thus creating more work—leading to more mistakes. We want you to
                be prepared for your work, so you can avoid these stressful cycles. In this post, we cover some ideas to
                help you stay on track and reduce stress while you are working.
            </p>
            <p>
                The first step to reducing stress is to make a plan. Either at the beginning or end of the day, ask
                yourself, what needs to get done by when? Assess the priority of tasks. Address the higher priority,
                potentially more stressful, tasks first. Are you concerned that you may not get to certain tasks? With a
                good plan, you can tackle your day without stressing about tasks you may be forgetting. Need a good
                note-taking and todo list app? We recommend <a href="https://keep.google.com/" target="_blank">Google
                Keep</a>. You can store your notes on the cloud and set reminders for your tasks.
            </p>
            <p>
                Our second recommended step to reducing stress is to communicate. Communication is critical to a
                successful workplace. Many stressful situations can be avoided with good team communication. Voice your
                concerns and ask your questions early. We are here to help each other succeed. Raising potential issues
                with your team can also reduce the stressful situations they will encounter. Your manager is there to
                help you should you need it. If you find yourself stressed, plan a meeting with your manager to talk
                about what can be done to remedy your stress.
            </p>
            <p>
                The third step to a stress-free work environment is taking more frequent breaks. If you notice
                that you are slowing down and getting stuck on something, take a few minutes to relax. We don’t care how
                many breaks you take in the day, as long at you get your work done. Consider adding breaks into your
                schedule. Are you getting enough sleep? A lack of sleep can also lead to more fatigue throughout the
                day. You can use a <a href="https://www.techradar.com/best/best-sleep-tracker" target="_blank">sleep
                tracker</a> to ensure that you are getting adequate sleep. Taking more frequent breaks and getting
                adequate sleep can drastically improve your focus and prevent stress.
            </p>
            <p>
                With theses three simple steps, you can reduce your stress at work and work more efficiency. At BMW of
                Sunnyville, we support each other. When we can work stress-free, we are providing a stress-free
                environment for our customers.
            </p>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5">
                    <ol class="text-default float-md-right">
                        <li>Make a plan</li>
                        <li>Communicate</li>
                        <li>Take frequent breaks</li>
                    </ol>
                </div>
            </div>

            <p class="divider pb-2"></p>
            <p class="text-right font-italic"> Patrick Lindsay - 6/6/2022</p>
        </div>
    </div>
</div>

<!-- Blog internal Nav -->
<div class="row">
    <div class="col-12 col-sm-9 mx-auto mb-3">
        <a class="float-left font-weight-bold" href="blog_3.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            </svg>
            <p class="float-right"> Previous: All Electric By 2030</p>
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