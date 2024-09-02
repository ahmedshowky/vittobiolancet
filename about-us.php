<?php $pageTitle = 'About Us'; ?>
<?php include 'init.php'; ?>

<!--Start Banner-->
<div class="sub-banner">
<div id="banner-conatiner">
  <img class="banner-img" src="<?php echo $img; ?>sub-banner1.jpg" alt="">
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

<!--Start Content-->
    <div class="content">
        <!--Start Welcome-->
        <div class="welcome">
            <div class="container">
                <div id="tabbed-nav">
                    <ul>
                        <li><a>Vision</a></li>
                        <li><a>Mission</a></li>
                        <li><a>Values</a></li>
                    </ul>
                    <div>
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="welcome-serv-img">
                                        <img src="<?php echo $img; ?>about/vision.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail">
                                        <h4>Vision</h4>
                                        <p><mark>Customer Success:</mark> Make customers success who use Biolancet's products and services</p>
<p><mark>World Best:</mark> World it I feed additives company contributing In world animal industry.</p>
<p><mark>Animal Welfare:</mark> Achieving the equation between animal comfort and peak productivity.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="welcome-serv-img">
                                        <img src="<?php echo $img; ?>about/mission.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail">
                                        <h4>Mission</h4>
                                        <ul class="list-items">
                                            <li>
                                                <i class="icon-checkmark"></i>
                                                The ultimate partners for healthcare Industry within Egypt and the Middle East.
                                            </li>
                                            <li>
                                                <i class="icon-checkmark"></i>
                                                The best provider of up to date affordable product.
                                            </li>
                                            <li>
                                                <i class="icon-checkmark"></i>
                                                The best managed company as defined by functional competencies, alignment around goals and behaviors, business integrity, team work and productivity.
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="welcome-serv-img">
                                        <img src="<?php echo $img; ?>about/values.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="detail">
                                        <h4>Values</h4>
                                        <ul class="list-items">
                                            <li>
                                                <i class="icon-checkmark"></i>
                                                <strong>Team Work:</strong>
                                                We will work together to achieving our common vision
                                            </li>
                                            <li>
                                                <i class="icon-checkmark"></i>
                                                <strong>Professionalism:</strong>
                                                We will maintain our professionalism through continuous professional development.
                                            </li>
                                            <li>
                                                <i class="icon-checkmark"></i>
                                                <strong>Integrity:</strong>
                                                We are each personally accounable for the highest standards of ethical behavior, including honesty and fairness in all aspects of our work.
                                            </li>
                                            <li>
                                                <i class="icon-checkmark"></i>
                                                <strong>Transparency: </strong>
                                                We will envolve our stackholders through openly sharing information that clarifies their understanding of our policies, actions and builds an image of reliability.
                                            </li>
                                            <li>
                                                <i class="icon-checkmark"></i>
                                                <strong>Service: </strong>
                                                We will strive to provide the highest level of service to our stackholders at all times in a cosistent manner.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Welcome-->
    </div>
<!--End Content-->


<?php include $tpl . 'footer.php'; ?>
<?php include $tpl . 'js.php';?>
<?php include $tpl . 'end.php'; ?>