     <!-- start footer area -->
    <footer class="footer-main" id="footerafter">
      <div class="footer-area pt-5 text-white" id="footer-sec">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-5 col-sm-6 col-12" id="left-footer-colm">
              <div class="footer-widget text-start ps-3 pe-3  p-lg-0">
                <h2 class="text-white text-start">About us</h2>
                <p class="text-white opacity-75 text-start" style="width: 90%">
                UIDesignz is a UI/UX Design Firm working in Los Angeles. Our services include UI/UX, Web Designing and App Designing by experienced Professionals.
                </p>

                 <div class="social-link">
                  <a href="https://www.facebook.com/people/UIDesignz/100088356167409/" class="fs-5" target="_blank"
                    ><i> <img class="arrow-w-20" src="../assets/img/icons/facebook.svg" alt="facebook"/> </i
                  ></a>
                  <a href="https://www.pinterest.com/uidesign0005/_created/" class="fs-5" target="_blank"
                    ><i> <img class="arrow-w-20" src="../assets/img/icons/pinterest.svg" alt="pinterest"/> </i
                  >
                  </a>
                  <a href="https://www.linkedin.com/company/uidesignz/" class="fs-5" target="_blank"
                    ><i> <img class="arrow-w-20" src="../assets/img/icons/linkedin.svg" alt="linkedin"/> </i
                  ></a>
                  <a href="https://www.instagram.com/uidesignz.3003/" class="fs-5" target="_blank"
                    ><i> <img class="arrow-w-20" src="../assets/img/icons/instagram.svg" alt="instagram"/> </i
                  >
                  </a>
                   <a href="https://dribbble.com/UI_Designer01" class="fs-5" target="_blank"
                    ><i> <img class="arrow-w-20" src="../assets/img/icons/dribbble.svg" alt="dribbble"/> </i
                  >
                  </a>
                   <a href="https://www.behance.net/uidesignz" class="fs-5" target="_blank"
                    ><i> <img class="arrow-w-20" src="../assets/img/icons/behance.svg" alt="behance"/> </i
                  >
                  </a>
                </div>

                <div class="quote mt-4">
                  <b style="font-size: 1.3rem">Request a Quote</b><br />
                  <p class="text-white">contact@uidesignz.com</p>
                </div>
              </div>

              <div
                class="mail-call-info row ms-3 me-3  ms-lg-0 me-lg-0" id="mail-call-info-sec"
                style="margin-top: 2rem; padding: 0.5rem 1.5rem; width: 90%"
               
              >
                <div class="col-lg-6 pt-3 pb-0" id="location-address">
                  <span style="font-size: 1.3rem"><b class="text-dark">Address </b></span>
                  <p class="text-start mt-2">
                    <b>
                      UI Designz Agency <br />
                      3003 West Olympic Blvd Ste 205
                      <br />
                      Unit #1015 Los Angeles, CA 90006</b
                    >
                  </p>
                </div>
                <div class="col-lg-6 pt-3 pb-0" style="padding-left: 3rem; padding-right: 0;" id="whatsapp-numb">
                  <b style="font-size: 1.3rem" class="text-dark">Call/Whatsapp </b>
                  <p
                    class="text-start mt-2 d-flex align-items-center"
                    style="font-weight: bolder"
                  >
                    <img
                      src="./assets/img/icons/united-states.webp"
                      alt="united states flag"
                      style="width: 1.5rem"
                    />
                    &nbsp;  +1 (323) 522-5370
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 right-form-col ps-4 pe-4  p-lg-0" id="inquiry-roport-section">
              <h2 class="text-white text-start">Send Inquiry</h2>
              <!-- <h3 class="text-white mt-4 text-start">Send Inquiry</h3> -->
              <p class="text-white text-start">
                Contact us if you have any inquiries regarding our digital
                marketing services.
              </p>
              <form method="POST" action="action/insert.php">
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group p-0">
                      <input
                        type="name"
                        class="form-control"
                        name="contact_us_name"
                        placeholder="Your Name"
                        required="required"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <input
                        type="email"
                        class="form-control"
                        name="contact_us_email"
                        placeholder="email"
                        required="required"
                      />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input
                        type="phone"
                        class="form-control"
                        name="contact_us_phone"
                        placeholder="Phone number"
                        required="required"
                      />
                    </div>
                  </div>
                 
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea
                        type="text"
                        class="form-control"
                        name="contact_us_msg"
                        placeholder="Message"
                        required="required"
                        rows="4"
                        cols="50"
                      ></textarea>
                    </div>
                  </div>
				  <div class="col-md-12">
                    <div class="form-group">
                  
					<?php
     			$value1 = rand(1,9);
				$value2 = rand(1,9);
				
				$captcha_hidden = md5($value1 + $value2);
				
				echo $value1." + ".$value2." = ";
      				?>
					
					<!--<lable for="captcha"></lable>-->
                    <input
                    class=" border-white "
                      type="text"
                      name="captcha"
                      placeholder="Code"
					  style="width:50px !important;"
                      id="captcha"
                      required=""
                      data-error="Please enter value"
                    />
					<input type="hidden" name="captcha_hidden" value="<?php echo $captcha_hidden;?>" />
                  </div>
                  </div>
                </div>
                <div class="cta-btn" style="width:50%;">
				<button type="submit" name="contact_us_submit" class="btn btn-solid rounded-pill mt-3 mb-3 py-3">
                    Send Message
                  </button>
            </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-links">
        <div class="container">
          <div class="row">
            <div class="copyright">
              <p class="text-lg-start text-sm-center w-100" style="font-size: 10px;">
                <b>Copyright &copy; 2022 </b> uidesignz.com
              </p>
            </div>

          </div>
        </div>
      </div>
    </footer>
    <!--<script src="https://www.google.com/recaptcha/api.js?render=6Ld63Z0lAAAAAJjrd_6TkxAQcSm-B2u3NhONiwWZ"></script>-->
       <script>
        // grecaptcha.ready(function() {
        //   grecaptcha.execute('6Ld63Z0lAAAAAJjrd_6TkxAQcSm-B2u3NhONiwWZ', {action: 'submit'}).then(function(token) {
        //       let response=document.getElementById("g_token");
        //       response.value=token;
        //   });
  </script>
    <script>
