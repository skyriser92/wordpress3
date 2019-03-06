<?php
/**
 * Created by PhpStorm.
 * User: jcjc9
 * Date: 3/6/2019
 * Time: 12:20 PM
 * Plugin Name: Very first plugin
 * Plugin URI: local/wordpress3
 * Description: Project 1 of IS373 class
 * Author: John McMinn
 */

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read MOAR!!!!</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );