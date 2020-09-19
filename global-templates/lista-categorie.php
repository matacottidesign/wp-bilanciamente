<!--CATEGORIE-->
<div class="container">
    <div class="py-8">
        <h2 class="text-center">Tutte le categorie di BilanciaMente</h2>
        <div class="d-flex justify-content-center">
            <div class="hbar mb-4"></div>
        </div>

        <div class="row">
            <?php
                // Check rows exists.
                if( have_rows('ripetitore_card') ):
                    while( have_rows('ripetitore_card') ) : the_row(); ?>

                    <div class="col-6 col-md-3 mb-4">
                        <?php 
                        $link = get_sub_field('link_categoria');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <a class="category-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
                            <div class="category-card d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <?php 
                                    $image = get_sub_field('icona_categoria');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <h3 class="pt-4"><?php the_sub_field('titolo_categoria'); ?></h3>
                                </div>
                            </div>
                        </a>
                        <?php endif; ?>
                    </div>

                    <?php endwhile;
                else :
                endif; 
            ?>
        </div>
    </div>
</div>