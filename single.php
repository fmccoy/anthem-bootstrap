<?php

/**
 * The template for displaying all single posts
 *
 * @package  anthemwp
 */
?>

<?php get_header(); ?>

          <!-- <div class="container"> -->

            <div id="primary" class="col-lg-12 col-md-12 col-sm-12 content-area">
              
              <div id="main" class="site-main" role="main">

                <?php if( have_posts() ) : ?>

                  <?php while( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'single' ); ?>

                  <?php endwhile; ?>

                <?php else : ?>

                  <?php get_template_part( 'no-results', 'index' ); ?>

                <?php endif; ?>
                
              </div><!-- /#main -->

            </div><!-- /#primary -->
            
          <!-- </div><!-- /.container -->


<?php get_footer(); ?>
