<?php
/*
    Variables to declare for including this file:

    $title      page title declared in head
    $pageHeader primary header for the jumbotron at the top of the page
    $headerText Text under the page header inside the jumbotron
    $activeNav  declare the nav link that should be set to active for the page
*/
?>
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
    <link rel="stylesheet" href="css/guestbook-styles.css">
    <link rel="stylesheet" href="../css/errors.css">
    <link rel="stylesheet" href="../css/nav-styles.css">


    <!-- Favicon -->
    <link id="favicon" rel="icon" type="image/png" href="images/book-icon.png">

    <title><?php echo $title; ?></title>

</head>
<body>
<main class="mb-5 clearfix">

    <?php include ("../nav.php");?>

    <div class="container-fluid py-2">

        <div class="pb-3 mb-4 border-bottom border-2"></div>

        <!-- Jumbotron -->
        <div class="px-2 px-md-5 py-2 mb-4 bg-dark bg-opacity-80 text-white shadow rounded-3" id="titleBlock">
            <div class="py-5 mx-4 mx-md-5">
                <h1 class="display-3 fw-bold"><?php echo $pageHeader; ?></h1>
                <p class="sub-text fs-4">
                    <?php echo $headerText; ?>
                </p>
            </div>
        </div>

        <div class="pb-3 mb-4 border-top border-2"></div>
