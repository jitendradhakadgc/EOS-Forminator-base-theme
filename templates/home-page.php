<?php 



/* Template Name: Home Page */



get_header(); ?>



<div class="container-fluid video-container">

  <div class="row">

  <video width="100%" poster="poster.png" playsinline="" autoplay="" loop="" muted="">

        <source src="<?php if(get_field('banner_video_link')) { echo get_field('banner_video_link'); } ?>" type="video/mp4">

    </video>

  </div>

</div>

<?php echo do_shortcode('[custom-twitter-feeds feed=1]'); ?>

  <div class="container-fluid">

    <div class="row news_ticker">

      <div class="content_news">

        <div class="simple-marquee-container">

          <div class="marquee-sibling">

            LATEST

          </div>

          <div class="marquee">
          <div id="tweets_feed" class="marquee-content-items"></div>

            <!-- <ul class="marquee-content-items"> -->

            <?php

              //if ( is_active_sidebar( 'news-scroll-widget' ) ) : ?>

                  <?php //dynamic_sidebar( 'news-scroll-widget' ); ?>

              <?php //endif; ?>

              <!-- <li> @EosRisk – <span>#Maritime</span> incident Alert <span>#Armed</span> Robbery in Bay of Campeche, <span>#Mexico.</span></li>

              <li> @EosRisk – <span>#Maritime</span> incident Alert <span>#Armed</span> Robbery in Bay of Campeche, <span>#Mexico</span></li>

              <li> @EosRisk – <span>#Maritime</span> incident Alert <span>#Armed</span> Robbery in Bay of Campeche, <span>#Mexico.</span></li>

              <li> @EosRisk – <span>#Maritime</span> incident Alert <span>#Armed</span> Robbery in Bay of Campeche, <span>#Mexico</span></li> -->

            <!-- </ul> -->

          </div>

        </div>

    </div>

  </div>





</div>

<div class="hero_image">

    <div class="container">

          <div class="row">

              <div class="col-md-6">



              </div>

              <div class="col-md-6">

                  <div class="hero_right">

                      <h1 class="hero_header"><?php // if(get_field('titlefirsthero')) { echo get_field('titlefirsthero'); } ?> EOS RISK GROUP</h1>

                        <div class="hero_text">

                          <p><?php if(get_field('textfirsthero')) { echo get_field('textfirsthero'); } ?></p>

                        </div>

                        <?php if(get_field('buttonfirsthero')) { echo get_field('buttonfirsthero'); } ?>

                        <!-- <a href="#" class="base_button">ABOUT EOS RISK</a> -->

                  </div>

                </div>

                  

          </div>

    </div>

</div>

<img src="<?php echo get_template_directory_uri(); ?>/img/home_img_mobile.jpg" alt="" class="only_mobile" style="width:100%;">

<div class="second_hero_image">

    <div class="container">

          <div class="row">

              <div class="col-md-6">

                <div class="hero_left">

                        <h1 class="hero_header"><?php // if(get_field('titlesecondhero')) { echo get_field('titlesecondhero'); } ?> EOS RISK SERVICES</h1>

                          <div class="hero_text">

                            <p><?php if(get_field('textsecondhero')) { echo get_field('textsecondhero'); } ?></p>

                          </div>   

                </div>

              </div>

              <div class="col-md-6"><?php if(get_field('linksecondhero')) { echo get_field('linksecondhero'); } ?></div>

                  

          </div>

    </div>

</div>

<div class="home_services_para">

  <div class="container">

        <div class="row">

            <div class="col-md-6"></div>

            <div class="col-md-6 home_services_link_con">

              <a href="/advisory/" class="home_services_button">ADVISORY</a>

            </div>

                

        </div>

  </div>

  <a href="/advisory/" class="image-caption">

            <div class="container">

              <div class="row">

                  <div class="col-md-5 image-caption-para">

                    <p><?php if(get_field('advisory_banner_text', 'option')) { echo (get_field('advisory_banner_text', 'option')); } ?></p>

                  </div>

              </div>

            </div>

      </a>

</div>

<div class="home_services_para2">

  <div class="container">

        <div class="row">

            <div class="col-md-6"></div>

            <div class="col-md-6 home_services_link_con">

              <a href="/marine/" class="home_services_button">MARINE</a>

            </div>

                

        </div>

  </div>



      <a href="/marine/" class="image-caption">

            <div class="container">

              <div class="row">

                  <div class="col-md-5 image-caption-para">

                    <p><?php if(get_field('marine_banner_text', 'option')) { echo (get_field('marine_banner_text', 'option')); } ?></p>

                  </div>

              </div>

            </div>

      </a>



</div>

<div class="home_services_para3">

  <div  class="container">

        <div class="row">

            <div class="col-md-6"></div>

            <div class="col-md-6 home_services_link_con">

              <a href="/risk-consultancy/" class="home_services_button">RISK CONSULTANCY</a>

            </div>

        </div>

  </div>

  <a href="/risk-consultancy/" class="image-caption">

            <div class="container">

              <div class="row">

                  <div class="col-md-5 image-caption-para">

                    <p><?php if(get_field('risk_consultancy_banner_text', 'option')) { echo (get_field('risk_consultancy_banner_text', 'option')); } ?></p>

                  </div>

              </div>

            </div>

      </a>

</div>

<div id="counter" class="home_get_in_touch">

      <div class="container">

        <div class="row">

            <div class="col-md-12">

                <a href="/contact/" class="home_get_in_touch_btn">GET IN TOUCH…</a>

            </div>

        </div>            

      </div>

</div>

<div class="counter">
      <div  class="container section4">
        <h2 class="counter_section_heading">EOS RISK IN NUMBERS</h2>
        <div class="row">
            <div class="col-md-3 devide_half_mobile">
              <div class="counter-section">
                <img src="<?php echo get_template_directory_uri(); ?>/img/year-founded.svg" class="counter_img" />
                  <p class="counter_title">Year<br>Founded</p>
                <span class="c-section4 c-section-new-4-counter2"><?php if(get_field('operating_countries', 'option')) { echo (get_field('operating_countries', 'option')); } ?></span>
              </div>

            </div>
            <div class="col-md-3 devide_half_mobile">
            <div class="counter-section">
              <img src="<?php echo get_template_directory_uri(); ?>/img/asset-value-risk-managed.svg" class="counter_img" />
                  <p class="counter_title">Managed<br>Asset Value </p>
                <span class="c-section4 c-section-new-4"><?php if(get_field('tasks_completed', 'option')) { echo (get_field('tasks_completed', 'option')); } ?></span><span class="s_m">bn<span>
              </div>

            </div>
            <div class="col-md-3 devide_half_mobile">
            <div class="counter-section">
            <img src="<?php echo get_template_directory_uri(); ?>/img/global-operations-coverag.svg" class="counter_img" />
                  <p class="counter_title">Operational<br>Coverage</p>
                <span class="c-section4 c-section-new-4"><?php if(get_field('years_of_experience', 'option')) { echo (get_field('years_of_experience', 'option')); } ?></span><span class="s_m">/7<span>
              </div>

            </div>
            <div class="col-md-3 devide_half_mobile">
            <div class="counter-section">
            <img src="<?php echo get_template_directory_uri(); ?>/img/advisory-data-points.svg" class="counter_img" />
                  <p class="counter_title">Advisory Data<br>Points</p>
                <span class="c-section4 c-section-new-4-counter3"><?php if(get_field('data_points', 'option')) { echo (get_field('data_points', 'option')); } ?></span><span class="s_m">m<span>
              </div>

            </div>
        </div>            
      </div>
</div>





<?php get_footer(); ?>

