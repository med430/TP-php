<?php
include 'autoloader.php';
session_start();
session_unset();
header('location: login.php');
exit();