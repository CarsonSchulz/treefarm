<!DOCTYPE html>
<html>
<?php 
$pageTitle = "Hibernia Nursery - Availability";
require('includes/head.php');
?>
<body>
    <?php require('includes/nav.php');?>
    <div class="page-header pb-5" style="background-image: url('images/backgrounds/availability.jpg');">
        <div class="container-custom">
            <h1>Availability</h1>
        </div>
    </div>
    <div class="page-content leading-shadow">
        <div class="container-custom py-5">
            <div class="row align-items-center">
                <div class="col-lg-10 order-2 order-lg-1">
                    <h1 class="display-4">Our Inventory</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="availability-table-cont">
                        <table class="availability-table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Height</th>
                                    <th scope="col">Width</th>
                                </tr>
                            </thead>
                            <tbody id="availability-body">
                            </tbody>
                        </table>                        
                    </div>

                </div>
            </div>
        </div>

    </div>
    <?php require('includes/footer.php');?>
    <?php require('includes/scripts.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.5.2/tabletop.min.js" integrity="sha256-HAn0pK4aNWJ/vplAt/P9KEWESSSIb2kH93O2eVbC3+k=" crossorigin="anonymous"></script>
    <script src="js/availability.js"></script>
</body>
</html>