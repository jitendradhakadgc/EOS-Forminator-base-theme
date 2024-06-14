<?php 

/* Template Name: About Page */

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

<div class="blue_background main_contain_container_sectors_page">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <div class="content_stripe_css"><div class="content_stripe_box"></div></div>
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
<div class="main_con_for_image">
  <div class="container">

      <?php //if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?>
      <div class="row">
      <div class="col-md-12">
      <h2 class="content_title">RISK MANAGEMENT &amp; SECURITY CONSULTING</h2>
      <p class="content_description"><?php if(get_field('intro_text')) { echo get_field('intro_text'); } ?></p>

      </div>
      </div>
      <div class="row">
      <div class="col-md-7">
      <p class="main_content"><?php if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?></p>
      <a class="base_button button_left" href="/contact/">CONTACT EOS RISK</a>

      </div>
      <?php
        $intro_image_desktop = get_field('intro_image_desktop');
        $intro_image_responsive = get_field('intro_image_responsive');
      ?>
      <div class="col-md-5"><img class="right_image" src="<?php echo $intro_image_desktop; ?>" alt="" /></div>
      </div>
      <img class="right_image_new" src="<?php echo $intro_image_responsive; ?>" alt="" />

  </div>
</div>
</div>
<div id="our-team" class="container our_team">
    <div class="row">
      <div class="col-md-12">
        <div class="gray_color_strip"></div>
          <div class="pagination">
              <ul id="breadcrumbs">
                  <li><a href="<?php echo get_home_url(); ?>">Home</a></li><li class="separator"> / </li><li><span>Our People</span></li>
              </ul>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title team_title blue_color">Our People</h2>
        <div class="our_people_para"><div class="content_description our_team_heading_para">
          
          <div class="row">
          <div class="col-md-12">
          <p class="content_description"><?php if(get_field('our_people_intro')) { echo get_field('our_people_intro'); } ?></p>
          <p class="main_content"><?php if(get_field('team_description')) { echo get_field('team_description'); } ?></p>

          </div>
          </div>
        </div></div>
      </div>
    </div>
    <?php
      /**
       * Field Structure:
       *
       * - parent_repeater (Repeater)
       *   - parent_title (Text)
       *   - child_repeater (Repeater)
       *     - child_title (Text)
       */
     // if( have_rows('team_people_row') ):
         // while( have_rows('team_people_row') ) : the_row();
?> 

              <!-- <div class="row team_image_row"> -->
              <?php
              // Loop over sub repeater rows.
              //if( have_rows('team_people') ):
                  //while( have_rows('team_people') ) : the_row();

                      // Get sub value.
                      // $people_image = get_sub_field('people_image');
                      // $people_name = get_sub_field('people_name');
                      // $people_position = get_sub_field('people_position');
                      // $advisory_service = get_sub_field('advisory_service');
                      // $people_linkedin = get_sub_field('people_linkedin');
                      // $people_email = get_sub_field('people_email');
                      
                      ?>

                      <!-- <div class="col-md-4 team_image_col">
                        <div class="team_image_container">
                          <div class="on_hover_caption">
                            <div class="hover_sociallink">
                              <a href="<?php //if($people_linkedin) { echo $people_linkedin; } ?>"><img class="team_link" src="<?php //echo get_template_directory_uri(); ?>/img/linkedIn.svg" alt="linkedIn"></a>
                              <a href="mailto:<?php //if($people_email) { echo $people_email; } ?>"><img class="team_link" src="<?php //echo get_template_directory_uri(); ?>/img/email.svg" alt="email"></a>
                            </div>
                          </div>
                            <img class="team_img" src="<?php //if($people_image) { echo $people_image; } ?>" alt="team-member">
                          <div class="clear"></div>
                          <h4 class="team_member_name"><?php //if($people_name) { echo $people_name; } ?></h4>
                          <h5 class="team_member_position"><?php //if($people_position) { echo $people_position; } ?></h5>
                          <h6 class="team_member_organisation"><?php //if($advisory_service) { echo $advisory_service; } ?></h6>
                        </div>
                    </div> -->

                <?php  //endwhile;
              //endif; ?>

              <!-- </div> -->
        <?php // endwhile;
      //endif;
      ?>

</div>

<div id="compliance" class="hero_image complaience_image">
    <div class="container">
          <div class="row">
              <div class="col-md-6">

              </div>
              <div class="col-md-6">
                  <div class="hero_right">
                    <img class="content_stripe" src="http://eosrisk.critical.media/wp-content/themes/base/img/complience_strip.jpg" alt="">
                    <div class="pagination">
                        <ul id="breadcrumbs" class="breadcrumbs">
                            <li><a href="http://eosrisk.critical.media">Home</a></li><li class="separator"> / </li><li><span>Compliance</span></li>
                        </ul>
                    </div>
                      <h1 class="hero_header">COMPLIANCE</h1>
                        <div class="hero_text">
                         <p><strong><?php if(get_field('about_page_compliance_intro')) { echo get_field('about_page_compliance_intro'); } ?></strong><br><?php if(get_field('compliance_text_about')) { echo get_field('compliance_text_about'); } ?></p>
                        </div>
                        <a href="/contact/" class="base_button">CONTACT EOS RISK</a>
                  </div>
              </div>
                  
          </div>
    </div>
</div>
<div id="accreditations" class="container our_team accreditations">
    <div class="row">
      <div class="col-md-12">
        <div class="gray_color_strip"></div>
          <div class="pagination">
              <ul id="breadcrumbs">
                  <li><a href="<?php echo get_home_url(); ?>">Home</a></li><li class="separator"> / </li><li><span>Accreditations</span></li>
              </ul>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title team_title blue_color">ACCREDITATIONS</h2>
        <p class="content_description our_team_heading_para"><?php if(get_field('accreditations_text')) { echo get_field('accreditations_text'); } ?></p>
        <img class="content_stripe desktop_logos" src="/wp-content/uploads/2024/02/Accreditations_desktop_new.jpg" alt="company-logos">
<img class="content_stripe mobile_logos" src="/wp-content/uploads/2024/02/Accreditations_mobile_new-scaled.jpg" alt="company-logos">
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

<?php endwhile; ?>
<?php get_footer(); ?>
