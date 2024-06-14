<a class="sector p-3" href="<?php echo get_permalink(); ?>" title="View sector">

  <figure class="sector__body gradient-gamma text-center">

    <span class="sector__media">

      <?php
        $image_id = get_post_thumbnail_id( $post->ID );
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
        $image_title = get_the_title($image_id);
        $image_src = wp_get_attachment_image_src($image_id, $size)[0];
      ?>

      <?php if ( has_post_thumbnail() ) { ?>
        <div class="sector__img" style="background-image: url('<?php echo $image_src ?>')">
          <img class="m-0" src="<?php echo $image_src ?>" alt="<?php echo $image_alt ?>">
        </div>
      <?php } else { ?>
        <div class="sector__img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg')">
          <img class="m-0" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="<?php echo get_bloginfo() ?>">
        </div>
      <?php } ?>

    </span>

    <figcaption class="sector__caption">

      <h4 class="sector__heading m-0"><?php echo get_the_title(); ?></h4>

      <!-- <?php if ( has_excerpt() ) : ?>
      <p class="sector__excerpt mt-4"><?php echo strip_tags( get_excerpt(165) ); ?></p>
      <?php endif; ?>
        -->
      <div class="sector__footer pt-3">
        <span class="btn m-0 p-0">Learn more</span>
      </div>

    </figcaption>

  </figure>

</a>