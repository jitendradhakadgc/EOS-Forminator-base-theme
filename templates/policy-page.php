<?php 

/* Template Name: Policy Page */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/component/component', 'title' ); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-11">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<div class="clear"></div>

<div class="container-fluid">
  <div class="row news_ticker">
    <div class="content_news">
			<div class="simple-marquee-container">
				<div class="marquee-sibling">
					LATEST
				</div>
				<div class="marquee">
					<ul class="marquee-content-items">
          <?php
            if ( is_active_sidebar( 'news-scroll-widget' ) ) : ?>
                <?php dynamic_sidebar( 'news-scroll-widget' ); ?>
            <?php endif; ?>
					</ul>
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
      <?php if(get_field('main_content_sector_page')) { echo get_field('main_content_sector_page'); } ?>
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