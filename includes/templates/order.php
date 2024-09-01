<div class="tabs">
        <!-- tabs keeper-->
        <div class="tabs-keeper element-section pattern bg-gray-3 relative">
          <!-- tabs container-->
          <div>
            <h6 class="trans-uppercase">Order Now</h6>
            <!-- contact-form-->
            <div class="widget-contact-form">
             <!-- contact-form-->
             <div class="email_server_responce"></div>
             <form action="php/contacts-process.php" method="post" class="form contact-form alt clearfix" novalidate="novalidate">
              <input type="hidden" name="subject" value="<?php echo $pageTitle; ?>">
               <div class="input-container">
                 <input type="text" name="name" value="" size="40" placeholder="Name" aria-invalid="false" aria-required="true" class="form-row form-row-first">
               </div>
               <div class="input-container">
                     <input type="text" name="phone" value="" size="40" placeholder="Phone" aria-required="true" class="form-row form-row-last">
                   </div>
                   <div class="input-container">
                     <input type="email" name="email" value="" size="40" placeholder="Email" aria-required="true" class="form-row form-row-last">
                   </div>
                   <div class="input-container">
                     <input type="text" name="address" value="" size="40" placeholder="Address" aria-required="true" class="form-row form-row-last">
                   </div>
                   <div class="input-container">
                     <select name="select" class="form-row form-row-last">
                       <option value="" readonly>Order Or Free</option>
                       <option value="Order">Order Now</option>
                       <option value="Free Sample">Free Sample</option>
                     </select>
                   </div>
               <input type="submit" value="Request now" class="cws-button alt">
             </form>
             <!-- /contact-form-->
           </div>
          </div>
          <!-- /tabs container-->
        </div>
        <!-- /tabs keeper-->
      </div>