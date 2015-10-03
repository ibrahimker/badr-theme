<?php
/* Template Name: Blog Template */
get_header();
?>
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
 --><section id="blog">
	<div class="container">
		<!-- sayap kiri -->
		<div class="col-md-8">
			<div class="row">
				<h1 class="head-blog">BLOG</h1>
			</div>
			<?php if (have_posts()) : ?>
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts('post_type=post&posts_per_page=5&paged='.$paged);
				?>
				<?php while (have_posts()) : the_post(); ?>
					<!-- blog post -->
					<div class="post">
						<div class="row">
							<div class="col-md-2">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 72); ?> 
							</div>
							<div class="col-md-10">
								<div class="row">
									<p class="blog-author-name"><?php the_author(); ?></p>
									<p class="blog-posts-date"><?php the_date('j F Y'); ?></p>
								</div>
							</div>
						</div>
						<div class="row">
							<?php the_post_thumbnail( 'large' , array( 'class' => 'post-thumbnail' ) ); ?>
						</div>
						<div class="row">
							<h2 class="head-post"><?php the_title(); ?></h2>
						</div>
						<div class="row">
							<div class="post-content">
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>
						<div class="row">
							<div>&nbsp;</div>
							<p><div class="tags-title">Tags</div><?php the_category(' '); ?></p>
							<div>&nbsp;</div>
						</div>
						<div class="row">
							<a href="<?php the_permalink(); ?>" type="button" class="btn btn-badr navbar-btn">Continue Reading</a>
						</div>
					</div>
					<hr class="bates-post">
				<?php endwhile; ?>

				<?php posts_nav_link(); ?>
			<?php else : ?>
				<h4>Nothing Found</h4>

			<?php endif; ?>
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