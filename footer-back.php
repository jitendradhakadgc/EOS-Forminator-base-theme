      <?php get_template_part( 'template-parts/component/component', 'action' ); ?>
    
    </main>

    <footer class="footer">

      <div class="footer__primary">
        <div class="footer__primary__container">
          <div class="row justify-content-between">

            <div class="footer__communication col-md-6 col-xl-auto">
                  
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo pb-5 pb-md-7" title="Back to the home page">
                <img class="footer__logo__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-wo.svg" role="img" alt="<?php bloginfo( 'name' ); ?>" width="190" height="71">
              </a>

              <?php

              $companyName = get_option('company-name');
              $companyOffice = get_option('company-office');
              $addressOne = get_option('company-address-one');
              $addressTwo = get_option('company-address-two');
              $addressThree = get_option('company-address-three');
              $addressCity = get_option('company-city');
              $addressCounty = get_option('company-county');
              $addressPostcode = get_option('company-postcode');

              if( $companyName || $companyOffice || $addressOne || $addressTwo || $addressThree || $addressCity || $addressCounty || $addressPostcode) { ?>

              <address class="pb-5 pb-md-7">
                <?php if( $companyName): ?><span class="text-alpha"><?php echo $companyName; ?></span><br><?php endif; ?>
                <?php if( $companyOffice): ?><?php echo $companyOffice; ?><br><?php endif; ?>
                <?php if( $addressOne): ?><?php echo $addressOne; ?><br><?php endif; ?>
                <?php if( $addressTwo): ?><?php echo $addressTwo; ?><br><?php endif; ?>
                <?php if( $addressThree): ?><?php echo $addressThree; ?><br><?php endif; ?>
                <?php if( $addressCity): ?><?php echo $addressCity; ?>, <?php endif; ?>
                <?php if( $addressCounty): ?><?php echo $addressCounty; ?><br><?php endif; ?>
                <?php if( $addressPostcode): ?><?php echo $addressPostcode; ?><?php endif; ?>
              </address>

              <?php } 

              $companyPhone = get_option('company-phone');
              $companyEmail = get_option('company-email');

              if( $companyPhone || $companyEmail) { ?>

              <div class="pb-5 pb-md-7 pb-xl-0">

                <ul class="m-0"> 
                  <?php if($companyPhone): ?>
                    <li>
                      <a href="tel:<?php echo $companyPhone; ?>" class="footer__communication__link" title="<?php bloginfo( 'name' ); ?> telephone number: <?php echo $companyPhone; ?>">
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo $companyPhone; ?></span>
                      </a>
                    </li>
                  <?php endif; ?>
                  <?php if($companyEmail): ?>
                    <li>
                      <a href="mailto:<?php echo $companyEmail; ?>" class="footer__communication__link" title="<?php bloginfo( 'name' ); ?> email address: <?php echo $companyEmail; ?>">
                        <i class="fas fa-envelope"></i>
                        <span><?php echo $companyEmail; ?></span>
                      </a>
                    </li>
                  <?php endif; ?>
                </ul>

              </div>

              <?php } ?>

            </div>
    
            <div class="footer__information col-md-6 col-xl-4">
							<div class="row justify-content-center">
								<div class="footer__widget col-sm-6 pb-8 pb-sm-10 pb-lg-0">
									<?php if(is_active_sidebar('footer-top-widget-one')){ dynamic_sidebar('footer-top-widget-one'); } ?>
								</div>
								<div class="footer__widget col-sm-6 pb-8 pb-sm-10 pb-lg-0">
									<?php if(is_active_sidebar('footer-top-widget-two')){ dynamic_sidebar('footer-top-widget-two'); } ?>
								</div>
							</div>
            </div>

            <div class="col-xl-3">
							<div class="row justify-content-center">
								<div class="footer__widget col-sm-6 col-xl-12 pb-8 pb-sm-0 pb-xl-10">
									<?php if(is_active_sidebar('footer-top-widget-three')){ dynamic_sidebar('footer-top-widget-three'); } ?>
								</div>
								<div class="footer__widget col-sm-6 col-xl-12  pb-8 pb-sm-0 pb-xl-10">
                  <?php if(is_active_sidebar('footer-top-widget-four')){ dynamic_sidebar('footer-top-widget-four'); } ?>
                </div>
                
                <?php
                  
                $socialTwitter = get_option('social-twitter');
                $socialFacebook = get_option('social-facebook');
                $socialInstagram = get_option('social-instagram');
                $socialLinkedin = get_option('social-linkedin');
                $socialPinterest = get_option('social-pinterest');
                $socialYoutube = get_option('social-youtube');
                $socialRss = get_option('social-rss');

                if( $socialTwitter || $socialFacebook || $socialInstagram || $socialLinkedin || $socialPinterest || $socialYoutube || $socialRss) { ?>

                <ul class="footer__communication__social col-12 m-0 px-4 pt-sm-8 pt-xl-0">

                  <?php if( $socialTwitter): ?>
                    <li>
                      <a href="<?php echo $socialTwitter; ?>" class="footer__communication__link footer__communication__link--twitter" title="Links to <?php bloginfo( 'name' ); ?> Twitter account: <?php echo $socialTwitter; ?>">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if( $socialFacebook): ?>
                    <li>
                      <a href="<?php echo $socialFacebook; ?>" class="footer__communication__link footer__communication__link--facebook" title="Links to <?php bloginfo( 'name' ); ?> Facebook account: <?php echo $socialFacebook; ?>">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if( $socialInstagram): ?>
                    <li>
                      <a href="<?php echo $socialInstagram; ?>" class="footer__communication__link footer__communication__link--instagram" title="Links to <?php bloginfo( 'name' ); ?> Instagram account: <?php echo $socialInstagram; ?>">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if( $socialLinkedin): ?>
                    <li>
                      <a href="<?php echo $socialLinkedin; ?>" class="footer__communication__link footer__communication__link--linkedin" title="Links to <?php bloginfo( 'name' ); ?> Linkedin account: <?php echo $socialLinkedin; ?>">
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if( $socialPinterest): ?>
                    <li>
                      <a href="<?php echo $socialPinterest; ?>" class="footer__communication__link footer__communication__link--pinterest" title="Links to <?php bloginfo( 'name' ); ?> Pinterest account: <?php echo $socialPinterest; ?>">
                        <i class="fab fa-pinterest-p"></i>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if( $socialYoutube): ?>
                    <li>
                      <a href="<?php echo $socialYoutube; ?>" class="footer__communication__link footer__communication__link--youtube" title="Links to <?php bloginfo( 'name' ); ?> Youtube account: <?php echo $socialYoutube; ?>">
                        <i class="fab fa-youtube"></i>
                      </a>
                    </li>
                  <?php endif; ?>

                  <?php if( $socialRss): ?>
                    <li>
                      <a href="<?php echo $socialRss; ?>" class="footer__communication__link footer__communication__link--rss" title="Links to <?php bloginfo( 'name' ); ?> RSS feed: <?php echo $socialRss; ?>">
                        <i class="fas fa-rss"></i>
                      </a>
                    </li>
                  <?php endif; ?>

                </ul>

                <?php } ?>

							</div>
            </div>
            
          </div>
        </div>
      </div>
      
      <div class="footer__secondary">
        <div class="footer__secondary__container">
          <div class="row">
            <div class="col-12 col-md">
              <?php if(is_active_sidebar('footer-bottom-widget')){ dynamic_sidebar('footer-bottom-widget'); } ?>
            </div>
            <div class="col-12 col-md-4 mt-4 mt-md-0 text-md-right">
              Created by <a href="https://criticalmedia.co.uk">Critical Media</a>
            </div>
          </div>
        </div>
      </div>
          
    </footer>
		
		<?php wp_footer(); ?>

	</body>
</html>
