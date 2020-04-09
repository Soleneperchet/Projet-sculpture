<?php
    /*
    Template Name: Accueil
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
        <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet"><title>Document</title>
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

<!-- PARTIE ACCUEIL -->


     <h1><?php the_field('titre_header'); ?></h1>








	 <?php
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

                 ?>


</body>
 </html>