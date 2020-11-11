<h1><span>Testimoniales</span></h1>
            <?php 
                $args = array(  
                    'post_type' => 'testimonial',
                    'posts_per_page' => 2, 
                    'orderby' => 'date', 
                    'order' => 'DESC', 
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post();?> 
              
                <article>
                    <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title() ?></h2>
                    <blockquote><p><?php html5wp_excerpt('html5wp_index') ?></p></blockquote>
                    <p class="testimonial"><?php the_field('nombre')?></p></a>
                </article>
                
                <?php endwhile; wp_reset_postdata();  ?> 
                
                <a href="<?php echo get_permalink(12)?>" class="continuar">Ver Todos</a>