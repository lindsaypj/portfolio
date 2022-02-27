<!--
    Portfolio Project: Guestbook Thank you page
    Author: Patrick Lindsay
    File: thankyou.php
    Date: 2/8/22, 2/22/22
-->

<?php
    $title = "Thank you!";

    // Connect to database
    include("/home/plindsay/connect.php");
    if (!$connection) {
        $pageHeader = "An error occurred connecting to our database!";
        $headerText = "Your contact info was not uploaded.";
        include("includes/guestbook-header.php");
        die();
    }

    // GET form data

    $first = $_POST['fName'];
    $last = $_POST['lName'];
    // Job Title
    $job = $_POST['jobInput'];
    if ($job === '') $job = 'NULL';
    else $job = "'".$job."'";
    // LinkedIn
    $linkedin = $_POST['linkInInput'];
    if ($linkedin === '') $linkedin = 'NULL';
    else $linkedin = "'".$linkedin."'";
    // Email
    $email = $_POST['emailInput'];
    if ($email === '') $email = 'NULL';
    else $email = "'".$email."'";
    // How we met
    $howWeMet = $_POST['howWeMet'];
    if ($howWeMet === 'other') {
        $howWeMet = $_POST['meetOtherInput'];
    }
    // Optional Message
    $message = $_POST['messageInput'];
    if ($message === '') $message = 'NULL';
    else $message = "'".$message."'";

    // Add to mailing list?
    $mailList = 'false';
    if (isset($_POST['addToMailList'])) {
        $mailList = 'true';
    }

    // Email format
    if (isset($_POST['emailFormat'])) {
        $emailFormat = $_POST['emailFormat'];
        if ($emailFormat === 'htmlFormat') $emailFormat = "'html'";
        else if ($emailFormat === 'textFormat') $emailFormat = "'text'";
    }
    else {
        $emailFormat = 'NULL';
    }




    // SEND ENTRY to database
    $sql = "INSERT INTO `guestbook`
        VALUES (DEFAULT, '$first', '$last', $job, $linkedin, $email, '$howWeMet', $message, $mailList, $emailFormat, DEFAULT)";

    if (!empty($_POST)) {
        $result = @mysqli_query($connection, $sql);
    }


    if (!$result) { // Display error if new entry failed to be added to database
        $pageHeader = "An error occurred adding your info to our database!";
        $headerText = "Your contact info was not uploaded.";
        include("includes/guestbook-header.php");
        die();
    }

    $pageHeader = "Thank you!";
    $headerText = "Your contact has been added to my guestbook.";
    include("includes/guestbook-header.php");
    include ("includes/footer.php");
?>