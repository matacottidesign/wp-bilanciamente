<?php
/**
 * Template Name: Pubblica il tuo articolo
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();?>

<div class="container">
    <div class="row py-5">
        <div class="col-12 col-md-8">
        <h1>Invia la tua bozza di articolo e pubblica su BilanciaMente</h1>
        <?php the_content(); ?>
        </div>
        <div class="col-12 col-md-4">
            <?php 
            $image = get_field('immagine_info');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h2><?php the_field('titolo_info') ?></h2>
            <?php the_field('descrizione_info') ?>
            <hr>
            <h2>Riocordati, se hai piacere, di seguire bilanciamente anche sui social</h2>
            <div class="d-flex justify-content-between">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>



    
<?php    
endwhile;

get_footer();
?>