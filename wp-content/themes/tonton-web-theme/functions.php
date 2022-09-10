<?php
/**
 * tonton-web-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tonton-web-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
  // Replace the version number of the theme on each release.
  define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tonton_web_theme_setup() {
  /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on tonton-web-theme, use a find and replace
    * to change 'tonton-web-theme' to the name of your theme in all the template files.
    */
  load_theme_textdomain( 'tonton-web-theme', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
  add_theme_support( 'title-tag' );

  /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus(
    array(
      'menu-1' => esc_html__( 'Primary', 'tonton-web-theme' ),
    )
  );

  /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );

  // Set up the WordPress core custom background feature.
  add_theme_support(
    'custom-background',
    apply_filters(
      'tonton_web_theme_custom_background_args',
      array(
        'default-color' => 'ffffff',
        'default-image' => '',
      )
    )
  );

  // Add theme support for selective refresh for widgets.
  add_theme_support( 'customize-selective-refresh-widgets' );

  /**
   * Add support for core custom logo.
   *
   * @link https://codex.wordpress.org/Theme_Logo
   */
  add_theme_support(
    'custom-logo',
    array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    )
  );
}
add_action( 'after_setup_theme', 'tonton_web_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tonton_web_theme_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'tonton_web_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'tonton_web_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tonton_web_theme_widgets_init() {
  register_sidebar(
    array(
      'name'          => esc_html__( 'Sidebar', 'tonton-web-theme' ),
      'id'            => 'sidebar-1',
      'description'   => esc_html__( 'Add widgets here.', 'tonton-web-theme' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action( 'widgets_init', 'tonton_web_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tonton_web_theme_scripts() {
  wp_enqueue_style( 'tonton-web-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_style_add_data( 'tonton-web-theme-style', 'rtl', 'replace' );

  wp_enqueue_script( 'tonton-web-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'tonton_web_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}

function my_register_post_tag_taxonomy() {
  $tag_slug_args =  get_taxonomy('post_tag');
  $tag_slug_args -> hierarchical = true;
  $tag_slug_args -> meta_box_cb = 'post_categories_meta_box';
  register_taxonomy('post_tag', 'post', (array) $tag_slug_args);
}
add_action( 'init', 'my_register_post_tag_taxonomy', 1 );

function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

// 過去の成約物件
add_action( 'admin_print_footer_scripts', 'select_to_radio_sold_area' );
function select_to_radio_sold_area() {
  ?>
  <script type="text/javascript">
  jQuery( function( $ ) {
    // 投稿画面
    $( '#taxonomy-sold_area input[type=checkbox]' ).each( function() {
      $( this ).replaceWith( $( this ).clone().attr( 'type', 'radio' ) );
    } );

    // 一覧画面
    var sold_area_checklist = $( '.sold_area-checklist input[type=checkbox]' );
    sold_area_checklist.click( function() {
      $( this ).parents( '.sold_area-checklist' ).find( ' input[type=checkbox]' ).attr( 'checked', false );
      $( this ).attr( 'checked', true );
    } );
  } );
  </script>
  <?php
}