<?php
    session_start();
    $_SESSION['currentPage'] = "/portfolio/";
    $page = "home";
    $activeNav = $page;

    // Validate/check login credentials
    require("login/login-check.php");
?>
<!--
    Portfolio Project: Portfolio Home Page
    Author: Patrick Lindsay
    File: index.html
    Date: 3/18/22
-->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/portfolio-styles.css">
    <link rel="stylesheet" href="css/errors.css">
    <link rel="stylesheet" href="css/nav-styles.css">

    <!-- Favicon -->
    <link id="favicon" rel="icon" type="image/svg+xml" href="images/logos/home-icon.png">

    <title>Home</title>

</head>

<body>
<main>

<?php
include("nav.php");

// Add login modal
$cancelLink = "redirects/cancel.php";
include("login/login-modal.php");
?>

<div id="container1" class="container-fluid px-0 pt-2">

    <!--  ====================   HEADER   ====================  -->

    <div class="pb-2 mb-3 border-bottom border-2"></div> <!-- divider -->
    <!-- Header (Name) -->
    <div class="p-0 p-md-2 p-lg-4 mb-3 bg-dark bg-opacity-80 text-white shadow" id="headerName">
        <div class="container-fluid py-3">
            <h1 class="display-3 fw-bold mx-sm-5 text-center text-md-start">Patrick Lindsay</h1>
        </div>
    </div>
    <div class="mb-4 border-top border-2"></div> <!-- divider -->


    <!--  ====================   ABOUT ME   ====================  -->

    <div class="row mx-0">
        <div class="col-12 col-md-10 col-lg-9 mx-auto">
            <!-- Div Background -->
            <div class="px-3 text-white bg-dark bg-opacity-80 shadow rounded">
                <div class="row p-3 p-lg-5">
                    <!-- Portrait -->
                    <div class="col-12 col-md-4 d-flex align-content-center">
                        <div class="d-table mx-auto">
                            <span class="d-md-table-cell d-inline-block align-middle pe-xl-5 ease-pad">
                                <img id="portrait" class="rounded mb-3 mb-md-0 shadow" src="images/Portrait.jpg" alt="Portrait of myself, Patrick lindsay">
                            </span>
                        </div>
                    </div>
                    <!-- About Me -->
                    <div class="col-12 col-md-8">
                        <h2 class="px-5 fw-normal text-center text-md-start">About Me</h2>
                        <div class="pb-3 border-top border-2"></div>
                        <p class="indent mb-0">
                            My name is Patrick Lindsay, and I am a Software Development student at
                            <a class="text-decoration-none" href="//www.greenriver.edu/" target="_blank">Green River College</a>.
                            For as long as I can remember, my family has been on computers. My dad works in Network
                            Security and my mom is a Data Analyst, so using computers feels natural.
                        </p>
                        <p class="indent mb-0">
                            From Graphic Design and Gaming, to Full-Stack Web Development
                            and Systems Programming, I have many interests in tech. I particularly
                            enjoy solving complex logic problems and learning how things work.
                            I tend to lose track of time when I'm coding, pushing the limits of
                            my understanding.
                        </p>
                        <div class="pt-4 border-bottom border-2"></div>
                        <p class="text-center mt-2 px-5">
                            Look below at some of my projects as I explore the world of software development!
                        </p>
                    </div>
                </div> <!-- Row -->
            </div> <!-- Background -->
        </div> <!-- Col/width -->
    </div> <!-- Row -->


    <div class="page-divider"></div>


    <!--  ====================   WEB DEVELOPMENT   ====================  -->

    <!-- Web Dev Header -->
    <div class="pb-2 mb-3 border-bottom border-2"></div> <!-- divider -->
    <div class="p-0 p-md-2 px-md-5 p-lg-4 mb-3 bg-dark bg-opacity-80 text-white shadow ease-pad">
        <div class="container-fluid py-2 px-md-5 ease-pad">
            <h1 class="indent-md display-6 px-md-5 ease-pad fw-bold mx-5 text-center text-md-start">Web Development</h1>
        </div>
    </div>
    <div class="mb-4 border-top border-2"></div> <!-- divider -->

    <!-- Content -->
    <div class="row mx-0 mb-5">
        <div class="col-12 col-md-10 mx-auto">
            <!-- Div Background -->
            <div class="px-3 px-md-4 px-lg-4 px-xl-5 py-3 py-md-4 bg-dark bg-opacity-80 text-white shadow rounded ease-pad">

                <!-- Team Website -->
                <div class="row my-5">

                    <!-- Pictures -->
                    <div class="col-12 col-lg-8 order-lg-2">
                        <div class="carousel slide carousel-fade mx-auto carousel-dark shadow" id="teamWebsiteCarousel" data-bs-ride="carousel">
                            <!-- Carousel Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#teamWebsiteCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="MediConnect home page"></button>
                                <button type="button" data-bs-target="#teamWebsiteCarousel" data-bs-slide-to="1" aria-label="Add new facility form"></button>
                                <button type="button" data-bs-target="#teamWebsiteCarousel" data-bs-slide-to="2" aria-label="Confirm changes summary form"></button>
                            </div>
                            <!-- Carousel Content -->
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="w-100 d-block" src="images/team-website/TeamWebsiteHome.png" alt="MediConnect team website home page">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 d-block" src="images/team-website/TeamWebsiteNewEntry.png" alt="MediConnect team website add new facility form">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 d-block" src="images/team-website/TeamWebsiteConfirmChanges.png" alt="MediConnect team website edit facility summary">
                                </div>
                            </div>
                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#teamWebsiteCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#teamWebsiteCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> <!-- Carousel Col -->

                    <!-- Description -->
                    <div class="col-12 col-lg-4 order-lg-1 mt-3 mt-lg-0">
                        <div class="d-table pe-0 me-lg-4 mt-md-2 mt-lg-0 h-100">
                            <div class="d-table-cell align-middle">
                                <h2 class="px-5 px-lg-3 fw-normal text-center text-md-start text-lg-center ease-pad">Facility Tracker
                                    <a class="text-primary" href="//runtime-terrors.greenriverdev.com/" target="_blank" aria-label="Live site, MediConnect Home">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="mb-3" viewBox="0 0 16 16">
                                            <title>MediConnect: Live site</title>
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </a>
                                </h2>
                                <div class="pb-3 border-top border-2"></div>
                                <p class="indent mb-0">
                                    As a team of three, we developed a website to track medical facility contact information
                                    for a clinic in the Seattle area. We designed the website with a focus on ease of information
                                    access and maintainability.
                                </p>
                                <div class="pt-3 border-bottom border-2"></div>
                                <div>
                                    <ul class="nav mt-2 navbar-expand justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="//getbootstrap.com/" target="_blank" aria-label="Bootstrap Website">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="36" class="d-block" viewBox="0 0 118 94" role="img">
                                                    <title>Bootstrap</title>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="//datatables.net/" target="_blank" aria-label="Cloud Tables Website">
                                                <img src="images/logos/DatatablesLogo.png" alt="Cloud Tables logo" title="Datatables.net">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="https://www.mysql.com/" target="_blank" aria-label="MySql Website">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 388.12 264.29" width="58.218" height="39.6435" preserveAspectRatio="xMinYMin meet">
                                                 <title>MySql</title>
                                                 <g display="inline" transform="matrix(1.8189257,0,0,1.8237746,-82.14211,-64.843651)">
                                                  <g transform="matrix(1.2699241,0,0,-1.2699241,3.3662307,208.12494)">
                                                   <g transform="scale(0.1,0.1)">
                                                    <path fill-rule="nonzero" fill="currentColor" d="m733.07,319.32-64.832,0c-2.28,109.43-8.6,212.33-18.93,308.72h-0.57104l-98.711-308.72h-49.363l-98.113,308.72h-0.578c-7.28-92.57-11.86-195.47-13.77-308.72h-59.113c3.82,137.73,13.38,266.84,28.68,387.36h80.356l93.535-284.62h0.57397l94.109,284.62h76.887c16.836-141.15,26.778-270.3,29.832-387.36"/>
                                                    <path fill-rule="nonzero" fill="currentColor" d="m1014.3,605.11c-26.401-143.25-61.225-247.35-104.45-312.29-33.679-50.039-70.574-75.058-110.75-75.058-10.71,0-23.917,3.226-39.589,9.636v34.532c7.656-1.121,16.64-1.719,26.972-1.719,18.743,0,33.848,5.18,45.34,15.519,13.762,12.598,20.649,26.758,20.649,42.45,0,10.718-5.372,32.711-16.067,65.98l-71.152,220.95h63.691l51.067-165.25c11.472-37.519,16.257-63.711,14.343-78.64,27.93,74.601,47.442,155.9,58.543,243.89h61.401"/>
                                                    <path fill-rule="nonzero" fill="currentColor" d="m1298.3,426.69c0-32.851-12.07-59.82-36.13-80.921-24.08-21.008-56.43-31.54-96.94-31.54-37.89,0-74.61,12.122-110.18,36.168l16.64,33.274c30.61-15.301,58.31-22.942,83.18-22.942,23.33,0,41.59,5.192,54.8,15.45,13.18,10.332,21.08,24.742,21.08,43.019,0,23-16.04,42.66-45.47,59.153-27.17,14.91-81.47,46.039-81.47,46.039-29.42,21.461-44.17,44.488-44.17,82.429,0,31.379,11,56.742,32.97,76.039,22.02,19.336,50.43,29.004,85.22,29.004,35.96,0,68.66-9.597,98.11-28.722l-14.96-33.243c-25.2,10.684-50.05,16.047-74.55,16.047-19.88,0-35.2-4.773-45.88-14.375-10.74-9.519-17.38-21.769-17.38-36.699,0-22.941,16.39-42.84,46.65-59.652,27.51-14.918,83.14-46.649,83.14-46.649,30.26-21.422,45.34-44.261,45.34-81.879"/>
                                                    <path fill-rule="evenodd" fill="currentColor" d="m1414.2,396.81c-15.69,25.25-23.55,65.769-23.55,121.64,0,97.539,29.66,146.34,88.95,146.34,31,0,53.75-11.672,68.3-34.992,15.67-25.262,23.53-65.43,23.53-120.52,0-98.32-29.66-147.5-88.95-147.5-30.99,0-53.75,11.66-68.28,35.028m230.68-86.829-71.2,35.11c6.3401,5.199,12.36,10.808,17.81,17.301,30.23,35.539,45.36,88.14,45.36,157.78,0,128.15-50.31,192.26-150.92,192.26-49.35,0-87.81-16.25-115.35-48.797-30.24-35.582-45.34-87.985-45.34-157.23,0-68.089,13.38-118.04,40.16-149.77,24.4-28.68,61.3-43.04,110.7-43.04,18.43,0,35.34,2.269,50.71,6.808l92.72-53.957,25.28,43.539"/>
                                                    <path fill-rule="nonzero" fill="currentColor" d="m1877.3,319.32-184.19,0,0,387.36,61.98,0,0-339.71,122.21,0,0-47.649"/>
                                                    <path fill-rule="nonzero" fill="currentColor" d="m1921.5,319.36,10.27,0,0,39.411,13.44,0,0,8.05-37.67,0,0-8.05,13.96,0,0-39.411zm78.15,0,9.6801,0,0,47.461-14.56,0-11.85-32.351-12.9,32.351-14.03,0,0-47.461,9.1599,0,0,36.121,0.5201,0,13.51-36.121,6.9799,0,13.49,36.121,0-36.121"/>
                                                    <path fill-rule="evenodd" fill="currentColor" d="m1955.1,836.43c-37.46,0.93695-66.47-2.801-90.8-13.106-7.02-2.805-18.24-2.805-19.2-11.699,3.77-3.738,4.2201-9.817,7.52-14.988,5.6-9.36,15.41-21.977,24.32-28.547,9.8299-7.492,19.66-14.953,29.97-21.504,18.24-11.281,38.84-17.805,56.6-29.043,10.33-6.543,20.59-14.961,30.92-22,5.13-3.742,8.38-9.836,14.96-12.152v1.417c-3.3001,4.2-4.22,10.286-7.48,14.993-4.67,4.644-9.36,8.883-14.05,13.543-13.58,18.25-30.45,34.148-48.66,47.254-14.99,10.324-47.77,24.367-53.83,41.632,0,0-0.49,0.49597-0.95,0.95697,10.3,0.95001,22.49,4.7,32.31,7.539,15.89,4.2,30.4,3.25,46.78,7.45,7.5,1.886,14.99,4.242,22.51,6.543v4.242c-8.47,8.4059-14.53,19.656-23.42,27.605-23.85,20.586-50.09,40.696-77.23,57.571-14.53,9.363-33.25,15.418-48.7,23.394-5.5899,2.813-14.94,4.199-18.23,8.906-8.4301,10.293-13.13,23.848-19.2,36.036-13.56,25.713-26.69,54.253-38.37,81.443-8.4199,18.24-13.57,36.48-23.87,53.34-48.23,79.58-100.63,127.76-181.13,175.04-17.32,9.84-37.91,14.05-59.89,19.2-11.72,0.49-23.41,1.4-35.11,1.86-7.5,3.29-15,12.19-21.54,16.4-26.69,16.84-95.46,53.34-115.13,5.14-12.64-30.44,18.72-60.38,29.49-75.83,7.9499-10.75,18.26-22.94,23.85-35.09,3.2801-7.96,4.22-16.4,7.51-24.81,7.48-20.59,14.49-43.53,24.34-62.73,5.13-9.8299,10.74-20.14,17.29-28.99,3.7799-5.1799,10.31-7.49,11.72-15.94-6.53-9.35-7.04-23.39-10.78-35.1-16.84-52.89-10.3-118.41,13.58-157.25,7.47-11.699,25.28-37.449,49.15-27.597,21.06,8.4098,16.38,35.089,22.46,58.476,1.3999,5.6562,0.4599,9.3668,3.26,13.106v-0.94592c6.5499-13.086,13.12-25.691,19.2-38.84,14.53-22.91,39.78-46.785,60.86-62.683,11.2-8.457,20.1-22.942,34.14-28.106v1.414h-0.92c-2.82,4.1998-7.0199,6.086-10.77,9.3478-8.4201,8.4299-17.76,18.731-24.34,28.086-19.65,26.199-36.99,55.234-52.4,85.184-7.5099,14.543-14.05,30.441-20.14,44.941-2.8001,5.5901-2.8001,14.039-7.4901,16.84-7.0399-10.285-17.31-19.191-22.45-31.789-8.9-20.149-9.8299-44.949-13.13-70.703-1.86-0.48895-0.92,0-1.86-0.92999-14.96,3.7419-20.11,19.184-25.74,32.246-14.04,33.274-16.4,86.627-4.2099,125.01,3.26,9.8101,17.34,40.7,11.7,50.06-2.8299,8.9299-12.18,14.03-17.32,21.08-6.0701,8.89-12.66,20.1-16.83,29.95-11.24,26.2-16.89,55.23-29.02,81.43-5.62,12.19-15.47,24.83-23.4,36.04-8.91,12.64-18.73,21.53-25.76,36.49-2.3201,5.16-5.6001,13.59-1.87,19.19,0.9199,3.75,2.8199,5.1601,6.5699,6.1001,6.0501,5.1499,23.39-1.39,29.46-4.2,17.33-7,31.84-13.59,46.33-23.4,6.5599-4.6899,13.58-13.58,21.99-15.94h9.8499c14.97-3.25,31.83-0.91,45.88-5.14,24.79-7.95,47.25-19.65,67.39-32.29,61.29-38.85,111.84-94.09,145.99-160.07,5.63-10.75,7.99-20.59,13.13-31.8,9.83-22.98,22.01-46.38,31.82-68.823,9.8201-22,19.2-44.446,33.26-62.727,7-9.812,35.09-14.961,47.73-20.113,9.3401-4.199,23.87-7.949,32.3-13.09,15.91-9.812,31.79-21.062,46.79-31.844,7.4699-5.617,30.88-17.304,32.29-26.679"/>
                                                    <path fill-rule="evenodd" fill="currentColor" d="m1477.7,1243.2c-7.9399,0-13.54-0.96-19.19-2.3501v-0.9399h0.91c3.7799-7.47,10.34-12.66,14.98-19.2,3.77-7.4902,7.0499-14.95,10.79-22.45,0.4599,0.4599,0.9099,0.9501,0.9099,0.9501,6.5999,4.6599,9.87,12.14,9.87,23.39-2.83,3.3001-3.2701,6.5501-5.63,9.8401-2.8,4.6699-8.89,7.01-12.64,10.76"/>
                                                   </g>
                                                  </g>
                                                 </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Team Page Text Col -->
                </div> <!-- Content row -->


                <!-- Dealership -->
                <div class="row my-5">

                    <!-- Pictures Carousel -->
                    <div class="col-12 col-lg-8">
                        <div class="carousel slide carousel-fade mx-auto shadow" id="bmwDealerCarousel" data-bs-ride="carousel">

                            <!-- Carousel Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#bmwDealerCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="BMW of Sunnyville personal website home page"></button>
                                <button type="button" data-bs-target="#bmwDealerCarousel" data-bs-slide-to="1" aria-label="BMW of Sunnyville personal website used cars page"></button>
                                <button type="button" data-bs-target="#bmwDealerCarousel" data-bs-slide-to="2" aria-label="BMW of Sunnyville personal website 2021 BMW M5 Competition page"></button>
                            </div>

                            <!-- Carousel Content -->
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="w-100 d-block" src="images/bmw/bmw-dealership-home.png" alt="BMW of Sunnyville personal website home page">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 d-block" src="images/bmw/bmw-dealership-used.png" alt="BMW of Sunnyville personal website used cars page">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 d-block" src="images/bmw/bmw-dealership-m5.png" alt="BMW of Sunnyville personal website 2021 BMW M5 Competition page">
                                </div>
                            </div>

                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#bmwDealerCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#bmwDealerCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> <!-- Carousel Col -->

                    <!-- Project Description -->
                    <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                        <div class="d-table pe-0 ms-xl-4 mt-md-2 mt-lg-0 h-100 ease-pad">
                            <div class="d-table-cell align-middle">

                                <!-- Dealership Project Header -->
                                <h2 class="px-5 px-lg-3 fw-normal text-center text-md-start text-lg-center ease-pad">Dealership Website
                                    <a class="text-primary" href="/portfolio/demos/bmw/home.php" target="_blank" aria-label="Demo site, BMW Dealership">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="mb-3" viewBox="0 0 16 16">
                                            <title>BMW of Sunnyville: Demo site</title>
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </a>
                                </h2>

                                <div class="pb-3 border-top border-2"></div> <!-- Divider -->

                                <!-- Description -->
                                <p class="indent mb-0">
                                    A project built to show off my new skills using a Bootstrap Layout. While looking back,
                                    the result is a bit rough around the edges. However, as one of my first responsive pages,
                                    this page marks a milestone in my web development career. I remember how proud I was
                                    and excited to show it off, and now I can use it to see how far I've come.
                                </p>

                                <div class="pt-3 border-bottom border-2"></div> <!-- Divider -->

                                <!-- Dev Tools -->
                                <div>
                                    <ul class="nav mt-2 navbar-expand justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="//getbootstrap.com/" target="_blank" aria-label="Bootstrap Website">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="50" class="d-block" viewBox="0 0 118 94" role="img">
                                                    <title>Bootstrap</title>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="//www.jetbrains.com/webstorm/" target="_blank" aria-label="WebStorm Product Page" title="WebStorm">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="50" viewBox="0 0 105 105" width="50">
                                                    <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="38.88" x2="63.72" y1="6.5" y2="95.94"><stop offset=".28" stop-color="#07c3f2"/>
                                                        <stop offset=".94" stop-color="#087cfa"/>
                                                    </linearGradient>
                                                    <linearGradient id="b" gradientUnits="userSpaceOnUse" x1="46.63" x2="88.66" y1="17.85" y2="79.48">
                                                        <stop offset=".14" stop-color="#fcf84a"/><stop offset=".37" stop-color="#07c3f2"/>
                                                    </linearGradient>
                                                    <linearGradient id="c" x1="88.27" x2="93.79" xlink:href="#a" y1="25.47" y2="45.02"/>
                                                    <path d="m17.44 91.26-12.94-76.7 23.93-9.93 15.28 9.08 14-7.55 29.17 11.2-16.36 83.14z" fill="url(#a)"/>
                                                    <path d="m100.5 37.01-12.39-30.6-22.48-1.91-34.7 33.34 9.34 42.97 17.44 12.23 42.79-25.39-10.5-19.69z" fill="url(#b)"/>
                                                    <path d="m81.27 32.45 8.73 15.51 10.5-10.95-7.71-19.06z" fill="url(#c)"/><path d="m22.5 22.5h60v60h-60z"/>
                                                    <g fill="#fff">
                                                        <path d="m29.98 71.16h22.5v3.75h-22.5z"/>
                                                        <path d="m51.28 29.97-3.35 13.13-3.83-13.13h-3.81l-3.84 13.13-3.34-13.13h-5.25l6.43 22.51h4.22l3.68-13.03 3.64 13.03h4.27l6.42-22.51z"/>
                                                        <path d="m57.46 49.27 2.93-3.51a10.34 10.34 0 0 0 6.74 2.74c2 0 3.26-.8 3.26-2.13v-.06c0-1.26-.78-1.9-4.55-2.87-4.55-1.16-7.48-2.42-7.48-6.9v-.07c0-4.09 3.29-6.8 7.9-6.8a13 13 0 0 1 8.38 2.87l-2.58 3.74a10.54 10.54 0 0 0 -5.87-2.22c-1.9 0-2.9.87-2.9 2v.07c0 1.48 1 2 4.87 3 4.58 1.2 7.16 2.84 7.16 6.78v.06c0 4.48-3.42 7-8.29 7a14.34 14.34 0 0 1 -9.57-3.61"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- Vertical Alignment -->
                        </div> <!-- Vertical Alignment -->
                    </div> <!-- Dealership Text Col -->
                </div> <!-- Content row -->
            </div> <!-- Background -->
        </div> <!-- Col/width -->
    </div> <!-- Row -->

    <!-- Transition background image -->
    <div class="row mx-0 py-5 container-transition1-top"></div>
