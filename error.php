<!DOCTYPE html>
<html lang="en">
<?php 
$pageTitle = "Hibernia Nursery - Error";
require('includes/head.php');
?>
<body>
    <?php require('includes/nav_404.php');?>
    <div class="container-custom py-5 cont-404">
        <div class="row h-100 align-items-center text-center">
            <div class="col-12 col-xl-6 order-2 order-xl-1 mt-5 text-xl-left">
                <h1 class="display-1">Whoops!</h1>
                <h2 class="display-5 text-darker mb-5">We couldn't find the page you were looking for.</h2>
                <button onclick="window.history.back();" class="button-contact button">Go Back</button>
            </div>
            <div class="col-12 col-xl-6 order-1 order-xl-2 text-center">
                <img src="images/sections/spilledplants.jpg" class="img-fluid" alt="Broken potted plant">
            </div>
        </div>
    </div>
    <?php require('includes/footer.php');?>
    <?php require('includes/scripts.php');?>
</body>
</html>