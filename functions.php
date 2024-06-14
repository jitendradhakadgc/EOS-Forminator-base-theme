<?php

if ( ! function_exists( 'base_setup' ) ) :

	/*-----------------------------------------------------------------------------------*/
	/* BASIC THEAME SETUP */
	/*-----------------------------------------------------------------------------------*/

	function base_setup() {

		/* --------------------- Make theme available for translation --------------------- */

		load_theme_textdomain( 'base', get_template_directory() . '/languages' );

		/* --------------------- Add default posts and comments RSS feed links to head --------------------- */

		add_theme_support( 'automatic-feed-links' );

		/* --------------------- Let WordPress manage the document title --------------------- */

		add_theme_support( 'title-tag' );

		/* --------------------- Enable support for Post Thumbnails on posts and pages --------------------- */

		add_theme_support( 'post-thumbnails' );

		/* --------------------- Switch default core markup for search form, comment form, and comments to output valid HTML5 --------------------- */

		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		/* --------------------- Add theme support for selective refresh for widgets --------------------- */

		add_theme_support( 'customize-selective-refresh-widgets' );

	}

endif;

add_action( 'after_setup_theme', 'base_setup' );


/*-----------------------------------------------------------------------------------*/
/* REGISTER MENUS */
/*-----------------------------------------------------------------------------------*/

function register_menus() {

	register_nav_menus( array(
    'primary-menu' => __( 'Primary Menu'),
    'secondary-menu' => __( 'Secondary Menu'),
		// 'footer-top-menu' => __( 'Footer Top Menu'),
		// 'footer-menu' => __( 'Footer Menu')
	) );

}

add_action( 'init', 'register_menus' );


/*-----------------------------------------------------------------------------------*/
/* REGISTER WIDGETS */
/*-----------------------------------------------------------------------------------*/

