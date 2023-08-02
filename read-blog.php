<?php
include "includes/connection.php";

$bsl=$_GET['blog_slug'];


$blog_detail_query1  = mysqli_query($conn, "SELECT * FROM `blogs` where `blog_slug` ='$bsl'");
$numrows=mysqli_num_rows($blog_detail_query1 );
if($numrows<=0)
{
    header('location: error-404.php');
    
}else{
	$row  = mysqli_fetch_array($blog_detail_query1);
	$meta_title = $row['blog_meta_title'];
	$meta_description = $row['blog_meta_description'];
	$meta_keywords = $row['blog_meta_keywords'];
}
if (isset($_POST['submit_comment'])) {
  $blog_id = $_POST['blog_id'];
  $comment_name = $conn -> real_escape_string($_POST['comment_name']);
  $comment_email = $conn -> real_escape_string($_POST['comment_email']);
  $comment_description = $conn -> real_escape_string($_POST['comment_description']);







  $queryQuote = "INSERT INTO `comment`(`comment_name`, `comment_email`, `comment_description`, `blog_id`) 
  VALUES ('$comment_name','$comment_email','$comment_description','$blog_id')";
  // echo $queryQuote; die();
  $query3 = mysqli_query($conn,$queryQuote);

if ($query3) {
    $checkProduct = mysqli_query($conn,"SELECT * FROM `blogs` WHERE blog_id = $blog_id");
          if(mysqli_num_rows($checkProduct)>0){
              while($row = mysqli_fetch_array($checkProduct)){
                      $blog_slug = $row['blog_slug'];
              }
          }
echo "<script>
window.location.href='$blog_slug';
</script>"; 
      }
}
$websitetitle = $meta_title; 

$og_image="";
include "includes/header_next.php";

if(isset($_GET['blog_slug'])){
  $blog_slug = $_GET['blog_slug'];
  }


  
  
  
?>

<?php
$blog_detail_query  = mysqli_query($conn, "SELECT * FROM `blogs` INNER JOIN blog_categories on blogs.blog_categories_id=blog_categories.blog_categories_id where `blog_slug` ='$blog_slug'");
$row  = mysqli_fetch_array($blog_detail_query);
$blog_id = $row['blog_id'];
$blog_title = $row['blog_title'];
$blog_description = $row['blog_description'];
$blog_categories_id = $row['blog_categories_id'];
$blog_categories_name = $row['blog_categories_name'];
$blog_categories_slug = $row['blog_categories_slug'];
$blog_image = $row['blog_image'];
$blog_tags = $row['blog_tags'];
$blog_time_stamp = $row['blog_time_stamp'];
$min_read = $row['min_read'];
$blog_big_image = $row['blog_big_image'];

$Sql = "SELECT * FROM `users` where `user_id`='".$row['user_id']."'";
$checkPortfoliocategories = mysqli_query($conn, $Sql);
if(mysqli_num_rows($checkPortfoliocategories)>0){
	while($urow = mysqli_fetch_array($checkPortfoliocategories)){
		$user_designation = $urow['user_designation'];
		$user_desc = $urow['user_desc'];
		$user_full_name = $urow['user_full_name'];
		$user_image = $urow['user_image'];
	}
}

