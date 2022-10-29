<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style-addition.css" type="text/css" media="screen" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>
		<?php
		// Output the search modal (if it is activated in the customizer).
		if (true === $enable_header_search) {
			get_template_part('template-parts/modal-search');
		}
		?>
		<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">
				<?php
				// Site title or logo.
				twentytwenty_site_logo();
				?>
			</a><!-- .header-titles -->

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
							<?php
							if (has_nav_menu('primary')) {

								wp_nav_menu(
									array(
										'container'  => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
									)
								);
							} elseif (!has_nav_menu('expanded')) {

								wp_list_pages(
									array(
										'match_menu_classes' => true,
										'show_sub_menu_icons' => true,
										'title_li' => false,
										'walker'   => new TwentyTwenty_Walker_Page(),
									)
								);
							}
							?>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						
					</form>
			</div>
		</nav>

	</header><!-- #site-header -->

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
