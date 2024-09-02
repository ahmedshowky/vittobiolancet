<?php $pageTitle = 'Lance-AD'; ?>
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
  <div class="detail">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="paging">
            <h2><?php getTitle() ?></h2>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a><?php getTitle() ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Banner-->

<!-- Product Details Section -->
<div class="container">
    <p>Vitamin AD3E is a high-quality supplement designed to provide essential vitamins to livestock, pets, and other animals. Formulated to support overall health, growth, and reproduction, this liquid vitamin solution ensures optimal levels of Vitamin A, D3, and E, crucial for animal well-being.</p>
    <br>
        <br>
    <h3>Usage and Dosage</h3>
    <ul>
    <br>
    <br>
        <li><strong>For Cattle:</strong></li>
        <br>
        <ul>
            <li>Adult: 5-10 ml per day</li>
            <li>Calves: 2-4 ml per day</li>
        </ul>
        <br>
        <li><strong>For Swine:</strong></li>
        <br>

        <ul>
            <li>Adults: 3-4 ml per day</li>
            <li>Piglets: 1-2 ml per day</li>
        </ul>
        <br>
        <li><strong>For Poultry:</strong></li>
        <br>
        <ul>
            <li>Layers/Broilers: 1 ml per 3 liters of drinking water</li>
        </ul>

        <br>
        <br>
    </ul>
    <br>
    <br>
    <!-- Add similar sections for other products like Lance-Sel, Lance-C, Lance-K3, etc., if needed -->
    
    
</div>

<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php'; ?>
<?php include $tpl . 'end.php'; ?>