function base_widgets_init() {
  
  register_sidebar( array(
		'name'          => esc_html__( 'News Sidebar', 'base' ),
		'id'            => 'news-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'base' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
  ) );

  register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Widget One', 'base' ),
		'id'            => 'footer-top-widget-one',
		'description'   => esc_html__( 'Add widgets here.', 'base' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="footer__widget__title">',
		'after_title'   => '</div>',
  ) );

  register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Widget Two', 'base' ),
		'id'            => 'footer-top-widget-two',
		'description'   => esc_html__( 'Add widgets here.', 'base' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="footer__widget__title">',
		'after_title'   => '</div>',
  ) );

  register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Widget Three', 'base' ),
		'id'            => 'footer-top-widget-three',
		'description'   => esc_html__( 'Add widgets here.', 'base' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="footer__widget__title">',
		'after_title'   => '</div>',
  ) );

  register_sidebar( array(
		'name'          => esc_html__( 'Footer Top Widget Four', 'base' ),
		'id'            => 'footer-top-widget-four',
		'description'   => esc_html__( 'Add widgets here.', 'base' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="footer__widget__title">',
		'after_title'   => '</div>',
  ) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom', 'base' ),
		'id'            => 'footer-bottom-widget',
		'description'   => esc_html__( 'Add widgets here.', 'base' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'base_widgets_init' );


/*-----------------------------------------------------------------------------------*/
/* ENQUEUE SCRIPTS & STYLES */
/*-----------------------------------------------------------------------------------*/

function base_scripts() {
  wp_enqueue_style( 'base-style', get_stylesheet_uri(), array(), '1.0.0', 'all' );
  wp_enqueue_script( 'base-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.1.1', true );
  wp_enqueue_script( 'marquee', get_template_directory_uri() . '/js/marquee.js', array(), '0', true );
  // wp_enqueue_script( 'base-jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), '1.8.5', true );
  // wp_enqueue_script( 'base-cookie', get_template_directory_uri() . '/assets/js/cookieconsent.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'base-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.39', true );
  wp_enqueue_script( 'base-validate', get_template_directory_uri() . '/assets/js/validate.min.js', array(), '1.15.0', true );
  wp_enqueue_script( 'base-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.8.1', true );
	wp_enqueue_script( 'base-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
  }

  if ( (is_page('home')) ) {
    wp_enqueue_script( 'base-carousel', get_template_directory_uri() . '/assets/js/carousel.js', array(), '1.0.0', true );
  } 

}

add_action( 'wp_enqueue_scripts', 'base_scripts', 20 );




// function custom_dequeue() {
//   wp_dequeue_style('awsm-jobs-style');
//   wp_deregister_style('awsm-jobs-style');
// }

// add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );
// add_action( 'wp_head', 'custom_dequeue', 9999 );


/*-----------------------------------------------------------------------------------*/
/* CHECK PLUGIN DEPENDENCIES */
/*-----------------------------------------------------------------------------------*/

// function theme_dependencies() {

//   if ( is_plugin_inactive( 'base-extensions/base-extensions.php' ) ) {
//     echo '<div class="error"><p>' . __( 'Warning: The theme needs the Base Extensions Plugin to function.', 'base' ) . '</p></div>';
//   }

//   if ( is_plugin_inactive( 'base-cpt/base-cpt.php' ) ) {
//     echo '<div class="error"><p>' . __( 'Warning: The theme needs the Base Custom Post Types Plugin to function.', 'base' ) . '</p></div>';
//   }

// }

// add_action( 'admin_notices', 'theme_dependencies' );


/*-----------------------------------------------------------------------------------*/
/* EXTRA FUNCTIONS */
/*-----------------------------------------------------------------------------------*/

/* --------------------- Allow SVG images to be used --------------------- */

function allow_svg($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svg');


/* --------------------- Change ellipsis at end of excerpt --------------------- */

function excerpt_more($more) {
    return '&hellip;';
}
add_filter('excerpt_more', 'excerpt_more');


/* --------------------- Change character length of excerpt and add ellipsis --------------------- */

function get_excerpt($limit, $source = null){

  $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();
  $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $limit);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
  $excerpt = $excerpt.'...';
  return $excerpt;
}

// echo strip_tags( get_excerpt(165) );


/* --------------------- Remove menu options form wp-admin --------------------- */

function remove_menus() {
	// remove_menu_page( 'index.php' );                  //Dashboard
	// remove_menu_page( 'jetpack' );                    //Jetpack
	// remove_menu_page( 'edit.php' );                   //Posts
	// remove_menu_page( 'upload.php' );                 //Media
	// remove_menu_page( 'edit.php?post_type=page' );    //Pages
	// remove_menu_page( 'edit-comments.php' );          //Comments
	// remove_menu_page( 'themes.php' );                 //Appearance
	// remove_menu_page( 'plugins.php' );                //Plugins
	// remove_menu_page( 'users.php' );                  //Users
	// remove_menu_page( 'tools.php' );                  //Tools
	// remove_menu_page( 'options-general.php' );        //Settings
}

add_action( 'admin_menu', 'remove_menus' );


/* --------------------- Unregister all widgets --------------------- */

function unregister_default_widgets() {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    // unregister_widget('WP_Widget_Search');
    // unregister_widget('WP_Widget_Text');
    // unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
		unregister_widget('WP_Widget_Tag_Cloud');
		unregister_widget('WP_Widget_Media_Gallery');
		unregister_widget('WP_Widget_Media_Video');
		// unregister_widget('WP_Widget_Media_Image');
		unregister_widget('WP_Widget_Media_Audio');
		// unregister_widget('WP_Nav_Menu_Widget');
		// unregister_widget('WP_Widget_Custom_HTML');
}
add_action('widgets_init', 'unregister_default_widgets', 11);


/* --------------------- Unregister all tags --------------------- */

// function unregister_tags() {
//   unregister_taxonomy_for_object_type( 'post_tag', 'post' );
// }
// add_action( 'init', 'unregister_tags' );


/* --------------------- Disabling WordPress wpautop and wptexturize filters (removes p from shortcode) --------------------- */

add_filter( 'the_content', 'shortcode_unautop', 100 );

remove_filter ('the_exceprt', 'wpautop');
remove_filter('term_description','wpautop');


/* --------------------- Remove auto p from Contact Form 7 shortcode output  --------------------- */

function wpcf7_autop_return_false() {
  return false;
}
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');

function wpex_clean_shortcodes($content){   
  $array = array (
    '<p>[' => '[', 
    ']</p>' => ']', 
    ']<br />' => ']'
  );
  $content = strtr($content, $array);
  return $content;
  }
add_filter('the_content', 'wpex_clean_shortcodes');


/* --------------------- Stop img being wrapped in p tag  --------------------- */

function filter_ptags_on_images($content) {
  return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}

add_filter('the_content', 'filter_ptags_on_images');


/* --------------------- Remove Category:, Tag:, Author: from the_archive_title  --------------------- */

add_filter( 'get_the_archive_title', function ($title) {

	if ( is_category() ) {
			$title = single_cat_title( '', false );
		} elseif ( is_tag() ) {
			$title = single_tag_title( '', false );
		} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>' ;
		}

	return $title;

});


/* --------------------- Adds a TinyMCE WYSIWYG editor to the category description fields.  --------------------- */

remove_filter( 'pre_term_description', 'wp_filter_kses' );
remove_filter( 'term_description', 'wp_kses_data' );
add_filter( 'edit_category_form_fields', 'cat_description' );
 
function cat_description($tag) { ?>
  <table class="form-table">
    <tr class="form-field">
      <th scope="row" valign="top"><label for="description"><?php _ex('Description', 'Taxonomy Description'); ?></label></th>
      <td>
        <?php
        $settings = array(
          'wpautop' => true,
          'media_buttons' => true,
          'quicktags' => true,
          'textarea_rows' => '15',
          'textarea_name' => 'description'
        );
        $content = html_entity_decode( $tag->description );
        wp_editor( wp_kses_post( $content, ENT_QUOTES, 'UTF-8'), 'cat_description', $settings);
        ?>
      </td>
    </tr>
  </table>
<?php }
add_action('admin_head', 'remove_default_category_description');

function remove_default_category_description() {
  global $current_screen;
  if ( $current_screen->id == 'edit-category' ){ ?>
    <script type="text/javascript">
      jQuery(function($) {
        $('textarea#description').closest('tr.form-field').remove();
      });
    </script>
  <?php }
}


/* --------------------- Remove Emoji Scripts from head  --------------------- */

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/* --------------------- Dequeue CSS for Gutenberg & Contact form 7  --------------------- */

function deregister_styles() {
  wp_dequeue_style( 'wp-block-library' );
  wp_deregister_style( 'wp-block-library' );
	wp_deregister_style( 'contact-form-7' );
}

add_action( 'wp_print_styles', 'deregister_styles', 100 );


/* --------------------- Wordpress Bootstrap 4.1 Pagination (with custom WP_Query() and global $wp_query support) - https://gist.github.com/mtx-z/f95af6cc6fb562eb1a1540ca715ed928 --------------------- */

function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {

	if ( null === $wp_query ) {
		global $wp_query;
  }
  
	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( 'Previous' ),
			'next_text'    => __( 'Next' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);

	if ( is_array( $pages ) ) {
		$pagination = '<nav class="module-pagination col-12" role="navigation"><ul class="pagination">';
		foreach ( $pages as $page ) {
			$pagination .= '<li class="page-item '.(strpos($page, 'current') !== false ? 'active' : '').'"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
		}
		$pagination .= '</ul></nav>';
		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}


/* --------------------- Remove image size attributes from img --------------------- */

function remove_image_size_attributes( $html ) {
	return preg_replace( '/(width|height)="\d*"/', '', $html );
}

// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );


/* --------------------- Generate breadcrumbs --------------------- */

function get_breadcrumb() {
  echo '<a href="'.home_url().'" rel="nofollow"><i class="fal fa-home"></i></a>';
  if (is_category() || is_single()) {
    echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
    the_category(' &bull; ');
    if (is_single()) {
      echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
      the_title();
    }
  } elseif (is_page()) {
    echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
    echo the_title();
  } elseif (is_search()) {
    echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
    echo '"<em>';
    echo the_search_query();
    echo '</em>"';
  }
}


/*-----------------------------------------------------------------------------------*/
/* SITE OPTIMISING FUNCTIONS */
/*-----------------------------------------------------------------------------------*/

/* --------------------- Combine all scripts --------------------- */

// add_action( 'wp_enqueue_scripts', 'combine_all_scripts', 9999 );

// function combine_all_scripts() 
// {
// 	global $wp_scripts;
	
// 	/*
// 		Reorder the handles based on dependency
// 	*/
// 	$wp_scripts -> all_deps($wp_scripts -> queue);	
	
// 	// New file location eg: wp-content/themes/maintheme/js/scripts.js
// 	$combined_file_location = get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'scripts.js';
	
// 	$combined_script	= '';
	
// 	// Loop through javascript files and save to $merged_script variable
// 	foreach( $wp_scripts -> to_do as $handle) 
// 	{
// 		/*
// 			Clean up url, for example wp-content/themes/maintheme/main.js?v=1.2.4
// 			become wp-content/themes/maintheme/main.js
// 		*/
// 		$src = strtok( $wp_scripts -> registered[ $handle ] -> src, '?' );
		
// 		/**
// 			Combine javascript files.
// 		*/
// 		// If src is url http / https		
// 		if ( strpos ( $src, 'http' ) !== false )
// 		{
// 			// Get our site url, for example: http://lbfl.co.uk/
// 			$site_url = site_url();
		
// 			if ( strpos ( $src, $site_url ) !== false )
// 				$js_file_path = str_replace ( $site_url, '', $src );
// 			else
// 				$js_file_path = $src;
			
// 			/*
// 				To be able to use file_get_contents function we need to remove the trailing forward slash
// 			*/
// 			$js_file_path = ltrim ($js_file_path, '/' );
// 		}
// 		else 
// 		{			
// 			$js_file_path = ltrim ( $src, '/' );
// 		}
		
// 		// Check to see if the file exists then combine
// 		if  ( file_exists ( $js_file_path ) ) 
// 		{
// 			// Check for wp_localize_script
// 			$localize = '';
// 			if ( @key_exists( 'data', $wp_scripts -> registered[ $handle ] -> extra)) {
// 				$localize = $obj -> extra['data'] . ';';
// 			}
// 			$combined_script .=  $localize . file_get_contents ( $js_file_path ) . ';';
// 		}
// 	}
	
// 	// write the combined script into current theme directory
// 	file_put_contents ( $combined_file_location , $combined_script );
	
// 	// Load the URL of combined file
//   wp_enqueue_script( 'scripts',  get_stylesheet_directory_uri() . '/scripts.js', array(), '1.0.0', true );
	
// 	// Deregister handles
// 	foreach( $wp_scripts->to_do as $handle ) 
// 	{
// 		wp_deregister_script($handle);
// 	}
// }


/* --------------------- Compress HTML - https://www.basiclue.com/2016/04/minify-html-javascript-css-without-plugin.html --------------------- */

// class WP_HTML_Compression
// {
// 	// Settings
// 	protected $compress_css = true;
// 	protected $compress_js = true;
// 	protected $info_comment = true;
// 	protected $remove_comments = true;

// 	// Variables
// 	protected $html;
// 	public function __construct($html)
// 	{
// 		if (!empty($html))
// 		{
// 			$this->parseHTML($html);
// 		}
// 	}
// 	public function __toString()
// 	{
// 		return $this->html;
// 	}
// 	protected function bottomComment($raw, $compressed)
// 	{
// 		$raw = strlen($raw);
// 		$compressed = strlen($compressed);
		
// 		$savings = ($raw-$compressed) / $raw * 100;
		
// 		$savings = round($savings, 2);
	
// 	}
// 	protected function minifyHTML($html)
// 	{
// 		$pattern = '/<(?<script>script).*?<\/script\s*>|<(?<style>style).*?<\/style\s*>|<!(?<comment>--).*?-->|<(?<tag>[\/\w.:-]*)(?:".*?"|\'.*?\'|[^\'">]+)*>|(?<text>((<[^!\/\w.:-])?[^<]*)+)|/si';
// 		preg_match_all($pattern, $html, $matches, PREG_SET_ORDER);
// 		$overriding = false;
// 		$raw_tag = false;
// 		// Variable reused for output
// 		$html = '';
// 		foreach ($matches as $token)
// 		{
// 			$tag = (isset($token['tag'])) ? strtolower($token['tag']) : null;
			
// 			$content = $token[0];
			
// 			if (is_null($tag))
// 			{
// 				if ( !empty($token['script']) )
// 				{
// 					$strip = $this->compress_js;
// 				}
// 				else if ( !empty($token['style']) )
// 				{
// 					$strip = $this->compress_css;
// 				}
// 				else if ($content == '<!--wp-html-compression no compression-->')
// 				{
// 					$overriding = !$overriding;
					
// 					// Don't print the comment
// 					continue;
// 				}
// 				else if ($this->remove_comments)
// 				{
// 					if (!$overriding && $raw_tag != 'textarea')
// 					{
// 						// Remove any HTML comments, except MSIE conditional comments
// 						$content = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $content);
// 					}
// 				}
// 			}
// 			else
// 			{
// 				if ($tag == 'pre' || $tag == 'textarea')
// 				{
// 					$raw_tag = $tag;
// 				}
// 				else if ($tag == '/pre' || $tag == '/textarea')
// 				{
// 					$raw_tag = false;
// 				}
// 				else
// 				{
// 					if ($raw_tag || $overriding)
// 					{
// 						$strip = false;
// 					}
// 					else
// 					{
// 						$strip = true;
						
// 						// Remove any empty attributes, except:
// 						// action, alt, content, src
// 						$content = preg_replace('/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/', '$1', $content);
						
// 						// Remove any space before the end of self-closing XHTML tags
// 						// JavaScript excluded
// 						$content = str_replace(' />', '/>', $content);
// 					}
// 				}
// 			}
			
// 			if ($strip)
// 			{
// 				$content = $this->removeWhiteSpace($content);
// 			}
			
// 			$html .= $content;
// 		}
		
// 		return $html;
// 	}
		
// 	public function parseHTML($html)
// 	{
// 		$this->html = $this->minifyHTML($html);
		
// 		if ($this->info_comment)
// 		{
// 			$this->html .= "\n" . $this->bottomComment($html, $this->html);
// 		}
// 	}
	
// 	protected function removeWhiteSpace($str)
// 	{
// 		$str = str_replace("\t", ' ', $str);
// 		$str = str_replace("\n",  '', $str);
// 		$str = str_replace("\r",  '', $str);
		
// 		while (stristr($str, '  '))
// 		{
// 			$str = str_replace('  ', ' ', $str);
// 		}
		
// 		return $str;
// 	}
// }

// function wp_html_compression_finish($html)
// {
// 	return new WP_HTML_Compression($html);
// }

// function wp_html_compression_start()
// {
// 	ob_start('wp_html_compression_finish');
// }
// add_action('get_header', 'wp_html_compression_start');




















// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

add_filter( 'excerpt_length', function($length) {
    return 17;
}, PHP_INT_MAX );
add_post_type_support( 'page', 'excerpt' );




function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li><li class="separator"> / </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> / </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> / </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                }
                echo $output;
                echo '<span title="'.$title.'">'.ucwords(strtolower($title)).'</span>';
            } else {
                echo '<li><span>'.ucwords(strtolower(get_the_title())).'</span></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}

function wpb_widgets_init() {
 
  register_sidebar( array(
      'name'          => 'News Scroll Area',
      'id'            => 'news-scroll-widget',
  ) );

}
add_action( 'widgets_init', 'wpb_widgets_init' );

function enqueue_toggle_script() {
  wp_enqueue_script('toggle-script', get_template_directory_uri() . '/js/toggle-script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_toggle_script');

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page();

}
// Remove upload capability for editors
function remove_editor_upload_capability() {
  $role = get_role('editor');
  $role->remove_cap('upload_files');
}
add_action('admin_init', 'remove_editor_upload_capability');

function create_custom_post_type() {
  $labels = array(
      'name'               => 'Careers',
      'singular_name'      => 'Career',
      'add_new'            => 'Add New Job',
      'add_new_item'       => 'Add New Job',
      'edit_item'          => 'Edit Job',
      'new_item'           => 'New Job',
      'view_item'          => 'View Job',
      'search_items'       => 'Search Jobs',
      'not_found'          => 'No jobs found',
      'not_found_in_trash' => 'No jobs found in Trash',
      'all_items'          => 'All Jobs',
      'menu_name'          => 'Careers '
  );

  $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'menu_icon'          => 'dashicons-businessman', // Set the menu icon
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'jobs' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => null,
      'supports'           => array( 'title', 'thumbnail' ),
  );

  register_post_type( 'jobs', $args );
}
add_action( 'init', 'create_custom_post_type' );





 /* Multistep Begin  */

