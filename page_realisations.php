<?php
    /*
    Template Name: Collections
    */
?>


<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,900;1,400&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
     <title>Document</title>
     <link rel="stylesheet" href="wp-content/themes/sculpture/style.css">
 </head>
 <body>
<?php if(is_page(59)) { get_header('collections'); } else { get_header(); } wp_head(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>

<!-- PARTIE REALISATIONS -->







     




<div class="menu-menu-sculptures-container text-uppercase mt-5">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-sculpture' ) ); ?>
				</div>

     <!-- <?php
                     // check if the repeater field has rows of data
                     if( have_rows('galerie_images') ):

                         // loop through the rows of data
                         while ( have_rows('galerie_images') ) : the_row();
                         $images = get_sub_field('images_creations');
                        
                         echo "<div class='imgreal'>";
                         echo "<div class='img-creations'>";
                         echo " <img src='".$images."'/>";
                         echo "</div>";
                         echo "</div>";

                         endwhile;

                     else :

                         // no rows found

                     endif;

                 ?> -->




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
 </body>
 </html>