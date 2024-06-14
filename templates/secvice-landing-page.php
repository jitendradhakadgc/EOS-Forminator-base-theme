<?php 

/* Template Name: Service Landing Page */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/component/component', 'titlesubsector' ); ?>

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

<div class="blue_background main_contain_container_sectors_page service_landing_page_content">
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

  <div class="container">
      <?php if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?>
  </div>
</div>

<div id="our-team" class="container our_team service_landing_page">
    <div class="row">
      <div class="col-md-12">
        <div class="gray_color_strip"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title team_title blue_color"><?php echo strtoupper(get_the_title()); ?> <span>SERVICES</span></h2>
        <div class="bottom_stripe"></div>
      </div>
    </div>
    <div class="row">
      
    </div>
</div>

<!-- <div class="toggle_container">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 toggle_image_con">
        <img class="toggle_image" src="<?php echo get_template_directory_uri(); ?>/img/toggle1.jpg" alt="">
    </div>
    <div class="col-md-6 toggle_image_con">
        <img class="toggle_image" src="<?php echo get_template_directory_uri(); ?>/img/toggle2.jpg" alt="">
    </div>
  </div>  
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <a class="image_link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">SHIP SECURITY ALERT SYSTEM MANAGEMENT</a>
      <a href="#multiCollapseExample1" class="home_get_in_touch_btn more_information_position information_toggle_image" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">INFORMATION</a>
        <div class="collapse toggle_content" id="multiCollapseExample1">
            <p>With experience successfully protecting some of the world’s leading figures including A-list celebrities, Sheiks and their family members, our teams bring their hostile environment British military and Private Security experience to executive protection roles. Our professionals have experience working with both Owners and guests with intimate understanding of the client’s requirement and are supported by EOS’ Security Operation Centre (SOC) and Intelligence team. EOS also provide specialist and local guards for parties and events.</p>
            <a class="base_button button_left toggle_image_contact" href="/about/">CONTACT EOS RISK</a>
        </div>
    </div>
    <div class="col-md-6">
    <a class="image_link" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">SHIP SECURITY ALERT SYSTEM MANAGEMENT</a>
    <a href="#multiCollapseExample2" class="home_get_in_touch_btn more_information_position information_toggle_image" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">INFORMATION</a>
        <div class="collapse toggle_content" id="multiCollapseExample2">
            <p>With experience successfully protecting some of the world’s leading figures including A-list celebrities, Sheiks and their family members, our teams bring their hostile environment British military and Private Security experience to executive protection roles. Our professionals have experience working with both Owners and guests with intimate understanding of the client’s requirement and are supported by EOS’ Security Operation Centre (SOC) and Intelligence team. EOS also provide specialist and local guards for parties and events.</p>
            <a class="base_button button_left toggle_image_contact" href="/about/">CONTACT EOS RISK</a>
        </div>
    </div>
  </div>
</div>
</div> -->

<!-- <div class="toggle_container">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 toggle_image_con">
        <img class="toggle_image" src="<?php echo get_template_directory_uri(); ?>/img/toggle1.jpg" alt="">
    </div>
    <div class="col-md-6 toggle_image_con">
        <img class="toggle_image" src="<?php echo get_template_directory_uri(); ?>/img/toggle2.jpg" alt="">
    </div>
  </div>  
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <a class="image_link" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">SHIP SECURITY ALERT SYSTEM MANAGEMENT</a>
      <a href="#multiCollapseExample1" class="home_get_in_touch_btn more_information_position information_toggle_image" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">INFORMATION</a>
        <div class="collapse toggle_content" id="multiCollapseExample1">
            <p>With experience successfully protecting some of the world’s leading figures including A-list celebrities, Sheiks and their family members, our teams bring their hostile environment British military and Private Security experience to executive protection roles. Our professionals have experience working with both Owners and guests with intimate understanding of the client’s requirement and are supported by EOS’ Security Operation Centre (SOC) and Intelligence team. EOS also provide specialist and local guards for parties and events.</p>
            <a class="base_button button_left toggle_image_contact" href="/about/">CONTACT EOS RISK</a>
        </div>
    </div>
    <div class="col-md-6">
    <a class="image_link" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">SHIP SECURITY ALERT SYSTEM MANAGEMENT</a>
    <a href="#multiCollapseExample2" class="home_get_in_touch_btn more_information_position information_toggle_image" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">INFORMATION</a>
        <div class="collapse toggle_content" id="multiCollapseExample2">
            <p>With experience successfully protecting some of the world’s leading figures including A-list celebrities, Sheiks and their family members, our teams bring their hostile environment British military and Private Security experience to executive protection roles. Our professionals have experience working with both Owners and guests with intimate understanding of the client’s requirement and are supported by EOS’ Security Operation Centre (SOC) and Intelligence team. EOS also provide specialist and local guards for parties and events.</p>
            <a class="base_button button_left toggle_image_contact" href="/about/">CONTACT EOS RISK</a>
        </div>
    </div>
  </div>
</div>
</div> -->

<div class="toggle_container">
    <!-- loop all blog posts with "Yachts & Leisure" category -->
    <?php
    global $post_id;
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'category_name' => get_the_title(),
							'posts_per_page' => -1,
              'order' => 'ASC',
						);
						$arr_posts = new WP_Query( $args );
						
						if ( $arr_posts->have_posts() ) :
						
							while ( $arr_posts->have_posts() ) :
								$arr_posts->the_post();
								$cats = array();
								foreach (get_the_category($post_id) as $c) {
									$cat = get_category($c);
									if ($cat->name !== get_the_title()) {
										array_push($cats, $cat->name);
									}
								}
								
							if (sizeOf($cats) > 0) {
								$post_categories = implode(', ', $cats);
							} else {
								$post_categories = 'Not Assigned';
							}

					?>
  <div class="side_by_side">
  <img class="toggle_image" src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(620, 238), false, ''); echo $src[0]; ?>" alt="">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="toggle_image_con">
        <a class="image_link" data-toggle="collapse" href="#multiCollapseExample-<?php echo $post->ID; ?>" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><?php the_title();?></a>
      </div>
      <div class="clear"></div>
      <div class="toggle_text_content">
        <a href="#multiCollapseExample-<?php echo $post->ID; ?>" class="home_get_in_touch_btn more_information_position information_toggle_image" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">INFORMATION</a>
        <div class="collapse toggle_content" id="multiCollapseExample-<?php echo $post->ID; ?>">
            <p><?php the_content(); ?></p>
            <a class="base_button button_left toggle_image_contact" href="/contact/">CONTACT EOS RISK</a>
        </div>
      </div>
    </div>
    </div>  
</div>
</div>

    <?php
				endwhile;
			endif;
				?>
</div>
<div class="clear"></div>

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
<?php endwhile; ?>
<?php get_footer(); ?>
