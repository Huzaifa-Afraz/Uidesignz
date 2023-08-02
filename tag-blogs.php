<?php
include "includes/connection.php";
if(isset($_GET['tag'])){
$tag = $_GET['tag'];
}
$test = $tag = str_replace("-", " ", $tag);
if($tag == "ux ui design"){
	$tag = $test = "UX/UI Design";
}
	$Sql = "Select * from blogs WHERE `blog_tags` LIKE '%$test%' ORDER BY `blogs`.`blog_id` DESC";

    $checkBlogsCk = mysqli_query($conn,$Sql);
    $rows=mysqli_num_rows($checkBlogsCk);
   if( $rows<=0){
    header('location: error-404.php');
   }


$websitetitle = "Blog | UIDesignz |UX/UI development company";
$meta_title = "Blog | Uidesignz |UX/UI development company";
$meta_description = "UI Design Blogs By Uidesignz Provide All The Necessary Information And New Rising Marketing Trends To The Client.";
$meta_keywords = "Uidesignz, UX/UI development company";
$og_image="";
include "includes/header_next.php";
?>

    <!-- end page title area -->
    <section class="portfolio-head d-flex align-items-center">
      <div class="container">
      <div class="blog-item-content mb-3"  id="page__slugs" style="margin-top: 5rem">
          <a href="https://www.uidesignz.com/" target="_self" class="btn btn-text-only">
            Home >
          </a>
            <a href="#" target="_self" class="btn btn-text-only">
            Tags >
          </a>
        <div class="btn btn-text-only" style="color: black; cursor: default">
            <?php echo $test; ?>
          </div>
        </div>
        <div class="section-title-for-portfolio">
          <h1 class="w-100 text-center"><?php echo ucfirst($test); ?></h1>
          <p class="w-100 text-center">
            UI/UX design is all about creating seamless and intuitive digital experiences. Our services focus on responsive by design, user-centered design<br> and maximizing interactivity to enhance user engagement. We bring your vision to life through effective UI/UX design.
          </p>
        </div>
      </div>
    </section>
    <section class="portfolio-section pt-4 pb-5 bg-thin">
      <div class="container">
        <!--start blog section-->
        <section id="blog" class="blog-section pt-4">
          <div class="row justify-content-center">
          <?php    
          $checkBlogs = mysqli_query($conn,"Select * from blogs WHERE `blog_tags` LIKE '%$tag%' ORDER BY `blogs`.`blog_id` DESC");
   if(mysqli_num_rows($checkBlogs)>0){
        while($row = mysqli_fetch_array($checkBlogs)){
                $blog_id = $row['blog_id'];
                $blog_title = $row['blog_title'];
                $blog_description = $row['blog_description'];
                $blog_image = $row['blog_image'];
                $blog_slug = $row['blog_slug'];
                $blog_categories_name = $row['blog_categories_name'];
                $blog_categories_slug = $row['blog_categories_slug'];
                $blog_tags = $row['blog_tags'];
                $blog_time_stamp = $row['blog_time_stamp'];
				$min_read = $row['min_read'];
				
				$Sql = "SELECT * FROM `users` where `user_id`='".$row['user_id']."'";
				$checkPortfoliocategories = mysqli_query($conn, $Sql);
				if(mysqli_num_rows($checkPortfoliocategories)>0){
					while($urow = mysqli_fetch_array($checkPortfoliocategories)){
						$user_designation = $urow['user_designation'];
						$user_full_name = $urow['user_full_name'];
						$user_image = $urow['user_image'];
					}
				}
        ?>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="blog-item-single">
                <div class="blog-item-img">
                  <a href="<?php echo $website_main_url;?>/blogs/<?php echo $blog_slug; ?>">
                    <img src="../admin/uploads/blog/<?php echo $blog_image; ?>" alt="<?php echo $blog_title; ?>" />
                  
                </div>
                <div class="blog-item-content" style="padding: 1em">
                  <span>
                    <div class="little_section d-flex align-item-center">
                        <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">
                        <div class="name_date ps-2 ">
                          <h5 class="d-block mb-0" style="font-size:15px;"><?php echo $user_full_name;?></h5>
                        <!-- <i class="envy envy-calendar"></i>-->
                        <?php echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" style="font-size:14px;">- <?php echo $min_read;?></p>
                        </div>
                        </div>
                    
                  </span>
                   <h3 class="text-start mb-1">
                    <?php echo $blog_title; ?>
                  </h3></a>
                   <a href="<?php echo $website_main_url;?>/blogs/<?php echo $blog_slug; ?>">
                    
                  <p style="margin-bottom:7px;"><?php echo substr($blog_description,0,50); ?>...</p>
                  </a>
                 
                  <a
                    href="<?php echo $website_main_url;?>/blogs/<?php echo $blog_slug; ?>"
                    target="_self"
                    class="btn btn-text-only text-primary p"
                  >
                    Read more
                    <img class="ps-1 arrow-w-15" src="/assets/img/icons/Arrow-rightB.svg" alt="right arrow">
                  </a>
                </div>
              </div>

            </div>
            <?php
              }
            }
            else
            header('location: error-404.php');
            ?>
          </div>
          <!-- row -->
        </section>
        <!-- row -->
      </div>
    </section>

 <section class="faq-section pt-5 pb-5">
        <div class="container ">
          
            <div class="row mb-2">
              <div class="section-title w-100">
                <h2 class="w-100 text-center mb-4">
                Frequently Asked Questions
                </h2>
              </div>
            <div class="accordion " >
                <div class="accordion-item ps-5 mt-3 pe-3 rounded-3">
                    <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title">How do you ensure that the design is both visually appealing and user-friendly?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p class="pb-3">To ensure that a design is both visually appealing and user-friendly, designers typically follow these best practices:
                        <ul  class="text-start p">
                            <li class="pb-2"><span style="Font-weight:bold;">Understand the target audience:</span>By researching the target audience and their needs, designers can create a design that appeals to them and meets their specific needs.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Follow design principles:</span>Designers use design principles such as contrast, alignment, and hierarchy to create a visually pleasing and easy-to-use design.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Use consistent design patterns:</span>Consistency in design patterns helps users understand how to interact with the product and makes it easier for them to use.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Conduct user testing:</span>By testing the design with real users, designers can identify usability issues and gather feedback to make improvements.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Continuously iterate:</span>Designers continuously iterate on the design based on user feedback and testing to improve the user experience.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Use standard UI components:</span>Using standard UI components such as buttons, forms, and navigation elements in a consistent manner makes the design more intuitive and easier to use.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Make it responsive:</span>Design should be responsive, meaning it should look and work well on different devices and screen sizes.</li>
                            <li class="pb-4"><span style="Font-weight:bold;">Prioritize accessibility:</span>Designers should consider accessibility in the design process and make sure that the design is usable for people with disabilities.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="accordion-item ps-5 mt-3 pe-3 rounded-3">
                    <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title"> How do you conduct user research for a UI/UX project?</span><span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p class="pb-3">User research is an essential part of the UI/UX design process. It involves gathering data and insights about the end-users of a product, in order to inform the design decisions. There are several methods for conducting user research, including:
                        <ul  class="text-start p">
                            <li class="pb-2"><span style="Font-weight:bold;">Interviews:</span>Conducting one-on-one or group interviews with users to gather information about their needs, goals, and pain points.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Surveys:</span>Sending out surveys to a larger group of users to gather quantitative data about their experiences and preferences.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Usability testing:</span>Observing users as they interact with a product, in order to identify areas for improvement.</li>
                            <li class="pb-4"><span style="Font-weight:bold;">Analytics:</span>Analyzing data from web analytics tools or app usage data to understand user behavior and identify patterns.</li>
                        </ul>
                        </p>
                    </div>
                </div>

                <div class="accordion-item ps-5 mt-3 pe-3 rounded-3">
                    <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">What are the best design tools for UI/UX designers?</span><span class="icon" aria-hidden="true"></span></button>
                    <div class="accordion-content">
                        <p class="pb-3">Some popular design tools for UI/UX designers include:
                        <ul  class="text-start p">
                            <li class="pb-2"><span style="Font-weight:bold;">Figma:</span>A web-based interface design tool that allows multiple designers to work on a design simultaneously in real-time.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Adobe XD:</span>A user experience design software developed and published by Adobe Systems. It is used for designing and prototyping user interfaces for mobile and web applications.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Sketch:</span>A vector graphics editor and digital design toolkit for Mac, used primarily for user interface design.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">InVision Studio:</span>A digital product design platform that allows designers to create interactive, animated interfaces and prototypes.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Axure:</span>A wireframing, prototyping, and documentation tool that helps teams create, design, and test interactive websites and mobile apps.</li>
                            <li class="pb-2"><span style="Font-weight:bold;">Protopie:</span>A tool for creating interactive and responsive prototypes for mobile and web applications.</li>
                            <li class="pb-4"><span style="Font-weight:bold;">Adobe Illustrator:</span>A vector graphics editor and digital design toolkit for Mac, used primarily for user interface design.</li>
                        </ul>
                        </p>
                    </div>
                </div>
        
        </div>
        </div>
      </section>





   <?php
   include "includes/footer_next.php";
   ?>