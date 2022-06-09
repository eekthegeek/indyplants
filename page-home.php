<?php
/**
 * The template for displaying all pages
 * Template Name: Homepage
 * This is the template that displays all pages by default.
 */

get_header();

?>
<!---  Banner Begin --->
<div class="slider-hero-section grid-container">
		<div class="grid-x grid-margin-x grid-margin-y small-up-1" >
			<?php
			$slider = get_field('home_slider');
	  if($slider){
	      echo do_shortcode($slider);
	  }
		?>
		</div>
</div>
<!---  Banner End  --->

<!---  Blog Grid  Begin --->
<?php
$home_grid_title = get_field('home_grid_title');
	if ($home_grid_title) :

		?>
		<div class="grid-container home-grid">
			<div class="grid-x grid-margin-x grid-margin-y small-up-1" >
					<div class="cell"><h2><?php echo $home_grid_title;?></h2></div>
			</div>
			<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3" >
				<?php
					$block_1 = get_field('block_1_group');
					if ($block_1):
						echo '<div class="cell home-grid-cell">';
							echo '<a class="home-grid-link" href="'.$block_1['block_1_link'].'">';
								echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $block_1['block_1_image']['url'] .'&apos;);"></div>';
								echo '<h4 class="home-grid-title">'. $block_1['block_1_title'] . '</h4>';
							echo '</a>';
							echo '<p class="home-grid-excerpt">'. $block_1['block_1_text'] . '</p>';
							echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$block_1['block_1_link'].'">';
								echo $block_1['block_1_link_text'];
							echo '</a></p>';
						echo '</div>';
					endif;
					$block_2 = get_field('block_2_group');
					if ($block_2):
						echo '<div class="cell home-grid-cell">';
							echo '<a class="home-grid-link" href="'.$block_2['block_2_link'].'">';
								echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $block_2['block_2_image']['url'] .'&apos;);"></div>';
								echo '<h4 class="home-grid-title">'. $block_2['block_2_title'] . '</h4>';
							echo '</a>';
							echo '<p class="home-grid-excerpt">'. $block_2['block_2_text'] . '</p>';
							echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$block_2['block_2_link'].'">';
								echo $block_2['block_2_link_text'];
							echo '</a></p>';
						echo '</div>';
					endif;
					$block_3 = get_field('block_3_group');
					if ($block_3):
						echo '<div class="cell home-grid-cell">';
							echo '<a class="home-grid-link" href="'.$block_3['block_3_link'].'">';
								echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $block_3['block_3_image']['url'] .'&apos;);"></div>';
								echo '<h4 class="home-grid-title">'. $block_3['block_3_title'] . '</h4>';
							echo '</a>';
							echo '<p class="home-grid-excerpt">'. $block_3['block_3_text'] . '</p>';
							echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$block_3['block_3_link'].'">';
								echo $block_3['block_3_link_text'];
							echo '</a></p>';
						echo '</div>';
					endif;
					$block_4 = get_field('block_4_group');
					if ($block_4):
						echo '<div class="cell home-grid-cell">';
							echo '<a class="home-grid-link" href="'.$block_4['block_4_link'].'">';
								echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $block_4['block_4_image']['url'] .'&apos;);"></div>';
								echo '<h4 class="home-grid-title">'. $block_4['block_4_title'] . '</h4>';
							echo '</a>';
							echo '<p class="home-grid-excerpt">'. $block_4['block_4_text'] . '</p>';
							echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$block_4['block_4_link'].'">';
								echo $block_4['block_4_link_text'];
							echo '</a></p>';
						echo '</div>';
					endif;
					$block_5 = get_field('block_5_group');
					if ($block_5):
						echo '<div class="cell home-grid-cell">';
							echo '<a class="home-grid-link" href="'.$block_5['block_5_link'].'">';
								echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $block_5['block_5_image']['url'] .'&apos;);"></div>';
								echo '<h4 class="home-grid-title">'. $block_5['block_5_title'] . '</h4>';
							echo '</a>';
							echo '<p class="home-grid-excerpt">'. $block_5['block_5_text'] . '</p>';
							echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$block_5['block_5_link'].'">';
								echo $block_5['block_5_link_text'];
							echo '</a></p>';
						echo '</div>';
					endif;
					$block_6 = get_field('block_6_group');
					if ($block_6):
						echo '<div class="cell home-grid-cell">';
							echo '<a class="home-grid-link" href="'.$block_6['block_6_link'].'">';
								echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $block_6['block_6_image']['url'] .'&apos;);"></div>';
								echo '<h4 class="home-grid-title">'. $block_6['block_6_title'] . '</h4>';
							echo '</a>';
							echo '<p class="home-grid-excerpt">'. $block_6['block_6_text'] . '</p>';
							echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$block_6['block_6_link'].'">';
								echo $block_6['block_6_link_text'];
							echo '</a></p>';
						echo '</div>';
					endif;
				?>
			</div>
		</div>
	<?php





	endif;
?>

<div class="grid-container highlight-row">
		<div class="grid-x grid-margin-x " >
			<?php
			if (have_rows('feature_section') ):
				while (have_rows('feature_section') ): the_row();
				$fs_title = get_sub_field('feature_section_title');
				$fs_content = get_sub_field('feature_section_column_1');
				$fs_color = get_sub_field('feature_section_background_color');
				?>
				<div class="cell medium-8 small-12 cell-feature-section" style="background-color:<?php echo $fs_color;?>">
					<?php

						echo '<h3 class="text-center">'. $fs_title . '</h3>';
						echo '<p>'. $fs_content . '</p>';
						endwhile;
					endif;
					 ?>


				</div>
				<div class="cell auto cell-event">
					<h2>Coming Up</h2>
					<?php

					$coming_events = get_field('coming_events');
					echo '<div class="event-list-container">';
					echo $coming_events;
					echo '</div>';
					?>

				</div>

		</div>
