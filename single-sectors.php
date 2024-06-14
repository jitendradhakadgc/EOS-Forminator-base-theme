<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/component/component', 'title' ); ?>

<?php if ( !empty( get_the_content() ) ) { ?>
<div class="block" id="mainContent">
  <div class="container">
    <div class="row justify-content-center">
      <article class="col-xxl-11">
        <?php the_content(); ?>
      </article>
    </div>
  </div>
</div>
<?php } ?>

<div class="services block gradient-grey">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-11 pb-3 pb-sm-5 pd-lg-10 text-gamma">
        <div class="row align-items-center">
          <div class="col-md">
            <h3 class="display-4 text-gamma mb-2">Related <?php the_title(); ?> Services</h3>
          </div>
          <div class="col-md-auto d-none d-md-inline-block">
            <a href="<?php echo get_site_url(); ?>/services" class="btn btn-alpha">View all services</a>
          </div>
        </div>
      </div>
      <div class="col-xxl-11">
        <div class="row row-sm">

          <?php

          $cat = get_the_title();

          $loop = new WP_Query( array(
            'post_type' => 'services',
            'posts_per_page' => '6',
            'order'  => 'ASC',
            'orderby' => 'menu_order',
            'tax_query' => array(
              array(
              'taxonomy' => 'service_categories',
              'field' => "name",
              'terms' => "{$cat}"
              )
            )
          ) );

          while ( $loop->have_posts() ) : $loop->the_post();

           get_template_part( 'template-parts/component/component', 'service' );

          endwhile; 
          
          ?>

        </div>
      </div>
      <div class="col-12 d-block d-md-none pt-4">
        <a href="<?php echo get_site_url(); ?>/services" class="btn btn-alpha btn-block text-center">View all services</a>
      </div>
    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>
