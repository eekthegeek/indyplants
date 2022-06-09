<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */  

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');


class acf_field_menu_chooser extends acf_field {


	/*
	*  __construct
	*
	*  This function will setup the field type data
	*
	*  @type	function
	*  @date	5/03/2014
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/

	function __construct() {

		/*
		*  name (string) Single word, no spaces. Underscores allowed
		*/

		$this->name = 'menu-chooser';


		/*
		*  label (string) Multiple words, can include spaces, visible when selecting a field type
		*/

		$this->label = __('Menu Chooser', 'acf-menu-chooser');


		/*
		*  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
		*/

        $this->category = 'choice';


		/*
		*  defaults (array) Array of default settings which are merged into the field object. These are used later in settings
		*/

		$this->defaults = array();


		/*
		*  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
		*  var message = acf._e('menu-chooser', 'error');
		*/

		$this->l10n = array(
			'error'	=> __('Error! Please enter a higher value', 'acf-menu-chooser'),
		);


		// do not delete!
    	parent::__construct();

	}



	function render_field_settings( $field ) {

		//Noting

	}



	function render_field( $field ) {

		$field_value = $field['value'];


		$field['choices'] = array();
		$menus = wp_get_nav_menus();

		echo '<select name="' . $field['name'] . '" class="acf-menu-chooser">';

				if ( ! empty( $menus ) ) {
					foreach ( $menus as $choice ) {
						$field['choices'][ $choice->menu_id ] = $choice->term_id;
						$field['choices'][ $choice->name ] = $choice->name;

						echo '<option  value="' . $field['choices'][ $choice->menu_id ] . '" ' . selected($field_value, $field['choices'][ $choice->menu_id ], false) . ' >' . $field['choices'][ $choice->name ] . '</option>' ;
					}
				}
		echo '</select>';

	}

}


// create field
new acf_field_menu_chooser();


function joints_excerpt_length( $length ) {
        return 36;
}
add_filter( 'excerpt_length', 'joints_excerpt_length' );










// Shortcode for Nursery and Greenhouses //
function my_listing_directory() {


	$args = array(
		  'post_status'=>'publish',
		  'post_type'=> 'buy-native-plants',
		  'posts_per_page'=>-1,
		  'orderby' => 'title',
		  'order'=>'ASC',
		   );

	$query = new WP_Query($args);
		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				global $post; // this variable is needed to grab custom fields. must start after the loop
				$query->the_post();
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
					if( have_rows('phone_number') ):
	 			   		while( have_rows('phone_number') ): the_row();
						$phone_area = get_sub_field('area_code');
						$phone_prefix = get_sub_field('phone_prefix');
						$phone_number = get_sub_field('phone_number');
						$phone_extension = get_sub_field('extension');
						$phone_link = $phone_area;
						$phone_link .= $phone_prefix;
						$phone_link .= $phone_number;

					endwhile;
				   endif;
			  		$logoURL = $logo['url'];
			  		$type = get_sub_field('type');
			  		if ($type == 'designer' ) {
			  			$bgcolor = '#4173b2';
			  		}
			  		else {

			             $bgcolor = '#78aa42';
			  		}

			  	endwhile;
			  endif;
			  $bg_full = 'background-color:'. $bgcolor;

			  $directory .= '<div class="grid-x grid-padding-x grid-padding-y directory-listing" style="background-color:'. $bgcolor .'">';
				  $directory .= '<div class="cell"><h5 class="directory-title">';

				  	$directory .= get_the_title();
				  $directory .= '</h5></div>';
			  $directory .= '</div>';
			   $directory .= '<div class="grid-x grid-padding-x grid-padding-y directory-content">';
			   $directory .= '<div class="cell medium-4 small-12">';


			   	// Add Logo
				if ($logo) {
					$directory .='<p class="text-center">';
					$directory .= '<img src="'.$logoURL.'"><br/>';
					$directory .='</p>';
				}
				$directory .='<p>';
				// Add Address Line 1
				if ($address_1) {
					$directory .= $address_1;
					$directory .= '<br />';
				}
				// Address Line 2
				if ($address_2) {
					$directory .= $address_2;
					$directory .= '<br />';
				}
				if (!$city || !$state || !$zip) {
					//do nothing
				}
				else {
					$directory .= $city . ', '.$state.' &nbsp;' . $zip;
					$directory .= '<br />';
				}

				// Website
				if ($website) {
					$directory .= '<a href="'.$website.'" target="_blank">Visit Website</a><br />';
				}

				// email
				if ($email) {
					$directory .= '<a href="mailto:'.$email.'">Send Email</a><br />';
				}
				if ($phone_area) {
						$directory .= '<a href="tel:+1'.$phone_link.'">('.$phone_area.') '.$phone_prefix .'-'.$phone_number.'</a>';
				}
				if ($phone_extension) {
					$directory .= ' Ext. '.$phone_extension.' ';
				}
			  $directory .= '</p></div>';
			   $directory .= '<div class="cell medium-8 small-12">';
			   	$directory .= '<p>'.$description. '</p>';
			   	$directory .= '</div>';
			  $directory .= '</div>';
			}
		}
		else {

		}
	   wp_reset_postdata();
		return $directory;
}

add_shortcode('listing-directory','my_listing_directory');

add_shortcode('offcanvas-search','my_offcanvas_search');

function my_offcanvas_search() {
?>
	<form id="searchform-mobile" method="get" action="'/'<?php echo home_url('/'); ?>">
		<input type="text" class="search-field" name="s" placeholder="Search INPS" value="<?php the_search_query(); ?>">
		<button type="submit" value="Search" class="search-submit"><i class="fa fa-search"></i></button>
	</form><?php
	return $offSearch;
}
