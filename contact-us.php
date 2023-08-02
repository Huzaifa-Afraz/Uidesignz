<?php
$websitetitle = "Contact Us | Best UX/UI Designs | UIDesignz  ";
$meta_title = "Contact Us | Best UX/UI Designs | UIDesignz  ";
$meta_description = "We are the best UX/UI design company in Los Angeles, CA. Collaborate for more significant impact and expansion.";
$meta_keywords = "Contact Us, Best UX Designs, UIDesignz ";
$og_image="";
include "includes/header.php";
?>

    <!-- end page title area -->
    <section class="contact-section pt-5 pb-5 bg-thin">
      <div class="container">
            <div class="blog-item-content mt-5"  id="page__slugs">
          <a href="https://www.uidesignz.com/" target="_self" class="btn btn-text-only">
            Home >
           </a>
          <div class="btn btn-text-only" style="color: black; cursor: default">
            Contact Us
          </div>
        </div>
        <div class="section-title w-100">
          <h1 class="w-100 text-center m-0">Let's Talk</h1>
          <p class="text-center">
            We work with brands and start-ups. Collaborate for more significant
            impact and expansion.
          </p>
        </div>
        <div class="row" id="contact_row_sec">
          <div class="col-12">
            <form action="action/insert.php" method="POST">
              <div class="row">
                <?php
                  include 'includes/alert_messages.php';
                  if(isset($_GET['contact_us_success'])){
                        messages("Contact Messsage Send Successfully!","success");    
                  }
				  if(isset($_GET['contact_us_error'])){
                        messages("Prove that you are human!","error");    
                  }
              ?>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="name" class="w-100 text-start">Name</label>
                    <input
                      type="text"
                      name="contact_us_name"
                      class="form-control"
                      id="name"
                      required=""
                      data-error="Please enter your name"
                      placeholder="Enter your name"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="email" class="w-100 text-start">Email</label>
                    <input
                      type="email"
                      name="contact_us_email"
                      class="form-control"
                      id="email"
                      required=""
                      data-error="Please enter your email"
                      placeholder="Enter your Email"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="name" class="w-100 text-start">Subject</label>
                    <input
                      type="text"
                      name="contact_us_subject"
                      class="form-control"
                      id="name"
                      required=""
                      data-error="Please provide context"
                      placeholder="Provide context"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="form-group">
                    <label for="email" class="w-100 text-start">Phone</label>
                    <input
                      type="phone"
                      name="contact_us_phone"
                      class="form-control"
                      id="email"
                      required=""
                      data-error="Please select your subject"
                      placeholder="Select Phone"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
				
				
				
				

                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label for="name" class="w-100 text-start">Message</label>
                    <textarea
                      name="contact_us_msg"
                      id="message"
                      class="form-control"
                      cols="30"
                      rows="6"
                      required=""
                      data-error="Please enter your message"
                      placeholder="Write your question here..."
                    ></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
				<div class="col-lg-6 col-md-3">
                  <div class="form-group">
                  
					<?php
     			$value1 = rand(1,9);
				$value2 = rand(1,9);
				
				$captcha_hidden = md5($value1 + $value2);
				
				echo $value1." + ".$value2." = ";
      				?>
					
					
                    <input
                      type="text"
                      name="captcha"
                      
					  style="width:50px !important;"
                      id="captcha"
                      required=""
                      data-error="Please enter value"
                    />
					<input type="hidden" name="captcha_hidden" value="<?php echo $captcha_hidden;?>" />
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 w-100 text-start">
					
                  <button type="submit" name="contact_us_submit" class="btn btn-solid rounded-pill mt-3">
                    Send Message
                  </button>
                  <div id="msgSubmit" class="h5 text-center hidden"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php
include "includes/footer.php";
?>