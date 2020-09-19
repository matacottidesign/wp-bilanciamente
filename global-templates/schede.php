<!--SCHEDE SERVIZI-->
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
