<?php
/* Template Name: Quotation Template */
get_header();
?>
<!-- Header -->
<header id="quotation-header">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<script type="text/javascript">
					jQuery(document).ready(function($) { $( ".ginput_container input" ).trigger( "focus" ); });
				</script>
				<?php
				echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]');
				?>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</header>
<section id="contact-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<p class="contact-footer-text">For media inquiries, general question, or others <a href=""><img src="<?php echo bloginfo('template_directory'); ?>/img/Icons/icon_arrowright_circle_contact.png"/></a></p>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</section>
<?php get_footer(); ?>