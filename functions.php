<?php

function load_features() {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'load_features' );
?>