//   window.onload=function(){
//   var script = document.createElement('script');
//   script.src = "https://www.google.com/recaptcha/api.js";
//   script.async = true;
//   script.defer = true;
//   document.body.appendChild(script);
//   }

    <!-- end footer area -->
    <!--pricing section variables-->


  let WebDashboardDesign=<?php echo$WebDashboardDesign;?>;
  let MulWebDashboardDesign=<?php echo$MulWebDashboardDesign;?>;
  let LandingPageDesign=<?php echo$LandingPageDesign;?>;
  let MulLandingPageDesign=<?php echo$MulLandingPageDesign;?>;
  let MobileAppDesign=<?php echo$MobileAppDesign;?>;
  let MulMobileAppDesign=<?php echo$MulMobileAppDesign;?>;
  let HTMlCSS=<?php echo$HTMlCSS;?>;
  let MulHTMlCSS=<?php echo$MulHTMlCSS;?>;

  </script>
<!--end variables-->


    <!-- jequery JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- magnific popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- owl carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- meanmenu JS -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- form validator -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- contact form JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- ajaxchimp JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- main JS -->
    <script defer src="assets/js/main.js"></script>
    <script src="assets/js/gallery.js"></script>
    <script src="../assets/js/custom.js"></script>
      <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
       <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script>
//       function onSubmit(token) {
//           grecaptcha.execute();
//   document.getElementById("Pricong-form").submit();
  
// }
</script>
  </body>
</html>