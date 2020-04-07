<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="wp-content/themes/sculpture/style.css">
</head>
<body>
<?php get_header(); ?>

<?php if(has_category('page-principale')): ?>

    <h1><?php the_field('titre_header'); ?></h1>

    <?php
                    // check if the repeater field has rows of data
                    if( have_rows('galerie_images_accueil') ):

                        // loop through the rows of data
                        while ( have_rows('galerie_images_accueil') ) : the_row();
                        $images = get_sub_field('images_creations');
                        
                        
                        echo "<div class='img-creations'>";
                        echo " <img src='".$images."'/>";
                        echo "</div>";

                        endwhile;

                    else :

                        // no rows found

                    endif;

                ?>





    <?php endif;?>
    
</body>
</html>