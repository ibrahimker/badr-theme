<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Badr Interactive
 */

?>

<footer>
    <div class="container">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4 icon">
                    <a href="https://www.facebook.com/badrinteractive">
                    <img src="<?php echo bloginfo('template_directory'); ?>/img/Icons/icon_facebook_footer.png"/>
                    </a>
                    <a href="https://twitter.com/badrinteractive">
                    <img src="<?php echo bloginfo('template_directory'); ?>/img/Icons/icon_twitter_footer.png"/>
                    </a>
                    <a href="https://plus.google.com/113692107235116589684/videos">
                    <img src="<?php echo bloginfo('template_directory'); ?>/img/Icons/icon_googleplus_footer.png"/>
                    </a>
                    <a href="">
                    <img src="<?php echo bloginfo('template_directory'); ?>/img/Icons/icon_instagram_footer.png"/>
                    </a>
                </div>
                <div class="col-md-8" style="text-align:right;">
                    <a href="<?php echo get_site_url() ?>/contact/other-question" class="btn btn-badr">Ask Anything</a>
                    <a href="<?php echo get_site_url() ?>/contact/quotation" class="btn btn-badr">Request a Quotation</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <p><a href="#">Sitemap</a> | <a href="<?php echo get_site_url() ?>/contact">Contact</a></p>
                </div>
                <div class="col-md-8" style="text-align:right;">
                    <p class="language">English</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                 <p class="copywright">Copyright &copy 2015 Badr Interactive Inc. All rights reserved.</p>
                 </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</footer>
<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/classie.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="<?php echo bloginfo('template_directory'); ?>/js/jqBootstrapValidation.js"></script>
<script src="<?php echo bloginfo('template_directory'); ?>/js/contact_me.js"></script>
<?php wp_footer(); ?>

</body>
</html>
