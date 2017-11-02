<?php
/**
 * The template for displaying the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Win
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main ">
			<div id="fullpage">
				<div class="section front-page">
					<div class="flexbox-container">
						<img class="front-page-image" src="<?php bloginfo('stylesheet_directory'); ?>/images/WinFromTheBronx.png" alt="Win From the Bronx">
						<img class="front-page-image-mobile" src="<?php bloginfo('stylesheet_directory'); ?>/images/WinFromTheBronx_Mobile.png" alt="Win From the Bronx">
					</div>
				</div>

				<div class="section album">
					<div class="album-flexbox-container">
						<div class="album-title">
							<p>
								WOLF <br />
								IN <br >
								SHEEPS <br >
								CLOTHING <br >
							</p>
						</div>
						<div>
							<iframe class="apple-player" src="https://tools.applemusic.com/embed/v1/album/1123231885?country=us" frameborder="0"></iframe>
						</div>
					</div>
				</div>

				<?php 
					$args = array(
						'post_type' => 'contact'
					);
				
					$the_query = new WP_Query( $args );
				?>

				<div class="section gigs">
					<div class="scroller">
						<div class="flex-container">
							<div class="inquiries-cta">
								<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<a href="mailto:<?php the_field('email'); ?>">CONTACT FOR INQUIRIES</a>
								<?php endwhile; wp_reset_query(); ?>
							</div>

							<?php 
								$args = array(
									'post_type' => 'post',
									'order' => 'ASC'
								);
							
								$the_query = new WP_Query( $args );
							?>

							<div class="gig-container">
								<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="gig-meta">
										<div class="gig-date">
											<p><?php the_field('date'); ?></p>
										</div>

										<div class="gig-location">
											<h2><?php the_field('venue'); ?></h2>
											<p><?php the_field('location'); ?></p>
										</div>
									</div>
								<?php endwhile; wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>

				<?php 
					$args = array(
						'post_type' => 'contact'
					);
				
					$the_query = new WP_Query( $args );
				?>
				
				<div class="section contact">
					<div class="contact-flex-container">
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<a class="email" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
							<a class="mobile-email" href="mailto:<?php the_field('email_mobile'); ?>"><?php the_field('email_mobile'); ?></a>
						<?php endwhile; wp_reset_query(); ?>
					</div>	
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
