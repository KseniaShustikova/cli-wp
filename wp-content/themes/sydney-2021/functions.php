<?php
/**
 * Sydney 2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sydney_2021
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sydney_2021_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Sydney 2021, use a find and replace
     * to change 'sydney-2021' to the name of your theme in all the template files.
     */
    load_theme_textdomain('sydney-2021', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'sydney-2021'),
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
            'sydney_2021_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'sydney_2021_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sydney_2021_content_width()
{
    $GLOBALS['content_width'] = apply_filters('sydney_2021_content_width', 640);
}
add_action('after_setup_theme', 'sydney_2021_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sydney_2021_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'sydney-2021'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'sydney-2021'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'sydney_2021_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function sydney_2021_scripts()
{
    wp_enqueue_style('sydney-2021-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), _S_VERSION);

    wp_enqueue_style('sydney-2021-font-awesome', get_template_directory_uri() . "/assets/css/font-awesome.min.css", array(), _S_VERSION);

    wp_enqueue_style('sydney-2021-style', get_stylesheet_uri(), array(), _S_VERSION);

    wp_enqueue_style('sydney-2021-stylesheet', get_template_directory_uri() . "/assets/css/stylesheet.css", array(), _S_VERSION);

    wp_enqueue_style('sydney-2021-animate', get_template_directory_uri() . "/assets/css/animate.css", array(), _S_VERSION);

    wp_enqueue_style('sydney-2021-owl.carousel', get_template_directory_uri() . "/assets/css/owl.carousel.min.css", array(), _S_VERSION);

    wp_style_add_data('sydney-2021-style', 'rtl', 'replace');

    wp_enqueue_script('jquery');

    wp_enqueue_script('sydney-2021-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);

    wp_enqueue_script('sydney-2021-jquery-h5validate', get_template_directory_uri() . '/assets/js/jquery.h5validate.js', array(), _S_VERSION, true);

    wp_enqueue_script('sydney-2021-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true);

    wp_enqueue_script('sydney-2021-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'sydney_2021_scripts');

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname(__FILE__) . '/tgm/class-tgm-plugin-activation.php';

/**
 * tgm plugin activation init-tgm.php
 */
require get_template_directory() . '/tgm/init-tgm.php';

/**
 * Include Walker_Nav_Menu.
 */
include get_theme_file_path('includes/custom-nav-walker.php');

//---------Test code---------

// function hooked_title($title)
// {
//     return ' &hearts; ' . $title . ' &hearts; ';
// }
// add_filter('the_title', 'hooked_title');

// function added_footer()
// {
//     echo '<h3>Added to footer by hook-example plugin</h3>';
// }
// add_action('wp_footer', 'added_footer');

function my_footer()
{
    do_action('my_hook_footer');
}
add_action('wp_footer', 'my_footer');

function hello_footer()
{
    echo 'Hello! ';
}
add_action('my_hook_footer', 'hello_footer');