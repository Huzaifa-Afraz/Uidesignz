<?php
include "includes/connection.php";

if(isset($_GET['portfolio_slug'])){
  $portfolio_slug = $_GET['portfolio_slug'];
  }

?>
<?php
$blog_detail_query  = mysqli_query($conn, "SELECT * FROM `portfolio` INNER JOIN `portfolio_categories` on portfolio.portfolio_categories_id=portfolio_categories.portfolio_cat_id where `portfolio_slug` ='$portfolio_slug'");
$row  = mysqli_fetch_array($blog_detail_query);
$portfolio_id = $row['portfolio_id'];
$portfolio_title = $row['portfolio_title'];
$portfolio_categories_id = $row['portfolio_categories_id'];
$portfolio_categories_name = $row['portfolio_categories_name'];
$portfolio_categories_slug = $row['portfolio_categories_slug'];
$portfolio_description = $row['portfolio_description'];
$portfolio_tags = $row['portfolio_tags'];
$portfolio_meta_title = $websitetitle = $meta_title = $row['portfolio_meta_title'];
$portfolio_meta_description = $meta_description = $row['portfolio_meta_description'];
$portfolio_meta_keywords = $meta_keywords = $row['portfolio_meta_keywords'];
$portfolio_status = $row['portfolio_status'];
if($portfolio_id == ""){
	ob_start();
	header('location: error-404.php');
}

$og_image="";
include "includes/header_next.php";

      $query3 = "SELECT * FROM `portfolio_image` WHERE `portfolio_id` = '$portfolio_id' ORDER BY `portfolio_image`.`portfolio_image_id` DESC";
      mysqli_query($conn, $query3);
      $i = 1;
      if ($result = mysqli_query($conn, $query3)) {
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $aImages[] = $row['portfolio_image_name'];
              }
          }

?>

    <div class="page-title-area " style="padding-top: 5.5rem">
      <div class="container">
        <div class="blog-item-content mb-3 pb-0 ps-3 pe-3 p-lg-0" id="page__slugs">
          <a href="https://www.uidesignz.com/" target="_self" class="btn btn-text-only">
            Home >
            
          </a>
          <a href="../portfolio" target="_self" class="btn btn-text-only">
            Portfolio >
            
          </a>
          <a href="../portfolio_category/<?php echo $portfolio_categories_slug ?>" target="_self" class="btn btn-text-only">
            <?php echo $portfolio_categories_name ?> >
           
          </a>
            <div class="btn btn-text-only" style="color: black; cursor: default">
            <?php echo $portfolio_title; ?>
          </div>
        </div>
        <div class="page-title-content w-100 align-items-start pb-0 ps-3 pe-3 p-lg-0">
          <h1 class="text-start w-75 m-lg-auto mb-2">
            <?php echo $portfolio_title; ?>
          </h1>
        </div>
        <!-- gallery section start -->
        <div class="app-detail">
          <div class="container text-center pb-0 ps-3 pe-3 p-lg-0">
            <div class="image-container">
              <img
                id="img-Box"
                src="../admin/uploads/portfolio/<?php echo $aImages[0]; ?>"
                alt="<?php echo $aImages[0]; ?>"
              />
            </div>
            <div class="myProducts-gallery">
              <?php
             foreach ($aImages as $card) {?>
              <img src="../admin/uploads/portfolio/<?php echo $card ?>"
                alt="<?php echo $card; ?>"
                onclick="myImageFunction(this)"
              />
              <?php }
            ?>
             
            </div>
          </div>
        </div>

        <!-- gallery section end -->

        <!-- gallery img after on click start -->
        <div class="app-detail-after pb-0 ps-3 pe-3 p-lg-0" id="appDetailAfter">
          <div class="container text-center">
            <span id="cross-cancel"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" role="img" class="icon fill-current">
              <path d="M0.605844 2.72773L13.9392 16.0611L16.0605 13.9397L2.72716 0.606413L0.605844 2.72773ZM13.9392 13.9397L0.605844 27.2731L2.72716 29.3944L16.0605 16.0611L13.9392 13.9397ZM27.2727 0.606329L13.9392 13.9397L16.0605 16.0611L29.394 2.72766L27.2727 0.606329ZM13.9392 16.0611L27.2727 29.3943L29.394 27.273L16.0605 13.9397L13.9392 16.0611Z"></path>
              </svg></span>
            <div class="myProducts-gallery">
            <?php
             foreach ($aImages as $card) {?>
              <img
              src="../admin/uploads/portfolio/<?php echo $card ?>"
                alt="<?php echo $card; ?>"
                onclick="myImageFunctionAfter(this)"
              />
              <?php }
            ?>
            
            </div>
            <div class="image-container">
              <img
                id="img-Box-after"
                src="../admin/uploads/portfolio/<?php echo $aImages[0]; ?>"
                alt="<?php echo $aImages[0]; ?>"
              />
            </div>
          </div>
        </div>

         <!-- gallery img after on click end -->

         <div class="privacy-policy w-75 m-auto pb-0 ps-3 pe-3 p-lg-0">
          <p class="text-start mb-3 mt-4">
               <?php echo $portfolio_description; ?>
         </p>

          
        </div>
      
   
 <!-- tools used section start -->
 <div class="container">
     <div class="row">
    
      <div id="toolsafter">
      <div class="d-lg-flex align-items-center mb-5 w-75 mx-auto" id="tools-sec-margin">
        <h3 class="h4 mb-0 fs-5 pt-3"> <b> Tools Used</b></h3>
        <div class="d-md-flex justify-content-center pt-3" style="margin-left: 1rem;">
         

          <div class=" mb-0 p-0 col-md-4 m-md-0">
            <div class="d-flex align-items-center justify-content-center">
              <img
             
                alt="Adobe Photoshop"
               
                class="lazyloaded negative-margin-start-13"
                src="../assets/img/tools/photoshop.svg"
                loading="lazy"
              />

              <p class="mb-0 text-start" style="width: 9rem;">Adobe&nbsp;Photoshop</p>
            </div>
          </div>
          <div class=" mb-0 p-0 ml-5  col-md-4 m-md-0">
            <div class=" d-flex align-items-center justify-content-center">
              <img
              
              alt="Adobe Illustrator"
               
              class="lazyloaded negative-margin-start-13"
              src="../assets/img/tools/illustrator.svg"
              loading="lazy "
              />

              <p class="mb-0 text-start" style="width: 9rem;">AdobeI&nbsp;llustrator</p>
            </div>
          </div>
          <div class=" mb-0 p-0  col-md-4 m-md-0">
            <div class="ml-5 d-flex align-items-center justify-content-center">
              <img
              
              alt="Figma"
               
              class="lazyloaded negative-margin-start-13"
              src="../assets/img/tools/figma.svg"
              loading="lazy"
              />

              <p class="mb-0 text-start" style="width: 9rem;">Figma</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
 </div>
     </div>
     </div>
    </div>
    <br>
    <br>
    <!-- tools used section end -->
<?php
include "includes/footer_next.php";
?>