</div> <!-- Container -->


    <!--  ====================   JAVA DEVELOPMENT   ====================  -->

<div id="container2" class="container-fluid px-0">
    <!-- Transition background image -->
    <div class="row mx-0 py-5 container-transition1-bottom"></div>


    <!-- Java Header -->
    <div class="pb-2 mb-3 border-bottom border-2"></div> <!-- divider -->
    <div class="p-0 p-md-2 px-md-5 p-lg-4 mb-3 bg-dark bg-opacity-80 text-white shadow ease-pad">
        <div class="container-fluid py-2 px-md-5 ease-pad">
            <h1 class="indent-md display-6 px-md-5 ease-pad fw-bold mx-5 text-center text-md-start">Java Development</h1>
        </div>
    </div>
    <div class="mb-4 border-top border-2"></div> <!-- divider -->

    <!-- Content -->
    <div class="row mx-0 mb-5">
        <div class="col-12 col-md-10 mx-auto">
            <!-- Div Background -->
            <div class="px-3 px-md-4 px-lg-4 px-xl-5 py-3 py-md-4 text-white bg-dark bg-opacity-80 shadow rounded ease-pad">

                <!-- Auto-Complete -->
                <div class="row my-5">

                    <!-- Pictures -->
                    <div class="col-12 col-lg-8 order-lg-2">
                        <div class="carousel slide carousel-fade mx-auto shadow" id="hangmanCarousel" data-bs-ride="carousel">
                            <!-- Carousel Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#autoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Evil Hangman game beginning"></button>
                                <button type="button" data-bs-target="#autoCarousel" data-bs-slide-to="1" aria-label="Evil Hangman game end"></button>
                            </div>
                            <!-- Carousel Content -->
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="w-100 d-block" src="images/auto-complete/auto-complete-blank.png" alt="Auto Complete window with empty search box">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 d-block" src="images/auto-complete/auto-complete.png" alt="Auto-Complete window with some input and a list of words starting with the input">
                                </div>
                            </div>
                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#autoCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#autoCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> <!-- Carousel Col -->

                    <!-- Description -->
                    <div class="col-12 col-lg-4 order-lg-1 mt-3 mt-lg-0">
                        <div class="d-table pe-0 me-xl-4 mt-md-2 mt-lg-0 h-100">
                            <div class="d-table-cell align-middle">
                                <h2 class="px-5 px-lg-3 fw-normal text-center text-md-start text-lg-center ease-pad">Auto-Complete
                                    <a class="text-primary" href="https://github.com/lindsaypj/AutoComplete" target="_blank" aria-label="GitHub Repository">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="mb-3" viewBox="0 0 16 16">
                                            <title>Auto-Complete: GitHub Repo</title>
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </a>
                                </h2>
                                <div class="pb-3 border-top border-2"></div>
                                <p class="indent mb-0">
                                    This small program was developed to practice working with a tree structure and
                                    writing recursive methods. The program stores a dictionary of 80,000 words and
                                    displays a definition when a word is entered.
                                </p>
                                <p class="indent mb-0">
                                    When the user types in the text box, a list of words that start with the input
                                    string are shown. If search is pressed and the word is found, the definition will be
                                    shown.
                                </p>
                                <div class="pt-3 border-bottom border-2"></div>
                                <div>
                                    <ul class="nav mt-2 navbar-expand justify-content-center">
                                        <li class="nav-item nav-link text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="55" viewBox="0 0 100 100" fill="currentColor">
                                                <title>Java</title>
                                                <g>
                                                    <path d="M24.69,59.77c0-2.68,10.15-4.18,14.88-4.54l0.45,0.26c-1.82,0.33-9.1,1.61-9.1,3.29
                                                        c0,1.82,11.17,3.02,17.66,3.02c11.02,0,18.5-1.67,20.52-2.22l2.82,1.64c-1.93,0.95-10.21,3.42-23.33,3.42
                                                        C33.99,64.65,24.69,61.79,24.69,59.77 M46.91,97.33c-5.77,0.05-12.82-0.43-18.75-1.42l-0.55,0.32c5.91,1.73,14.13,2.78,23.16,2.7
                                                        c17.74-0.15,32.12-4.55,32.41-9.85l-0.2-0.12C81.79,90.41,74.11,97.1,46.91,97.33 M48.42,93.92c14.52-0.13,30.76-2.97,30.72-7.75
                                                        c-0.01-0.87-0.57-1.46-1.06-1.82l-0.24,0.14c-1.34,3.7-12.69,6.43-29.45,6.58c-10.81,0.1-25.8-2.5-25.82-5.49
                                                        c-0.03-3,7.1-4.65,7.1-4.65l-0.5-0.28c-4.77,0.66-13.57,2.94-13.54,6.24C15.67,91.66,35.88,94.03,48.42,93.92 M81.13,61.05
                                                        c-0.29,5.6-5.47,9.09-10.64,12.04l0.47,0.27c5.52-1.55,15.37-6.07,14.55-13.02c-0.41-3.47-3.58-5.94-7.71-5.94
                                                        c-1.28,0-2.43,0.23-3.35,0.51l0,0.01l-0.2,0.49C77.95,54.68,81.32,57.37,81.13,61.05 M38.48,77.69c-1.68,0.34-5.36,1.18-5.36,2.96
                                                        c0,2.47,7.86,4.37,15.45,4.37c10.43,0,14.71-2.69,14.9-2.83l-4.34-2.51c-1.85,0.44-4.96,1.13-10.55,1.13
                                                        c-6.25,0-10.32-1.07-10.32-2.24c0-0.25,0.15-0.54,0.45-0.76L38.48,77.69z M64.12,69.36c-2.4,0.68-7.81,1.79-15.54,1.79
                                                        c-7.59,0-13.79-1.3-13.81-2.83c-0.01-1.02,1.22-1.46,1.22-1.46l-0.22-0.13c-3.63,0.64-7.01,1.64-6.99,3.12
                                                        c0.03,2.7,10.35,4.72,19.78,4.72c8.02,0,15.73-1.35,19.2-3.11L64.12,69.36z"/>
                                                    <path d="M62.05,9.2c0,14.87-20.38,20.56-20.38,31.13c0,7.42,4.92,12.07,7.64,15.02l-0.22,0.13
                                                        c-3.43-2.15-12.48-7.56-12.48-16.48c0-12.53,23.4-18.52,23.4-32.75c0-1.75-0.26-3.09-0.44-3.82l0.24-0.14
                                                        C60.56,3.22,62.05,5.55,62.05,9.2 M68.75,22.37l-0.24-0.14c-4.44,1.49-18.09,6.87-18.09,16.92c0,5.68,5.55,8.83,5.55,14.16
                                                        c0,1.9-1.07,3.68-1.95,4.75l0.44,0.25c2.31-1.5,6.4-4.75,6.4-8.95c0-3.55-4.92-7.82-4.92-12.39
                                                        C55.94,29.77,65.43,24.12,68.75,22.37"/>
                                                </g>
                                            </svg>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://www.jetbrains.com/idea/" target="_blank" aria-label="InteliJ IDEA Product Page" title="InteliJ IDEA">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="50" viewBox="0 0 105 105" width="50">
                                                    <linearGradient id="a-idea" gradientUnits="userSpaceOnUse" x1="11.16" x2="58.94" y1="59.21" y2="56.78">
                                                        <stop offset=".09" stop-color="#fc801d"/>
                                                        <stop offset=".23" stop-color="#b07f61"/>
                                                        <stop offset=".41" stop-color="#577db3"/>
                                                        <stop offset=".53" stop-color="#1e7ce6"/>
                                                        <stop offset=".59" stop-color="#087cfa"/>
                                                    </linearGradient>
                                                    <linearGradient id="b-idea" gradientUnits="userSpaceOnUse" x1="89.05" x2="73.12" y1="54.12" y2="6.52">
                                                        <stop offset="0" stop-color="#fe2857"/>
                                                        <stop offset=".08" stop-color="#cb3979"/>
                                                        <stop offset=".16" stop-color="#9e4997"/>
                                                        <stop offset=".25" stop-color="#7557b2"/>
                                                        <stop offset=".34" stop-color="#5362c8"/>
                                                        <stop offset=".44" stop-color="#386cda"/>
                                                        <stop offset=".54" stop-color="#2373e8"/>
                                                        <stop offset=".66" stop-color="#1478f2"/>
                                                        <stop offset=".79" stop-color="#0b7bf8"/>
                                                        <stop offset="1" stop-color="#087cfa"/>
                                                    </linearGradient>
                                                    <linearGradient id="c-idea" gradientUnits="userSpaceOnUse" x1="18.72" x2="78.8" y1="26.61" y2="125.99">
                                                        <stop offset="0" stop-color="#fe2857"/>
                                                        <stop offset=".08" stop-color="#fe295f"/>
                                                        <stop offset=".21" stop-color="#ff2d76"/>
                                                        <stop offset=".3" stop-color="#ff318c"/>
                                                        <stop offset=".38" stop-color="#ea3896"/>
                                                        <stop offset=".55" stop-color="#b248ae"/>
                                                        <stop offset=".79" stop-color="#5a63d6"/>
                                                        <stop offset="1" stop-color="#087cfa"/>
                                                    </linearGradient>
                                                    <path d="m19.27 72.21-14.12-11.15 8.31-15.39 12.49 4.18z" fill="url(#a-idea)"/>
                                                    <path d="m100.07 30.09-1.73 55.6-36.98 14.81-20.14-13z" fill="#087cfa"/>
                                                    <path d="m100.07 30.09-18.3 17.85-23.5-28.83 11.6-13.04z" fill="url(#b-idea)"/>
                                                    <path d="m41.22 87.5-29.41 10.63 6.16-21.57 7.98-26.71-21.88-7.32 13.9-38.03 31.42 3.71 32.38 39.73z" fill="url(#c-idea)"/>
                                                    <path d="m22.5 22.5h60v60h-60z"/>
                                                    <g fill="#fff">
                                                        <path d="m29.98 71.16h22.5v3.75h-22.5z"/>
                                                        <path d="m41.21 34.12v-4.1h-11.19v4.1h3.14v14.16h-3.14v4.1h11.19v-4.1h-3.13v-14.16z"/>
                                                        <path d="m51.94 52.7a8.88 8.88 0 0 1 -4.39-1 10.16 10.16 0 0 1 -2.92-2.36l3.09-3.45a8.86 8.86 0 0 0 1.94 1.64 4 4 0 0 0 2.15.6 2.85 2.85 0 0 0 2.19-.87 4.16 4.16 0 0 0 .8-2.83v-14.43h5v14.65a10.14 10.14 0 0 1 -.55 3.49 6.49 6.49 0 0 1 -4.07 4 9.87 9.87 0 0 1 -3.31.52"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Team Page Text Col -->
                </div> <!-- Content row -->


                <!-- Magic Squares -->
                <div class="row my-5">

                    <!-- Pictures -->
                    <div class="col-12 col-lg-8">
                        <div class="carousel slide carousel-fade mx-auto shadow" id="magicSquaresCarousel" data-bs-ride="carousel">
                            <!-- Carousel Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#magicSquaresCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Magic Squares game opening lines"></button>
                                <button type="button" data-bs-target="#magicSquaresCarousel" data-bs-slide-to="1" aria-label="Magic Squares gameplay"></button>
                                <button type="button" data-bs-target="#magicSquaresCarousel" data-bs-slide-to="2" aria-label="Magic Squares code (game loop)"></button>
                            </div>
                            <!-- Carousel Content -->
                            <div class="carousel-inner rounded">
                                <div class="carousel-item active">
                                    <img class="w-100 d-block" src="images/magic/magic-squares-start.png" alt="Magic Squares game opening lines">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 d-block" src="images/magic/magic-squares-middle.png" alt="Magic Squares gameplay">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100 d-block" src="images/magic/magic-squares-code.png" alt="Magic Squares code (game loop)">
                                </div>
                            </div>
                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#magicSquaresCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#magicSquaresCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> <!-- Carousel Col -->

                    <!-- Description -->
                    <div class="col-12 col-lg-4 mt-3 mt-lg-0">
                        <div class="d-table pe-0 ms-xl-4 mt-md-2 mt-lg-0 h-100">
                            <div class="d-table-cell align-middle">
                                <h2 class="px-5 px-lg-3 fw-normal text-center text-md-start text-lg-center ease-pad">Magic Squares
                                    <a class="text-primary" href="//github.com/lindsaypj/magic-squares" target="_blank" aria-label="GitHub Repository">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="mb-3" viewBox="0 0 16 16">
                                            <title>Magic Squares: GitHub Repo</title>
                                            <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
                                            <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
                                        </svg>
                                    </a>
                                </h2>
                                <div class="pb-3 border-top border-2"></div>
                                <p class="indent mb-0">
                                    Similar to tic-tac-toe, Magic Squares involves taking turns guessing numbers until one
                                    player has three numbers in a row that sum to fifteen.
                                </p>
                                <p class="indent mb-0">
                                    To practice using bit-masking and bit-wise operators, the game stores and retrieves
                                    all of the game data from just a few numbers. The game manipulates bytes and shorts
                                    at the binary level to store lots of data within individual numbers.
                                </p>
                                <div class="pt-3 border-bottom border-2"></div>
                                <div>
                                    <ul class="nav mt-2 navbar-expand justify-content-center">
                                        <li class="nav-item text-white nav-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 100 100" fill="currentColor">
                                                <title>Java</title>
                                                <g>
                                                    <path d="M24.69,59.77c0-2.68,10.15-4.18,14.88-4.54l0.45,0.26c-1.82,0.33-9.1,1.61-9.1,3.29
                                                        c0,1.82,11.17,3.02,17.66,3.02c11.02,0,18.5-1.67,20.52-2.22l2.82,1.64c-1.93,0.95-10.21,3.42-23.33,3.42
                                                        C33.99,64.65,24.69,61.79,24.69,59.77 M46.91,97.33c-5.77,0.05-12.82-0.43-18.75-1.42l-0.55,0.32c5.91,1.73,14.13,2.78,23.16,2.7
                                                        c17.74-0.15,32.12-4.55,32.41-9.85l-0.2-0.12C81.79,90.41,74.11,97.1,46.91,97.33 M48.42,93.92c14.52-0.13,30.76-2.97,30.72-7.75
                                                        c-0.01-0.87-0.57-1.46-1.06-1.82l-0.24,0.14c-1.34,3.7-12.69,6.43-29.45,6.58c-10.81,0.1-25.8-2.5-25.82-5.49
                                                        c-0.03-3,7.1-4.65,7.1-4.65l-0.5-0.28c-4.77,0.66-13.57,2.94-13.54,6.24C15.67,91.66,35.88,94.03,48.42,93.92 M81.13,61.05
                                                        c-0.29,5.6-5.47,9.09-10.64,12.04l0.47,0.27c5.52-1.55,15.37-6.07,14.55-13.02c-0.41-3.47-3.58-5.94-7.71-5.94
                                                        c-1.28,0-2.43,0.23-3.35,0.51l0,0.01l-0.2,0.49C77.95,54.68,81.32,57.37,81.13,61.05 M38.48,77.69c-1.68,0.34-5.36,1.18-5.36,2.96
                                                        c0,2.47,7.86,4.37,15.45,4.37c10.43,0,14.71-2.69,14.9-2.83l-4.34-2.51c-1.85,0.44-4.96,1.13-10.55,1.13
                                                        c-6.25,0-10.32-1.07-10.32-2.24c0-0.25,0.15-0.54,0.45-0.76L38.48,77.69z M64.12,69.36c-2.4,0.68-7.81,1.79-15.54,1.79
                                                        c-7.59,0-13.79-1.3-13.81-2.83c-0.01-1.02,1.22-1.46,1.22-1.46l-0.22-0.13c-3.63,0.64-7.01,1.64-6.99,3.12
                                                        c0.03,2.7,10.35,4.72,19.78,4.72c8.02,0,15.73-1.35,19.2-3.11L64.12,69.36z"/>
                                                    <path d="M62.05,9.2c0,14.87-20.38,20.56-20.38,31.13c0,7.42,4.92,12.07,7.64,15.02l-0.22,0.13
                                                        c-3.43-2.15-12.48-7.56-12.48-16.48c0-12.53,23.4-18.52,23.4-32.75c0-1.75-0.26-3.09-0.44-3.82l0.24-0.14
                                                        C60.56,3.22,62.05,5.55,62.05,9.2 M68.75,22.37l-0.24-0.14c-4.44,1.49-18.09,6.87-18.09,16.92c0,5.68,5.55,8.83,5.55,14.16
                                                        c0,1.9-1.07,3.68-1.95,4.75l0.44,0.25c2.31-1.5,6.4-4.75,6.4-8.95c0-3.55-4.92-7.82-4.92-12.39
                                                        C55.94,29.77,65.43,24.12,68.75,22.37"/>
                                                </g>
                                            </svg>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="https://www.jetbrains.com/idea/" target="_blank" aria-label="InteliJ IDEA Product Page" title="InteliJ IDEA">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="50" viewBox="0 0 105 105" width="50">
                                                    <linearGradient id="a-idea" gradientUnits="userSpaceOnUse" x1="11.16" x2="58.94" y1="59.21" y2="56.78">
                                                        <stop offset=".09" stop-color="#fc801d"/>
                                                        <stop offset=".23" stop-color="#b07f61"/>
                                                        <stop offset=".41" stop-color="#577db3"/>
                                                        <stop offset=".53" stop-color="#1e7ce6"/>
                                                        <stop offset=".59" stop-color="#087cfa"/>
                                                    </linearGradient>
                                                    <linearGradient id="b-idea" gradientUnits="userSpaceOnUse" x1="89.05" x2="73.12" y1="54.12" y2="6.52">
                                                        <stop offset="0" stop-color="#fe2857"/>
                                                        <stop offset=".08" stop-color="#cb3979"/>
                                                        <stop offset=".16" stop-color="#9e4997"/>
                                                        <stop offset=".25" stop-color="#7557b2"/>
                                                        <stop offset=".34" stop-color="#5362c8"/>
                                                        <stop offset=".44" stop-color="#386cda"/>
                                                        <stop offset=".54" stop-color="#2373e8"/>
                                                        <stop offset=".66" stop-color="#1478f2"/>
                                                        <stop offset=".79" stop-color="#0b7bf8"/>
                                                        <stop offset="1" stop-color="#087cfa"/>
                                                    </linearGradient>
                                                    <linearGradient id="c-idea" gradientUnits="userSpaceOnUse" x1="18.72" x2="78.8" y1="26.61" y2="125.99">
                                                        <stop offset="0" stop-color="#fe2857"/>
                                                        <stop offset=".08" stop-color="#fe295f"/>
                                                        <stop offset=".21" stop-color="#ff2d76"/>
                                                        <stop offset=".3" stop-color="#ff318c"/>
                                                        <stop offset=".38" stop-color="#ea3896"/>
                                                        <stop offset=".55" stop-color="#b248ae"/>
                                                        <stop offset=".79" stop-color="#5a63d6"/>
                                                        <stop offset="1" stop-color="#087cfa"/>
                                                    </linearGradient>
                                                    <path d="m19.27 72.21-14.12-11.15 8.31-15.39 12.49 4.18z" fill="url(#a-idea)"/>
                                                    <path d="m100.07 30.09-1.73 55.6-36.98 14.81-20.14-13z" fill="#087cfa"/>
                                                    <path d="m100.07 30.09-18.3 17.85-23.5-28.83 11.6-13.04z" fill="url(#b-idea)"/>
                                                    <path d="m41.22 87.5-29.41 10.63 6.16-21.57 7.98-26.71-21.88-7.32 13.9-38.03 31.42 3.71 32.38 39.73z" fill="url(#c-idea)"/>
                                                    <path d="m22.5 22.5h60v60h-60z"/>
                                                    <g fill="#fff">
                                                        <path d="m29.98 71.16h22.5v3.75h-22.5z"/>
                                                        <path d="m41.21 34.12v-4.1h-11.19v4.1h3.14v14.16h-3.14v4.1h11.19v-4.1h-3.13v-14.16z"/>
                                                        <path d="m51.94 52.7a8.88 8.88 0 0 1 -4.39-1 10.16 10.16 0 0 1 -2.92-2.36l3.09-3.45a8.86 8.86 0 0 0 1.94 1.64 4 4 0 0 0 2.15.6 2.85 2.85 0 0 0 2.19-.87 4.16 4.16 0 0 0 .8-2.83v-14.43h5v14.65a10.14 10.14 0 0 1 -.55 3.49 6.49 6.49 0 0 1 -4.07 4 9.87 9.87 0 0 1 -3.31.52"/>
                                                    </g>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Team Page Text Col -->
                </div> <!-- Content row -->

            </div> <!-- Background -->
        </div> <!-- Col/width -->
    </div> <!-- Row -->

    <!-- Transition background image -->
    <div class="row mx-0 py-5 container-transition2-top"></div>
