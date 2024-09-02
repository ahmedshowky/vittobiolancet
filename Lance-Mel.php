<?php $pageTitle = 'Lance-Mel'; ?>
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
    <h1 id="title-of-milk-replacer">Lance-Mel</h1>
    <p>Lance-Mel is a premium milk replacer for calves, specially formulated to provide a nutrient-dense product that ensures calves receive the optimal levels of proteins, fats, vitamins, and minerals needed for robust growth, strong immune function, and overall health from birth through weaning.</p>
    <br>
    <br>
    <h3>Usage and Mixing Instructions</h3>
    <ul>
    <br>
        <li><strong>Mixing Ratio:</strong></li>
        <br>
        <ul>
            <li>For Pre-Weaned Calves: Mix 85 grams of milk replacer powder with 1 liter of warm water (40-45°C).</li>
        </ul>
        <br>
        <li><strong>Feeding Schedule:</strong></li>
        <br>
        <ul>
            <li>Birth to 3 Weeks: Feed 2-3 liters of prepared milk replacer, 3 times daily.</li>
            <li>4 to 6 Weeks: Feed 2-3 liters of prepared milk replacer, 2 times daily.</li>
            <li>7 to 8 Weeks: Gradually reduce the quantity of milk replacer as solid feed intake increases.</li>
        </ul>
    </ul>
    <br>
    <br>
</div>

<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php'; ?>
<?php include $tpl . 'end.php'; ?>
