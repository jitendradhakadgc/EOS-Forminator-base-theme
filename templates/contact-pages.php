<?php 

/* Template Name: Contact Page */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/component/component', 'title' ); ?>

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

<div class="blue_background main_contain_container_sectors_page career_content contact_content_container">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <img class="content_stripe" src="<?php echo get_template_directory_uri(); ?>/img/content-stripe.png" alt="">
          <div class="pagination">
            <?php the_breadcrumb(); ?>
          </div>
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

  <div class="container">
      <?php if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?>
      
      <!-- <div class="content_map"><?php //echo do_shortcode('[wpgmza id="1"]'); ?></div> -->
  </div>
  <div class="map_container">
    <img class="content_map_new" src="<?php echo get_template_directory_uri(); ?>/img/map.svg" alt="map">
    <img class="main_location" src="<?php echo get_template_directory_uri(); ?>/img/main_location.svg" alt="main-location">
    <img class="main_circle" src="<?php echo get_template_directory_uri(); ?>/img/location_circle.svg" alt="main-circle">
    <div class="tooltip_main_location">
      <p class="map_office_title">MAIN OFFICE</p>
      <p class="map_office_location">Staffordshire, UK</p>
    </div>
    <img class="international_location" src="<?php echo get_template_directory_uri(); ?>/img/international_location.svg" alt="international-location">
    <img class="main_circle2" src="<?php echo get_template_directory_uri(); ?>/img/location_circle-2.svg" alt="circle">
    <div class="tooltip_international_location1">
      <p class="map_office_title">INTERNATIONAL OFFICE</p>
      <p class="map_office_location">Nice, France</p>
    </div>
    <img class="international_location2" src="<?php echo get_template_directory_uri(); ?>/img/international_location2.svg" alt="international-location">
    <img class="main_circle3" src="<?php echo get_template_directory_uri(); ?>/img/location_circle-3.svg" alt="circle">
    <div class="tooltip_international_location2">
      <p class="map_office_title">INTERNATIONAL OFFICE</p>
      <p class="map_office_location">Dubai, UAE</p>
    </div>
    <img class="international_location3" src="<?php echo get_template_directory_uri(); ?>/img/international_location3.svg" alt="international-location">
    <img class="main_circle4" src="<?php echo get_template_directory_uri(); ?>/img/location_circle-4.svg" alt="circle">
    <div class="tooltip_international_location3">
      <p class="map_office_title">INTERNATIONAL OFFICE</p>
      <p class="map_office_location">Perth, Australia</p>
    </div>
  </div>
  <!-- <div class="container">
    <div class="row">
      <div class="col-md-12 no_padding">
        <h2 class="content_title">EOS RISK GROUP <span>ADVISORY</span></h2>
        <p class="content_description">EOS intelligence and advisory services help you to understand and monitor the risks to your people, assets, and information so that proportionate and effective mitigation can then be put in place.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7 no_padding">
          <p class="main_content">EOS Risk intelligence and advisory services enable effective decision-making and the management of security risks for your enterprise, delivered by dedicated analysts with experience in the military and commercial sectors. Intelligence is obtained from both open and closed sources, including deployed personnel as well as other proprietary and privileged networks.</p>
          <p>Intelligence is analyzed and recommendations for mitigation strategies are applied by our operational specialists. Timely and informative bulletins and reports are delivered when required, in order to further advise and mitigate risk.</p>
          <a href="/about/" class="base_button button_left">CONTACT EOS RISK</a>
      </div>
      <div class="col-md-5 no_padding_right">
          <img class="right_image" src="<?php // echo get_template_directory_uri(); ?>/img/rightimage.jpg" alt="">
      </div>
    </div>
  </div> -->

</div>

<div class="contact_section_container conpact_page_contact_section_container">
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

<?php endwhile; ?>
<?php get_footer(); ?>
