<?php
/**
 * Template Name: Esercizi
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
                <h1><?php the_field('titolo_pagina_esercizi') ?></h1>
            </div>
            <div class="col-12 col-md-6 text-right">
                <?php 
                $image = get_field('immagine_pagina_esercizi');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            
        <div class="row">
            
            <?php if( have_rows('ripetitore_card_esercizi') ):
            while( have_rows('ripetitore_card_esercizi') ) : the_row(); ?>
                <div class="col-12 col-md-6 mt-3">
                    <div style="background-color: #ecdc94;" class="type-post">
                        <div class="entry-content">
                            <!--IMG-->
                            <?php 
                            $image = get_sub_field('immagine_card_esercizi');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <!--TITOLO-->
                            <h2 class="card-title"><?php the_sub_field('titolo_card_esercizi') ?></h2><hr>
                            <h3 style="color: #adb5bd;">Categoria: <?php 
                            $link = get_sub_field('link_categoria');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?></h3>
                            <h4 style="color: #adb5bd;">Tempo lettura: <?php the_sub_field('tempo_lettura');?></h4>
                            <!--RIASSUNTO-->
                            <?php the_sub_field('riassunto_card_esercizi') ?>
                            <!--BOTTONE-->
                            <div class="bottone-leggi-articolo">
                                <?php 
                                $link = get_sub_field('link_card_esercizi');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
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