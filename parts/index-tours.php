<h1><span>Proximos Tours</span></h1>

    <?php 
      $args = array(  
        'post_type' => 'tour',
        'posts_per_page'=> 3,
        'orderby' => 'title', 
        'order' => 'ASC'
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post();?> 

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class('grid1-3'); ?> >

            <div class="imagen-destacada">
                <?php the_post_thumbnail('tours')?>
                
                <a class="mas-info" href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri()?>/img/masinfo.png" alt="masinfo" srcset=""></a>
            </div>


            <div class="fecha-precio clear">
                <a href="<?php the_permalink() ?>"> <h2><?php the_title() ?></h2></a>
                <p class="fecha"><?php the_field('salida')?> - <?php the_field('retorno');?> </p>
                <p class="precio"><?php the_field('precio')?></p>
            </div>
            
            <br class="clear">
        </article>
            <!-- /article -->   
    <?php endwhile; wp_reset_postdata();  ?>
