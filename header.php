<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> seection and everything up till <div id="content">
 * 
 * @package anthemwp
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">


    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <?php if( has_nav_menu( 'fixed-top' ) ) : ?>
      <!-- Fixed navbar -->
      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo bloginfo('url'); ?>"><?php bloginfo('Name'); ?></a>
          </div>
          <?php abs_get_menu('fixed-top'); ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="page" class="hfeed site container theme-showcase">

      <?php do_action( 'before' );?>

      <div class="row">

        <header id="masthead" class="site-header" role="banner">

          <nav class="navbar" role="navigation">
            
            <div class="container">
              
              <div class="navbar-header col-md-1 col-xs-12">
                
                <?php if ( get_header_image() ) : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" rel="home">
                  <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
                </a>
                <?php endif; // End header image check. ?>
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

              </div><!-- /.navbar-header -->

              <?php abs_get_menu( 'primary' ); ?>

            </div><!-- /.container -->

          </nav><!-- /.navbar -->
          
        </header><!-- /#masthead -->

      </div><!-- /.row -->

      <div class="row">

        <div id="content" class="site-content">