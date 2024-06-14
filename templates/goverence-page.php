<?php 

/* Template Name: Goverence Page */

get_header(); ?>


<div class="container-fluid video-container">
  <div class="row">
  <video width="100%" poster="poster.png" playsinline="" autoplay="" loop="" muted="">
        <source src="<?php if(get_field('banner_video_link')) { echo get_field('banner_video_link'); } ?>" type="video/mp4">
    </video>
  </div>
</div>

<div class="container position_relative">
  <div class="hero_video_title">
    <div class="row justify-content-center">
      <div class="col-md-12 title__content">   
        <h1 class="title__header m-0"><?php echo get_the_title(); ?></h1>
      </div>
    </div>
  </div>
</div>
<div class="clear"></div>
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
				</div>
			</div>
</div>
</div>
</div>

<div class="blue_background main_contain_container_sectors_page">

  <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="content_stripe_css"><div class="content_stripe_box"></div></div>
      <div class="pagination">
        <?php the_breadcrumb(); ?>
      </div>

      <!-- <article class="block" id="mainContent">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-11">
            <?php // the_content(); ?>
          </div>
        </div>
      </div>
    </article> -->
    </div>
    </div>
  </div>

  <div class="container">
      <?php // if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title">ENVIRONMENTAL AND SOCIAL GOVERNANCE</h2>
        <p class="content_description"> <?php if(get_field('intro_text')) { echo get_field('intro_text'); } ?> </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
          <p class="main_content"> <?php if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?> </p>
          <h2 class="content_title egs_heading">ESG Principles</h2>
          <img class="content_stripe" src="<?php echo get_template_directory_uri(); ?>/img/blue_line.png" alt="">
      </div>
      <div class="col-md-6">
          <img class="right_image" src="<?php echo get_template_directory_uri(); ?>/img/esg-wheel.png" alt="">
      </div>
    </div>
  </div>

</div>
<div class="empty_background">
<img src="<?php echo get_template_directory_uri(); ?>/img/dotback.png" alt="">
</div>
<div id="governance"></div>
<div class="container our_team accreditations governance">
    <div class="row">
      <div class="col-md-12">
        <div class="redg_color_strip"></div>
          <div class="pagination">
              <ul id="breadcrumbs">
                  <li><a href="<?php echo get_home_url(); ?>">Home</a></li><li class="separator"> / </li><li><span>Governance</span></li><li class="separator"> / </li><li><span>Governance</span></li>
              </ul>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title team_title blue_color">GOVERNANCE</h2>
        <p class="content_description our_team_heading_para governance_heading_para"><?php if(get_field('governance_intro')) { echo get_field('governance_intro'); } ?></p>
      </div>
      <div class="col-md-6 governance_text">
      <?php if(get_field('governance_main_text')) { echo get_field('governance_main_text'); } ?>
      </div>
      <div class="col-md-6">
      <?php
        $governance_section_image_desk = get_field('governance_section_image');
        $governance_section_image_mobile = get_field('governance_section_image_mobile');
      ?>
        <img class="right_g_image only_desktop" src="<?php echo $governance_section_image_desk; ?>" alt="">
        <img class="right_g_image only_mobile" src="<?php echo $governance_section_image_mobile; ?>" alt="">
      </div>
    </div>
</div>

<div id="our-team" class="container our_team download_landing_page">
    <div class="row">
      <div class="col-md-12">
        <div class="gray_color_strip"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title team_title blue_color">Downloads</h2>
        <div class="bottom_stripe"></div>
      </div>
    </div>
    <div class="row">
    <?php
      $doanload_image = get_field('download_icon');
      ?>

      <div class="col-md-4">
      <?php //if(get_field('download_button_links')) { echo get_field('download_button_links'); } ?>
        <a href="/wp-content/uploads/2024/01/Anti-Bribery-Corruption-and-Ethics-Policy_GOV.pdf" class="download_link" target="_blank"><img src="<?php echo $doanload_image; ?>"  alt=""> Anti Bribery, Corruption and Ethics Policy</a>
      </div>
      <div class="col-md-4">
        <a href="/wp-content/uploads/2024/01/Quality-and-Security-Policy_GOV.pdf" class="download_link" target="_blank"><img src="<?php echo $doanload_image; ?>"  alt=""> Quality and Security Policy</a>
      </div>
      <div class="col-md-4">
        <a href="/wp-content/uploads/2024/01/Data-Protection-Policy_GOV.pdf" class="download_link" target="_blank"><img src="<?php echo $doanload_image; ?>"  alt=""> Data Protection Policy</a>
      </div>
    </div>
  </div>
 <div id="environment"></div>
  <div id="compliance" class="hero_image complaience_image governance_cm_image">
    <div class="container">
          <div class="row">
              <div class="col-md-6">

              </div>
              <div class="col-md-6">
                  <div class="hero_right">
                    <img class="content_stripe" src="<?php echo get_template_directory_uri(); ?>/img/cm_stripe.png" alt="">
                    <div class="pagination">
                        <ul id="breadcrumbs" class="breadcrumbs">
                            <li><a href="<?php echo get_home_url(); ?>">Home</a></li><li class="separator"> / </li><li><span>Governance</span></li></li><li class="separator"> / </li><li><span>Environmental</span></li>
                        </ul>
                    </div>
                      <h1 class="hero_header">ENVIRONMENTAL</h1>
                        <div class="hero_text">
                        <?php if(get_field('environmental_text')) { echo get_field('environmental_text'); } ?>
                        </div>
                        <a href="/contact/" class="base_button gb_en_link only_desktop">CONTACT EOS RISK</a>
                  </div>
              </div>
          </div>
    </div>
