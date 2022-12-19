<?php

################################################################################
# Constants
################################################################################

define('THEMEURL', get_stylesheet_directory_uri());
define('THEMEDIR', __DIR__);

$theme = wp_get_theme();
$textdomain = $theme->get('TextDomain');
$version = $theme->get('Version');

################################################################################
# Load the translations from the child theme if present
################################################################################

add_action('after_setup_theme', function () {
	load_child_theme_textdomain('fffchild', get_stylesheet_directory() . '/languages');
});

