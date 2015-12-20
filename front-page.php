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
		<div id="vertical-empty-space-1-618em"></div>
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
		<div id="vertical-empty-space-1-618em"></div>
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
		<div id="vertical-empty-space-1-618em"></div>
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

<!-- testimonials -->
<div class="testimonials-section">
	<div class="content">
		<h1>Happy Customer</h1>
		<hr id="title-separator">
		<p>Praeclare hoc quidem. Quare conare, quaeso. Duo Reges: constructio interrete.</p>
		<div id="vertical-empty-space-1-618em"></div>
		<div class="testimonial-box">
			<div class="image-container"><img src="http://localhost/one-page/wp-content/themes/jg-one-page/images/happy-customer/customer-1.jpg" alt="customer-image"></div>
			<p><strong>Happy Customer</strong><br/>Executive, ABC Inc.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nemo igitur esse beatus potest. Indicant pueri, in quibus ut in speculis natura cernitur. Scisse enim te quis coarguere possit? Quantum Aristoxeni ingenium consumptum videmus in musicis? Duo Reges: constructio interrete. Iam doloris medicamenta illa Epicurea tamquam de narthecio proment: Si gravis, brevis; Quid enim tanto opus est instrumento in optimis artibus comparandis?</p>
		</div>
		<div class="testimonial-box">
			<div class="image-container"><img src="http://localhost/one-page/wp-content/themes/jg-one-page/images/happy-customer/customer-1.jpg" alt="customer-image"></div>
			<p><strong>Happy Customer</strong><br/>Executive, ABC Inc.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nemo igitur esse beatus potest. Indicant pueri, in quibus ut in speculis natura cernitur. Scisse enim te quis coarguere possit? Quantum Aristoxeni ingenium consumptum videmus in musicis? Duo Reges: constructio interrete. Iam doloris medicamenta illa Epicurea tamquam de narthecio proment: Si gravis, brevis; Quid enim tanto opus est instrumento in optimis artibus comparandis?</p>
		</div>
		<div class="testimonial-box">
			<div class="image-container"><img src="http://localhost/one-page/wp-content/themes/jg-one-page/images/happy-customer/customer-1.jpg" alt="customer-image"></div>
			<p><strong>Happy Customer</strong><br/>Executive, ABC Inc.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nemo igitur esse beatus potest. Indicant pueri, in quibus ut in speculis natura cernitur. Scisse enim te quis coarguere possit? Quantum Aristoxeni ingenium consumptum videmus in musicis? Duo Reges: constructio interrete. Iam doloris medicamenta illa Epicurea tamquam de narthecio proment: Si gravis, brevis; Quid enim tanto opus est instrumento in optimis artibus comparandis?</p>
		</div>

	</div>
</div>


<!-- call to action -->
<div class="call-to-action-section">
	<div>
		<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
		<a href="javascript:void(0)"><button>Get Started</button></a>
	</div>
</div>

<!-- company contact -->
<div class="contact-section">
	<div class="content">
		<h1>Contact Us</h1>
		<hr id="title-separator">
		<div id="vertical-empty-space-1-618em"></div>
		<a href="mailto:jacobgoh101@gmail.com">
			<div class="contact-box">
				<i class="fa fa-envelope"></i><br/>
				<span>jacobgoh101@gmail.com</span>
			</div>
		</a>
		<a href="javascript:void(0)">
			<div class="contact-box">
				<i class="fa fa-map-marker"></i><br/>
				<span>Company Address</span>
			</div>
		</a>
		<a href="javascript:void(0)">
			<div class="contact-box">
				<i class="fa fa-phone"></i><br/>
				<span>012 345 6789</span>
			</div>
		</a>
	</div>

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:300px;max-height:40vh;width:100%;"><div id="gmap_canvas" style="height:300px;max-height:40vh;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">best wordpress site</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(3.139003,101.68685499999992),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(3.139003, 101.68685499999992)});infowindow = new google.maps.InfoWindow({content:"<b></b><br/><br/> Kuala Lumpur" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
