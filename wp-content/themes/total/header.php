<?php
/**
 * The header for our theme.
 *
 * @package Total
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="ht-page">
	<header id="ht-masthead" class="ht-site-header">
		<div class="ht-container ht-clearfix">
			
			<nav id="ht-site-navigation" class="ht-main-navigation">
				<div class="toggle-bar"><span></span></div>
				<?php 
				wp_nav_menu( array( 
					'theme_location' => 'primary', 
					'container_class' => 'ht-menu ht-clearfix' ,
					'menu_class' => 'ht-clearfix',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) ); 
				?>
			</nav><!-- #ht-site-navigation -->
		</div>
	</header><!-- #ht-masthead -->

	<div id="ht-content" class="ht-site-content ht-clearfix">