</div>
<div class="caontainer-fluid">
<div class="row">
            <div class="col-md-12">
                <img class="content_stripe only_mobile mobike_back" src="<?php echo get_template_directory_uri(); ?>/img/mb_back.png" alt="">
            </div>
          </div>
</div>
<div id="social"></div>
<div class="governance_social">
<div class="container our_team accreditations governance">
    <div class="row">
      <div class="col-md-12">
        <div class="redg_color_strip"></div>
          <div class="pagination">
              <ul id="breadcrumbs">
                  <li><a href="<?php echo get_home_url(); ?>">Home</a></li><li class="separator"> / </li><li><span>Governance</span></li><li class="separator"> / </li><li><span>Social</span></li>
              </ul>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title team_title blue_color">SOCIAL</h2>
        <p class="content_description our_team_heading_para governance_heading_para"><?php if(get_field('social_intro')) { echo get_field('social_intro'); } ?></p>
      </div>
      <div class="col-md-7 governance_text social_para">
        <?php if(get_field('social_main_text')) { echo get_field('social_main_text'); } ?>
      </div>
      <div class="col-md-5">
      <?php
        //$social_logos_desktop = get_field('social_section_logos_desktop');
        //$social_logos_mobile = get_field('social_section_logos_mobile');
      ?>
<!-- <div class="right_g_image_social only_desktop"></div> -->
          <div class="right_g_image_social">

          <?php
            // Check if the repeater field has rows of data
            if( have_rows('social_logos_desktop') ):

                // Loop through the rows of data
                while ( have_rows('social_logos_desktop') ) : the_row(); 

                    // Display sub_field_1 value
                    $social_section_logo_desktop = get_sub_field('social_section_logo_desktop');
                    $social_section_logo_desktop_link = get_sub_field('social_section_logo_desktop_link');

                    ?>
                    <a href="<?php echo $social_section_logo_desktop_link; ?>" target="_blank"><img src="<?php echo $social_section_logo_desktop; ?>" alt=""></a>

                    <?php 
                endwhile;
            endif;
            ?>
          </div>

        <!-- <img class="right_g_image_social only_mobile" src="<?php //echo $social_logos_mobile; ?>" alt=""> -->
      </div>
    </div>
</div>
</div>
<div id="our-team" class="container our_team download_landing_page">
    <div class="row">
      <div class="col-md-12">
        <div class="gray_color_strip"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title team_title blue_color">Downloads</h2>
        <div class="bottom_stripe"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
      <?php //if(get_field('download_button_links')) { echo get_field('download_button_links'); } ?>
        <a href="/wp-content/uploads/2024/01/Equal-Opportunities-Policy_SOCIAL.pdf" class="download_link" target="_blank"><img src="<?php echo $doanload_image; ?>" alt=""> Equal Opportunities Policy</a>
      </div>
      <div class="col-md-4">
        <a href="/wp-content/uploads/2024/01/Human-Rights-Policy_SOCIAL.pdf" class="download_link" target="_blank"><img src="<?php echo $doanload_image; ?>"  alt=""> Human Rights Policy</a>
      </div>
      <div class="col-md-4">
        <a href="/wp-content/uploads/2024/01/Occupational-Health-and-Safety-Policy_SOCIAL.pdf" class="download_link" target="_blank"><img src="<?php echo $doanload_image; ?>" alt=""> Occupational Health and Safety Policy</a>
      </div>
    </div>
  </div>
  <div id="come_and_join" class="hero_image complaience_image come_and_join work_with_us come_desk">
    <div class="container">
          <div class="row">
              <div class="col-md-6">
          </div>
                  <div class="col-md-6">
                    <div class="hero_right">
                      <img class="content_stripe" src="<?php echo get_template_directory_uri(); ?>/img/complience_strip.jpg" alt="">
                    <div class="pagination">
                        <ul id="breadcrumbs" class="breadcrumbs">
                            <li></li>
                        </ul>
                    </div>
                      <h1 class="hero_header">WORK WITH<span> EOS RISK</span></h1>
                        <div class="hero_text">
                          <p><?php if(get_field('work_with_eos_risk_text', 'option')) { echo (get_field('work_with_eos_risk_text', 'option')); } ?></p>
                        </div>
                        <div class="gray_color_strip"></div>
                        <div class="clear"></div>
                        <?php echo do_shortcode('[forminator_form id="797"]'); ?>
                        <div class="clear"></div>
                        
                  </div>
              </div>     
          </div>
    </div>
</div>

<div id="come_and_join" class="hero_image complaience_image come_and_join work_with_us come_mobile">
    <div class="container">
          <div class="row">
              <div class="col-md-6">
              <img class="come_and_join_mobile" src="<?php echo get_template_directory_uri(); ?>/img/come-join-the-eos-risk-team-mobile.jpg" alt="">
          </div>
                  <div class="col-md-6">
                    <div class="hero_right">
                      <img class="content_stripe" src="<?php echo get_template_directory_uri(); ?>/img/complience_strip.jpg" alt="">
                    <div class="pagination">
                        <ul id="breadcrumbs" class="breadcrumbs">
                            <li></li>
                        </ul>
                    </div>
                    <h1 class="hero_header">WORK WITH<span> EOS RISK</span></h1>
                        <div class="hero_text">
                          <p><?php if(get_field('work_with_eos_risk_text', 'option')) { echo (get_field('work_with_eos_risk_text', 'option')); } ?></p>
                        </div>
                        <div class="clear"></div>
                        <?php echo do_shortcode('[forminator_form id="797"]'); ?>
                        <div class="clear"></div>
                  </div>
              </div>     
          </div>
    </div>
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