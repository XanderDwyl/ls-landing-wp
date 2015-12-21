<?php
/**
 * Template Name: Layout: LS Home
**/

get_header(); ?>

	<!-- <div <?php echo apply_filters( 'listify_cover', 'page-cover entry-cover', array( 'size' => 'full' ) ); ?>>
		<h1 class="page-title cover-wrapper"><?php the_post(); the_title(); rewind_posts(); ?></h1>
	</div> -->

	<?php do_action( 'listify_page_before' ); ?>

	<div id="primary">
		<div class="content-area">

			<main id="main" class="site-main" role="main">

				<?php if ( listify_has_integration( 'woocommerce' ) ) : ?>
					<?php wc_print_notices(); ?>
				<?php endif; ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template(); ?>
				<?php endwhile; ?>

			</main>

		</div>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-home-three-steps') ) : ?> <?php endif; ?>
	</div>

	<!-- <div class="partners hidden-xs hidden-sm">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="sm-partners-roll hidden-xs"></div>
				</div>
			</div>
		</div>
	</div> -->

<?php get_footer(); ?>
