<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

<?php //get_template_part('global-templates/carousel-top'); ?>

<!--HERO-->
<div id="hero" class="bg-light">
    <div class="container">
        <div class="hero bg-light row align-items-center">
            <div class="col-12 col-md-6">
                <h1 class="pb-3"><?php the_field('titolo'); ?></h1>
                <div class="payoff pb-5"><?php the_field('payoff'); ?></div>
                <div class="hbar mb-5"></div>
                <a href="#service">
                    <svg width="35px" height="35px" viewBox="0 0 16 16" class="bi bi-arrow-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                    </svg>
                </a>
            </div>
            <div class="col-12 col-md-6">
            <?php 
            $image = get_field('immagine_header');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<div id="service" class="row text-center">
    <div class="schede col-12 col-md-4 p-5" style="background-color: #e9dfdd;">
        <h2><?php the_field('titolo_blog'); ?></h2>
        <div class="d-flex justify-content-center">
            <div class="hbar mb-4"></div>
        </div>
        <div class="payoff pb-5"><?php the_field('descrizione_blog'); ?></div>
        <button type="button" class="btn">
            <?php 
            $link = get_field('link_blog');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </button>
        <div>
            <?php 
        $image = get_field('immagine_blog');
        if( !empty( $image ) ): ?>
            <img class="img-home pt-8" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
    </div>
    <div class="schede col-12 col-md-4 p-5" style="background-color: #d1d6e6;">
        <h2><?php the_field('titolo_libri'); ?></h2>
        <div class="d-flex justify-content-center">
            <div class="hbar mb-4"></div>
        </div>
        <div class="payoff pb-5"><?php the_field('descrizione_libri'); ?></div>
        <button type="button" class="btn">
            <?php 
            $link = get_field('link_libri');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </button>
        <div>
        <?php 
        $image = get_field('immagine_libri');
        if( !empty( $image ) ): ?>
            <img class="img-home pt-8" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
    </div>
    <div class="schede col-12 col-md-4 p-5" style="background-color: #6adbe2;">
        <h2><?php the_field('titolo_esercizi'); ?></h2>
        <div class="d-flex justify-content-center">
            <div class="hbar mb-4"></div>
        </div>
        <div class="payoff pb-5"><?php the_field('descrizione_esercizi'); ?></div>
        <button type="button" class="btn">
            <?php 
            $link = get_field('link_esercizi');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </button>
        <div>
        <?php 
        $image = get_field('immagine_esercizi');
        if( !empty( $image ) ): ?>
            <img class="img-home pt-8" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
    </div>
</div>


<?php get_template_part('global-templates/custom-facciata'); ?>

<?php get_template_part('global-templates/custom-nostri-trattamenti'); ?>

<?php get_template_part('global-templates/custom-banner-prenotazioni'); ?>

<?php get_template_part('global-templates/custom-cards-articoli'); ?>
        



<?php endwhile; ?>

<?php get_footer(); ?> 
