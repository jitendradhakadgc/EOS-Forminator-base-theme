<?php 

/* Template Name: Career Page */

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

<div class="blue_background main_contain_container_sectors_page career_content">

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
      
      <div class="row">
        <div class="col-md-12">
        <h2 class="content_title">EOS RISK GROUP CAREERS</h2>
        <p class="content_description"><?php if(get_field('intro_text')) { echo get_field('intro_text'); } ?></p>


        </div>
        </div>
        <div class="row">
        <div class="col-md-7">
        <p class="main_content"><?php if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?>

</div>
<div class="col-md-5"><img class="right_image" src="/wp-content/uploads/2024/03/career_img_new-2.jpg" alt="" /></div>
</div>
<img class="right_image_new" src="/wp-content/uploads/2024/03/career_img_new-2.jpg" alt="" />
  </div>
    </div>
</div>

<div id="our-team" class="container our_team">
    <div class="row">
      <div class="col-md-12">
        <div class="gray_color_strip"></div>
          <div class="pagination">
              <ul id="breadcrumbs">
              </ul>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2 class="content_title team_title blue_color">POSITIONS</h2>
        <div class="bottom_stripe"></div>
      </div>
    </div>
    <div class="row">

    <?php
// Get published jobs posts
$args = array(
    'post_type'      => 'jobs',
    'post_status'    => 'publish',
    'orderby'        => 'title',
    'order'          => 'ASC',
    'posts_per_page' => -1 // Retrieve all published posts
);
$jobs_posts = get_posts($args);

// Output job information using a foreach loop
foreach ($jobs_posts as $job_post) {
    $job_title = $job_post->post_title;
    $deadline = get_field('deadline', $job_post->ID); // Replace 'deadline' with the actual field name
    $salary = get_field('salary', $job_post->ID); // Replace 'salary' with the actual field name
    $location = get_field('location', $job_post->ID); // Replace 'location' with the actual field name
    $permalink = get_permalink($job_post->ID);
    ?>

    <div class="col-md-6">
        <div class="position_details">
            <a class="position_title" href="<?php echo $permalink; ?>"><?php echo $job_title; ?></a>
            <p><span>Deadline:</span> <?php echo $deadline; ?></p>
            <p><span>Salary:</span> <?php echo $salary; ?></p>
            <p><span>Location:</span> <?php echo $location; ?></p>
            <a href="<?php echo $permalink; ?>" class="home_get_in_touch_btn more_information_position">MORE INFORMATION</a>
        </div>
    </div>

<?php
}
?>


      
      <!-- <div class="col-md-6">
        <div class="position_details">
          <a class="position_title" href="/carrers/junior-intelligence-analyst-kickstart-scheme/">Junior Intelligence Analyst - Kickstart Scheme</a>
          <p><span>Deadline:</span> 01/05/2022</p>
          <p><span>Salary:</span> As per Kickstart scheme</p>
          <p><span>Location:</span> Staffordshire</p>
          <a href="/carrers/junior-intelligence-analyst-kickstart-scheme/" class="home_get_in_touch_btn more_information_position">MORE INFORMATION</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="position_details">
          <a class="position_title" href="/carrers/junior-intelligence-analyst-kickstart-scheme/">Junior Intelligence Analyst - Kickstart Scheme</a>
          <p><span>Deadline:</span> 01/05/2022</p>
          <p><span>Salary:</span> As per Kickstart scheme</p>
          <p><span>Location:</span> Staffordshire</p>
          <a href="/carrers/junior-intelligence-analyst-kickstart-scheme/" class="home_get_in_touch_btn more_information_position">MORE INFORMATION</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="position_details">
          <a class="position_title" href="/carrers/junior-intelligence-analyst-kickstart-scheme/">Junior Intelligence Analyst - Kickstart Scheme</a>
          <p><span>Deadline:</span> 01/05/2022</p>
          <p><span>Salary:</span> As per Kickstart scheme</p>
          <p><span>Location:</span> Staffordshire</p>
          <a href="/carrers/junior-intelligence-analyst-kickstart-scheme/" class="home_get_in_touch_btn more_information_position">MORE INFORMATION</a>
        </div>
      </div> -->
    </div>
    
   
    


</div>
<div class="container"><div class="gray_color_strip"></div></div>

<div id="come_and_join" class="hero_image complaience_image come_and_join come_desk">
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
                      <h1 class="hero_header">COME AND JOIN THE <span>EOS RISK TEAM</span></h1>
                        <div class="hero_text">
                          <p>We offer diverse career opportunities from operational, management and support roles, to working on projects globally. Our aim is to provide the best possible service for our customers while enabling our people to build successful careers.</p>
                        </div>
                        <a href="/application/" class="base_button start_application">START APPLICATION</a>
                  </div>
              </div>     
          </div>
    </div>
</div>
<div id="come_and_join" class="hero_image complaience_image come_and_join come_mobile">
    <div class="container">
          <div class="row">
              <div class="col-md-6">
              <img class="come_and_join_mobile" src="<?php echo get_template_directory_uri(); ?>/img/come_and_join_mibile.jpg" alt="">
          </div>
                  <div class="col-md-6">
                    <div class="hero_right">
                      <img class="content_stripe" src="<?php echo get_template_directory_uri(); ?>/img/complience_strip.jpg" alt="">
                    <div class="pagination">
                        <ul id="breadcrumbs" class="breadcrumbs">
                            <li></li>
                        </ul>
                    </div>
                      <h1 class="hero_header">COME AND JOIN THE <span>EOS RISK TEAM</span></h1>
                        <div class="hero_text">
                          <p>We offer diverse career opportunities from operational, management and support roles, to working on projects globally. Our aim is to provide the best possible service for our customers while enabling our people to build successful careers.</p>
                        </div>
                        <a href="/application/" class="base_button start_application">START APPLICATION</a>
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
<?php endwhile; ?>
<?php get_footer(); ?>
