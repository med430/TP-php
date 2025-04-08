<?php
include_once 'isAuthenticated.php';
if(isset($_POST["action"]) && $_POST["action"] == "toggleDarkMode") {
    if(!isset($_SESSION["dark_mode"])) {
        $_SESSION["dark_mode"] = true;
    } else {
        unset($_SESSION["dark_mode"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta id="mode" name="mode" content="<?= isset($_SESSION["dark_mode"]) && $_SESSION["dark_mode"] ? "dark" : "light" ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title><?= $pageTitle ?></title>
</head>
<body>
    <nav class="navbar navbar-primary bg-primary">
        <a class="navbar-brand" href="index.php">
            <img src="img/gestion_des_etudiants.png" alt="gestion des étudiants" width="100">
        </a>
        <a class="navbar-brand" href="index.php">
            <span class="navbar-brand mb-0 h1">Navbar</span>
        </a>
        <a class="navbar-brand" href="home.php">
            <span class="navbar-brand mb-0">Home</span>
        </a>
        <a class="navbar-brand" href="index.php">
            <span class="navbar-brand mb-0">Liste des étudiants</span>
        </a>
        <a class="navbar-brand" href="section.php">
            <span class="navbar-brand mb-0">Liste des sections</span>
        </a>
        <a class="navbar-brand" href="logout.php">
            <span class="navbar-brand mb-0">Logout</span>
        </a>
        <a class="navbar-brand" href="login.php">
            <span class="navbar-brand mb-0">login</span>
        </a>
        <a class="navbar-brand" href="sign_in.php">
            <span class="nabar-brand mb-0">sign in</span>
        </a>
        <span class="navbar-brand" id="dark_mode">Toggle dark mode</span>
        <script src="darkMode.js"></script>
    </nav>
    <canvas id="canvas"></canvas>

    <script src="canvas.js"></script>
