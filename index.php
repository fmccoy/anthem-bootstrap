<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package anthemwp
 */

get_header(); ?>

<!-- <div class="container"> -->

  <div id="primary" class="col-lg-8 col-md-8 col-sm-12 content-area">
    
    <div id="main" class="site-main" role="main">

      <?php if( have_posts() ) : ?>

        <?php while( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', get_post_format() ); ?>

        <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'index' ); ?>

      <?php endif; ?>
      
    </div><!-- /#main -->

  </div><!-- /#primary -->

  <?php get_sidebar(); ?>
  
<!-- </div><!-- /.container -->

<?php get_footer(); ?>

        