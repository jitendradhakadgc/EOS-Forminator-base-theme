<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en-GB"> <![endif]-->
<!--[if IE 7]><html class="no-js ie ie7 lt-ie9 lt-ie8" lang="en-GB"> <![endif]-->
<!--[if IE 8]><html class="no-js ie ie8 lt-ie9" lang="en-GB"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-96x96.png" sizes="92x92">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png" sizes="16x16"> -->
    <meta name="author" content="Critical Media - criticalmedia.co.uk">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(); ?> >

    <header class="header">

      <!-- <a class="btn btn-skiplink" href="#mainContent">Skip to main content</a> -->

      <div class="header__search inactive d-none d-lg-block" id="headerSearch" aria-hidden="true">
			  <div class="container">
			    <div class="row">
			      <div class="col-12">
              <?php get_template_part( 'template-parts/component/component', 'search' ); ?>
						</div>
					</div>
				</div>
			</div>

      <div class="header__primary py-4">
        <div class="header__primary__container">        
          <div class="row align-items-center justify-content-between">

            <div class="header__brand col-auto line-height-1">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" title="Back to the home page">
                <img class="logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" role="img" alt="<?php bloginfo( 'name' ); ?>" width="190" height="71">
              </a>
            </div>

            <div class="header__navigation text-lg-center py-4 px-6 py-lg-0 px-lg-4">
              <nav class="navigation navigation-collapse" id="headerNav" aria-labelledby="primary-navigation">
                <h4 id="primary-navigation" class="sr-only">Primary navigation</h4>
                <!-- <div class="d-block d-lg-none" id="headerSearchSmall">
                  <div class="col py-4 bg-grey-800">
                    <?php get_template_part( 'template-parts/component/component', 'search' ); ?>
                  </div>
                </div> -->
                <ul>
                  <div class="d-block d-lg-none">
                    <?php wp_nav_menu( array (
                    'theme_location' => 'secondary-menu',
                    'container' => false,
                    'items_wrap' => '%3$s'
                    ) ); ?>
                  </div>
                  <?php wp_nav_menu( array (
                  'theme_location' => 'primary-menu',
                  'container' => false,
                  'items_wrap' => '%3$s'
                  ) ); ?>
                </ul>
              </nav>
            </div>

            <div class="header__communication col col-lg-auto text-right pl-0 pl-sm-3">
              <div class="row align-items-center justify-content-end no-gutters">
                
                <?php

                $companyPhone = get_option('company-phone');
                $companyEmail = get_option('company-email');

                if( $companyPhone || $companyEmail) { ?>

                <div class="col-auto">

                  <ul> 
                    <?php if($companyPhone): ?>
                      <li>
                        <a href="tel:<?php echo $companyPhone; ?>" class="header__communication__link" title="<?php bloginfo( 'name' ); ?> telephone number: <?php echo $companyPhone; ?>">
                          <i class="fas fa-phone-alt"></i>
                          <span class="d-none d-md-inline-block"><?php echo $companyPhone; ?></span>
                        </a>
                      </li>
                    <?php endif; ?>
                    <?php if($companyEmail): ?>
                      <li class="d-none d-sm-inline-block">
                        <a href="mailto:<?php echo $companyEmail; ?>" class="header__communication__link" title="<?php bloginfo( 'name' ); ?> email address: <?php echo $companyEmail; ?>">
                          <i class="fas fa-envelope"></i>
                        </a>
                      </li>
                    <?php endif; ?>
                  </ul>

                </div>

                <?php } ?>

                <div class="col-auto d-block d-lg-none">
                  <button class="header__communication__link header__communication__link--menu" id="navToggle" type="button" title="Main menu">
                    <i class="fas fa-bars"></i><span>Menu</span>
                  </button>
                </div>

                <div class="col-auto d-none d-lg-block">
                  <button class="search-toggle close" id="searchToggle" type="button" aria-expanded="false" aria-controls="searchModule" tabindex="0" title="Open search form">
                    <i class="search-toggle__icon fas"></i>
                    <span class="sr-only">Open Search Form</span>
                  </button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <?php if ( has_nav_menu( 'secondary-menu' ) ) { ?>

      <div class="header__secondary">
        <div class="header__secondary__container">      
          <div class="row align-items-center justify-content-center">
            <nav class="navigation__secondary" aria-labelledby="secondary-navigation">
              <h4 id="secondary-navigation" class="sr-only">Secondary navigation</h4>
              <ul>
                <?php wp_nav_menu( array (
                'theme_location' => 'secondary-menu',
                'container' => false,
                'items_wrap' => '%3$s'
                ) ); ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>

      <?php } ?>

    </header>

    <main class="view">
