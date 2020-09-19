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
                    <svg width="35px" height="35px" viewBox="0 0 16 16" class="bi bi-arrow-down text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"/>
                    </svg>
                </a>
            </div>
            <div class="col-12 col-md-6 hero-illustration">
            <?php 
            $image = get_field('immagine_header');
            if( !empty( $image ) ): ?>
                <img class="layer" data-speed="1" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div id="service" class="row mx-0 text-center">
    <!--BOX-1-->
    <div class="schede col-12 col-lg-4 p-5" style="background-color: #e9dfdd;">
        
        <div>
            <?php 
        $image = get_field('icona_blog');
        if( !empty( $image ) ): ?>
            <img class="icona-img-home pb-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>

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
    <!--BOX-2-->
    <div class="schede col-12 col-lg-4 p-5" style="background-color: #d1d6e6;">
        <div>
            <?php 
        $image = get_field('icona_libri');
        if( !empty( $image ) ): ?>
            <img class="icona-img-home pb-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>

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
    <!--BOX-3-->
    <div class="schede col-12 col-lg-4 p-5" style="background-color: #ecdc94;">
        <div>
            <?php 
        $image = get_field('icona_esercizi');
        if( !empty( $image ) ): ?>
            <img class="icona-img-home pb-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>

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

<!--CATEGORIE-->
<div class="container">
    <div class="py-8">
        <h2 class="text-center">Tutte le categorie di BilanciaMente</h2>
        <div class="d-flex justify-content-center">
            <div class="hbar mb-4"></div>
        </div>

        <div class="row">

            <div class="col-6 col-md-3">
                <a href="#" class="category-link">
                    <div class="category-card d-flex align-items-center justify-content-center">
                        <div class="text-center">
                        <svg width="40px" height="40px" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                        <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        <h3 class="pt-4">Tempo</h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>


<?php get_template_part('global-templates/custom-facciata'); ?>

<?php get_template_part('global-templates/custom-nostri-trattamenti'); ?>

<?php get_template_part('global-templates/custom-banner-prenotazioni'); ?>

<?php get_template_part('global-templates/custom-cards-articoli'); ?>
        



<?php endwhile; ?>

<?php get_footer(); ?> 