?>

    <div class="page-title-area bg-thin pb-5">
      <div class="container">
        <div class="blog-item-content pe-3 ps-3 p-lg-0" id="page__slugs" style="margin-top: 10px;">
          <a href="https://www.uidesignz.com/" target="_self" class="btn btn-text-only">
            Home > 
          </a>
          <a href="<?php echo $website_main_url;?>/blog" target="_self" class="btn btn-text-only">Blog >
            
          <a href="<?php echo $website_main_url;?>/blog_category/<?php echo $blog_categories_slug ?>" target="_self" class="btn btn-text-only">
            <?php echo $blog_categories_name; ?> >
          </a>
          <div class="btn btn-text-only" style="color: black; cursor: default">
            <?php echo $blog_title; ?>
          </div>
        </div>
      
        <!--<span class="d-flex align-items-center justify-content-between ">-->
        <!--            <div class="little_section d-flex align-item-center text-start py-3">-->
        <!--                <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->
        <!--                <div class="name_date ps-2 ">-->
        <!--                  <h5 class="d-block mb-0" style="font-size:16px;"><?php echo $user_full_name;?></h5>-->
                       
        <!--                <?php echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" >- <?php echo $min_read;?></p>-->
        <!--                </div>-->
        <!--                </div>-->
        <!--                <div class="social-icons d-flex justify-content-between w-25">-->
        <!--                    <img  src="./assets/img/icons/share-icon.svg" alt="user" style="width:40px;height:40px;">-->
        <!--                    <img  src="" alt="user" style="width:40px;height:40px;">-->
        <!--                    <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->
        <!--                     <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->
        <!--                      <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->
        <!--                       <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->

        <!--                </div>-->
        <!--                </span>-->
                        <!--</div>-->
                        
                        
          <div class="row" >  
          <div class="col-12 col-lg-8">
                <div class="page-title-content page-title-content-blog pt-3 pe-3 ps-3 ps-lg-0 pe-lg-0">
          <h1 class="text-start">
           <?php echo $blog_title; ?>
          </h1></div>
               <!--<span class="d-flex align-items-center justify-content-between ">-->
               <!--     <div class="little_section d-flex align-item-center text-start py-3">-->
               <!--         <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->
               <!--         <div class="name_date ps-2 ">-->
               <!--           <h5 class="d-block mb-0" style="font-size:16px;"><?php echo $user_full_name;?></h5>-->
                       
               <!--         <?php echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" >- <?php echo $min_read;?></p>-->
               <!--         </div>-->
               <!--         </div>-->
               <!--         <div class="social-icons d-flex justify-content-between w-25">-->
               <!--             <img  src="./assets/img/icons/share-icon.svg" alt="user" style="width:40px;height:40px;">-->
               <!--             <img  src="" alt="user" style="width:40px;height:40px;">-->
               <!--             <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->
               <!--              <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->
               <!--               <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->
               <!--                <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">-->

               <!--         </div>-->
               <!--         </span>-->
        <div class="target-img mt-4">
          <img class="w-100" src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $blog_big_image; ?>" alt="<?php echo $blog_title; ?>" />
        </div>
        
                        
           <span class="d-flex align-items-center justify-content-between ">
                    <div class="little_section d-flex align-item-center text-start py-3">
                        <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:40px;height:40px;">
                        <div class="name_date ps-2 ">
                          <h5 class="d-block mb-0" style="font-size:16px;"><?php echo $user_full_name;?></h5>
                       
                        <?php echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" >- <?php echo $min_read;?></p>
                        </div>
                        </div>
                        <div class="social-icons d-flex justify-content-between w-auto">
                           <a href="" class="cursor-pointer px-1" target="_blank"> <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/share-icon.svg" alt="share-icon" class="" ></a>
                           <a href="https://www.facebook.com/people/UIDesignz/100088356167409" target="_blank" class="cursor-pointer px-1"> <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/facebook.svg" alt="facebook" class=""></a>
                           <a href="" class="cursor-pointer px-1"> <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/twitter.svg" alt="twitter" class=""></a>
                          <a href="" class="cursor-pointer px-1">   <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/google.svg" alt="google" class=""></a>
                           <a href="https://www.pinterest.com/uidesign0005/_created/" target="_blank" class="cursor-pointer px-1">   <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/pintreast-icon.svg" alt="pintreast-icon" class=""></a>
                           <a href="" class="cursor-pointer px-1">    <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/mail.svg" alt="mail-icon" class=""></a>

                        </div>
                        </span>
        
                    
                  
        <div class="privacy-policy mt-0 pe-3 ps-3 p-lg-0">
          <p class="">
            <?php echo $blog_description; ?>
          </p>
        </div>

        <!-- comment area start -->
         <div class="blog-details-section mt-0 pe-3 ps-3 p-lg-0">
         <div class="blog-details-desc">

        <span>
                    <div class="little_section d-none d-lg-flex align-item-center bg-light-blue p-3">
                        <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:42px;height:42px;">
                        <div class="name_date ps-2 ">
                          <h5 class="d-block mb-0" style="font-size:16px;"><?php echo $user_full_name;?></h5>
                        <?php //echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" ><?php echo $user_designation;?></p>
                        <p><?php echo $user_desc;?></p>
                        </div>
                        </div>
                        
                        <div class="little_section d-flex d-lg-none align-item-center flex-column bg-light-blue w-100 p-3 pb-2 pt-3">
                            <div class="name_date d-flex">
                        <img  src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $user_image;?>" alt="user" style="width:42px;height:42px;">
                        <div class="ps-2">
                          <h5 class="d-block mb-0" style="font-size:16px;"><?php echo $user_full_name;?></h5>
                        <?php //echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline p" ><?php echo $user_designation;?></p>
                        </div>
                        </div>
                        <p class="d-block p text-start pt-2"><?php echo $user_desc;?></p>
                        
                        </div>
                  </span>
          <div class="row">
            <div class="col-lg-8 col-md-12">
        <div class="comments-area mt-5">
          <?php
                $checkComment = mysqli_query($conn,"SELECT * FROM `comment` WHERE comment.comment_status ='1' AND blog_id = $blog_id ORDER BY `comment`.`comment_id` DESC");
            if(mysqli_num_rows($checkComment)>0){
            while($row = mysqli_fetch_array($checkComment)){
                $comment_name = $row['comment_name'];
                $comment_description = $row['comment_description'];
                $comment_email = $row['comment_email'];
                $comment_website = $row['comment_website'];
                $comment_status = $row['comment_status'];
                $comment_time_stamp = $row['comment_time_stamp'];
                ?>
                <
            <h2 class="comment-title mb-4">Read comments</h2>
            <div class="single-comment-outer-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="single-comment-box">
                    <div class="img-box">
                        <img width="50" style="border-radius: 50%;" src="" alt="Awesome Image">
                    </div>
                    <div class="text-box">
                        <div class="top">
                            <div class="name">
                                <h5><?php echo $comment_name ?></h5>
                                <span><?php echo date('M j Y', strtotime($comment_time_stamp)) ?></span>
                            </div>
                        </div>
                        <div class="text">
                            <p><?php echo $comment_description ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php
                }
            }
            ?>
            
        </div>
      </div>
    </div>
    </div>
    </div>
            </div>   

        <div class="col-12 col-lg-4 pt-4" > 
            <aside class="blog_aside pe-3 ps-3 p-lg-0">
                <h5>Latest Posts</h5>
                <div class="Latest-blog pt-3">
                                          <?php
    $checkBlogs = mysqli_query($conn,"SELECT * FROM `blogs` INNER JOIN `blog_categories` on blogs.blog_categories_id=blog_categories.blog_categories_id where blog_status='1' ORDER BY `blogs`.`blog_id` DESC");
   if(mysqli_num_rows($checkBlogs)>0){
        while($row = mysqli_fetch_array($checkBlogs)&& $no<5){
            $no++;
                $blog_id = $row['blog_id'];
                $blog_title = $row['blog_title'];
                $blog_description = strip_tags($row['blog_description']);
                $blog_image = $row['blog_image'];
                // $blog_slug = $row['blog_slug'];
                // $blog_categories_name = $row['blog_categories_name'];
                // $blog_categories_slug = $row['blog_categories_slug'];
                // $blog_tags = $row['blog_tags'];
                // $blog_time_stamp = $row['blog_time_stamp'];
				// $min_read = $row['min_read'];
        ?>
                    <div class="blog d-lg-flex pt-4">
                     <div class="latest-blog-img">
                            <img class="" src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $row['blog_title']; ?>" alt="<?php echo $blog_title; ?>" />
                       </div>
                       <div class="date-and-title d-flex flex-column w-50 ps-3">
                       <span class="latest-blog-title"><?php echo $blog_title; ?></span>
                      <span> <?php echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" >- <?php echo $min_read;?></p></span>
                      </div>
                    </div>
                    
                    <!--  <div class="blog d-lg-flex pt-4">-->
                    <!-- <div class="latest-blog-img">-->
                    <!--        <img class="" src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $blog_big_image; ?>" alt="<?php echo $blog_title; ?>" />-->
                    <!--   </div>-->
                    <!--   <div class="date-and-title d-flex flex-column w-50 ps-3">-->
                    <!--   <span class="latest-blog-title">Top 10 Impactful Sites That Can Boost Your Creativity</span>-->
                    <!--  <span> <?php echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" >- <?php echo $min_read;?></p></span>-->
                    <!--  </div>-->
                    <!--</div>-->
                    
                    <!--  <div class="blog d-lg-flex pt-4">-->
                    <!-- <div class="latest-blog-img">-->
                    <!--        <img class="" src="<?php echo $website_main_url;?>/admin/uploads/blog/<?php echo $blog_big_image; ?>" alt="<?php echo $blog_title; ?>" />-->
                    <!--   </div>-->
                    <!--   <div class="date-and-title d-flex flex-column w-50 ps-3">-->
                    <!--   <span class="latest-blog-title">Top 10 Impactful Sites That Can Boost Your Creativity</span>-->
                    <!--  <span > <?php echo date('M j Y', strtotime($blog_time_stamp)) ?> <p class="d-inline text-black" >- <?php echo $min_read;?></p></span>-->
                    <!--  </div>-->
                    <!--</div>-->
                          <?php
              }
            }
            ?>
                </div>
          
                <div class="end-line w-75"></div>
                <div class="blog-tags blog-details-section w-100">
                              <div class="article-share">
            <div class="tags py-3">
                <span class="d-block">tags:</span>
            <?php
			
                $links = array();
                $tags = explode(',', $blog_tags); //Explode tags into an array
                    foreach($tags as $tag)//Loop through tags
                    {
                        $test = str_replace("-", " ", $tag);
						$tag_url = re_write_title($tag);
                        $links[] = "<a href='".$website_main_url."/tag/".$tag_url."'>".$test."</a>";
                    }
                    echo implode(" ", $links);
                ?>
                
            </div>
           
        </div>
                </div>
            </aside>
        </div>
        </div>
    
        <!-- comment area end -->
      </div>
    </div>
    <section
      class="contact-section  pe-3 ps-3 p-lg-0"
      style="background-color: #f4f6fc">
      <div class="container">
        <div class="section-title m-0 mb-3">
          <h3 class="text-start w-100 m-0">Post a comment</h3>
          <p class="text-start w-100">Your email address will not be published.
            Required fields are marked *</p>
        </div>
        <div class="row">
          <div class="col-12">
            <form action="<?php echo $website_main_url;?>/action/insert.php" method="POST" style="padding: 0 !important;">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                  <input type="hidden" name="blog_id" value="<?php echo $blog_id; ?>" class="form-control" placeholder="Your Name*">    
				  <input type="hidden" name="blog_slug" value="<?php echo $bsl;?>" />
                    <label for="name" class="w-100 text-start">Name</label>
                    <input
                      type="text"
                      name="comment_name"
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
                      name="comment_email"
                      class="form-control"
                      id="email"
                      required=""
                      data-error="Please enter your email"
                      placeholder="Enter your Email"
                    />
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                    <label for="name" class="w-100 text-start">Comment</label>
                    <textarea
                      name="comment_description"
                      id="message"
                      class="form-control"
                      cols="30"
                      rows="6"
                      required=""
                      data-error="Please enter your message"
                      placeholder="Leave a Reply"
                    ></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 w-100 text-start pb-3">
                  <button type="submit" name="submit_comment" class="btn btn-solid rounded-pill">
                    Post a Comment
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
include "includes/footer_next.php";
?>