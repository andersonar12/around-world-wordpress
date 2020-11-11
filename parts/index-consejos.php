<h1><span>Consejos para viajar</span></h1>

            <?php 
                $args = array(  
                'post_type' => 'post',
                'posts_per_page'=> 2,
                'orderby' => 'date', 
                'order' => 'DESC'
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post();?>

            <div class="entrada clear">
                <div class="grid1-3">
                    <?php the_post_thumbnail('entradas')?>
                </div>
               

                <div class="grid2-3">
                    <h3><?php the_title()?></h3>
                    
                    <?php html5wp_excerpt('html5wp_index')?>
                    <a class="continuar" href="<?php the_permalink()?>">Continuar Leyendo</a>
                </div>
            </div>
            
               
            <?php endwhile; wp_reset_postdata()?>
