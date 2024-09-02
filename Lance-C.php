<?php $pageTitle = 'Lance-C'; ?>
<?php include 'init.php';

// Directory containing the banner images
$bannerDir = $img . 'sub banners/';

// Get all image files from the directory
$images = array_filter(scandir($bannerDir), function($file) use ($bannerDir) {
    // Filter out non-image files and hidden files
    return in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif']) && !is_dir($bannerDir . $file);
});

// Select a random image from the available images
$randomImage = $images ? $bannerDir . $images[array_rand($images)] : 'default-banner.jpg'; // Fallback to a default image if none found
?>

<!--Start Banner-->
<div id="banner-container">
<img class="banner-img" src="<?php echo $randomImage; ?>" alt="">
</div>
<!-- Product Details Section -->
<div class="container">
    <h1 id="title-of-vit">Lance-C</h1>
    <p>Our Vitamin C Powder is a premium supplement designed to support the health and well-being of all types of animals, including livestock, poultry, and pets. This essential vitamin is crucial for enhancing immune function, reducing stress, and promoting overall health.</p>
    <br>
    <br>
    <h3>Usage and Dosage</h3>
    <ul>
    <br>
        <li><strong>For Cattle:</strong></li>
        <br>
        <ul>
            <li>Adult: 10-5 gm per day</li>
            <li>Calves: 5-2 gm per day</li>
        </ul>
        <br>
        <li><strong>For Swine:</strong></li>
        <br>
        <ul>
            <li>Adults: 4-3 gm per day</li>
            <li>Piglets: 2-1 gm per day</li>
        </ul>
        <br>
        <li><strong>For Poultry:</strong></li>
        <br>
        <ul>
            <li>Layers/Broilers: 200-100 mg per liter of drinking water</li>
        </ul>
    </ul>
    <br>
    <br>

    <!-- Additional Information or CTA -->
    <p>If you have any questions about Lance-C, please contact us for more details or consult with your veterinary professional.</p>
    <br>
    <div class="product-contact">
        <a href="contact.php" class="btn btn-primary">Contact Us</a>
        <br>
    </div>
</div>

<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php'; ?>
<?php include $tpl . 'end.php'; ?>
