<?php $head_title="Cheers lanka travels - Experience Paradise, One Journey at a Time"?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>
<?php require_once('parts/home/hidden.php'); ?>
<?php require_once('parts/home/banner.php'); ?>
<?php require_once('parts/home/destinations.php'); ?>
<?php require_once('parts/home/about.php'); ?>
<?php require_once('parts/home/popular.php'); ?>
<?php require_once('parts/home/feature.php'); ?>
<?php require_once('parts/footer/footer.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>

<a href="https://wa.me/+94764248437" target="_blank" class="whatsapp-icon">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Add custom styles for the position -->
<style>
    .whatsapp-icon {
        position: fixed;
        bottom: 20px;  /* Adjust distance from bottom */
        right: 20px;   /* Adjust distance from right */
        background-color: #25D366;  /* WhatsApp green color */
        color: white;
        width: 60px;  /* Set a fixed width */
        height: 60px; /* Set a fixed height to maintain a circle */
        border-radius: 50%;  /* This ensures it's a circle */
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 30px;  /* Adjust the icon size */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
        z-index: 9999; /* Ensures it stays on top of all other content */
    }

    .whatsapp-icon:hover {
        background-color: #128C7E; /* Darker green on hover */
    }

    .whatsapp-icon i {
        margin: 0; /* Remove margin around the icon */
    }
</style>