<?php
$logo_type = get_theme_mod('type-logo');
$logo_img = '<img style="height:' . get_theme_mod('height-logo') . 'px;width:auto;" alt="' . esc_attr(get_bloginfo('name')) . '" src="' . esc_url(get_theme_mod('logo-img')) . '" class="logo-img">';
$logo_text = get_theme_mod('text-logo');
$logo_default = get_bloginfo('name');

switch ($logo_type) {
    case 'text':
        $logo = $logo_text;
        break;
    case 'image':
        $logo = $logo_img;
        break;
    default:
        $logo = $logo_default;
        break;
}

echo wp_kses_post($logo);