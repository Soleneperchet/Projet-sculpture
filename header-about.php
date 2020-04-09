<!-- <!DOCTYPE html>
<html lang="en"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,900;1,400&display=swap"
        rel="stylesheet">
    <title>About Me</title>
    <link rel="stylesheet" href="wp-content/themes/sculpture/style.css">
</head>

<body>


        <div class="container-fluid container-header p-0">

            <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 p-0">

                <div class="menu-header">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-burger' ) ); ?>
                </div>


                <div class="img-header-about">
                    <?php 
                        $image = get_field('image_header_about');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }

                        ?>
                </div>

            </div>

                <div class="col-12 col-sm-12 col-md-6 col-xl-6 p-0 d-flex justify-content-center align-items-center">
                    <div class="bloc-text  ">
                        <div class="container-text-about row text-left">
                            <p class="text-about-hello mb-4"><?php the_field('texte_partie_about_1'); ?></p>
                            <p class="text-about mb-4"><?php the_field('texte_partie_about_2'); ?></p>
                            <p class="text-about mb-4"><?php the_field('texte_partie_about_3'); ?></p>
                            <p class="text-about mb-4"><?php the_field('texte_partie_about_4'); ?></p>
                            <div class="container-black">
                                <p class="text-about-case"><?php the_field('bloc_texte_about'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            
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