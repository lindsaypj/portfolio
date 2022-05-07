<?php

// Function to validate the length of a string and output an error if length is too big
function validateLength($field, $fieldName, $length) {
    if (strlen($field) > $length) {
        global $guestErrors, $valid; // IMPORTANT: https://www.w3schools.com/php/php_variables_scope.asp
        $guestErrors .= "<p>".$fieldName." cannot be more than ".$length." characters</p>\n";
        $valid = false;
    }
}

// Function to validate a required field
function validateRequired($field, $fieldName) {
    global $guestErrors, $valid; // IMPORTANT: https://www.w3schools.com/php/php_variables_scope.asp
    if ((!$field) || ($field == "") || ($field === "NULL")) {
        $guestErrors .= "<p>".$fieldName." is required!</p>\n";
        $valid = false;
    }
}

function formatHowWeMet($field) {
    switch ($field) {
        case "meetup":
            return "Meetup";
        case "jobFair":
            return "Job Fair";
        case "notMet":
            return "We haven't met yet";
        default:
            return $field;
    }
}

function ignoreQuotes($str) {

    // Get all quote locations (" or ')
    $posSingles = [];
    $posDoubles = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $char = substr($str, $i, 1);
        if ($char === "'") {
            array_push($posSingles, $i);
        }
        if ($char === '"') {
            array_push($posDoubles, $i);
        }
    }

    // add "\" before every single quote
    for ($i = 0; $i < sizeof($posSingles); $i++) {
        $str = substr_replace($str, "\\'", $posSingles[$i], 1);
    }

    // add "\" before ever double quote
    for ($i = 0; $i < sizeof($posDoubles); $i++) {
        $str = substr_replace($str, "\\\"", $posDoubles[$i], 1);
    }

    return $str;
}