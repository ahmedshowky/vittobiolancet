<?php 
$pageTitle = 'Pro-Lance'; 
include 'init.php';

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
    <h1 id="title-of-probiotics">Pro-Lance</h1>
    <p>Pro-Lance is an innovative multi-strain solid fermented probiotic designed to enhance the gut health of livestock, poultry, and pets. This probiotic formulation helps antagonize harmful pathogens such as Salmonella, E. coli, and Clostridium, promoting a healthier digestive system and improving overall animal performance.</p>
    <br>
    <br>
    <h3>Usage and Dosage</h3>
    <ul>
    <br>
        <li><strong>For Cattle:</strong></li>
        <br>
        <ul>
            <li>Adult: 3-5 gm per day</li>
            <li>Calves: 1-2 gm per day</li>
        </ul>
        <br>
        <li><strong>For Swine:</strong></li>
        <br>
        <ul>
            <li>0.5 kg per ton of feed</li>
        </ul>
        <br>
        <li><strong>For Poultry:</strong></li>
        <br>
        <ul>
            <li>0.5 kg per ton of feed</li>
        </ul>
    </ul>
    <br>
    <br>
</div>

<?php 
include $tpl . 'footer.php'; 
include $tpl . 'js.php'; 
include $tpl . 'end.php'; 
?>
