<?php
session_start();
$loggedOutPage = isset($_SESSION['currentPage']) ? $_SESSION['currentPage'] : '/portfolio/';

session_destroy();
$_SESSION = array();

header('location: '.$loggedOutPage);