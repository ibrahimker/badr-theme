<?php

/* Template Name: Contact Template */

get_header();

?>
<!-- Header -->
<header id="contact-header">
	<div class="container">
		<div class="row">
			<h1 class="contact-header">PROJECT INQUIRY</h1>
		</div>
		<div class="row">
			<p class="contact-subheader">Brief us about your project,</br> we will examine it and send you a quotation
			</p>
		</div>
		<div class="row">
			<a href="<?php echo get_site_url() ?>/index.php/contact/quotation" class="contact-header-button">
				<button type="button" class="btn btn-contact-quotation">REQUEST A QUOTATION</button>
			</a>
			<div style="padding-bottom:5%;"></div>
		</div>
	</div>
</header>
<section id="contact-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<p class="contact-footer-text">For media inquiries, general question, or others <a href="<?php echo get_site_url() ?>/index.php/contact/other-question"><img src="<?php echo bloginfo('template_directory'); ?>/img/icons/icon_arrowright_circle_contact.png"/></a></p>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>