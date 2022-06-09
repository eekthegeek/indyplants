<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header();
$post_ID = '29';
$post_thumbnail_id = get_post_thumbnail_id($post_ID);
		if ($post_thumbnail_id ){
			 $header_background = wp_get_attachment_url( get_post_thumbnail_id( '29' ) );
		 }

?>

	<div class="inner-hero-section" style="background-image:url('<?php echo $header_background;?>'); ">
	</div>

	<header class="article-header">
		<div class="article-header-text">
			<h1 class="entry-title single-title" itemprop="headline">News</h1>
		</div>
	</header>
	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

		    <main class="main small-12 medium-8 large-8 cell" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

		    </main> <!-- end #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
