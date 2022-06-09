<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header();
$post_thumbnail_id = get_post_thumbnail_id($post_ID);
					if ($post_thumbnail_id ){
				 $header_background = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

				}
?>
<div class="inner-hero-section" style="background-image:url('<?php echo $header_background;?>'); ">

</div>
		<header class="article-header">
			<div class="article-header-text">
				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			</div>


		</header> <!-- end article header -->
	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

		    <main class="main small-12 large-8 medium-8 cell" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->


					<?php get_template_part( 'parts/loop', 'page-sidebar' ); ?>
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

	<div class="before-footer ">
		<div class="before-footer-container">
			<div class="grid-x grid-padding-x">

				<div class="cell large-12"  >
					<?php
						$menuSelect = get_field('menu_select');
						$_menu_object = wp_get_nav_menu_object( $menuSelect );
						$nav_menu_selected_title = $_menu_object->name;
						echo '<div class="title"><h4>'. $nav_menu_selected_title. '</h4></div>';
						// echo $menuSelect;
						wp_nav_menu(array(
							'container'			=> 'false',				// Remove nav container
							'menu' => $nav_menu_selected_title,
							'menu_id'			=> $menuSelect,		// Adding custom nav id
							'menu_class'		=> 'child-page-list',				// Adding custom nav class
							'theme_location'	=> '',		// Where it's located in the theme
							'depth'				=> 1,					// Limit the depth of the nav
							'fallback_cb'		=> ''					// Fallback function
						));
					?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
