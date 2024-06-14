<a class="d-block position-relative h-100 shadow-1" href="<?php echo get_permalink(); ?>" title="View service">
	<div class="row no-gutters">

		<div class="post__media col-md-6 col-lg-12">

    <?php
      $image_id = get_post_thumbnail_id( $post->ID );
      $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
      $image_title = get_the_title($image_id);
      $image_src = wp_get_attachment_image_src($image_id, $size)[0];
    ?>

    <?php if ( has_post_thumbnail() ) { ?>
      <div class="post__img" style="background-image: url('<?php echo $image_src ?>')">
        <img class="m-0" src="<?php echo $image_src ?>" alt="<?php echo $image_alt ?>">
      </div>
    <?php } else { ?>
      <div class="post__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg')">
        <img class="m-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="<?php echo get_bloginfo() ?>">
      </div>
    <?php } ?>
      
		</div>

		<div class="post__body col-md-6 col-lg-12 px-6">

      <?php if ( 'post' == get_post_type() ) { ?>

      <div class="post__meta mb-4">
        <span class="post__category"><i class="fas fa-layer-group"></i> <?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
        <span class="post__date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>
      </div>

      <?php } ?>

      <h4 class="post__header m-0"><?php echo get_the_title(); ?></h4>
      
			<?php if ( has_excerpt() ) : ?>
			<p class="post__excerpt mt-4"><?php echo strip_tags( get_excerpt(165) ); ?></p>
      <?php endif; ?>
      
      <div class="post__footer p-0 d-block d-lg-none">
        <span class="btn btn-post m-0">Learn more</span>
      </div>
    
    </div>
				
	</div>
  
  <div class="post__footer d-none d-lg-block">
    <span class="btn btn-post m-0">Learn more</span>
  </div>

</a>