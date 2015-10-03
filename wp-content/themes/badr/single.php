<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Badr Interactive
 */

get_header(); ?>
<!-- Header -->
<!-- <header>
	<div id="blog-header">
		<div class="container">
			<div class="row">
				<button type="button" class="btn subscribe-btn navbar-btn">SUBSCRIBE</button>
			</div>
		</div>
	</div>
</header>
 -->
<section id="blog">
	<div class="container">
		<!-- sayap kiri -->
		<div class="col-md-8">
			<div class="row">
				<h1 class="head-blog">BLOG POSTS</h1>
			</div>
			<!-- post -->
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="post col-md-12">
					<div class="row">
						<div class="col-md-4">
							<p class="blog-posts-date"><?php the_date('j F Y'); ?></p>
						</div>
						<div class="col-md-8">
							<div class="tags-title">Tags <?php the_category(' '); ?></div>
						</div>
					</div>
					<div class="row">
						<?php the_post_thumbnail( 'large' , array( 'class' => 'post-thumbnail' ) ); ?>
					</div>
					<div class="row">
						<h2 class="head-post"><?php the_title(); ?></h2>
					</div>
					<div class="row">
						<?php the_content(); ?>
					</div>
					<div class="row">
						<?php wp_link_pages( array('before' => '<div class="page-links">' . esc_html__( 'Pages:', 'badr' ),
						'after'  => '</div>', ) ); ?>
					</div>
					<hr class="bates">
					<!-- next story -->
					<div class="row">
						<div class="col-md-6">
							<p class="post-pagination-prev">Previous Story</p>
							<div class="post-prev-link"><?php echo get_previous_post_link('%link','%title'); ?></div>
						</div>
						<div class="col-md-6">
							<p class="post-pagination-next">Next Story</p>
							<div class="post-next-link"><?php echo get_next_post_link('%link'); ?></div>
						</div>
					</div>
					<hr class="bates">
					<div class="row" id="posts-author">
						<div class="col-md-2">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 72); ?>
						</div>
						<div class="col-md-8">
							<p class="post-author-name"><?php the_author(); ?></p>
							<p class="post-author-bio"><?php the_author_meta('description'); ?></p>
						</div>
					</div>
					<hr class="bates">
				</div>
				<?php $withcomments = true; comments_template();?>
				<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
			<?php endwhile; // End of the loop. ?>

		</div>
		<div class="col-md-1"></div>
		<!-- sayap kanan -->
		<div class="col-md-3" id="sidebar">
			<div class="row" id="search-box">
				<?php get_search_form( true ); ?>
			</div>
			<div class="row" id="popular-posts">
				<p class="sidebar-header">TOP STORIES</p>
				<hr class="sidebar-bates">
			</div>
			<?php wpp_get_mostpopular(); ?>
			<div class="row" id="popular-posts">
				<p class="sidebar-header">CATEGORIES</p>
				<hr class="sidebar-bates">
			</div>
			<ul class="popular-category">
				<?php wp_list_categories('orderby=name&title_li=&hierarchical=0&number=10'); ?>
			</ul>
		</div>
	</div>
</section>

<?php get_footer(); ?>