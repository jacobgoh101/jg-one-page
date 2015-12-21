<?php

add_action( 'tf_create_options', 'my_theme_create_options' );
function my_theme_create_options() {

    // Initialize Titan & options here
	$titan = TitanFramework::getInstance( 'jg-one-page' );

	$panel = $titan->createAdminPanel( array(
		'name' => 'JG One Page Theme Options',
		) );

	$panel->createOption( array(
		'type' => 'save'
		) );

	$panel->createOption(array(
		'name' => 'Select Font',
		'id' => 'jg_font_family',
		'type' => 'select',
		'options' => array(
			'Roboto'=>'Roboto',
			'Open Sans'=>'Open Sans',
			'Slabo 27px'=>'Slabo 27px',
			'Lato'=>'Lato',
			'Lobster'=>'Lobster'
			),
		'default' => 'Lato'
		));

	$panel->createOption(array(
		'name' => 'Header Logo',
		'id' => 'jg_header_logo',
		'type' => 'upload',
		'desc' => 'Ideal Size 280 x 44 px',
		'placeholder' => 'Header Logo'
		));

	$panel->createOption(array(
		'name' => 'Footer Logo',
		'id' => 'jg_footer_logo',
		'type' => 'upload',
		'desc' => 'Ideal Size 35 x 35 px',
		'placeholder' => 'Footer Logo'
		));

	$panel->createOption(array(
		'name' => 'Logo at Hero Image',
		'id' => 'jg_hero_logo',
		'type' => 'upload',
		'desc' => 'to be placed at the center of hero image',
		'placeholder' => 'Hero Logo'
		));

	$panel->createOption( array(
		'name' => 'Custom CSS',
		'id' => 'jg_custom_css',
		'type' => 'textarea',
		'desc' => 'Add in your custom css here'
		) );

	$panel->createOption( array(
		'type' => 'save'
		) );
}

add_action('wp_head', 'font_selector');
function font_selector(){
	$titan = TitanFramework::getInstance( 'jg-one-page' );

	if($titan->getOption('jg_font_family') == 'Roboto'){
		wp_enqueue_style( 'google-fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto', false );
		?>
		<style type="text/css">
			body,h1,h2,h3,h4,h5,h6{
				font-family: 'Roboto', sans-serif;
			}
		</style>
		<?php
	}
	else if($titan->getOption('jg_font_family') == 'Open Sans'){
		wp_enqueue_style( 'google-fonts-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans', false );
		?>
		<style type="text/css">
			body,h1,h2,h3,h4,h5,h6{
				font-family: 'Open Sans', sans-serif;
			}
		</style>
		<?php
	}
	else if($titan->getOption('jg_font_family') == 'Slabo 27px'){
		wp_enqueue_style( 'google-fonts-slabo-27x', 'https://fonts.googleapis.com/css?family=Slabo+27px', false );
		?>
		<style type="text/css">
			body,h1,h2,h3,h4,h5,h6{
				font-family: 'Slabo 27px', serif;
			}
		</style>
		<?php
	}
	else if($titan->getOption('jg_font_family') == 'Lato'){
		wp_enqueue_style( 'google-fonts-lato', 'https://fonts.googleapis.com/css?family=Lato', false );
		?>
		<style type="text/css">
			body,h1,h2,h3,h4,h5,h6{
				font-family: 'Lato', sans-serif;
			}
		</style>
		<?php
	}
	else if($titan->getOption('jg_font_family') == 'Lobster'){
		wp_enqueue_style( 'google-fonts-Lobster', 'https://fonts.googleapis.com/css?family=Lobster', false );
		?>
		<style type="text/css">
			body,h1,h2,h3,h4,h5,h6{
				font-family: 'Lobster', cursive;
			}
		</style>
		<?php
	}
}

add_action('wp_head', 'jg_custom_css');
function jg_custom_css(){
	$titan = TitanFramework::getInstance( 'jg-one-page' );

	?>
	<style type="text/css">
		<?php 
		echo $titan->getOption('jg_custom_css');
		?>
	</style>
	<?php
}