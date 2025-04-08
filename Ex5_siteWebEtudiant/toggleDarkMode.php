<?php
session_start();
$_SESSION['dark_mode'] = isset($_SESSION["dark_mode"]) ? !$_SESSION['dark_mode'] : true;