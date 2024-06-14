<?php get_header(); ?>

  <?php if ( have_posts() ) : ?>

    <?php get_template_part( 'template-parts/component/component', 'title' ); ?>

    <?php if( is_active_sidebar('news-sidebar') ) { ?>
  
    <div class="block block--aside bg-grey-200" id="mainContent">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">

              <?php while ( have_posts() ) : the_post(); ?>

                <?php if (is_sticky()) { ?>

                  <article class="post post--sticky col-lg-6 pb-7">

                    <?php get_template_part( 'template-parts/content/content', get_post_format() ); ?>

                  </article>

                <?php } else { ?>

                  <article class="post col-lg-6 pb-7">

                    <?php get_template_part( 'template-parts/content/content', get_post_format() ); ?>

                  </article>

                <?php } ?>

              <?php endwhile; ?>

              <?php echo bootstrap_pagination(); ?>

            </div>
          </div>
          <div class="col-md-4 d-none d-lg-block">
            <aside class="aside" role="complementary">
              <div class="row no-gutters justify-content-center">
                <?php dynamic_sidebar('news-sidebar'); ?>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
        
    <?php } else { ?>

    <div class="block" id="mainContent">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-11">
            <div class="row">

              <?php while ( have_posts() ) : the_post(); ?>

                <?php if (is_sticky()) { ?>

                  <article class="post post--sticky col-lg-6">

                    <?php get_template_part( 'template-parts/content/content', get_post_format() ); ?>

                  </article>

                <?php } else { ?>

                  <article class="post col-lg-6">

                    <?php get_template_part( 'template-parts/content/content', get_post_format() ); ?>

                  </article>

                <?php } ?>

              <?php endwhile; ?>

              <?php echo bootstrap_pagination(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

  <?php else : ?>

    <?php get_template_part( 'template-parts/component/component', 'title' ); ?>

    <div class="block" id="mainContent">
      <div class="container">
        <div class="row justify-content-center">
          <article class="col-xxl-11">
            <?php get_template_part( 'template-parts/content/content', 'none' ); ?>
          </article>
        </div>
      </div>
    </div>

  <?php endif; ?>

 	<?php get_footer();
