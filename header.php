<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One_Page
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<?php
		if( is_front_page() ){
			?>

			<div class="hero">
				<div class="hero-inner">
					<a href="javascript:void(0)" class="hero-logo"><img src="http://localhost/one-page/wp-content/themes/jg-one-page/images/logo2.png" alt="Logo Image"></a>
					<div class="hero-copy">
						<h1>One Page</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velut ego nunc moveor. An tu me de L. </p>
						<a href="javascript:void(0)"><button>Get Started</button></a>
					</div>
				</div>
			</div>

			<?php
		}
		?>
		<header class="navigation" role="banner">
			<div class="navigation-wrapper">
				<a href="javascript:void(0)" class="logo">
					<img src="http://localhost/one-page/wp-content/themes/jg-one-page/images/logo.png" alt="Logo Image">
				</a>
				<a href="javascript:void(0)" class="navigation-menu-button" id="js-mobile-menu"><i class="fa fa-bars"></i>
				</a>
				<nav role="navigation">
					<?php wp_nav_menu( array( 
						'theme_location' => 'primary', 
						'container' => '',
						'menu_class' => 'navigation-menu show',
						'menu_id' => 'js-navigation-menu'
						) ); ?>
					</nav>
				</div>
			</header>
			<div id="sticky-header-empty-space" class="sticky-header-off"></div>




			<div id="content" class="site-content">
