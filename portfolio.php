<?php 
$websitetitle = "Hire a UX UI Designer today- UIDesignz";
$meta_title = "Hire a UX UI Designer today- UIDesignz";
$meta_description = "Find out how our UX UI Designer brings user-centered design to life through our portfolio of successful projects.";
$meta_keywords = "portfolio graphic design, design a process, design app ui, ux ui designer, web design portfolio site, mockup vs wireframes, app designing, wireframe for app, Protyping of products, app design how to, design of web page, interactivity design, design solution, landing page of website, website with landing page, design & ux, app design ui, dashboard ui, intuitive design, dashboard design, wireframe an app, app ui design, user-centered design,ui design";
$og_image="";
include "includes/header.php";
?>

    <!-- end page title area -->
    <section class="portfolio-head d-flex align-items-center">
      <div class="container">
          <div class="blog-item-content mb-5 ps-3 pe-3 p-lg-0"  id="page__slugs" style="margin-top: 4.5rem">
          <a href="https://www.uidesignz.com/" target="_self" class="btn btn-text-only">
            Home >
            
          </a>
          <div class="btn btn-text-only" style="color: black; cursor: default">
            Portfolio
          </div>
        </div>
        <div class="section-title-for-portfolio d-flex flex-column  m-auto w-100 d-block d-lg-none pe-3 ps-3 p-lg-0">
          <h1 class=" text-start text-lg-center ">UI/UX Design Solutions</h1>
          <p class=" text-start text-lg-center">
            User experience is about molding and shaping the experience of a product. Over the past few years, UIDesignz has been successfully delivering the best UI/UX solutions by providing interaction design which shapes the experience between the user and the product. UIDesignz makes sure that our provided designs directly support your business goals by fulfilling the user’s requirements.
          </p>
        </div>
         <div class="section-title-for-portfolio d-flex flex-column  m-auto w-75 d-none d-lg-block">
          <h1 class=" text-start text-lg-center ">UX UI Designer Portfolio</h1>
          <p class=" text-start text-lg-center">
            At UIDesignz, we design seamless & enjoyable UX for users by shaping the overall product experience. Our interaction design aligns user needs with business goals. Our portfolio graphic design & the design process, which includes creating mockups and wireframes for app design. Experienced UX UI designer deliver designs aligned with your goals & enhancing user experience.

          </p>
        </div>
      </div>
    </section>
    <section class="portfolio-section pt-4 pb-5 bg-thin pe-3 ps-3 p-lg-0">
      <div class="container">
      <div class="portfolio-links">
          <div class="scrollmenu">
            <a class="active" href="<?php echo $website_main_url;?>/portfolio">All</a>
            <?php
          $checkBlog = mysqli_query($conn,"SELECT * FROM `portfolio_categories` ORDER BY `portfolio_categories`.`portfolio_cat_id` DESC Limit 10");
          if(mysqli_num_rows($checkBlog)>0){
              while($row = mysqli_fetch_array($checkBlog)){
                  $portfolio_categories_name = $row['portfolio_categories_name'];
                  $portfolio_categories_slug = $row['portfolio_categories_slug'];
            ?>
            <a href="<?php echo $website_main_url;?>/portfolio_category/<?php echo $portfolio_categories_slug ?>"><?php echo $portfolio_categories_name ?></a>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <div class="row justify-content-center mt-4">

        <?php
          $checkBlog = mysqli_query($conn,"SELECT * FROM `portfolio` INNER JOIN `portfolio_categories` on portfolio.portfolio_categories_id=portfolio_categories.portfolio_cat_id WHERE `portfolio_status`='1' ORDER BY `portfolio`.`portfolio_sort` ASC");
          if(mysqli_num_rows($checkBlog)>0){
              while($row = mysqli_fetch_array($checkBlog)){
                  $portfolio_categories_name = $row['portfolio_categories_name'];
                  $portfolio_id = $row['portfolio_id'];
                  $portfolio_title = $row['portfolio_title'];
                  $portfolio_slug = $row['portfolio_slug'];
                  $portfolio_categories_id = $row['portfolio_categories_id'];
                  $portfolio_description = $row['portfolio_description'];
                  $portfolio_tags = $row['portfolio_tags'];
                  $portfolio_meta_title = $row['portfolio_meta_title'];
                  $portfolio_meta_description = $row['portfolio_meta_description'];
                  $portfolio_meta_keywords = $row['portfolio_meta_keywords'];
                  $portfolio_status = $row['portfolio_status'];
                  $portfolio_categories_slug = $row['portfolio_categories_slug'];
                  $portfolio_image = $row['portfolio_image'];
                  ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="blog-item-single">
              <div class="blog-item-img">
                <a href="<?php echo $website_main_url;?>/portfolios/<?php echo $portfolio_slug; ?>">
                  <img
                  class="add-hover-effect"
                    src="admin/uploads/feature/<?php echo $portfolio_image; ?>"
                    alt="<?php echo $portfolio_title; ?>"
                  />
                </a>
              </div>
              <div class="blog-item-content ps-0">
                <a href="<?php echo $website_main_url;?>/portfolios/<?php echo $portfolio_slug; ?>">
                  <h3 class="mb-0"><?php echo $portfolio_title; ?> </h3></a>
                  

                <a
                  href="<?php echo $website_main_url;?>/portfolios/<?php echo $portfolio_slug; ?>"
                  target="_self"
                  class="btn btn-text-only text-primary p"
                >
                  See Details<img class="ps-1 arrow-w-15" src="./assets/img/icons/Arrow-rightB.svg" alt="right-arrow">
                </a>
              </div>
              <!-- blog-item-content -->
            </div>
            <!-- blog-item-single -->
          </div>
          <?php
              }
            }
          ?>
        </div>
        <!-- row -->
      </div>
    </section>
<?php
include "includes/footer.php";
?>