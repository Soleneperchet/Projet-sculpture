<?php
    /*
    Template Name: Realisations
    */
?>


<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="wp-content/themes/sculpture/style.css">
 </head>
 <body>
 <?php get_header();
?>

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


     <h1><?php the_field('titre_header_realisation'); ?></h1>




     

     <?php
                     // check if the repeater field has rows of data
                     if( have_rows('galerie_images') ):

                         // loop through the rows of data
                         while ( have_rows('galerie_images') ) : the_row();
                         $images = get_sub_field('images_creations');
                        
                        
                         echo "<div class='img-creations'>";
                         echo " <img src='".$images."'/>";
                         echo "</div>";

                         endwhile;

                     else :

                         // no rows found

                     endif;

                 ?>




    
 </body>
 </html>