add_action('wp_ajax_nopriv_submit_form', 'handle_form_submission');
add_action('wp_ajax_submit_form', 'handle_form_submission');

function handle_form_submission() {
  global $wpdb;

  // Verify nonce
  if (!isset($_POST['submit_form_nonce_field']) || !wp_verify_nonce($_POST['submit_form_nonce_field'], 'submit_form_nonce')) {
      wp_send_json_error('Invalid nonce.');
      return;
  }

  // Sanitize form fields
  $surname = isset($_POST['surname']) ? sanitize_text_field($_POST['surname']) : '';
  $firstname = isset($_POST['firstname']) ? sanitize_text_field($_POST['firstname']) : '';
  $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
  $gender = isset($_POST['gender']) ? sanitize_text_field($_POST['gender']) : '';
  $education = isset($_POST['education']) ? sanitize_text_field($_POST['education']) : '';
  $dob = isset($_POST['dob']) ? sanitize_text_field($_POST['dob']) : '';
  $experience = isset($_POST['experience']) ? sanitize_text_field($_POST['experience']) : '';
  $countries = isset($_POST['countries']) ? array_map('sanitize_text_field', $_POST['countries']) : [];
  $additional_countries = isset($_POST['additional_countries']) ? sanitize_text_field($_POST['additional_countries']) : '';
  $languages = isset($_POST['languages']) ? array_map('sanitize_text_field', $_POST['languages']) : [];
  $cover_letter = isset($_POST['cover_letter']) ? sanitize_textarea_field($_POST['cover_letter']) : '';
  $pdf_upload = '';
  $image_upload = '';

  // Handle PDF upload if provided
  if (!empty($_FILES['pdf_upload']['name'])) {
      $pdf_upload = handle_file_upload($_FILES['pdf_upload'], ['pdf', 'doc', 'docx']);
      if (is_wp_error($pdf_upload)) {
          wp_send_json_error('PDF upload failed.');
      }
  }

  // Handle image upload if provided
  if (!empty($_FILES['image_upload']['name'])) {
      $image_upload = handle_file_upload($_FILES['image_upload'], ['png', 'jpeg', 'jpg', 'tif']);
      if (is_wp_error($image_upload)) {
          wp_send_json_error('Image upload failed.');
      }
  }

  // Insert form data into the database
  $table_name = $wpdb->prefix . 'applications';
  $data = [
      'surname' => $surname,
      'firstname' => $firstname,
      'email' => $email,
      'gender' => $gender,
      'education' => $education,
      'dob' => $dob,
      'experience' => $experience,
      'countries' => implode(',', $countries),
      'additional_countries' => $additional_countries,
      'languages' => implode(',', $languages),
      'cover_letter' => $cover_letter,
      'pdf_upload' => $pdf_upload,
      'image_upload' => $image_upload,
  ];

  $format = [
      '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%d', '%d'
  ];

  $wpdb->insert($table_name, $data, $format);

  wp_send_json_success('Form submitted successfully.');
}



