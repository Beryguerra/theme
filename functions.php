<?php

function load_stylesheet() {//load_stylesheet pode ter outro nome

        wp_enqueue_style('style', get_template_directory_uri() . '/style.css',array(), false, 'all');
        wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheet');//faz a funcao load_stylesheet correr


//nav menus
register_nav_menus( array(
	'primary' => 'Primary Menu',
	'footer' => 'Footer Menu',
) );

// get_top_ancestor_id......page.php 
function get_top_ancestor_id(){

        global $post;
        
        if ($post->post_parent) {
                $ancestors = array_reverse( get_post_ancestors($post->ID));
                return $ancestors[0];
        }
        return $post->ID;
}
