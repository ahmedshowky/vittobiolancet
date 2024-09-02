<?php $pageTitle = 'Lance-K3'; ?>
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
    <h1 id="title-of-vit">Lance-K3</h1>
    <p>Vitamin K3 is an essential supplement designed to support the health and well-being of livestock, pets, and other animals. Vitamin K3, also known as menadione, plays a crucial role in blood clotting, bone metabolism, and overall health.</p>
    <br>
    <br>
    <h3>Usage and Dosage</h3>
    <ul>
    <br>
        <li><strong>For Cattle:</strong></li>
        <br>
        <ul>
            <li>Adult: 5-10 gm per day</li>
            <li>Calves: 2-4 gm per day</li>
        </ul>
        <br>
        <li><strong>For Swine:</strong></li>
        <br>
        <ul>
            <li>Adults: 3-4 gm per day</li>
            <li>Piglets: 1-2 gm per day</li>
        </ul>
        <br>
        <li><strong>For Poultry:</strong></li>
        <br>
        <ul>
            <li>Layers/Broilers: 0.5-1 gm per liter of drinking water</li>
        </ul>
    </ul>
    <br>
    <br>


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php'; ?>
<?php include $tpl . 'end.php'; ?>
