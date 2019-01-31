// Chargement des styles

wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
wp_enqueue_style('style', get_template_directory_uri() . '/style.css');

// Chargement des scripts
wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js');
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js');



// fin function lgmac_scripts

add_action('wp_enqueue_scripts', 'ressources'); 