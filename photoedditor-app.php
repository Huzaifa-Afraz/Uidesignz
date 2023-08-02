<?php
$websitetitle = "UIDesignz";
$meta_title = "UIDesignz";
$meta_description = "Desc";
$meta_keywords = "UiDesignz";
$og_image="";
include "includes/header.php";

if(isset($_GET['portfolio_slug'])){
  $portfolio_slug = $_GET['portfolio_slug'];
  }
?>
<?php
$blog_detail_query  = mysqli_query($conn, "SELECT * FROM `portfolio` where `portfolio_slug` ='$portfolio_slug'");
$row  = mysqli_fetch_array($blog_detail_query);
$portfolio_id = $row['portfolio_id'];
$portfolio_title = $row['portfolio_title'];
$portfolio_categories_id = $row['portfolio_categories_id'];
$portfolio_description = $row['portfolio_description'];
$portfolio_tags = $row['portfolio_tags'];
$portfolio_meta_title = $row['portfolio_meta_title'];
$portfolio_meta_description = $row['portfolio_meta_description'];
$portfolio_meta_keywords = $row['portfolio_meta_keywords'];
$portfolio_status = $row['portfolio_status'];
echo $portfolio_id;

      $query3 = "SELECT * FROM `portfolio_image` WHERE `portfolio_id` = '$portfolio_id'";
      mysqli_query($conn, $query3);
      $i = 1;
      if ($result = mysqli_query($conn, $query3)) {
          while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              $aImages[] = $row['portfolio_image_name'];
              }
          }

?>

    <div class="page-title-area pb-0" style="padding-top: 6rem">
      <div class="container">
        <div class="blog-item-content mb-3"  id="page__slugs">
          <a href="https://www.uidesignz.com/" target="_self" class="btn btn-text-only">
            Home >
           
          </a>
          <a href="./services" target="_self" class="btn btn-text-only">
            Services >
          
          </a>
          <div class="btn btn-text-only" style="color: black; cursor: default">
            Photo Editor
          </div>
        </div>
        <div class="page-title-content w-100 align-items-start">
          <h2 class="text-start w-75 m-auto mb-2">
            <?php echo $portfolio_title; ?>
          </h2>
        </div>
        <!-- gallery section start -->
        <div class="app-detail">
          <div class="container text-center">
            <div class="image-container">
              <img
                id="img-Box"
                src="admin/uploads/portfolio/<?php echo $aImages[0]; ?>"
                alt="click here"
              />
            </div>
            <div class="myProducts-gallery">
            <?php
             foreach ($aImages as $card) {?>
              <img
                src="admin/uploads/portfolio/<?php echo $card ?>"
                alt="click here"
                onclick="myImageFunction(this)"
              />
           <?php }
            ?>
            </div>
          </div>
        </div>

        <!-- gallery section end -->

        <!-- gallery img after on click start -->
        <div class="app-detail-after" id="appDetailAfter">
          <div class="container text-center">
            <span id="cross-cancel"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" role="img" class="icon fill-current">
              <path d="M0.605844 2.72773L13.9392 16.0611L16.0605 13.9397L2.72716 0.606413L0.605844 2.72773ZM13.9392 13.9397L0.605844 27.2731L2.72716 29.3944L16.0605 16.0611L13.9392 13.9397ZM27.2727 0.606329L13.9392 13.9397L16.0605 16.0611L29.394 2.72766L27.2727 0.606329ZM13.9392 16.0611L27.2727 29.3943L29.394 27.273L16.0605 13.9397L13.9392 16.0611Z"></path>
              </svg></span>
            <div class="myProducts-gallery">
            <?php
                 foreach ($aImages as $card) {?>
              <img
                src="admin/uploads/portfolio/<?php echo $card ?>"
                alt="click here"
                onclick="myImageFunctionAfter(this)"
              />
            <?php }
            ?>
            <div class="image-container">
              <img
                id="img-Box-after"
                src="admin/uploads/portfolio/<?php echo $aImages[0]; ?>"
                alt="click here"
              />
            </div>
            </div>
          </div>
        </div>

         <!-- gallery img after on click end -->

         <div class="privacy-policy w-75 m-auto">
          <h3 class="h2 mt-4 mb-4">About the project</h3>
          <p class="text-start mb-3 mt-4">
            DoctorQ is our foremost preferred of all the apps we've designed so far.
            We thoroughly enjoy creating interfaces, both technically and emotionally.
            
            This app helps you find top-notch doctors just a click away. We have carefully designed the interface considering the patient's convenience while using the app. As you all know, blue is the color of healing and trust, so we set the color theme accordingly; it gives the patient complete vibes of confidence, healing, and calmness.
            
          </p>
          <p class="text-start mb-3 mt-2">
            However, the app allows you to use your credit card to put the patients at ease. Personally, we love the creation of this DoctorQ App because there are so many doctors on board, rendering their services anytime the patient prefers.
          </p>

  <p class="mb-5"> If you would like us to develop/create such applications, Please feel free to contact us at: <a href="https://mail.google.com/mail/u/0/#search/contact%40uidesignz.com?compose=new" class="fs-5 text-primary">contact@uidesignz.com</a>
 </p>

          
        </div>
      </div>
    </div>

    <!-- tools used section start -->
    
      <div class="container" id="toolsafter">
      <div class="d-lg-flex align-items-center mb-5 w-75 m-auto">
        <h3 class="h4 mb-0 fs-5"> <b> Tools Used:</b></h3>
        <div class="row" style="margin-left: .5rem;display: flex; justify-content: flex-start;">
         

          <div class=" col-lg-4 col-sm-6 mb-0 p-0">
            <div class="d-flex align-items-center">
              <img
             
                alt="Adobe Photoshop"
               
                class="lazyloaded"
                src="../assets/img/tools/photoshop.svg"
                loading="lazy"
              />

              <p class="mb-0" style="width: 9rem;">Adobe Photoshop</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-0 p-0 ml-5">
            <div class="d-flex align-items-center">
              <img
              
              alt="Adobe Illustrator"
               
              class="lazyloaded"
              src="../assets/img/tools/illustrator.svg"
              loading="lazy"
              />

              <p class="mb-0" style="width: 9rem;">Adobe Illustrator</p>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-0 p-0">
            <div class="ml-5 d-flex align-items-center">
              <img
              
              alt="Figma"
               
              class="lazyloaded"
              src="../assets/img/tools/figma.svg"
              loading="lazy"
              />

              <p class="mb-0" style="width: 9rem;">Figma</p>
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
include "includes/footer.php";
?>