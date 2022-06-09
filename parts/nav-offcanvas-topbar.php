<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div class="info-bar">
	<div class="info-bar-container">
		<div class="info-bar-cell">
			<span class="info-bar-highlight">
					QUICK FINDER
			</span>
<?php
			wp_nav_menu(array(
				'container'			=> 'false',				// Remove nav container
				'menu_id'			=> 'info-bar-links',		// Adding custom nav id
				'menu_class'		=> 'menu',				// Adding custom nav class
				'theme_location'	=> 'info-bar-links',		// Where it's located in the theme
				'depth'				=> 0,					// Limit the depth of the nav
				'fallback_cb'		=> ''					// Fallback function
			));


	$homeLink = get_home_url();

 ?>
</div></div>
</div>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
	<?php the_custom_logo(); ?>
	</div>
	<div class="top-bar-right show-for-small hide-for-large mobile-menu">

              <ul class="menu">

                <li><a class="menu-toggle" data-toggle="off-canvas"><?php _e( '&#9776;', 'jointswp' ); ?></a></li>
              </ul>
            </div>
	<div class="top-bar-right show-for-large">
			<div class="header__social-icons">
				<a href="https://www.facebook.com/IndianaNativePlants/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/indiananativeplantsociety/"><i class="fa fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UC4uXb_c2U5DdzwQ4zfzD1Xg"><i class="fa fa-youtube"></i></a>
				
			</div>
			<div class="header__search">
				<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
	    		<input type="text" class="search-field" name="s" placeholder="Search INPS" value="<?php the_search_query(); ?>">
	    		<button type="submit" value="Search" class="search-submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<div class="button-group1 header-button-group">
				<a href="https://fs27.formsite.com/JinkhW/w9ucmlenai/index.html" target="_blank" class="button large btn--blue">Donate</a>
				<a href="<?php echo $homeLink;?>/about-us/membership/ " class="button large btn--green">Join/Renew</a>
				<a href="<?php echo $homeLink;?>/blog-home" class="button large btn--purple">News</a>
			</div>
	</div>
</div>
<?php $breakpoint = "medium";  ?>
<div class="nav-bar"  data-hide-for="<?php echo $breakpoint ?>"><?php
get_template_part( 'parts/nav', 'title-bar' );
?>
</div>
