<?php
include "includes/connection.php";
if(isset($_GET['portfolio_categories_slug'])){
    $portfolio_categories_slug = $_GET['portfolio_categories_slug'];
}

$checkBlog = mysqli_query($conn,"SELECT * FROM `portfolio_categories` WHERE `portfolio_categories_slug`='$portfolio_categories_slug'");
    if(mysqli_num_rows($checkBlog)>0){
        while($row = mysqli_fetch_array($checkBlog)){
            $portfolio_categories_id = $row['portfolio_cat_id'];
            $portfolio_categories_name = $row['portfolio_categories_name'];
			
			$port_meta_title = $row['port_meta_title'];
			$port_meta_description = $row['port_meta_description'];
			$port_meta_keywords = $row['port_meta_keywords'];
			$port_description = $row['port_description'];
        }
    }
$websitetitle = $port_meta_title; //"UiDesignz";
$meta_title = $port_meta_title; //"UiDesignz";
$meta_description = $port_meta_description; //"Desc";
$meta_keywords = $port_meta_keywords; //"UiDesignz";
$og_image="";
    
include "includes/header_next.php";
?>

    <!-- end page title area -->
    <section class="portfolio-head d-flex align-items-center pe-3 ps-3 p-lg-0">
      <div class="container">
        <div class="blog-item-content mb-5 "  id="page__slugs" style="margin-top: 5.5rem">
          <a href="https://www.uidesignz.com/" target="_self" class="btn btn-text-only">
            Home >
            
          </a>
          <a href="../portfolio" target="_self" class="btn btn-text-only">
            Portfolio >
           
          </a>
          <div class="btn btn-text-only" style="color: black; cursor: default">
            <?php echo $portfolio_categories_name ?>
          </div>
        </div>
        <div class="section-title-for-portfolio m-auto w-100 d-block d-lg-none">
          <h1 class="text-start text-lg-center"><?php echo $portfolio_categories_name; ?></h1>
          <p class="text-start text-lg-center">
            <?php echo $port_description; ?>
          </p>
        </div>
        <div class="section-title-for-portfolio m-auto w-75 d-none d-lg-block ">
          <h1 class="text-start text-lg-center"><?php echo $portfolio_categories_name; ?></h1>
          <p class="text-start text-lg-center">
            <?php echo $port_description; ?>
          </p>
        </div>
      </div>
    </section>
    <section class="portfolio-section pt-4 pb-5 bg-thin pe-3 ps-3 p-lg-0">
      <div class="container">
          <div class="portfolio-links">
          <div class="scrollmenu">
            <a href="<?php echo $website_main_url;?>/portfolio">All</a>
            <?php
          $checkBlog = mysqli_query($conn,"SELECT * FROM `portfolio_categories` ORDER BY `portfolio_categories`.`portfolio_cat_id` DESC Limit 10");
          if(mysqli_num_rows($checkBlog)>0){
              while($row = mysqli_fetch_array($checkBlog)){
			  		$class_active = '';	
                  $portfolio_categories_name = $row['portfolio_categories_name'];
                  $portfolio_categories_slug = $row['portfolio_categories_slug'];
				  if($portfolio_categories_id == $row['portfolio_cat_id']){
				  	$class_active = 'class="active"';	
				  }
            ?>
            <a <?php echo $class_active;?> href="<?php echo $website_main_url;?>/portfolio_category/<?php echo $portfolio_categories_slug ?>"><?php echo $portfolio_categories_name ?></a>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <div class="row justify-content-center mt-4">

        <?php
          $checkBlog = mysqli_query($conn,"SELECT * FROM `portfolio` INNER JOIN `portfolio_categories` on portfolio.portfolio_categories_id=portfolio_categories.portfolio_cat_id WHERE `portfolio_categories_id`='$portfolio_categories_id' AND `portfolio_status`='1' ORDER BY `portfolio`.`portfolio_sort` ASC");
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
                  $portfolio_image = $row['portfolio_image'];
                  ?>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="blog-item-single">
              <div class="blog-item-img">
                <a href="<?php echo $website_main_url;?>/portfolios/<?php echo $portfolio_slug; ?>">
                  <img
                  class="add-hover-effect"
                    src="../admin/uploads/feature/<?php echo $portfolio_image; ?>"
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
                  class="btn btn-text-only text-primary p">
                  See Details<img class="ps-1 arrow-w-15" src="/assets/img/icons/Arrow-rightB.svg" alt="right-arrow">
                  <!--<i class="fa fa-chevron-right"></i>-->
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
include "includes/footer_next.php";
?>