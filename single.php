<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post title -->
			<h1>
				<span><?php the_title(); ?></span>
			</h1>
			<!-- /post title -->
			<article class="entrada clear">
					<div class="foto">
						<?php the_post_thumbnail('blog'); ?>
					</div>

					<div class="grid1-3">
						<span class="date">Escrito el: <?php the_time('F j, Y'); ?></span><br>
						<span class="author"><?php _e( 'Publicado por: ', 'html5blank' ); ?><?php the_author_posts_link(); ?></span>
						
						<p> <?php _e('Categoria : ', 'html5blank'); the_category(', '); ?></p>
						<img src="<?php echo get_stylesheet_directory_uri() ?>/img/sociales.png" alt="" srcset="">
					</div>

					<div class="grid2-3">
						<h2><?php the_title() ?></h2>
						<p><?php the_content()
						; ?></p>
					</div>

				</article>
				<!-- /article -->

			<?php comments_template(); ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>
