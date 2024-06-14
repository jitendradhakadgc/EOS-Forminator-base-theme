<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/component/component', 'title' ); ?>

<?php if ( !empty( get_the_content() ) ) {  
  
$imgGallery = get_field('image_gallery');
$extraContent = get_field('extra_content');

if ( !empty($imgGallery) || !empty($extraContent) ) { ?>
  <div class="block pb-0" id="mainContent">
<?php } else { ?>
  <div class="block" id="mainContent">
<?php } ?>
  
  <div class="container">
    <div class="row justify-content-center">
      <article class="col-xxl-11">
        <?php the_content(); ?>
      </article>
    </div>
  </div>
</div>

<?php } ?>

<?php if( !empty($imgGallery) ) { ?>

<section class="media block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-11">
        <?php echo $imgGallery; ?>
      </div>
    </div>
  </div>
</section>

<?php } ?>

<?php if( !empty($extraContent) ) {

if ( !empty($imgGallery)) { ?>
<section class="block pt-0" id="mainContent">
<?php } else { ?>
<section class="block" id="mainContent">
<?php } ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-11">
        <?php echo $extraContent; ?>
      </div>
    </div>
  </div>
</section>

<?php } ?>

<div class="services block gradient-grey">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-11 pb-6">
        <div class="row align-items-center">
          <div class="col-md">
            <?php $categories = get_the_terms( $post->ID, 'service_categories' );?>   
            <h3 class="display-4 text-gamma m-0">Related <?php echo esc_html( $categories[0]->name ); ?> Services</h3>
          </div>
          <div class="col-md-auto d-none d-md-inline-block">
            <a href="<?php echo get_site_url(); ?>/services" class="btn btn-alpha">View all services</a>
          </div>
        </div>
      </div>
      <div class="col-xxl-11">
        <div class="row">

          <?php 

          $relatedTaxonomyTerms = wp_get_object_terms( $post->ID, 'service_categories', array('fields' => 'ids') );

          $args = array(
          'post_type' => 'services',
          'post_status' => 'publish',
          'posts_per_page' => 6,
          'orderby' => 'rand',
          'tax_query' => array(
              array(
                'taxonomy' => 'service_categories',
                'field' => 'id',
                'terms' => $relatedTaxonomyTerms
              )
          ),
          'post__not_in' => array ($post->ID),
          );

          $relatedPosts = new WP_Query( $args );

          if($relatedPosts->have_posts()){

            while( $relatedPosts->have_posts()){ $relatedPosts->the_post(); 
              get_template_part( 'template-parts/component/component', 'service' );
            }
            wp_reset_postdata();

          } ?>
                
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
