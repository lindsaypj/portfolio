<?php

////Turn on error reporting -- this is critical!
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

$validLogin = true;

// Display form when redirected from admin
if (isset($_SESSION['displayForm']) && $_SESSION['displayForm'] == "true") {
    $_SESSION['displayForm'] = false;
    $displayLogin = true;
}
else {
    $displayLogin = false;
}

//If the form has been submitted
if (!empty($_POST)) {

    //Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate not empty
    if ($username === "" && $password === "") {
        $errorMessage = "Please enter username and Password";
    }


    //Require the credentials file, which defines a $Logins array
    require('/home/plindsay/users.php');

    //If the username is in the array and the passwords match
    if (array_key_exists($username, $logins)) {
        if ($password == $logins[$username]) {
            //Record the username in the session array
            $_SESSION['username'] = $username;

            header('location: /305/portfolio/guestbook/admin.php');
        }
        else {
            //Invalid login -- set flag variable
            $errorMessage = "Invalid username or password";
            $validLogin = false;
        }
    }
    else {
        //Invalid login -- set flag variable
        if ($username !== "") {
            $errorMessage = "Invalid username or password";
        }

        $validLogin = false;
    }
}
?>