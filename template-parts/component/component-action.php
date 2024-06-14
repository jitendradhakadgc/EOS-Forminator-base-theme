<?php if( $actionTitle = get_option('cta-title') ): ?>

  <?php if( $actionImage = get_option('cta-image') ) { ?>
  <section class="action py-8 py-xl-13" style="background-image: url('<?php echo get_option('cta-image'); ?>')">
  <?php } else { ?>
  <section class="action py-8 py-xl-13 bg-alpha">
  <?php } ?>
    <!-- <span class="action__skewed" style="background-image: url('<?php echo get_option('cta-image'); ?>')"></span> -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="action__content col-12">
          <div class="row justify-content-between align-items-center">
            <div class="col-xl-8 text-xl-left">
              <?php if( $ctaSubtitle = get_option('cta-subtitle') ): ?>
              <h4 class="action__subheader"><?php echo $ctaSubtitle; ?></h4>
              <?php endif; ?>
              <h3 class="action__header mt-0 m-xl-0"><?php echo $actionTitle; ?></h3>
            </div>
            <div class="col-xl-4 text-xl-right">
              <a href="<?php echo get_option('cta-button-link'); ?>" title="<?php echo get_option('cta-button-text'); ?>" class="btn btn-beta btn-lg"><?php echo get_option('cta-button-text'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