function handle_file_upload($file, $allowed_types) {
  require_once(ABSPATH . 'wp-admin/includes/file.php');
  require_once(ABSPATH . 'wp-admin/includes/media.php');
  require_once(ABSPATH . 'wp-admin/includes/image.php');

  // Check the file type against the allowed types
  $filetype = wp_check_filetype($file['name']);
  if (!in_array($filetype['ext'], $allowed_types)) {
      return new WP_Error('upload_error', 'Invalid file type.');
  }

  $upload_overrides = array('test_form' => false);
  $movefile = wp_handle_upload($file, $upload_overrides);

  if ($movefile && !isset($movefile['error'])) {
      $filename = $movefile['file'];
      $attachment = array(
          'guid' => $movefile['url'],
          'post_mime_type' => $filetype['type'],
          'post_title' => preg_replace('/\.[^.]+$/', '', basename($filename)),
          'post_content' => '',
          'post_status' => 'inherit'
      );
      $attach_id = wp_insert_attachment($attachment, $filename);

      require_once(ABSPATH . 'wp-admin/includes/image.php');
      $attach_data = wp_generate_attachment_metadata($attach_id, $filename);
      wp_update_attachment_metadata($attach_id, $attach_data);

      return $attach_id;
  } else {
      return new WP_Error('upload_error', $movefile['error']);
  }
}

