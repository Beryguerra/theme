<?php

function load_stylesheet() {//load_stylesheet pode ter outro nome

        wp_enqueue_style('style', get_template_directory_uri() . '/style.css',array(), false, 'all');
        wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');//faz a funcao load_stylesheet correr


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
//nav menus
register_nav_menus( array(
	'primary' => 'Primary Menu',
	'footer' => 'Footer Menu',
) );
*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////

// get_top_ancestor_id......page.php 
function get_top_ancestor_id(){

        global $post;

        if ($post->post_parent) {// se o post tem um parent
                $ancestors = array_reverse( get_post_ancestors($post->ID));
                return $ancestors[0];
        }
        return $post->ID;
}
/*

       =>  if ($post->post_parent) {// se o post tem um parent
        => get_post_ancestors($post->ID)); e uma funcao WP k retorna todos os parentes
        => array_reverse - reverte a ordem da array
        => return $ancestors[0]; retorna o primeiro valor da array
*/

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// does page have children?
function has_children(){

        global $post;
        $pages = get_pages('child_of=' . $post->ID);
        return count($pages);

}
/*
=>$pages = get_pages('child_of=' . $post->ID); get pages e WP funcao, da-nos o child da page k estamos a ver
*/

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Customize excerpt word count length
function custom_excerpt_length() {
        return 60;//numero de palavras k queremos k apareca
} 

add_filter('excerpt_length','custom_excerpt_length');
/*
   => add_filter e uma WP function
   => 'excerpt_length' e o WP filtro k hooka ao add_filter
*/

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Theme set up
//Add featured image support

function thetheme_setup() {
        
        //nav menus
        register_nav_menus( array(
                'primary' => 'Primary Menu',
                'footer' => 'Footer Menu',
         ));
         //Add featured image support
        add_theme_support('post-thumbnails');
         add_image_size('small-thumbnail', 180, 120, true);//parametros 1o- width, 2o-tall, 3o- hard crop/soft crop(true=hard) vai no index.php
        add_image_size('banner-image', 920, 210, array('left', 'top'));//vai no single.php 
        }
        
        add_action('after_setup_theme', 'thetheme_setup');


