<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<section class="content-padder error-404 not-found">

		<header>
			<h2 class="page-title"><?php _e( 'Oops! Something went wrong here.', '_tk' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', '_tk' ); ?></p>
<img src="" alt="ttp://vignette2.wikia.nocookie.net/deathbattlefanon/images/9/97/Spongegar.png/revision/latest?cb=20160530165150
			<?php get_search_form(); ?>" height="42" width="42">

		</div><!-- .page-content -->
		<img src="" alt=>

	</section><!-- .content-padder -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>