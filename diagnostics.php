<?php $pageTitle = 'Diagnostics'; ?>
<?php include 'init.php'; ?>

<!--Start Banner-->
<div class="sub-banner">
  <img class="banner-img" src="<?php echo $img; ?>sub-banner4.jpg" alt="">
  <div class="detail">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="paging">
            <h2><?php getTitle() ?></h2>
            <ul>
              <li><a href="index.php">Home</li>
              <li><?php getTitle() ?></li>
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
  <div class="research">
    <div class="doctors-list">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <h2>A - Rapid Test:</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4>Large animal & Poultry:</h4>
            <ul>
              <li><strong>01</strong>Bovi Dia-5 Rapid kit</li>
              <li><strong>02</strong>BLV Ab/B.Brucella Ab Rapid</li>
              <li><strong>03</strong>BLV Ab Rapid kit</li>
              <li><strong>04</strong>Bovine Brucella Ab Rapid kit</li>
              <li><strong>05</strong>GS.Brucella Ab Rapid kit</li>
              <li><strong>06</strong>FMDV type O Ag Rapid kit</li>
              <li><strong>07</strong>FMDV type A Ag Rapid kit</li>
              <li><strong>08</strong>FMDV type Asia1 Ag Rapid kit</li>
              <li><strong>09</strong>FMDV PAN Ag Rapid kit</li>
              <li><strong>10</strong>FMDV 3Diff/PAN Ag Rapid kit</li>
              <li><strong>11</strong>Bovi Preg Rapid Kit</li>
              <li><strong>12</strong>Calf IgG Rapid kit</li>
              <li><strong>13</strong>AIV Ag Rapid kit 2.0</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h4>Dog & Cat:</h4>
            <ul>
              <li><strong>01</strong>CCV/CPV Ag Rapid kit</li>
              <li><strong>02</strong>CCV Ag Rapid kit</li>
              <li><strong>03</strong>CDV Ag Rapid kit</li>
              <li><strong>04</strong>CHW Ag Rapid kit</li>
              <li><strong>05</strong>CIV Ag Rapid kit</li>
              <li><strong>06</strong>CPV Ag Rapid kit</li>
              <li><strong>07</strong>Giardia Ag Rapid kit</li>
              <li><strong>08</strong>FCV Ag Rapid kit</li>
              <li><strong>09</strong>FCoV Ag Rapid kit</li>
              <li><strong>10</strong>FeLV Ag/FIV Ab Rapid kit</li>
              <li><strong>11</strong>FeLV Ag Rapid kit</li>
              <li><strong>12</strong>FIV Ab Rapid kit</li>
              <li><strong>13</strong>FPV/FCoV Ag Rapid kit</li>
              <li><strong>14</strong>FPV Ag Rapid kit</li>
              <li><strong>15</strong>CPV, CCV, Giardia Ag Rapid kit</li>
              <li><strong>16</strong>T4 Level Rapid kit</li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h4>Horse:</h4>
            <ul>
              <li><strong>01</strong>Tetanus Ab Rapid kit</li>
              <li><strong>02</strong>Equine IgG Rapid Kit</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="doctors-list dark-back">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <h2>B - Elisa Test:</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <h4>Large animal :</h4>
            <ul>
              <li><strong>01</strong>FMDV NSP AB ELISA</li>
              <li><strong>02</strong>FMDV Type O ELISA</li>
              <li><strong>03</strong>FMDV Type A AB ELISA</li>
              <li><strong>04</strong>FMDV Type Asia1 AB ELISA</li>
              <li><strong>05</strong>BVDV AB ELISA</li>
              <li><strong>06</strong>Brucella Ab b-ELISA</li>
              <li><strong>07</strong>Bovine Leukosis Ab b-ELISA</li>
              <li><strong>08</strong>Bovi-check BT Direct ELISA</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <h4>Poultry:</h4>
            <ul>
              <li><strong>01</strong>NDV AB ELISA</li>
              <li><strong>02</strong>IBDV AB ELISA</li>
              <li><strong>03</strong>IBV AB ELISA</li>
              <li><strong>04</strong>AIV AB ELISA</li>
              <li><strong>05</strong>MG AB ELISA</li>
              <li><strong>06</strong>MS AB ELISA</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
      <div class="doctors-list">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="main-title">
                          <h2>C - Devices & Strips:</h2>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12">
                      <ul>
                          <li><strong>01</strong>UriDoctor Vet</li>
                          <li><strong>02</strong>HEALTH MATE VET 11C (Urine)</li>
                          <li><strong>03</strong>HEALTH MATE BHB (Milk)</li>
                          <li><strong>04</strong>HEALTH MATE LDH (Milk)</li>
                          <li><strong>05</strong>HEALTH MATE MUN (Milk)</li>
                      </ul>
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