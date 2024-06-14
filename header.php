<?php

/**

 * The header for our theme

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package UnderStrap

 */



// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;



$container = get_theme_mod( 'understrap_container_type' );

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://use.typekit.net/ngy6jca.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<?php wp_head(); ?>

	<script src="https://kit.fontawesome.com/1fdd55ff79.js" crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

</head>



<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>

<?php do_action( 'wp_body_open' ); ?>



	<a class="skip-link sr-only sr-only-focusable" href="#content">

		<?php esc_html_e( 'Skip to content', 'understrap' ); ?>

	</a>

	<input type="checkbox" class="toggle-nav" id="toggle-nav">

	<div class="site" id="page">

		

	

		<header class="header-mobile" aria-labelledby="main-nav-label">

			





		</header>



		<header class="header-desktop base_desktop_header">

			<div class="container desk_head_con">

				<div class="">

					<div class="logo_container_desk">

						<a class="header-desktop__logo-link " href="/">

							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" />

						</a>

					</div>

					

					<nav class="">

						<!-- post deployment config: add in CSS classes in menu config -->

						<?php

							wp_nav_menu(

								array(

									'menu'            => 'Desktop Menu',

									'theme_location'  => 'Primary Menu',

									'depth'           => 2,

									'menu_class'      => 'nav-list',

									'link_after'	  => ''

								)

							);

						?>

						

					</nav>

					<div class="mobile_icon">

					<a href="/" class="header-desktop__burger">

							<label for="toggle-desktop-nav">

								<img src="<?php echo get_template_directory_uri(); ?>/img/Burger_Icon.svg" class="header-desktop__burger--white" />

								<img src="<?php echo get_template_directory_uri(); ?>/img/burger_Icon_mobile.svg" class="header-desktop__burger--gold" />

							</label>

						</a>

						</div>

					<input type="checkbox" class="toggle-desktop-nav" id="toggle-desktop-nav">

					<div class="header-desktop__sub-nav">

						<div class="header-desktop__sub-nav-container">

							<label for="toggle-desktop-nav">

								&#10005;

							</label>

							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" />

							<?php

								wp_nav_menu(

									array(

										'menu'            => 'About Menu',

										'theme_location'  => 'Primary Menu',

										'depth'           => 2,

										'menu_class'      => 'nav-list',

										'link_after'	  => ''

									)

								);

							?>

							<div class="toggle_sub_menu">

							<?php

								wp_nav_menu(

									array(

										'menu'            => 'Toggle Sub Menu',

										'theme_location'  => 'Primary Menu',

										'depth'           => 2,

										'menu_class'      => 'nav-list',

										'link_after'	  => ''

									)

								);

							?>

							</div>

				

							<div class="header-desktop__social">

								<?php get_template_part( 'global-templates/social-media-menu' ); ?>

							</div>

						</div>

					</div>

					<div class="nav-desktop-backdrop">

						<label for="toggle-desktop-nav"></label>

					</div>

				</div>

			</div>

		</header>





		<!-- .site#page closing tag is in the footer.php -->