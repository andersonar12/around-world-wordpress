<?php 
                $args = array(
                    'post_type' => 'slider',
                    'order' => 'ASC',
                    'posts_per_page' => -1
                )?>
                <ul class="slider">
                    <?php 
                        $slider = new WP_Query($args);
                        while ($slider->have_posts()) : $slider->the_post() ?>
        
                    <li><?php the_post_thumbnail('slider'); ?></li>
        
                    <?php endwhile; wp_reset_postdata()?>
                </ul>