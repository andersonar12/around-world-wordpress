<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="clear">

		<?php 
			$paged = 
			$blog = get_page(18);
			$i=1;
        ?>
			<h1><span><?php echo $blog->post_title ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php if($i < 2) {?>
				<!-- article -->
				<article class="entrada clear">
					<div class="foto">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog'); ?></a>
					</div>

					<div class="grid1-3">
						<span class="date">Escrito el: <?php the_time('F j, Y'); ?></span><br>
						<span class="author"><?php _e( 'Publicado por: ', 'html5blank' ); ?><?php the_author_posts_link(); ?></span>
						
						<p> <?php _e('Categoria : ', 'html5blank'); the_category(', '); ?></p>
					</div>

					<div class="grid2-3">
						<a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
						<?php html5wp_excerpt('html5wp_custom_post') ?>
					</div>

				</article>
				<!-- /article -->
			<?php } else { ?>
				<!-- article -->
				<article class="entrada clear">
					
					<div class="grid1-3">
					<div class="foto">
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a>
					</div>
					</div>

					<div class="grid2-3">
						<a href="<?php the_permalink() ?>"><h2><?php the_title() ?></h2></a>
						<?php html5wp_excerpt('html5wp_custom_post') ?>
					</div>

				</article>
				<!-- /article -->
			<?php } ?>

			<?php $i++; endwhile; endif;?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
