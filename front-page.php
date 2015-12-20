<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package One_Page
 */

get_header(); ?>

<!-- service section -->
<div id="services-section">
	<div class="content">
		<h1>Our Services</h1>
		<hr id="title-separator">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<div class="service-box">
			<i class="fa fa-globe"></i>
			<h3>Lorem Ipsum</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Equidem e Cn.</p>
		</div>
		<div class="service-box">
			<i class="fa fa-briefcase"></i>
			<h3>Lorem Ipsum</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Equidem e Cn.</p>
		</div>
		<div class="service-box">
			<i class="fa fa-battery-full"></i>
			<h3>Lorem Ipsum</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Equidem e Cn.</p>
		</div>
	</div>
</div>

<!-- our story -->
<div class="story-section">
	<div class="content">
		<h1>Our Story</h1>
		<hr id="title-separator">
		<div class="side-image">
			<div class="images-wrapper">
			</div>
			<div class="side-image-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam assumenda nihil suscipit obcaecati sit, cum quod corporis adipisci ipsam, fugiat, quae error. Eaque commodi, dicta quidem explicabo mollitia inventore quibusdam.</p>
			</div>
		</div>
	</div>
</div>

<!-- our team -->
<div class="team-section">
	<div class="content">
		<h1>Our Team</h1>
		<hr id="title-separator">
		<div class="hover-tile-outer" style="background-image:url('http://localhost/one-page/wp-content/themes/jg-one-page/images/our-team/our-team-1.jpg');">
			<div class="hover-tile-container">				
				<div class="hover-tile hover-tile-hidden">
					<span>
						<h4>Jacob Goh</h4>
						<p>Founder</p>
					</span>
				</div>
				<div class="hover-tile hover-tile-visible"></div>
			</div>
		</div>
		<div class="hover-tile-outer" style="background-image:url('http://localhost/one-page/wp-content/themes/jg-one-page/images/our-team/our-team-2.jpg');">
			<div class="hover-tile-container">				
				<div class="hover-tile hover-tile-hidden">
					<span>
						<h4>Jacob Goh</h4>
						<p>Founder</p>
					</span>
				</div>
				<div class="hover-tile hover-tile-visible"></div>
			</div>
		</div>
		<div class="hover-tile-outer" style="background-image:url('http://localhost/one-page/wp-content/themes/jg-one-page/images/our-team/our-team-3.jpg');">
			<div class="hover-tile-container">				
				<div class="hover-tile hover-tile-hidden">
					<span>
						<h4>Jacob Goh</h4>
						<p>Founder</p>
					</span>
				</div>
				<div class="hover-tile hover-tile-visible"></div>
			</div>
		</div>
	</div>
</div>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