</div>
<!---  Blog Grid  Begin --->
<?php
$home_grid_two_title = get_field('home_grid_two_title');
	if ($home_grid_two_title) :
		?>
		<div class="grid-container home-grid">
				<div class="grid-x grid-margin-x grid-margin-y small-up-1" >
						<div class="cell"><h2><?php echo $home_grid_two_title; ?></h2></div>
				</div>

		<div class="grid-x grid-margin-x grid-margin-y small-up-1 medium-up-2 large-up-3" >
			<?php
			$bottom_block_1 = get_field('bottom_block_1_group');
			if ($bottom_block_1):
				echo '<div class="cell home-grid-cell">';
					echo '<a class="home-grid-link" href="'.$bottom_block_1['bottom_block_1_link'].'">';
						echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $bottom_block_1['bottom_block_1_image']['url'] .'&apos;);"></div>';
						echo '<h4 class="home-grid-title">'. $bottom_block_1['bottom_block_1_title'] . '</h4>';
					echo '</a>';
					echo '<p class="home-grid-excerpt">'. $bottom_block_1['bottom_block_1_text'] . '</p>';
					echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$bottom_block_1['bottom_block_1_link'].'">';
						echo $bottom_block_1['bottom_block_1_link_text'];
					echo '</a></p>';
				echo '</div>';
			endif;

			$bottom_block_2 = get_field('bottom_block_2_group');
			if ($bottom_block_2):
				echo '<div class="cell home-grid-cell">';
					echo '<a class="home-grid-link" href="'.$bottom_block_2['bottom_block_2_link'].'">';
						echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $bottom_block_2['bottom_block_2_image']['url'] .'&apos;);"></div>';
						echo '<h4 class="home-grid-title">'. $bottom_block_2['bottom_block_2_title'] . '</h4>';
					echo '</a>';
					echo '<p class="home-grid-excerpt">'. $bottom_block_2['bottom_block_2_text'] . '</p>';
					echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$bottom_block_2['bottom_block_2_link'].'">';
						echo $bottom_block_2['bottom_block_2_link_text'];
					echo '</a></p>';
				echo '</div>';
			endif;

			$bottom_block_3 = get_field('bottom_block_3_group');
			if ($bottom_block_3):
				echo '<div class="cell home-grid-cell">';
					echo '<a class="home-grid-link" href="'.$bottom_block_3['bottom_block_3_link'].'">';
						echo '<div style="width:100%; background-size:cover; background-repeat:no-repeat; height:200px; background-image:url(&apos;'. $bottom_block_3['bottom_block_3_image']['url'] .'&apos;);"></div>';
						echo '<h4 class="home-grid-title">'. $bottom_block_3['bottom_block_3_title'] . '</h4>';
					echo '</a>';
					echo '<p class="home-grid-excerpt">'. $bottom_block_3['bottom_block_3_text'] . '</p>';
					echo '<p class="home-grid-excerpt"><a class="home-grid-link" href="'.$bottom_block_3['bottom_block_3_link'].'">';
						echo $bottom_block_3['bottom_block_3_link_text'];
					echo '</a></p>';
				echo '</div>';
			endif;


					?>
		</div>
	<?php
	endif;
?></div>

<div class="grid-container feature-bottom" >
		<div class="grid-x grid-margin-x grid-padding-x grid-padding-y  medium-up-2" >
			<?php
			if ( have_rows( 'fs_bottom_left' ) ) :
 				while ( have_rows( 'fs_bottom_left' ) ) : the_row();
					$fs_bottom_left_color = get_sub_field( 'fs_bottom_left_color' );
		 			$fs_bottom_left_title = get_sub_field( 'fs_bottom_left_title' );
					$fs_bottom_left_content = get_sub_field( 'fs_bottom_left_content' );
					$fs_bottom_left_content2 = get_sub_field('fs_bottom_left_2');

				endwhile;
			 endif;
			 if ( have_rows( 'fs_bottom_right' ) ) :
				 while ( have_rows( 'fs_bottom_right' ) ) : the_row();
				 $fs_bottom_right_color = get_sub_field( 'fs_bottom_right_color' );
				 $fs_bottom_right_title = get_sub_field( 'fs_bottom_right_title' );
				 $fs_bottom_right_content = get_sub_field( 'fs_bottom_right_content' );
				 $fs_bottom_right_content2 = get_sub_field( 'fs_bottom_right_2' );
				 endwhile;
			endif;
			echo '<div class="cell text-center fs-content small-order-1 medium-order-1" style="background-color:'.$fs_bottom_left_color.'">';
				echo '<h3>'.$fs_bottom_left_title.'</h3>';
				echo $fs_bottom_left_content;
			echo '</div>';
			echo '<div class="cell text-center fs-content small-order-3 medium-order-2" style="background-color:'.$fs_bottom_right_color.'">';
				echo '<h3>'.$fs_bottom_right_title.'</h3>';
				echo $fs_bottom_right_content;
			echo '</div>';
			echo '<div class="cell feature-bottom-button-cell text-center small-order-2  medium-order-3" style="background-color:'.$fs_bottom_left_color.'">';
				echo $fs_bottom_left_content2;
			echo '</div>';
			echo '<div class="cell feature-bottom-button-cell text-center small-order-4  medium-order-4" style="background-color:'.$fs_bottom_right_color.'">';
				echo $fs_bottom_right_content2;
			echo '</div>';
 ?>



		</div>
</div>
<?php get_footer(); ?>
