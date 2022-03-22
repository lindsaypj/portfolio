<?php
session_start();
$loggedOutPage = isset($_SESSION['currentPage']) ? $_SESSION['currentPage'] : '/305/portfolio/';

// Redirect to page
header("location: ".$loggedOutPage);