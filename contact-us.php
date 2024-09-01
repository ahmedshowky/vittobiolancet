<?php $pageTitle = 'Contact Us'; ?>
<?php include 'init.php'; ?>

<!--Start Banner-->
<div class="sub-banner">
  <img class="banner-img" src="<?php echo $img; ?>sub-banner7.jpg" alt="">
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

<!--Start Content-->
  <div class="content">
    <div class="contact-us">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="our-location">
                <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27581.406335120235!2d31.465112194376278!3d30.217799470763488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14581aa875fccfc5%3A0x99dcaaccf8f52ac9!2z2KfZhNit2Yog2KfZhNiq2KfYs9i52Iwg2KfZhNmC2YTZitmI2KjZitip!5e0!3m2!1sar!2seg!4v1555291671601!5m2!1sar!2seg"></iframe></div>
              </div>
            </div>
          </div>
        </div>
        <div class="leave-msg dark-back">
          <div class="container">
            <div class="rox">
              <div class="col-md-7">
                <div class="main-title">
                  <h2>We'd Love to Hear From You</h2>
                </div>
                <div class="form">
                  <div class="row">
                    <p class="success" id="success" style="display:none;"></p>
                    <p class="error" id="error" style="display:none;"></p>
                    <form name="contact_form" id="contact_form" method="post" action="#" onSubmit="return false">
                      <div class="col-md-4"><input type="text" data-delay="300" placeholder="Your full name" name="contact_name" id="contact_name" class="input"></div>
                      <div class="col-md-4"><input type="text" data-delay="300" placeholder="E-mail Address" name="contact_email" id="contact_email" class="input"></div>
                      <div class="col-md-4"><input type="text" data-delay="300" placeholder="Subject" name="contact_subject" id="contact_subject" class="input"></div>
                      <div class="col-md-12"><textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea></div>
                      <div class="col-md-3"><input name=" " type="submit" value="submit" onClick="validateContact();"></div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="contact-get">
                  <div class="main-title">
                    <h2>GET IN Touch</h2>
                  </div>
                  <div class="get-in-touch">
                    <div class="detail">
                      <span><b>Feed Additives:</b></span>
                      <span class="m-l-20"> <a href="mailto:feedadditives@vitgroupco.com">feedadditives@vitgroupco.com</a></span>
                      <span class="m-l-20"> <a href="tel:01092666028">01092666028</a></span>
                      <span class="m-b-10 m-t-10 b-b"></span>
                      <span><b>Diagnostics:</b></span>
                      <span class="m-l-20"> <a href="mailto:diagnostics@vitgroupco.com">diagnostics@vitgroupco.com</a></span>
                      <span class="m-l-20"> <a href="tel:01024348290">01024348290</a></span>
                      <span class="m-b-10 m-t-10 b-b"></span>
                      <span><b>Contact:</b> <a href="mailto:info@vitgroupco.com">info@vitgroupco.com</a></span>
                      <!-- <span><b>Additives:</b> <a href="mailto:feedadditives@vitgroupco.com">feedadditives@vitgroupco.com</a></span>
                      <span><b>Diagnostics:</b> <a href="mailto:diagnostics@vitgroupco.com">diagnostics@vitgroupco.com</a></span> -->
                      <span><b>Jobs:</b> <a href="mailto:jobs@vitgroupco.com">jobs@vitgroupco.com</a></span>
                        <span><b>Address:</b> Villa no. 10, Nageib Mahfouz st., 9<sup>th</sup> district, Al-Obour City - Egypt</span>
                        <span><b>Fax:</b> +20 243129528</span>
                    </div>
                    <!-- <div class="social-icons">
                      <a href="src="<?php echo $js; ?>." class="fb"><i class="icon-euro"></i></a>
                      <a href="src="<?php echo $js; ?>." class="tw"><i class="icon-yen"></i></a>
                      <a href="src="<?php echo $js; ?>." class="gp"><i class="icon-google-plus"></i></a>
                      <a href="src="<?php echo $js; ?>." class="vimeo"><i class="icon-vimeo4"></i></a>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
<!--End Content-->


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php';?>
<?php include $tpl . 'end.php'; ?>