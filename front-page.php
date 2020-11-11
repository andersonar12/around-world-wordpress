<?php get_header(); ?>
</div>
<!-- section -->
		<section class="slider">

            <?php get_template_part('parts/index','slider' )?>

		</section>
		<!-- /section -->

<div class="wrapper">
                    <!-- section -->
	<section class="tours clear">

    <?php get_template_part('parts/index','tours' )?>

    </section>
    <!-- /section -->
    <section class="consejos-testimoniales clear">
        <div class="grid2-3">

        <?php get_template_part('parts/index','consejos' )?>

        </div>

        <div class="grid1-3 testimoniales">
        <?php get_template_part('parts/index','testimoniales' )?>
        </div>
    </section>   

</div>

<?php get_footer(); ?>