function handle_submit_form() {
    check_ajax_referer('submit_form_nonce', 'security');

    $recaptcha_response = sanitize_text_field($_POST['g-recaptcha-response']);
    $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
        'body' => [
            'secret' => 'YOUR_SECRET_KEY',
            'response' => $recaptcha_response,
        ],
    ]);

    $response_body = wp_remote_retrieve_body($response);
    $result = json_decode($response_body, true);

    if (!$result['success']) {
        wp_send_json_error('reCAPTCHA verification failed.');
    }

    // Call the function to handle the form submission
    handle_form_submission();
}

add_action('wp_ajax_nopriv_submit_form', 'handle_submit_form');
add_action('wp_ajax_submit_form', 'handle_submit_form');

function create_applications_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'applications';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        surname varchar(255) NOT NULL,
        firstname varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        gender varchar(10) NOT NULL,
        education varchar(255) NOT NULL,
        dob date NOT NULL,
        experience varchar(255) NOT NULL,
        countries text NOT NULL,
        additional_countries text NOT NULL,
        languages text NOT NULL,
        cover_letter text NOT NULL,
        pdf_upload int(11) NOT NULL,
        image_upload int(11) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

register_activation_hook(__FILE__, 'create_applications_table');

 
 

add_action('admin_menu', 'applications_menu');

