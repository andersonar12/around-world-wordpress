<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="clear">
	<br>
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		<!-- post title -->
			<h1><span><?php the_title(); ?></span></h1>
		<!-- /post title -->
				
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>


			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
	
					<?php the_post_thumbnail('toursPpal'); // Fullsize image for the single post ?>
				
			<?php endif; ?>
			<!-- /post thumbnail -->

			<div class="clear"></div>
			
			<div class="informacion-viaje">
			
            <p class="fecha"> Duracion: <?php the_field('salida')?> - <?php the_field('retorno');?> </p>
			<p>Lugar de salida: <?php the_field('lugar_de_salida');?></p>
			<p>Lugares Disponibles: <?php the_field('lugares_dsiponibles');?></p>
			<p>Precio: <?php the_field('precio');?></p>
			</div>
			<div class="itinerario">
				<h2 >Itinerario de Viaje</h2>
				<?php the_field('itinerario') ?>
			</div>
			
		</article>
		<!-- /article -->

	<div class="grid1-3">
		<h3>Galeria de imagenes</h3>
		<?php the_content(); // galeria ?>
	</div>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
