<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package anthemwp
 */

get_header(); ?>

<!-- <div class="container"> -->

  <div id="primary" class="col-lg-12 col-md-12 col-sm-12 content-area">

    <div id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'content', 'page' ); ?>

        <?php endwhile; ?>

      <?php else : ?>

        <?php get_template_part( 'no-results', 'index' ); ?>

      <?php endif; ?>

    </div><!-- /#main -->

  </div><!-- /#primary -->

<!-- </div><!-- /.container -->

<?php get_footer(); ?>
