<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wastewatertreatmentsolutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e('Skip to content', 'wastewatertreatmentsolutions'); ?></a>

		<header id="masthead" class="site-header pb-2">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<?php the_custom_logo(); ?>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navToggle"
						aria-controls="navToggle" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>

					</button>
					<div class="collapse navbar-collapse" id="navToggle">
						<?php
						wp_nav_menu(array(
							'menu' => 'primary-navigation',
							'menu_id' => 'navbar-menu',
							'container' => false,          // No container element
							'menu_class' => 'navbar-nav ms-auto gap-3 pe-3 mt-3 mt-lg-0',   // Bootstrap 5 class for <ul>
							'add_li_class' => 'nav-item',     // Custom function to add class to <li>
							'link_class' => 'nav-link',     // Custom function to add class to <a>
						));
						?>
						<div class="d-flex gap-2">
							<a class="btn btn-cta-1 py-3 px-3" href="<?php echo get_field('cta_header_1_link'); ?>"><?php echo get_field('cta_header_1'); ?></a>
							<a class="btn btn-cta-1 py-3 px-3" href="<?php echo get_field('cta_header_2_link'); ?>"><?php echo get_field('cta_header_2'); ?></a>
						</div>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->