<?php

/**
 * The template for displaying Archive pages.
 *
 * @package anthemwp
 */
?>

<?php get_header(); ?>

          <!-- <div class="container"> -->

            <div id="primary" class="col-lg-8 col-md-8 col-sm-12 content-area">
              
              <div id="main" class="site-main" role="main">

                <?php if( have_posts() ) : ?>

                	<header class="page-header">
                		
                		<h1 class="page-title"><?php the_title(); ?></h1>
                	</header>

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