<?php
get_header();
?>
<style>
	/*panah fullpage*/
	.fp-controlArrow.fp-prev {
		left: -35px;
		background-position: left center;
	}
	.fp-controlArrow.fp-next {
		background-position: left center;
	}
	/*portfolio*/
	.portfolio-container-image, .portfolio-item{
		height: 200px;
		width: 250px;
		position: relative;
	}
	.portfolio-nama {
		z-index: 100;
		display:table;    
		position: relative;
		color: white;    
		font-size: 18px;
		line-height: 1.3;
		font-weight: bold;
		left: 30px;    
		bottom: 60px;
		width:70%;
	}
	.attachment-project-archive{
		position: absolute;
		left: 0;
		top: 0;
	}
	.portfolio-container-image img{
		padding:0px;
		width:250px;
		height:200px;
	}
</style>

<?php if(is_singular('project')) : ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				'verticalCentered': false,
				'css3': true,
				'autoScrolling': true,
				'scrollBar': true,
				'fitToSection':false,
				'responsiveWidth':768,
				'navigation': false,
				'slidesNavigation': true,
				'slidesNavPosition': 'bottom',
			});
		});
	</script>
	<style>
		.fp-slidesNav{
			left:30%;
			top:80%;
		}
		.fp-controlArrow{
			display:none;
		}
	</style>
	<?php while ( have_posts() ) : the_post();?>
		<header>
			<div id="blog-header">
				<div class="container">
					<div class="row">
					</div>
				</div>
			</div>
		</header>
		<div id="fullpage">
			<div class="section">
				<section id="work">
					<div class="container">
						<!-- gallery image -->
						<div class="col-md-8">
							<?php
							$attachment_ids 	= projects_get_gallery_attachment_ids();
							$lightbox_rel 		= apply_filters( 'projects_lightbox_rel', $rel = 'lightbox' );
							if ( $attachment_ids ) { ?>

							<?php
							$loop = 0;
							$columns = apply_filters( 'projects_project_gallery_columns', 3 );
							foreach ( $attachment_ids as $attachment_id ) {
								$classes = array( 'zoom' );
								if ( $loop == 0 || $loop % $columns == 0 )
									$classes[] = 'first';
								if ( ( $loop + 1 ) % $columns == 0 )
									$classes[] = 'last';
								$image_link = wp_get_attachment_url( $attachment_id );
								if ( ! $image_link )
									continue;
								$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_project_single_thumbnail_size', 'project-single' ) );
								$image_class = esc_attr( implode( ' ', $classes ) );
								$image_title = esc_attr( get_the_title( $attachment_id ) );
								echo '<div class="slide">';
									echo '<a href="' . $image_link . '" title="' . $image_title . '" rel="' . $lightbox_rel . ' project-gallery-' . $post->ID . '">' . $image . '</a>';
								echo '</div>';
								$loop++;
							} // endforeach ?>

							<?php } // endif ?>
						</div>
						<!-- description -->
						<div class="col-md-4 proj-box">
							<h1 class="works-title"><?php the_title(); ?></h1>
							<div>&nbsp;</div>
							<p class="works-category">Category : <?php echo get_the_term_list( $post->ID, 'project-category', '', ', ', '' ); ?></p>
							<p class="works-platform">Platform : <?php echo esc_attr( get_post_meta( $post->ID, '_platform', true ) ); ?></p>
							<p class="works-date">Date : <?php echo esc_attr( get_post_meta( $post->ID, '_date', true ) ); ?></p>
							<div>&nbsp;</div>
							<p class="works-description"><?php echo apply_filters( 'post_excerpt', wpautop( $post->post_excerpt ) ) ?></p>
							<div>&nbsp;</div>
							<a href="#works" class="btn btn-badr">Request a Quotation</a>
							<div>&nbsp;</div>
						</div>
					</div>
				</section>
			</div>
		</div>
		<section style="padding:0px; margin-top:30px;background-color:#EEEEEE;">
			<div class="container-fluid" style="padding:20px">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<!-- next story -->
						<p class="work-pagination-prev">Previous Project</p>
						<div class="work-prev-link"><?php echo get_previous_post_link('%link','%title'); ?></div>
					</div>
					<div class="col-md-2">
						<a href="#works" class="btn btn-badr">Share this Projects</a>
					</div>
					<div class="col-md-4">
						<p class="work-pagination-next">Next Project</p>
						<div class="work-next-link"><?php echo get_next_post_link('%link'); ?></div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php else : ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				'verticalCentered': false,
				'css3': true,
				'autoScrolling': true,
				'scrollBar': true,
				'fitToSection':false,
				'responsiveWidth':768,
				'navigation': false,
				'slidesNavigation': true,
				'slidesNavPosition': 'bottom',
			});
		});
	</script>
	<div id="fullpage">
		<div class="section">
			<!-- Portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
						<?php if ( have_posts() ) : ?>
							<?php do_action( 'projects_before_loop' ); ?>
							<?php projects_project_loop_start(); ?>
							<!-- mulai portfolio -->
							<div class="col-md-12">
								<?php while ( have_posts() ) : the_post(); ?>
									<?php
						if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
						global $project, $projects_loop;
						if ( empty( $projects_loop['loop'] ) ) // Store loop count we're currently on
						$projects_loop['loop'] = 0;
						if ( empty( $projects_loop['columns'] ) ) // Store column count for displaying the grid
						$projects_loop['columns'] = apply_filters( 'projects_loop_columns', 2 );
						?>
						<?php if($projects_loop['loop'] %8 == 0) : ?>
							<div class="slide">
								<!-- awal -->
								<?php if($projects_loop['loop'] %4 == 0) : ?>
									<div class="row">
										<div class="portfolio-item col-md-3">
											<?php do_action( 'projects_before_loop_item' ); ?>
											<div class="portfolio-container-image">
												<a href="<?php the_permalink(); ?>" class="work">
													<?php the_post_thumbnail( array(300, 300) );  ?>
												</a>
												<p class="portfolio-nama"><?php echo get_the_title(); ?></p>
											</div>
										</div>
									<?php endif; ?>
								<?php elseif($projects_loop['loop'] % 8 == 7) : ?>
									<!-- akhir -->
									<?php if($projects_loop['loop'] %4 == 3) : ?>
										<div class="portfolio-item col-md-3">
											<?php do_action( 'projects_before_loop_item' ); ?>
											<div class="portfolio-container-image">
												<a href="<?php the_permalink(); ?>" class="project-permalink">
													<?php the_post_thumbnail( array(300, 300) ); ?>
												</a>
												<p class="portfolio-nama"><?php echo get_the_title(); ?></p>
											</div>
										</div>
									</div>
								<?php endif; ?>
							</div>
						<?php else : ?>
							<!-- tengah -->
							<div class="portfolio-item col-md-3">
								<?php do_action( 'projects_before_loop_item' ); ?>
								<div class="portfolio-container-image">
									<a href="<?php the_permalink(); ?>" class="project-permalink">
										<?php the_post_thumbnail( array(300, 300) );  ?>
									</a>
									<p class="portfolio-nama"><?php echo get_the_title(); ?></p>
								</div>
							</div>
						<?php endif; ?>
						<!-- Increase loop count -->
						<?php $projects_loop['loop']++; ?>

					<?php endwhile; // end of the loop. ?>
				</div>
				<!-- akhir portfolio -->
				<?php projects_project_loop_end(); ?>

				<?php do_action( 'projects_after_loop' ); ?>

			<?php else : ?>

				<?php projects_get_template( 'loop/no-products-found.php' ); ?>

			<?php endif; ?>
		</div>
	</div>
</section>
</div>
</div>

<?php endif; ?>
<?php get_footer(); ?>
