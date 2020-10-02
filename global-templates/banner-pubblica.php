<div class="bg-white">
    <div class="container">
        <h2 class="text-center"><?php the_field('titolo_pubblica'); ?></h2>
        <div class="d-flex justify-content-center">
            <div class="hbar mb-4"></div>
        </div>
        <div class="row py-8">
            <div class="col-12 col-md-4">
                <?php 
                $image = get_field('immagine_pubblica');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-8 text-center payoff">
            <?php the_field('descrizione_pubblica'); ?>
                <button class="btn btn-pubblica px-3 border border-primary rounded mt-5" type="button">
                    <?php 
                    $link = get_field('link_pubblica');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </button>
            </div>
        </div>
    </div>
</div>