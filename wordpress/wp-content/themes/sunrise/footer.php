
		<div class="clear"></div>
		
		<?php if( of_get_option('show_contact_map') == true ) { ?>
		<div class="google-map">
			<a href="#map" class="map-toggle expand"><span class="show"><?php echo __('Show Map', 'site5framework'); ?></span><span class="hide"><?php echo __('Hide Map', 'site5framework'); ?></span></a>
			<div id="map">
				<?php echo of_get_option('contact_map') ?>
			</div>
		</div>
		<?php } ?>

		<!-- begin footer -->
		<footer>

		<div class="footer_widgets block grid4 clearfix">

			<?php if ( !function_exists('dynamic_sidebar') || dynamic_sidebar('sidebar-footer') ) { ?><?php } else { ?>
		    <?php }?>

		</div>

		</footer>
        <!-- end footer -->

		<!-- begin .copyright -->
		<div class="copyright">

			<?php if(of_get_option('footer_copyright') == '') { ?>
				<!-- Created by <a href="http://www.s5themes.com/">Site5 WordPress Themes</a>. Experts in <a href="http://gk.site5.com/t/642">WordPress Hosting</a>. -->

				Тема от <a href="http://gk.site5.com/t/642"><?php echo array_random(array('Site5 WordPress Themes', 'Site5 WordPress Team', 'S5 WordPress Team', 'S5 WordPress Themes', 'S5 Themes', 'S5 WP Themes'))?></a>, перевел <a href="http://wp-templates.ru/" title="Русские шаблоны WordPress">WP-Templates.ru</a>, поддержка <a href="http://searchtimes.ru/" title="Форум о Wordpress, SEO и продвижении сайтов">SearchTimes.ru</a>.<br />
				
			<?php } else { ?>
				<?php echo of_get_option('footer_copyright')  ?>
			<?php } ?>

		</div>
		<!-- end .copyright -->


	</div>
	<!-- end container -->

	<?php wp_footer(); ?> 

	</body>
</html>