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