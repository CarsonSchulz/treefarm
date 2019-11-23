<!DOCTYPE html>
<html lang="en">
<?php 
$pageTitle = "Hibernia Nursery - Home";
require('includes/head.php');
?>
<body>
    <?php require('includes/nav.php');?>
    <div class="header-main">
        <div class="header-overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="header-video">
            <source src="videos/plantvid.mp4" type="video/mp4">
        </video>
        <div class="header-cont">
            <div class="container">
                <h1 class="header-text">Transforming your business.</h1>
            </div>
        </div>
    </div>
    <div class="about-cont py-5 leading-shadow">
        <div class="container-custom py-5">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1" data-aos="fade-right">
                    <h1 class="display-4">About Us</h1>
                    <p>Hibernia Nursery was founded in 2001 by people devoted to providing quality products at competitive prices. Though hard work, devotion to service and dedication to detail, we have earned a reputation for having the best quality plant material available. Customer satisfaction is our number one priority, and we pride ourselves on exceeding expectations. We are constantly monitoring trends, looking for the latest advancements in plant sciences, and updating our inventory to include new products as well as patented brands such as Star Roses, Encore Azaleas, Southern Living Plant Collection, and First Editions.</p>
                    <p>Hibernia Nursery takes pride in its brand, and its dedicated staff. We consider our employees like family, and strive to give them the best and safest workplace possible while always promoting from within.</p>
                    <p>We are also proud members of the Florida Nursery, Growers and Landscape Association (FNGLA). As members of FNGLA, we actively monitor and participate in activities that impact our industry.</p>
                </div>
                <div class="col-md-5 offset-lg-1 order-md-2 order-1" data-aos="fade-left">
                    <img src="images/sections/overview.jpg" class="img-fluid shadow rounded-sm mb-4 mb-md-0" alt="Potted plants">
                </div>
            </div>
        </div>
    </div>
    <div class="specialty-cont">
        <img src="images/sections/whitewave.svg" class="wave-break" alt="Web wave break">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4">Our Specialties</h1>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-4 px-2 my-4" data-aos="flip-down">
                    <div class="specialty-card py-4 text-center px-3">
                        <div class="specialty-icon mx-auto">
                            <img src="images/icons/sprout.svg" alt="Sprout Icon">
                        </div>
                        <h1 class="display-5 mt-4">Growing</h1>
                        <p>We rely on the latest technology and growing techniques to develop beautiful, hardy, disease and insect free products. Our professional staff grow our own liners from either cutting or seed in our carefully monitored and controlled greenhouses. Only plant material that meets our demands for highest quality will be presented for sale.</p>
                    </div>
                </div>
                <div class="col-md-4 px-2 my-4" data-aos="flip-down">
                    <div class="specialty-card py-4 text-center px-3">
                        <div class="specialty-icon mx-auto">
                            <img src="images/icons/trees.svg" alt="Trees Icon">
                        </div>
                        <h1 class="display-5 mt-4">Trees/Shrubs</h1>
                        <p>We offer a wide selection of quality trees and shrubs. Our trees come in 1, 3, 7, and 15-gallon containers that along with our shrubs will accommodate most any landscaping needs concerning size, shape and color. As with all our products, only trees and shrubs that meet or exceed our quality expectations will be permitted to leave our farm.</p>
                    </div>
                </div>
                <div class="col-md-4 px-2 my-4" data-aos="flip-down">
                    <div class="specialty-card py-4 text-center px-3">
                        <div class="specialty-icon mx-auto">
                            <img src="images/icons//delivery-truck.svg" alt="Truck Icon">
                        </div>
                        <h1 class="display-5 mt-4">Shipping</h1>
                        <p>We serve a large geographic area. Our shipments go all the way up the east coast to New York, and west to Tennessee and Texas. We handle the details and broker our own trucks. <a href="contact.php" class="text-white text-underline">Contact us</a> for fair and reasonable pricing. We will be happy to answer all your questions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5 leading-shadow">
        <div class="container-custom py-5">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1" data-aos="zoom-in">
                    <h1 class="display-4">Interested?</h1>
                    <p class="lead mt-0 text-primary">So are we! Let's get in touch.</p>
                    <form>
                        <input type="text" id="contactName" name="contactName" placeholder="Your Name" class="contact-input mb-4">
                        <input type="email" id="contactEmail" name="contactEmail" placeholder="Your Email" class="contact-input mb-4">
                        <textarea class="contact-input" id="contactMsg" name="contactMsg" rows="6" placeholder="A short message for us." style="resize: vertical;"></textarea>
                        <button type="submit" class="button button-contact mt-4">Send</button>
                    </form>
                </div>
                <div class="col-md-5 offset-lg-1 order-md-2 order-1" data-aos="zoom-in">
                    <img src="images/sections/pots.jpg" class="img-fluid shadow rounded-sm mb-4 mb-md-0" alt="Potted plants">
                </div>
            </div>
        </div>
    </div>
    <?php require('includes/footer.php');?>
    <?php require('includes/scripts.php');?>
    <script src="js/nav.js"></script>
    <script>AOS.init();</script>
</body>
</html>