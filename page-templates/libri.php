<?php
/**
 * Template Name: Libri
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
 
<!--BANNER-->
<div class="bg-white">
    <div class="container">
        <div class="row banner d-flex align-items-center">
            <div class="col-12 col-md-6">
                <h1><?php the_field('titolo_pagina_libri') ?></h1>
            </div>
            <div class="col-12 col-md-6 text-right">
                <?php 
                $image = get_field('immagine_pagina_libri');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            
        <div class="row">
            
            <?php if( have_rows('ripetitore_card_libri') ):
            while( have_rows('ripetitore_card_libri') ) : the_row(); ?>
                <div class="col-12 col-md-6 mt-3">
                    <div style="background-color: #d1d6e6;" class="type-post">
                        <div class="entry-content">
                            <!--IMG-->
                            <?php 
                            $image = get_sub_field('immagine_card_libri');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <!--TITOLO-->
                            <h2 class="card-title"><?php the_sub_field('titolo_card_libri') ?></h2><hr>
                            <h4 style="color: #adb5bd;"><?php the_sub_field('autore');?></h4>
                            <!--RIASSUNTO-->
                            <?php the_sub_field('riassunto_card_libri') ?>
                            <!--BOTTONE-->
                            <div class="bottone-leggi-articolo">
                                <?php 
                                $link = get_sub_field('link_recensione');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    //$link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn understrap-read-more-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            else :
            endif;?>

        </div>

        </div>
        <?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>
        </div>
    </div>
</div>



    
<?php    
endwhile;

get_footer();
?>