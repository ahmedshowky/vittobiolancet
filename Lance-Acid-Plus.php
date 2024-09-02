
<?php $pageTitle = 'Lance-Acid Plus'; ?>
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
    <h1 id="title-of-acid">Lance-Acid Plus</h1>
    <p>Lance-Acid Plus is a highly concentrated organic acid formulation designed to inhibit biofilm formation, enhance gut health, and improve feed conversion ratio (FCR) in poultry and livestock. This advanced solution is tailored for integration into poultry diets, providing multiple benefits that contribute to healthier flocks and improved productivity while aligning with antibiotic-free and sustainable farming practices.</p>
    <br>
    <br>
    <h3>Usage and Dosage</h3>
    <ul>
    <br>
        <li><strong>For Swine:</strong></li>
        <br>
        <ul>
            <li>Adults: 1 ml per day</li>
            <li>Piglets: 0.5 ml per day</li>
        </ul>
        <br>
        <li><strong>For Poultry:</strong></li>
        <br>
        <ul>
            <li>Layers/Broilers: 0.5 ml per liter of drinking water</li>
        </ul>
    </ul>
    <br>
    <br>
</div>

<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php'; ?>
<?php include $tpl . 'end.php'; ?>
