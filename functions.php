<?php

function pw_theme_styles(){

    //Bootstrap core CSS
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );

    //Plugin CSS
    wp_enqueue_style('magnific-popup_css', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css' );

    //Custom styles for this template
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css' );

}

add_action ('wp_enqueue_scripts', 'pw_theme_styles');

function pw_theme_js(){

    //Core Bootstrap JavaScript
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '', true );

    //Plugin JavaScript
    wp_enqueue_script('easing_js', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '', true );

    wp_enqueue_script('scrollreveal_js', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array('jquery'), '', true );

    wp_enqueue_script('magnific-popup_js', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '', true );

    //Custom scripts for this template
    wp_enqueue_script('creative_js', get_template_directory_uri() . '/js/creative.min.js', array('jquery'), '', true );

}

add_action ('wp_enqueue_scripts', 'pw_theme_js');

?>