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
 * @package Badr Interactive
 */
get_header(); ?>
<script type="text/javascript">
 $(document).ready(function() {
  $('#fullpage').fullpage({
   'verticalCentered': false,
   'css3': true,
   'autoScrolling': true,
   'scrollBar': true,
   'fitToSection':true,
   'loopTop':true,
   'normalScrollElements':'#section4',
   'responsiveWidth':768,
   'responsiveHeight':500,
   'navigation': true,
   'navigationPosition': 'right',
   'slidesNavigation': true,
   'slidesNavPosition': 'bottom',
});
});
</script>

<div id="fullpage">
    <div class="section home-header" id="section0">
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="intro-lead-in">We Are Badr Interactive</div>
                        <div class="intro-heading">We help the visionaries to make their vision comes to life.</div>
                        <a href="<?php echo get_site_url() ?>/index.php/works" class="btn btn-badr intro-works">WORKS</a>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/header/img_smartphone.png" class="hvr-sink intro-image img-responsive" alt="">
                    </div>
                </div>
                <div class="row intro-next">
                    <a href="#home2" class="page-scroll"><img src="<?php echo bloginfo('template_directory'); ?>/img/icons/icon_mousescroll_home.png"/></a>
                </div>
            </div>
        </header>
    </div>
    <div class="section" id="section0">
        <!-- You Are Visionary Section -->
        <section id="home2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="text1right">You are a visionary.</div>
                        </div>
                        <div class="row">
                            <div class="text2right">Trust your mobile and web apps developement to the right hand.</div>
                        </div>
                        <div class="row">
                            <div class="text3right">To them who can see what you see.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- it's not always about the code section -->
    <div class="section" id="section1">
        <section id="home3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="text1left">It's not always about</br> the code or the design.</div>
                        </div>
                        <div class="row">
                            <div class="text2left">A really good business lies upon it's vision.</div>
                        </div>
                        <div class="row">
                            <div class="text3left">Like, how it will changes the people's life?</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Distinctive vision section -->
    <div class="section" id="section2">
        <section id="home4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="text1right">Distinctive visions</br>needs unique approaches</div>
                        </div>
                        <div class="row">
                            <div class="text2right">We listen, we observe, we explore. We find new ways.</div>
                        </div>
                        <div class="row">
                            <div class="text3right">We resist the temptation of doing the same things again and again.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Slide section -->
    <div class="section" id="section3">
        <section id="home5">
            <div class="container">
                <div class="row">
                   <div class="slide">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                       <div class="row">
                           <p class="testimoni">I've been working with Badr Interactive since 2011. They are a bunch of amazing young people, talented, but also have a greate attitude. I would recommend Badr to everyone looking for a reliable application developer.</p>
                       </div>
                       <div class="row">
                        <img src="<?php echo bloginfo('template_directory'); ?>/img/yugo.jpg" class="img-circle img-responsive center-block" alt="Yugo Isal" width="125px" height="125px">
                    </div>
                    <div class="row">
                        <p class="nama">John Travolta</p>
                    </div>
                    <div class="row">
                        <p class="jabatan">CEO of Volta Indonesia</p>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="slide"> Slide 2 </div>
            <div class="slide"> Slide 3 </div>
            <div class="slide"> Slide 4 </div>
        </div>
    </div>
</section>
</div>
<!-- contact us section -->
<div class="section" id="section4">
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <p class="contact">Talk to us</p>
            </div>
            <div class="row">
                <!-- Change the width and height values to suit you best -->
<!--                     <div class="typeform-widget" data-url="https://ibrahimker.typeform.com/to/EzIkFC" data-text="Contact Form Badr" style="width:100%;height:300px;"></div>
                    <script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'widget.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}})()</script>
                -->            
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>                </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <p class="contact2">Wanna look around? Take your time <a href="<?php echo get_site_url() ?>/works" class="btn btn-badr">WORKS</a></p>
                    
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>
