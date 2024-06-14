<?php get_header(); ?>

  <?php if ( have_posts() ) : ?>

    <?php get_template_part( 'template-parts/component/component', 'title' ); ?>

    <div class="block" id="mainContent">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-11">
            <div class="row">

              <?php while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/content/content', 'search' );

              endwhile; ?>

              <?php echo bootstrap_pagination(); ?>

            </div>
          </div>
        </div>
      </div>
    </div>

  <?php else : ?>

    <?php get_template_part( 'template-parts/component/component', 'title' ); ?>

    <div class="block" id="mainContent">
      <div class="container">
        <div class="row justify-content-center">
          <article class="col-lg-10">
            <?php get_template_part( 'template-parts/content/content', 'none' ); ?>
          </article>
        </div>
      </div>
    </div>

  <?php endif; ?>

<?php get_footer(); ?>
