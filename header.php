<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Win
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Changa+One" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'win' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="main-navigation-container">
			<nav id="site-navigation" class="main-navigation">
				<div>
					<ul id="primary-menu" class="menu">
						<li data-menuanchor="win"><a href="#win"><div><img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/WinLogo.png"></a></li>
						<li data-menuanchor="album"><a href="#album">ALBUM</a></li>
						<li data-menuanchor="gigs"><a href="#gigs">GIGS</a></li>
						<li data-menuanchor="contact"><a href="#contact">CONTACT</a></li>
					</ul>
				</div>

				<?php 
					$args = array(
						'post_type' => 'social_media',
						'order' => 'ASC'
					);
				
					$the_query = new WP_Query( $args );
				?>
				
				<div class="social-media">
					<ul>
						<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li class="social-media-icon-container"><a target="_blank" href="<?php the_field('url'); ?>"><?php the_field('icon'); ?></a></li>
						<?php endwhile; wp_reset_query(); ?>
					</ul>
				</div>
			</nav><!-- #site-navigation -->
		</div><!-- .main-navigation-container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
