<?php
 $foodrecipes_options = get_option( 'food_recipes_options' );
?>

<!-- footer -->

<footer>
  <div class="col-md-12 footer">
    <h2>
      <?php if(!empty($foodrecipes_options['footertext'])) {
               	 echo wp_filter_nohtml_kses($foodrecipes_options['footertext']); 
			}else{
				echo ' ';
			}
			echo ' <a target="_blank" href="http://fasterthemes.com/themes/foodrecipes">Food Recipes</a> - <a href="http://wp-templates.ru/">Шаблоны WordPress</a>';
		?>
    </h2>
  </div>
</footer>
<!-- footer End-->
<?php wp_footer();?>
</body>
</html>