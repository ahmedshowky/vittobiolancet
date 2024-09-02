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
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--End Banner-->

<!-- Product Details Section -->
<div class="container">
    <h1 id="title-of-Vit" >Lance-Sel</h1>
    <p>Liquid Vitamin E + Selenium is a premium supplement designed to support the health and performance of livestock, pets, and other animals. This potent combination of Vitamin E and Selenium plays a crucial role in maintaining optimal health, improving immune function, and enhancing overall vitality.</p>
    
    <h3>Usage and Dosage</h3>
    <ul>
    <br>
        <li><strong>For Cattle:</strong></li>
        <ul>
            <li>Adult: 5-10 ml per day</li>
            <li>Calves: 2-4 ml per day</li>
        </ul>
        <br>
        <li><strong>For Swine:</strong></li>
        <ul>
            <li>Adults: 3-4 ml per day</li>
            <li>Piglets: 1-2 ml per day</li>
        </ul>
        <br>
        <li><strong>For Poultry:</strong></li>
        <br>
        <ul>
            <li>Layers/Broilers: 1 ml per 2 liters of drinking water</li>
        </ul>
    </ul>

    <!-- Additional Information or CTA -->
    <p>If you have any questions about the product, please contact us for more details or consult with your veterinary professional.</p>
    
    <div class="product-contact">
        <a href="contact.php" class="btn btn-primary">Contact Us</a>
        <br>
    </div>
</div>

<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php'; ?>
<?php include $tpl . 'end.php'; ?>
