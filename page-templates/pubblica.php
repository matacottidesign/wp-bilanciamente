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
    <div class="row">
        <div class="col-12 col-md-8">
        <h1>Invia la tua bozza di articolo e pubblica su BilanciaMente</h1>
        <?php the_content(); ?>
        </div>
        <div class="col-12 col-md-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat rerum dolor, natus aliquid error deleniti optio pariatur dolore nam ex nisi molestiae ad molestias veritatis obcaecati corporis deserunt nulla rem?
        </div>
    </div>
</div>



    
<?php    
endwhile;

get_footer();
?>