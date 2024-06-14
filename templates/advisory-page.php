<?php 

/* Template Name: Advisory Page */

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
    </div>
    </div>
  </div>

<div class="main_con_for_image">
  <div class="container">
      <?php //if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?>

      <div class="row">
<div class="col-md-12">
<h2 class="content_title">EOS RISK GROUP ADVISORY</h2>
<p class="content_description"><?php if(get_field('intro_text')) { echo get_field('intro_text'); } ?></p>

</div>
</div>
<div class="row">
<div class="col-md-7">
<p class="main_content"><?php if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?></p>

<a class="base_button button_left" href="/contact/">CONTACT EOS RISK</a>

</div>
<div class="col-md-5"><img class="right_image" src="/wp-content/uploads/2024/03/rightimage-1-1.jpg" alt="" /></div>
</div>
<img class="right_image_new" src="/wp-content/uploads/2024/03/rightimage-1-1.jpg" alt="" />

  </div>
  </div>
</div>

<div class="blue_background blue_sector_page clear">
  <div class="container">
      <div class="row">
      <div class="col-md-12">
      <div class="gray_color_strip"></div>
        <h2 class="services_heading"><?php if(get_field('services_ttle')) { echo get_field('services_ttle'); } ?></h2>
      </div>
      </div>
  </div>
</div>   
<div class="white_advisory_service_stripe"></div>
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

<div class="contact_section_container">
  <div class="container">
    <div class="row">
      <div class="col-md-8 contact_section_left">
        <div class="contact_left_section_content">
          <div class="contact_section_stripe"></div>
          <h3 class="contact_section_left_header"><span>CONTACT</span> EOS RISK GROUP</h3>
          <p class="contact_section_para"><?php if(get_field('contact_eos_risk_group_text', 'option')) { echo (get_field('contact_eos_risk_group_text', 'option')); } ?></p>
        </div>
      </div>
      <div class="col-md-4 contact_section_right">
      <?php echo do_shortcode('[forminator_form id="207"]'); ?>
      </div>
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