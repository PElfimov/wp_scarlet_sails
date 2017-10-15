<?php

function my_jquery_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
    wp_enqueue_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'my_jquery_scripts' );

function scarlet_sails_scripts_styles(){

    // Регистрирую стили
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/style.css', array(), '1');

    // Подключаем скрипты
    // для главной страницы
    if ( is_page_template ('main-page.php') ) {
      wp_enqueue_script( 'popup', get_template_directory_uri() . '/js/popup.js', array(), '1.0', true);
      wp_enqueue_script( 'tubular', get_template_directory_uri() . '/js/jquery.tubular.1.0.js', array(), '1.0', true);
      wp_enqueue_script( 'video', get_template_directory_uri() . '/js/index.js', array(), '1.0', true);
      wp_enqueue_script( 'move', get_template_directory_uri() . '/js/move.js', array(), '1.0', true);
    };

    wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax.js', array(), '1.0', true);

    // для страницы шоу
    if ( is_page_template ('page-show.php') ) {
      wp_enqueue_script( 'popupdescription', get_template_directory_uri() . '/js/popupdescription.js', array(), '1.0', true);
    }
}

add_action( 'wp_enqueue_scripts', 'scarlet_sails_scripts_styles');

?>
