<?php $pageTitle = 'Lance-Amino'; ?>
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
    <h1 id="title-of-amino">Lance-Amino</h1>
    <p>Lance-Amino is a liquid amino acids mixture specially formulated to provide essential amino acids needed for the optimal health and performance of livestock, poultry, and pets. Amino acids are crucial for protein synthesis, muscle development, and overall well-being.</p>
    <br>
    <br>
    <h3>Usage and Dosage</h3>
    <ul>
    <br>
        <li><strong>For Cattle:</strong></li>
        <br>
        <ul>
            <li>Adult: 5-10 ml per day</li>
            <li>Calves: 1-2 ml per day</li>
        </ul>
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
            <li>Layers/Broilers: 1 ml per liter of drinking water</li>
        </ul>
    </ul>
    <br>
    <br>
</div>

<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php'; ?>
<?php include $tpl . 'end.php'; ?>