</div> <!-- Container -->


<!--  ====================   PHOTOGRAPHY   ====================  -->

<div id="container3" class="container-fluid px-0 pb-5">
    <!-- Transition background image -->
    <div class="row mx-0 py-5 container-transition2-bottom"></div>

    <!-- Photography Header -->
    <div class="pb-2 mb-3 border-bottom border-2"></div> <!-- divider -->
    <div class="p-0 p-md-2 px-md-5 p-lg-4 mb-3 bg-dark bg-opacity-80 text-white shadow ease-pad">
        <div class="container-fluid py-2 px-md-5 ease-pad">
            <h1 class="indent-md display-6 px-md-5 ease-pad fw-bold mx-5 text-center text-md-start">Photography</h1>
        </div>
    </div>
    <div class="mb-4 border-top border-2"></div> <!-- divider -->


    <!-- Content -->
    <div class="row px-lg-5 ease-pad mx-0 mb-5 pb-5">
        <div class="col-10 col-lg-8 mx-auto">
            <div class="row mx-0">
                <div id="cards" class="col-12 col-md-6 mx-auto p-md-2">
                    <div class="card p-2 d-inline-block bg-dark bg-opacity-80 shadow rounded-3 my-2">
                        <img src="images/photography/moth.JPG" class="card-img-top rounded-3" alt="Black and white moth">
                    </div>
                    <div class="card p-2 d-inline-block bg-dark bg-opacity-80 shadow rounded-3 my-2">
                        <img src="images/photography/dandelion.JPG" class="card-img-top rounded-3" alt="Black and white dandelion in grass">
                    </div>
                    <div class="card p-2 d-inline-block bg-dark bg-opacity-80 shadow rounded-3 my-2">
                        <img src="images/photography/high-contrast-ocean-sky.jpg" class="card-img-top rounded-3" alt="Light clouds over a black and white sunset">
                    </div>
                </div>
                <div id="cards2" class="col-12 col-md-6 mx-auto p-md-2">
                    <div class="card p-2 d-inline-block bg-dark bg-opacity-80 shadow rounded-3 my-2">
                        <img src="images/photography/high-contrast-skyline.jpg" class="card-img-top rounded-3" alt="High-contrast black and white skyline">
                    </div>
                    <div class="card p-2 d-inline-block bg-dark bg-opacity-80 shadow rounded-3 my-2">
                        <img src="images/photography/leaf.JPG" class="card-img-top rounded-3" alt="Black and white leaf floating in the sky">
                    </div>
                    <div class="card p-2 d-inline-block bg-dark bg-opacity-80 shadow rounded-3 my-2">
                        <img src="images/photography/organic-tree.jpg" class="card-img-top rounded-3" alt="Black and white tree hanging over water">
                    </div>
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-12 text-center text-md-end">
                    <div class="pb-2 mb-4 border-bottom border-2"></div> <!-- divider -->
                    <a class="text-decoration-none" href="//www.instagram.com/_blacklightwhite_/" target="_blank" aria-label="Link to my photography Instagram account">
                        <img id="instagramLogo" class="d-inline-block" src="images/logos/instagram_logo.png" alt="Instagram Logo" title="Instagram">
                        <h5 class="d-inline mt-1">@_blacklightwhite_</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- PHOTOGRAPHY Container -->