function applications_menu() {
    add_menu_page(
        'Applications',       // Page title
        'Applications',       // Menu title
        'manage_options',     // Capability
        'applications',       // Menu slug
        'display_applications_page', // Function to display the page
        'dashicons-list-view', // Icon
        6                     // Position
    );
}

function display_applications_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'applications';
    $results = $wpdb->get_results("SELECT * FROM $table_name");

    // Include custom CSS
    echo '<style>
        .applications-table {
            width: 100%;
            border-collapse: collapse;
        }
        .applications-table th, .applications-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .applications-table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #2a3b46;
            color: white;
        }
        
        .applications-table tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        
        .applications-table tr:nth-child(even) {
            background-color: #ffffff;
        }
        .applications-table tr:hover {
            background-color: #ddd;
        }
        .applications-table td img {
            width: 100px;
            height: auto;
        }
    </style>';

    echo '<div class="wrap">';
    echo '<h1>Applications</h1>';
    echo '<table class="applications-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Surname</th>
                    <th>Firstname</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Education</th>
                    <th>Date of Birth</th>
                    <th>Experience</th>
                    <th>Countries</th>
                    <th>Additional Countries</th>
                    <th>Languages</th>
                    <th>Cover Letter</th>
                    <th>CV</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>';

    if ($results) {
        $count = 1;
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . $count . '</td>';
            echo '<td>' . esc_html($row->surname) . '</td>';
            echo '<td>' . esc_html($row->firstname) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->gender) . '</td>';
            echo '<td>' . esc_html($row->education) . '</td>';
            echo '<td>' . esc_html($row->dob) . '</td>';
            echo '<td>' . esc_html($row->experience) . '</td>';
            echo '<td>' . esc_html($row->countries) . '</td>';
            echo '<td>' . esc_html($row->additional_countries) . '</td>';
            echo '<td>' . esc_html($row->languages) . '</td>';
            echo '<td>' . esc_html($row->cover_letter) . '</td>';
            echo '<td>' . ($row->pdf_upload ? '<a href="' . wp_get_attachment_url($row->pdf_upload) . '" target="_blank">View File</a>' : '') . '</td>';
            echo '<td>' . ($row->image_upload ? '<a href="' . wp_get_attachment_url($row->image_upload) . '" target="_blank"><img src="' . wp_get_attachment_url($row->image_upload) . '" /></a>' : '') . '</td>';
            echo '</tr>';
            $count++;
        }
    } else {
        echo '<tr><td colspan="14">No applications found.</td></tr>';
    }

    echo '</tbody></table>';
    echo '</div>';
}


 /* Multistep End  */

?>