<?php
 /**
 * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
 * @return void
 * return void c pr ne rien returner
 */

 //add action est un ecouteur l'evenement et se present comme suit:
// add_action('wp_enqueue_scripts','callback'); 'wp_enqueue_scripts'+'le nom de la fonction';
add_action('wp_enqueue_scripts','ajout_css_js');

//la function :
function ajout_css_js(){ 
    //wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )
    //https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri(). '/vendor/fontawesome-free/css/all.min.css');
    wp_enqueue_style('font-montserrat', "https://fonts.googleapis.com/css?family=Montserrat:400,700");
    wp_enqueue_style('font-lato', "https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic");
    //Plugin CSS 
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css');
    //Custom styles for this template 
    wp_enqueue_style('freelancer', get_template_directory_uri() . '/css/freelancer.min.css');


 
    //<!-- Bootstrap core JavaScript 2scrp-->
   
    //<!-- Plugin JavaScript 2scripts -->

  
    // <!-- Contact Form JavaScript 2scripts-->
  
    //<!-- Custom scripts for this template js freelancer -->
  

// coller les scripts de yassine rest à comprendre
// https://developer.wordpress.org/reference/functions/wp_enqueue_script/

/*
  wp_enqueue_script('jquery-perso', get_template_directory_uri().'./vendor/jquery/jquery.min.js');
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', ['jquery-perso'], null, true);
  wp_enqueue_script('boostrap-validation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', ['bootstrap'], null, true);
  wp_enqueue_script('contact-me', get_template_directory_uri() . '/js/contact_me.js', ['jquery-perso'], null, true);
  wp_enqueue_script('freelancer', get_template_directory_uri() . '/js/freelancer.min.js', ['jquery-perso'], null, true);
*/

/* mes scripts: */
//wp_enqueue_script( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
// on prend les 4 dossiers qui se trouvent dans vendor + les 3 fichiers js qui se trouve ds le dossier js


wp_enqueue_script('jquery-rahma', get_template_directory_uri().'./vendor/jquery/jquery.min.js');
wp_enqueue_script('bootstrap', get_template_directory_uri().'./vendor/bootstrap/js/bootstrap.bundle.js',['jquery-rahma'],'',true);
wp_enqueue_script('magnific-popup',get_template_directory_uri().'/vendor/magnific-popup/jquery.magnific-popup.min.js',['jquery-rahma'],'',true);
wp_enqueue_script('jquery-easeing',get_template_directory_uri().'vendor/jquery-easing/jquery.easing.min.js',['jquery-rahma'],'',true);
wp_enqueue_script('freelancer',get_template_directory_uri().'js/freelancer.min.js',['jquery-rahma'],'',true);
wp_enqueue_script('contact_me', get_template_directory_uri().'js/contact_me.min.js',['jquery-rahma'],'',true);
wp_enqueue_script('jq-bootstrap_validator', get_template_directory_uri().'js/jqBootstrapValidation.min.js',['jquery-rahma'],'',true);


// sur la doc cette ecriture est facultative cad on peut mettre que comme suit:
//wp_enqueue_script('freelancer', get_template_directory_uri().'le chemin');

}

?>