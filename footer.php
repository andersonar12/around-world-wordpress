			</div>
			<!-- /wrapper -->

			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="widgets wrapper clear">

					<div class="grid1-4"><h2>Sobre Nosotros</h2>
						<?php $nosotros = new WP_Query('page_id=10')?>
						<?php while ($nosotros->have_posts()): $nosotros->the_post( ); 
						
						html5wp_excerpt('html5wp_index');

						endwhile; wp_reset_postdata();?>
						
					</div>
					<div class="grid1-4">
						<h2>Próximos Viajes</h2>
				<?php 
                  $args = array(  
                    'post_type' => 'tour',
                    'posts_per_page'=> 2,
                    'orderby' => 'title', 
                    'order' => 'ASC'
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post();?> 

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

                    <div class="imagen-destacada grid2-4">
                        <?php the_post_thumbnail('miniatura')?>
        
                    </div>

                    <div class="fecha-precio clear grid2-4">
						<a href="<?php the_permalink() ?>"> <h2><?php the_title() ?></h2></a>
                        <p class="fecha"><?php the_field('salida')?> - <?php the_field('retorno');?> </p>
                        
                    </div>
                    
                    </article>
                    <!-- /article -->   
               <?php
                endwhile;
            
                wp_reset_postdata(); 
            ?>
					</div>
					<div class="grid1-4">
						<h2>Últimos Consejos</h2>
						<?php 
                  $args = array(  
                    'post_type' => 'post',
                    'posts_per_page'=> 2,
                    'orderby' => 'date', 
                    'order' => 'ASC'
                );
            
                $consejos = new WP_Query( $args ); 
                    
                while ( $consejos->have_posts() ) : $consejos->the_post();?> 

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

                    <div class="imagen-destacada grid2-4">
                        <?php the_post_thumbnail('miniatura')?>
        
                    </div>

                    <div class="fecha-precio clear grid2-4">
						<a href="<?php the_permalink() ?>"> <h2><?php the_title() ?></h2></a>
                        
                    </div>
                    
                    </article>
                    <!-- /article -->   
               <?php
                endwhile;
            
                wp_reset_postdata(); 
            ?>
					</div>
					<div class="grid1-4">
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
					</div>

				</div>



				<div class="clear"></div>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Derechos reservados <?php bloginfo('name'); ?> 
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->



		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
