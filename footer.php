<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials

 */
 ?>

				<footer class="footer" role="contentinfo">
          <div class="footer-widget-container">
          <div class="grid-x grid-margin-x">
          <div class="footer-widget__cell footer-1 ">
          <?php

      					dynamic_sidebar( 'footer-widget-1' );


            ?>
          </div>
          <div class="footer-widget__cell footer-2" >
          <?php

      					dynamic_sidebar( 'footer-widget-2' );


            ?>
          </div>
          <div class="footer-widget__cell footer-3" >
          <?php

      					dynamic_sidebar( 'footer-widget-3' );


            ?>
          </div>


        </div></div>
					<div class="inner-footer grid-x grid-margin-x grid-padding-x">

						<div class="small-12 medium-12 large-12 cell">
							<p class="source-org copyright">Except as noted, all content © Indiana Native Plant Society <?php echo date('Y'); ?>.</p>
						</div>

					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
