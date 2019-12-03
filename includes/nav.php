<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<nav class="navbar navbar-expand-lg navbar-dark navbar-main fixed-top" id="mainNavJS">
    <div class="container-custom">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo_w.png" class="navbar-main-logo" alt="Hibernia Nursery logo" id="navbarMainLogo"> 
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-lg-2 <?= ($activePage == 'index') ? 'active':''; ?>">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-lg-2 <?= ($activePage == 'availability') ? 'active':''; ?>">
                <a class="nav-link" href="availability.php">Availability</a>
            </li>
            <li class="nav-item mx-lg-2 <?= ($activePage == 'locations') ? 'active':''; ?>">
                <a class="nav-link" href="locations.php">Locations</a>
            </li>
            <li class="nav-item mx-lg-2 <?= ($activePage == 'contact') ? 'active':''; ?>">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
    </div>
</nav>