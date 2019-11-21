<!DOCTYPE html>
<html lang="en">
<?php 
$pageTitle = "Hibernia Nursery - Contact Us";
require('includes/head.php');
?>
<body>
    <?php require('includes/nav.php');?>
    <div class="page-header pb-5" style="background-image: url('images/backgrounds/contact.jpg');">
        <div class="container-custom">
            <h1>Contact Us</h1>
        </div>
    </div>
    <div class="page-content-small leading-shadow">
        <div class="container-custom py-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="display-5">Contact Form</h1>
                    <p>Leave us a message, and we will get back to you.</p>
                    <form>
                        <input type="text" id="contactName" name="contactName" placeholder="John Doe" class="contact-input mb-4">
                        <input type="email" id="contactEmail" name="contactEmail" placeholder="jd@example.com" class="contact-input mb-4">
                        <textarea class="contact-input" id="contactMsg" name="contactMsg" rows="7" placeholder="Short message for us." style="resize: vertical;"></textarea>
                        <button type="submit" class="button button-contact mt-4">Send</button>
                    </form>
                </div>
                <div class="col-md-5 col-12 offset-md-1 mt-5 mt-md-0">
                    <h1 class="display-5 mb-4">Information</h1>
                    <h4 class="text-dark mt-3">Northeast(MD, VA, NY, NJ) / Southeast(GA, SC, TN, AL)</h4>
                    <a href="mailto:Rett@hibernianursery.com">Rett@hibernianursery.com</a><br>
                    <a href="mailto:Amber@hibernianursery.com">Amber@hibernianursery.com</a>
                    <h4 class="text-dark mt-3">Texas</h4>
                    <a href="mailto:Chris@hibernianursery.com">Chris@hibernianursery.com</a><br>
                    <a href="mailto:Shauna@hibernianursery.com">Shauna@hibernianursery.com</a>
                    <h4 class="text-dark mt-3">Florida</h4>
                    <a href="mailto:Jason@hibernianursery.com">Jason@hibernianursery.com</a><br>
                    <a href="mailto:Shauna@hibernianursery.com">Shauna@hibernianursery.com</a>
                    <h4 class="text-dark mt-3">Webster Office</h4>
                    <span>Phone: <a href="tel:3527934423">(352) 793-4423</a></span><br>
                    <span>Fax: (352) 793-1370</span>
                    <h4 class="text-dark mt-3">Altamonte Springs Office</h4>
                    <span>Phone: <a href="tel:4079601852">(407) 960-1852</a></span><br>
                    <span>Fax: (407) 960-1854</span>
                </div>
            </div>
        </div>

    </div>
    <?php require('includes/footer.php');?>
    <?php require('includes/scripts.php');?>
    <script src="js/nav.js"></script>
</body>
</html>