<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header();
$post_thumbnail_id = get_post_thumbnail_id($post_ID);
					if ($post_thumbnail_id ){
				 $header_background = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

				}
?>
<!-- <div class="inner-hero-section" style="background-image:url('<?php echo $header_background;?>'); height:400px; width:100%; background-size:cover;">

</div> -->
<header class="article-header">
	<div class="article-header-text">
		<h1 class="entry-title single-title" itemprop="headline">News</h1>
	</div>


</header> <!-- end article header -->

			<?php
			 // get_template_part( 'parts/content', 'byline' ); ?>


<div class="content">

	<div class="inner-content grid-x grid-margin-x grid-padding-x">

		<main class="main small-12 medium-8 large-8 cell" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'single' ); ?>

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