<!-- Footer -->
<div id="container4" class="container-fluid mx-0 px-0">
    <div class="pb-2 mb-3 border-bottom border-2"></div> <!-- divider -->
    <div class="py-5 shadow w-100 bg-dark bg-opacity-80">
        <div class="row mx-0 px-0">
            <div class="col-6 col-md-4 d-flex justify-content-center">
                <div class="d-table mx-auto h-100 ease-pad">
                    <a class="text-white d-table-cell align-middle ease-pad" href="//github.com/lindsaypj" target="_blank">
                        <!-- Source: https://github.com/ -->
                        <svg height="55" aria-hidden="true" viewBox="0 0 16 16" width="55" data-view-component="true" fill="white">
                            <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                        </svg>
                    </a>
                    <a class="text-white d-table-cell align-middle px-4 ease-pad" href="//www.linkedin.com/in/lindsaypj/" target="_blank">
                        <!-- Source: https://www.linkedin.com/ -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 34 34" fill="white">
                            <path d="M34,2.5v29A2.5,2.5,0,0,1,31.5,34H2.5A2.5,2.5,0,0,1,0,31.5V2.5A2.5,2.5,0,0,1,2.5,0h29A2.5,2.5,0,0,1,34,2.5ZM10,13H5V29h5Zm.45-5.5A2.88,2.88,0,0,0,7.59,4.6H7.5a2.9,2.9,0,0,0,0,5.8h0a2.88,2.88,0,0,0,2.95-2.81ZM29,19.28c0-4.81-3.06-6.68-6.1-6.68a5.7,5.7,0,0,0-5.06,2.58H17.7V13H13V29h5V20.49a3.32,3.32,0,0,1,3-3.58h.19c1.59,0,2.77,1,2.77,3.52V29h5Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-inline-block">
                <div class="d-table mx-auto h-100 ease-pad">
                    <p class="d-table-cell text-white text-center align-middle">
                        Add yourself to my guestbook so we can stay in touch!
                    </p>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="d-table mx-auto h-100 ease-pad">
                    <div class="mx-auto border-start border-2 ps-3 text-white w-75 d-table-cell align-middle">
                        <p class="mt-3">
                            lindsaypj88@gmail.com
                        </p>
                        <p>
                            360-918-6261
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
// Uses $page
include("guestbook/includes/footer.php");
?>