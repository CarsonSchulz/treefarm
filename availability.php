<!DOCTYPE html>
<html lang="en">
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
                <div class="col-lg-10">
                    <h1 class="display-4">Our Inventory</h1>
                    <p>We are continually growing and acquiring fresh stock so that our buyers may choose from a large selection of the highest quality plant material. Products are updated weekly to make certain we are continually providing the most accurate depiction of our current selection of plants. Measures are taken throughout the year to have the most popular varieties available for the season. The products listed below are available now. Please <a href="contact.php">contact us</a> to discuss quantity, prices and shipping for any of our plants.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <label for="availTableFilter"><b>Filter table:</b></label>
                    <input type="text" id="availTableFilter" placeholder="Type your search in here..." class="contact-input mb-4" onkeyup="filterTable()">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="availability-table-cont">
                        <table class="availability-table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Scientific Name</th>
                                    <th scope="col">Size</th>
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
            <div class="availability-spinner mx-auto my-5" id="availabilitySpinner"></div>
        </div>

    </div>
    <?php require('includes/footer.php');?>
    <?php require('includes/scripts.php');?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.5.2/tabletop.min.js" integrity="sha256-HAn0pK4aNWJ/vplAt/P9KEWESSSIb2kH93O2eVbC3+k=" crossorigin="anonymous"></script>
    <script src="js/nav.js"></script>
    <script src="js/availability.js"></script>
</body>
</html>