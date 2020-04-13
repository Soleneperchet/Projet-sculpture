<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,900;1,400&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="wp-content/themes/sculpture/style.css">
</head>

<body>


  <!-- <div class="container-fluid container-header p-0">




<div class=" col-11 img-header-accueil vh-100 d-flex align-items-end justify-content-center p-0">
  
  <?php 
       $image = get_field('image_header_accueil');
       $size = 'full'; // (thumbnail, medium, large, full or custom size)
       if( $image ) {
           echo wp_get_attachment_image( $image, $size );
       }

       ?>
       <div class="text-header-absolute">
       <h1><?php the_field('titre_header'); ?></h1>
       </div>
      </div> 




<div class="w-100 d-flex justify-content-end p-0">

<div class="logo-helmet bg-dark-logo text-center">
<?php 
       $image = get_field('logo_helmet');
       $size = 'full'; // (thumbnail, medium, large, full or custom size)
       if( $image ) {
           echo wp_get_attachment_image( $image, $size );
       }

       ?>

</div>

<div class="menu vh-100 d-flex align-items-start p-0">
   <?php wp_nav_menu( array( 'theme_location' => 'menu-burger' ) ); ?>
</div>
</div>



</div> -->



  <div class="container-fluid container-header p-0">
    <!-- <div class="container">
    <div class="row"> -->




    <div class="col-12 col-sm-12 col-md-6 col-lg-11 col-xl-11 w-25 img-header-accueil vh-100 d-flex align-items-end  p-0">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active img-fluid">
            <?php 
       $image1 = get_field('image_01');
       $size1 = 'full'; // (thumbnail, medium, large, full or custom size)
       if( $image1 ) {
           echo wp_get_attachment_image( $image1, $size1 );
       }

       ?>
            <div class="text-header-absolute ">
              <p class="sous-titre-carousel ml-5"><?php the_field('sous_titre_image_01'); ?></p>
              <h1 class="titre-carousel"><?php the_field('titre_image_01'); ?></h1>
            </div>
          </div>
          <div class="carousel-item img-fluid">
            <?php 
       $image2 = get_field('image_02');
       $size2 = 'full'; // (thumbnail, medium, large, full or custom size)
       if( $image2 ) {
           echo wp_get_attachment_image( $image2, $size2 );
       }

       ?>
            <div class="text-header-absolute">
              <p class="sous-titre-carousel ml-5"><?php the_field('sous_titre_image_02'); ?></p>
              <h1 class="titre-carousel"><?php the_field('titre_image_02'); ?></h1>
            </div>
          </div>
          <div class="carousel-item img-fluid">
            <?php 
       $image3 = get_field('image_03');
       $size3 = 'full'; // (thumbnail, medium, large, full or custom size)
       if( $image3 ) {
           echo wp_get_attachment_image( $image3, $size3 );
       }

       ?>
            <div class="text-header-absolute">
              <p class="sous-titre-carousel ml-5"><?php the_field('sous_titre_image_03'); ?></p>
              <h1 class="titre-carousel"><?php the_field('titre_image_03'); ?></h1>
            </div>
          </div>
          <div class="carousel-item img-fluid">
            <?php 
       $image4 = get_field('image_04');
       $size4 = 'full'; // (thumbnail, medium, large, full or custom size)
       if( $image4 ) {
           echo wp_get_attachment_image( $image4, $size4);
       }

       ?>
            <div class="text-header-absolute">
              <p class="sous-titre-carousel ml-5"><?php the_field('sous_titre_image_04'); ?></p>
              <h1 class="titre-carousel"><?php the_field('titre_image_04'); ?></h1>
            </div>
          </div>
        </div>

      </div>
    </div>




                  <div class="w-100 d-flex justify-content-end p-0">

                    <div class="logo-helmet bg-dark-logo text-center img-fluid">
                      <?php 
                    $image = get_field('logo_helmet');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) {
                        echo wp_get_attachment_image( $image, $size );
                    }

                    ?>

                    </div>

                    <div class="menu vh-100 d-flex align-items-start p-0">
                      <?php wp_nav_menu( array( 'theme_location' => 'menu-burger' ) ); ?>
                    </div>
                  </div>



    <!-- </div>
</div> -->
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>