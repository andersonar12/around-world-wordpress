<?php 
/* 
* Template Name: Template Tours
*/
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

            <h1><span><?php the_title(); ?></span></h1>
            
            <?php 
                  $args = array(  
                    'post_type' => 'tour',
                    'posts_per_page'=> 4,
                    'orderby' => 'title', 
                    'order' => 'ASC'
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post();?> 

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class('grid2-4'); ?> >

                    <div class="imagen-destacada">
                        <?php the_post_thumbnail('tours')?>
                        
                        <a class="mas-info" href="<?php the_permalink() ?>"><img src="<?php echo get_template_directory_uri()?>/img/masinfo.png" alt="masinfo" srcset=""></a>
                    </div>

                    <a href="<?php the_permalink() ?>"> <h2><?php the_title() ?></h2></a>

                    <div class="fecha-precio clear">
                        <p class="fecha"><?php the_field('salida')?> - <?php the_field('retorno');?> </p>
                        <p class="precio"><?php the_field('precio')?></p>
                        <p><?php the_field('descripcion_corta')?></p>
                    </div>
                    
                    <br class="clear">
                    </article>
                    <!-- /article -->   
               <?php
                endwhile;
            
                wp_reset_postdata(); 
            ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
