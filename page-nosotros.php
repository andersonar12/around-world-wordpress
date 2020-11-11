<?php 
/* 
* Template Name: Template Nosotros
*/
get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title(); ?></span></h1>


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>

				<?php the_content(); ?>
                    
				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
            <div class="galeria-nosotros grid1-3">
            
            <?php 
                $size = 'mediano';

                if( have_rows('imagenes_nosotros') ):

                    // Loop through rows.
                    while( have_rows('imagenes_nosotros') ) : the_row();

                        // Load sub field value.
                        $sub_value = get_sub_field('imagen');
                        
                        echo '<div class="foto">';
                        echo wp_get_attachment_image($sub_value,$size,false, array('class' => 'fotografia', ));
                        echo '</div>';
                        
                    // End loop.
                    endwhile;

                endif;

            ?>
            </div>

		<?php endwhile; endif;?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
