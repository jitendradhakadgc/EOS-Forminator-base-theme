<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/component/component', 'title' ); ?>

<article class="block" id="mainContent">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xxl-11">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>

<?php endwhile; ?>

<?php get_footer(); ?>
