<?php $pageTitle = 'Lance-Acid'; ?>
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
    <h1 id="title-of-acid">Lance-Acid</h1>
    <p>Lance-Acid is a liquid organic acid supplement designed to ensure clean water supply for livestock, poultry, and pets. With its strong antimicrobial effect, it aids in maintaining gut health, improving digestibility, and promoting better energy utilization by saving metabolic energy for hydrochloric acid production.</p>
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
