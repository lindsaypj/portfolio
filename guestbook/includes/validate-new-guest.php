<?php

//// Turn on Error Reporting
//ini_set('display_errors',1);
//error_reporting(E_ALL);

// List of input date variables
// $valid       boolean to track whether the data is valid
// $guestErrors String to store all the validation error messages

// $first       first name  (REQUIRED) (MAX-20)
// $last        last name   (REQUIRED) (MAX-20)
// $job         job title   (MAX-50)
// $linkedin    link to guest's linked in page (Must start with "https://www.linkedin.com/in/" if provided) (MAX-100)
// $email       email   (Must pass regex if provided) (MAX-75)
// $howWeMet    how the guest and I met     (REQUIRED) (MAX-50)
// $message     optional message to include
// $mailList    boolean for whether to add user to the mail list    (REQUIRED - "true" or "false")
// $emailFormat formatting type for email   (REQUIRED if maillist is true) (Must be "", "html", or "text")

// Validate name (REQUIRED)
validateRequired($first, "First name");
validateRequired($last, "Last name");

validateLength($first, "First name", 20);
validateLength($last, "Last name", 20);

if (preg_match('~[0-9]+~', $first)) { // SOURCE: https://stackoverflow.com/questions/18683444/how-to-detect-numbers-in-a-string-with-php
    $guestErrors .= "<p>First name cannot contain numbers</p>\n";
}
if (preg_match('~[0-9]+~', $last)) { // SOURCE: https://stackoverflow.com/questions/18683444/how-to-detect-numbers-in-a-string-with-php
    $guestErrors .= "<p>Last name cannot contain numbers</p>\n";
}


// Validate Job (if provided)
if ($job && $job !== "" && $job !== "NULL") {
    validateLength($job, "Job title", 50);
}



// Validate linkedin (if provided)
if ($linkedin && $linkedin !== "" && $linkedin !== "NULL") {
    validateLength($linkedin, "LinkedIn link", 100);
    if (!(substr($linkedin, 0, 29) === "'https://www.linkedin.com/in/")) {
        $guestErrors .= "<p>LinkedIn link must start with \"https://www.linkedin.com/in/\"</p>\n";
        $valid = false;
    }
    else if (!(strlen(substr($linkedin, 30)) > 0)) {
        $guestErrors .= "<p>LinkedIn link must include user profile</p>\n";
        $valid = false;
    }
}

// Validate Email (if provided)
if (!$email || $email === "" || $email === "NULL") {
    if ($mailList === "true") {
        $guestErrors .= "<p>Email is required to be added to the mailing list!</p>\n";
        $valid = false;
    }
}
else {
    validateLength($email, "Email", 75);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $guestErrors .= "<p>Email is invalid</p>\n";
        $valid = false;
    }
    else {
        $email = "'".$email."'";
    }
}

// Validate how we met (REQUIRED)
validateRequired($howWeMet, "How we met");
validateLength($howWeMet, "How we met", 50);

// Validate MailList
validateRequired($mailList, "Mail list");
if ($mailList !== "true" && $mailList !== "false") {
    $guestErrors .= "<p>Invalid mail list option</p>\n";
    $valid = false;
}


// Validate email format (If on mail list)
if ($mailList === "true") {
    if (!$emailFormat || $emailFormat === "" || $emailFormat === "NULL") {
        $guestErrors .= "<p>Email Format is required to be added to the mailing list!</p>\n";
        $valid = false;
    }
    else if (($emailFormat !== "'html'") && ($emailFormat !== "'text'")) {
        $guestErrors .= "<p>Invalid Email Format! Must be \"html\" or \"text\"</p>\n";
        $valid = false;
    }
}





















