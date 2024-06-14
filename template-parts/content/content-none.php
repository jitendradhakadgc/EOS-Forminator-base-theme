<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

<h3><?php esc_html_e( 'Sorry, there are no posts published yet.', 'base' ); ?></h3>

<?php elseif ( is_search() ) : ?>

<h3><?php esc_html_e( 'Sorry, but nothing matched your search. Please try again using some different keywords.', 'base' ); ?></h3>

<?php get_template_part( 'template-parts/component/component', 'search' ); ?>

<?php else : ?>

<h3><?php esc_html_e( 'Sorry, we can&rsquo;t seem to find what you&rsquo;re looking for. Perhaps searching can help.', 'base' ); ?></h3>

<?php get_template_part( 'template-parts/component/component', 'search' ); ?>

<?php endif; ?>

      