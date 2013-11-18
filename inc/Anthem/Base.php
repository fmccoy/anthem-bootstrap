<?php

namespace Anthem;

class Base{

	const THEME_NAME = "amgbootstrap";
	const THEME_SLUG = "amgbootstrap";
	const THEME_VERSION = "1.0";

	const THEME_PREFIX = "amgbs";

	// /const THEMED = new Theme();

	public function __construct(){
		add_action( 'after_setup_theme', array( $this, 'themeSetup' ) );
		add_action( 'widgets_init', array( $this, 'widgetSetup' ) );
		add_action( 'wp_print_styles', array( $this, 'styleSetup') );
		add_action( 'wp_enqueue_scripts', array( $this, 'scriptSetup') );

	}

	public function themeSetup(){
		
		/**
		 * Translatable
		 * Translations can be filed in the /languages directory.
		 */
		load_theme_textdomain( static::THEME_NAME, '/languages' );
		
		/**
		 * Feed Links
		 * Add default posts and comments RSS feed links to head
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Custom Background
		 * The WordPress core custom background feature
		 */
		add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array( 'default-color' => "ffffff", 'default-image' => '' ) ) );
		
		/**
		 * Post Formats
		 * Enables support for Post Formats
		 */
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
		
		/**
		 * Post Thumbnails
		 * Enable support for Post Thumbnails on posts and pages
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'fixed-top'	=>	__( 'Fixed Top',	$this->text_domain ),
			'hometop'	=>	__( 'Home Top',		$this->text_domain ),
			'homefront'	=>	__( 'Home Front',	$this->text_domain ),
			'primary'	=>	__( 'Primary Menu',	$this->text_domain ),
			'footer'	=>	__( 'Footer Menu',	$this->text_domain ),
		) );
	}

	public function widgetSetup(){

		register_sidebar( array(
			'name'			=>	__( 'Sidebar', static::THEME_PREFIX ),
			'id'			=>	'sidebar-1',
			'before_widget'	=>	'<aside id="%1$s" class="%2$s">',
			'after_widget'	=>	'</aside>',
			'before_title'	=>	'<h1 class="widget-title">',
			'after_title'	=>	'</h1>'
		) );

		//$widget  = new Widget( 'something', 'something' );
	}

	public function styleSetup(){
		wp_enqueue_style( 'twbs-core-style', get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/css/bootstrap.min.css', array(), '3.0.0', 'all' );
		wp_enqueue_style( 'twbs-theme-style', get_stylesheet_directory_uri() . '/assets/css/bootstrap-theme.css', array(), '3.0.0', 'all' );
		wp_enqueue_style( 'amgbs-core-style', get_template_directory_uri() . '/style.css', array(), static::THEME_VERSION );
	}

	public function scriptSetup(){
		wp_enqueue_script( 'twbs-core-script',  get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '3.0.0', true );
	}

}