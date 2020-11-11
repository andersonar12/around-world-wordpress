<?php 
/* 
* Template Name: Template Testimoniales
*/
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title();?></span></h1>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>
            
                <?php 
                $args = array(  
                    'post_type' => 'testimonial',
                    'posts_per_page' => -1, 
                    'orderby' => 'date', 
                    'order' => 'DESC', 
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post();?> 
                <br>
                <article>
                    <h2><?php the_title() ?></h2>
                    <blockquote><?php echo get_the_content()?></blockquote>
                    <p class="testimonial"><?php the_field('nombre')?></p>
                    <p><?php the_field('ciudad')?></p>
                </article>
                
                <?php endwhile; wp_reset_postdata();  ?> 
                
		    </article>
            <!-- /article -->
        
       

		<?php endwhile; endif;?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
