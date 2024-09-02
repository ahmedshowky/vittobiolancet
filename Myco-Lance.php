<?php $pageTitle = 'Myco-Lance'; ?>
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
    <h1 id="title-of-mycotoxin">Myco-Lance</h1>
    <p>Myco-Lance is a premium mycotoxin binder designed to protect livestock and poultry from the harmful effects of mycotoxins commonly found in feed. This advanced formula is developed to bind and neutralize a wide range of mycotoxins, ensuring the safety and health of animals while enhancing overall performance and productivity.</p>
    <br>
    <br>
    <h3>Usage and Dosage</h3>
    <ul>
    <br>
        <li><strong>For Cattle:</strong></li>
        <br>
        <ul>
            <li>1-0.5 kg per ton of feed</li>
        </ul>
        <br>
        <li><strong>For Swine:</strong></li>
        <br>
        <ul>
            <li>0.5-0.25 kg per ton of feed</li>
        </ul>
        <br>
        <li><strong>For Poultry:</strong></li>
        <br>
        <ul>
            <li>0.5-0.25 kg per ton of feed</li>
        </ul>
    </ul>
    <br>
    <br>
</div>

<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php'; ?>
<?php include $tpl . 'end.php'; ?>
