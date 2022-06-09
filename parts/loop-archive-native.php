<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
 if( have_rows('address') ):
 	while( have_rows('address') ): the_row();
		$address_1 = get_sub_field('address_1');
		$address_2 = get_sub_field('address_2');
		$city = get_sub_field('city');
		$state = get_sub_field('state');
		$zip = get_sub_field('zip');
	endwhile;
endif;
 if( have_rows('info') ):
 	while( have_rows('info') ): the_row();
		$description = get_sub_field('description');
		$email = get_sub_field('email');
		$website = get_sub_field('website');
		$logo = get_sub_field('logo');
		$logoURL = $logo['url'];
		$type = get_sub_field('type');
		if ($type == 'designer' ) {
			$bgcolor = '#78aa42';
		}
		else {

            $bgcolor = '#4173b2';
		}

	endwhile;
endif;


?>

	<div class="grid-x grid-padding-x grid-padding-y directory-listing" style="background-color:<?php echo $bgcolor; ?>">
		<div class="cell"><h5 style="color:#fff; margin-bottom:0;"><?php the_title(); ?></h5></div>
	</div>
	<div class="grid-x grid-padding-x grid-padding-y" >
		<div class="cell medium-4 small-12 small-order-2 medium-order-1">
			<?php echo $address_1 . '<br />';
			echo $address_2 . '<br />';
			echo $city . ', ';
			echo $state . '&nbsp;';
			echo $zip . '<br />';
			echo '<a href="mailto:'.$email.'">'.$email. '</a> <br />';
			echo '<a target="_blank" href="'.$website.'">'.$website. '</a> <br />';
			// echo '<a href=""'.$email. '<br />';




			?>
		</div>
		<div class="cell  medium-4 small-12 small-order-3 medium-order-2">
			<?php echo $description;?>
		</div>
		<div class="cell  medium-4 small-12 small-order-1 medium-order-3 text-center">
			<?php echo '<img src="'.$logoURL.'" />';?>
		</div>
	</div>
