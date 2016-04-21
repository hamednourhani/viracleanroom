<!-- ********************************************************************* -->
	<!--****************** Site footer      ***********************************-->
	<!-- ********************************************************************* -->


			<?php get_sidebar('footer-first'); ?>
			<?php get_sidebar('footer-second'); ?>

			<div class="partners">
				<section class="layout">
					<div class="partner">
						<a href="http://www.cel.eu">
							<img src="<?php echo get_template_directory_uri().'/images/cel-components.png';?>" alt="">
						</a>
					</div>

					<div class="partner">
						<a href="http://www.untes.com/airconditioningsystems/Index.aspx">
							<img src="<?php echo get_template_directory_uri().'/images/untes.png';?>" alt="">
						</a>
					</div>

					<div class="partner vira-logo">
						<a href="http://viracleanroom.com">
							<img src="<?php echo get_template_directory_uri().'/images/viracleanroom-logo.png';?>" alt="">
						</a>
					</div>

					<div class="partner">
						<a href="http://www.generalfilters.com/">
							<img src="<?php echo get_template_directory_uri().'/images/general-filter.png';?>" alt="">
						</a>
					</div>

					<div class="partner last-partner">
						<a href="http://www.rhoss.it/">
							<img src="<?php echo get_template_directory_uri().'/images/rhoss.png';?>" alt="">
						</a>
					</div>
				</section>
			</div>

			<footer class="site-footer">
				<section class="layout">
					<span class="site-credit"><?php echo __( "Vira Co © 2015. All rights reserved.","viradeco"); ?></span>

					<span class="site-designer">
						<?php echo __('Designed by ','viradeco');?>
						<a href="http://karait.com"><?php echo __('Farakaranet ','viradeco');?></a>
					</span>
				</section>
			</footer> <!-- footer -->
	
	
	

	<!-- scrolltofixed menu -->
	
	
		</div>

		<?php wp_footer(); ?>
	</body><!-- body -->
</html><!-- html -->