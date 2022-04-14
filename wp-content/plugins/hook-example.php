<?php
/**
 * Plugin Name: Hooks example
 */

function hooked_title($title)
{
    return ' &hearts; ' . $title . ' &hearts; ';
}
add_filter('the_title', 'hooked_title');

function added_footer()
{
    echo '<div style="color: red; font-size:42px; text-align:center;"> &hearts;  &hearts;  &hearts;</div>';
}
add_action('wp_footer', 'added_footer');