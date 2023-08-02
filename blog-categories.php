<?php
include "includes/connection.php";
if(isset($_GET['blog_categories_slug'])){
    $blog_categories_slug = $_GET['blog_categories_slug'];
}

$checkBloga = mysqli_query($conn,"SELECT * FROM `blog_categories` WHERE `blog_categories_slug`='$blog_categories_slug'");
   if(mysqli_num_rows($checkBloga)<=0)
   {
       header('location: error-404.php');
   }

$checkBlog = mysqli_query($conn,"SELECT * FROM `blog_categories` WHERE `blog_categories_slug`='$blog_categories_slug'");
    if(mysqli_num_rows($checkBlog)>0){
        while($row = mysqli_fetch_array($checkBlog)){
            $blog_categories_id = $row['blog_categories_id'];
            $blog_categories_name = $row['blog_categories_name'];
			
			$cat_meta_title = $row['cat_meta_title']; 
			$cat_meta_description = $row['cat_meta_description']; 
			$cat_meta_keywords = $row['cat_meta_keywords']; 
			$cat_description = $row['cat_description']; 
        }
    }
$websitetitle = $cat_meta_title; //"UIDesignz-Blogs";
$meta_title = $cat_meta_title; //"UiDesignz";
$meta_description = $cat_meta_description; //"Desc";
$meta_keywords = $cat_meta_keywords; //"UiDesignz";
$og_image="";
include "includes/header_next.php";
?>

    <!-- end page title area -->
    <section class="portfolio-head d-flex align-items-center pe-3 ps-3 p-lg-0">
      <div class="container">
        <div class="blog-item-content mb-5"  id="page__slugs" style="margin-top: 5.5rem">
          <a href="https://www.uidesignz.com/" target="_self" class="btn btn-text-only">
            Home >
          </a>
          <a href="../blog" target="_self" class="btn btn-text-only">
            Blog >
          </a>
          <div class="btn btn-text-only" style="color: black; cursor: default">
            <?php echo $blog_categories_name; ?>
          </div>
        </div>
		<div class="section-title-for-portfolio m-auto w-100 d-block d-lg-none">
          <h1 class=" text-start text-lg-center"><?php echo $blog_categories_name; ?></h1>
          <p class= "text-start text-lg-center">
           <?php echo $cat_description; ?>
          </p>
        </div>
        	<div class="section-title-for-portfolio m-auto w-75 d-none d-lg-block">
          <h1 class=" text-start text-lg-center"><?php echo $blog_categories_name; ?></h1>
          <p class= "text-start text-lg-center">
           <?php echo $cat_description; ?>
          </p>
        </div>
		<?php 
		?>
	  </div>
    </section>
    <section class="portfolio-section pt-4 pb-5 bg-thin pe-3 ps-3 p-lg-0">
      <div class="container">
	  	<div class="portfolio-links">
          <div class="scrollmenu">
            <a href="<?php echo $website_main_url;?>/blog">All</a>
            <?php
          $checkBlog = mysqli_query($conn,"SELECT * FROM `blog_categories` ORDER BY `blog_categories`.`blog_categories_id` DESC Limit 10");
          if(mysqli_num_rows($checkBlog)>0){
              while($row = mysqli_fetch_array($checkBlog)){
			  	$class_active = '';	
                  $blog_categories_name = $row['blog_categories_name'];
                  $blog_categories_slug = $row['blog_categories_slug'];
				  if($row['blog_categories_id'] == $blog_categories_id){
				  	$class_active = 'class="active"';	
				  }
            ?>
            <a <?php echo $class_active;?> href="<?php echo $website_main_url;?>/blog_category/<?php echo $blog_categories_slug; ?>"><?php echo $blog_categories_name ?></a>
            <?php
              }
            }
            ?>
          </div>
        </div>
        <!--start blog section-->
        <section id="blog" class="blog-section pt-4">
          <div class="row justify-content-center">
          <?php
    $checkBlogs = mysqli_query($conn,"SELECT * FROM `blogs` INNER JOIN `blog_categories` on blogs.blog_categories_id=blog_categories.blog_categories_id where `blogs`.`blog_categories_id`='$blog_categories_id' AND `blog_status`='1' ORDER BY `blogs`.`blog_id` DESC");
   if(mysqli_num_rows($checkBlogs)>0){
        while($row = mysqli_fetch_array($checkBlogs)){
                $blog_id = $row['blog_id'];
                $blog_title = $row['blog_title'];
                $blog_description = strip_tags($row['blog_description']);
                $blog_image = $row['blog_image'];
                $blog_slug = $row['blog_slug'];
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
                    <img class="add-hover-effect" src="../admin/uploads/blog/<?php echo $blog_image; ?>" alt="<?php echo $blog_title; ?>" />
                  </a>
                </div>
                <div class="blog-item-contents ps-1" style="padding-top: 8px ">
                  <span>
                    <div class=" d-flex align-item-center">
                        <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">
                        <div class="name_date ps-2 ">
                          <h5 class="d-block mb-0" style="font-size:15px;"><?php echo $user_full_name;?></h5>
                         <?php echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" style="font-size:14px;">- <?php echo $min_read;?></p>
                        </div>
                        </div>
                    
                  </span>
                  <a href="<?php echo $website_main_url;?>/blogs/<?php echo $blog_slug; ?>">
                  
                  <h3 class="text-start mb- mt-3">
                    <?php echo $blog_title; ?>
                  </h3></a>
                  <a href="<?php echo $website_main_url;?>/blogs/<?php echo $blog_slug; ?>">
                    <p style="margin-bottom:7px;"><?php echo substr($blog_description,0,50);?>...</p>
                  </a>
                  <a
                    href="<?php echo $website_main_url;?>/blogs/<?php echo $blog_slug; ?>"
                    target="_self"
                    class="btn btn-text-only p text-primary"
                  >
                    Read more<img class="ps-1 arrow-w-15" src="/assets/img/icons/Arrow-rightB.svg" alt="right arrow">
                  </a>
                </div>
              </div>
            </div>
            <?php
              }
            }
            ?>
          </div>
          <!-- row -->
        </section>
        <!-- row -->
      </div>
    </section>

   <?php
   include "includes/footer_next.php";
   ?>