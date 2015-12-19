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
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
		<div id="story-image">
			<img alt="story image" src="http://localhost/one-page/wp-content/themes/jg-one-page/images/our-story.jpg">
		</div>
		<div id="story-copy">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ergo hoc quidem apparet, nos ad agendum esse natos. Conclusum est enim contra Cyrenaicos satis acute, nihil ad Epicurum. Si alia sentit, inquam, alia loquitur, numquam intellegam quid sentiat; Sed erat aequius Triarium aliquid de dissensione nostra iudicare. Hoc est dicere: Non reprehenderem asotos, si non essent asoti. Nec hoc ille non vidit, sed verborum magnificentia est et gloria delectatus. Duo Reges: constructio interrete. Iis igitur est difficilius satis facere, qui se Latina scripta dicunt contemnere. </p>
		</div>
	</div>
</div>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
