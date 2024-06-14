<?php 
$size = "";
$image_id = get_post_thumbnail_id( $post->ID );
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
$image_title = get_the_title($image_id);
$image_src = wp_get_attachment_image_src($image_id, $size)[0];

$titleDescription = esc_attr( get_post_meta( get_the_ID(), 'title_description', true ) ); 

if ( $image_src ) { ?>

<div class="title title--bg py-8 py-xl-13" style="background-image: url('<?php echo $image_src ?>')">

<?php } else { ?>

<div class="title bg-grey-900 py-8 py-xl-13">

<?php } ?>

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-12 title__content">

      <?php if ( is_home() ) { ?>

        <h1 class="title__header title__header--blog m-0"><?php bloginfo( 'name' ); ?></h1>
        <?php if( !empty($titleDescription) ) { ?>
        <h3 class="title__subheader"><?php echo $titleDescription ?></h3>
        <?php } ?>

      <?php } elseif ( is_front_page() ) { ?>

        <h1 class="title__header title__header--home m-0">CAREERS</h1>
        <?php if( !empty($titleDescription) ) { ?>
        
        <?php } ?>
        
      <?php } elseif ( is_archive() ) { ?>

        <?php 
          $archiveTitle = get_the_archive_title(); 
          $archiveDescription = get_the_archive_description();
        ?>

        <h1 class="title__header m-0"><?php echo $archiveTitle; ?></h1>
        <?php if( !empty($archiveDescription) ) { ?>
        <h3 class="title__subheader mb-0"><?php echo $archiveDescription; ?></h3>
        <?php } ?>

      <?php } elseif ( is_search() ) { ?>
        
        <h1 class="title__header m-0">Search</h1>

      <?php } elseif ( is_404() ) { ?>
        
        <h1 class="title__header m-0">Error 404</h1>

      <?php } elseif ( is_singular( 'post' ) ) { ?>
        
        <h1 class="title__header m-0"><?php the_title(); ?></h1>

        <div class="title__meta mt-6 mt-sm-8">
          <span class="title__categories"><?php echo get_the_category_list(); ?></span>
          <span class="title__date"><?php echo get_the_date(); ?></span>
        </div>

      <?php } else { ?>
        
        <h1 class="title__header m-0">CAREERS</h1>
        <?php if( !empty($titleDescription) ) { ?>
        <h3 class="title__subheader mb-0"><?php echo $titleDescription ?></h3>
        <?php } ?>
                
      <?php } ?>
      
      </div>

    </div>
  </div>
  
</div>
