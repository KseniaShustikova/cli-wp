<?php
function bootkit_customize_register($wp_customize)
{
    bootkit_social_customizer_section($wp_customize);
    bootkit_misc_customizer_section($wp_customize);
}