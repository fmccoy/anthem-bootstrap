<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package  anthemwp
 */
?>

        </div><!-- /#content -->

      </div><!-- /.row -->

      <div class="row">

        <footer id="colophon" class="site-footer" role="content-info">

          <div class="container">

            <div class="site-info">

              <?php abs_get_menu('footer'); ?>

              <div id="copy-notice">
                2013 &copy; <?php echo bloginfo('name'); ?>
              </div>

            </div><!-- .site-info -->
            
          </div><!-- /.container -->

        </footer><!-- /#colophon -->

      </div><!-- /.row -->

    </div> <!-- /#page -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <?php wp_footer(); ?>
  </body>
</html>
