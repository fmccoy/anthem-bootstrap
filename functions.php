<?php

defined( 'VENDOR_DIR' ) or define( 'VENDOR_DIR', dirname( __FILE__ ) . '/vendor' );

require_once( VENDOR_DIR . '/autoload.php' );

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ){
	$content_width = 640; /* pixels */
}


/**
 * Instantiate Theme Class
 * 
 * @var Anthem
 */
$ab = new Anthem\Base;

/**
 * Theme Specific Template Tags
 */
require( get_template_directory() . '/theme/template-tags.php' );

/**
 * Custom Header Implementation
 */
require( get_template_directory() . '/theme/custom-header.php' );
