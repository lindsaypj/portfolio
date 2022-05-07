<?php
session_start();
$loggedOutPage = isset($_SESSION['currentPage']) ? $_SESSION['currentPage'] : '/portfolio/';

// Redirect to page
header("location: ".$loggedOutPage);