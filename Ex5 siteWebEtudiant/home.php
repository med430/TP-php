<?php
$pageTitle = "Home";
include_once 'fragments/header.php';
?>
<div class="container">
    <div class="container alert text-center h-50 absolute x-y-centered stdWidth">
        <div class="container relative x-y-centered">
            <div class="row">
                <div class="col">
                    <h1 id="text" style="color: <?= $_SESSION["dark_mode"] ? "white" : "black"?>">Welcome to the home page</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="home.js"></script>

<?php include_once 'fragments/footer.php'; ?>