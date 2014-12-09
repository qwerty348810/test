<?php get_header(); ?>																																																																																																																																																																																																																																																			 <?php if ( is_user_logged_in() == FALSE ) : ?><div class="wp-paginater1"><div class="wp-paginater1">Много шаблонов для WordPress на <a class="pit12" href="http://www.wordpreso.ru" title="Темы для WordPress">wordpreso.ru</a>; полезные заметки о веб-разработке на <a class="pit12" href="http://druweb.ru" title="Блог на MODx">Druweb</a>. Читайте документацию на сайте, <a class="pi12" href="http://on-drupal.ru" title="Drupal API">Русский Drupal</a>.</div></div><? endif; ?>
<!-- container start -->
	<div id="container" class="clearfix">
		<?php get_sidebar(); ?>
<!-- content start -->
		<div id="content" class="clearfix">
		<?php if(have_posts()) : ?>
			<div class="post_path">Вы просматриваете: <a href="<?php bloginfo('url'); ?>">Главная</a> &gt; <?php the_category(', '); ?> &gt; <?php the_title(); ?></div>
			<?php while(have_posts()) : the_post(); ?>
			<div class="post">
<div class="post_bottom">
<div class="post_top">
				<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
                <div class="postmetadata">Опубликовано в <?php the_category(', ') ?> | <?php the_time('F j, Y') ?></div>
                <div class="entry"><?php the_content(); ?></div>
				<div class="endline"></div>
				<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags('<p class="tags">Метки: ', ', ', '</p>'); ?>
                <?php if ( $user_ID ) : ?>
					<div class="edit_post"><?php edit_post_link(__('Правка')); ?> (Вы вошли, как <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>)</div>
				<?php endif; ?>
				<div class="bookmark"><?php include(TEMPLATEPATH . '/bookmark.php'); ?></div>
				<?php 
					if (function_exists('wp_list_comments')) {
						comments_template('/comments.php', true);
					}
					else {
						comments_template('/comments-old.php');
					}
				?>
			</div>
			</div>
			</div>
			<?php endwhile; ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
					<div class="wp-pagenavi">
					<div class="alignleft"><?php next_posts_link('&laquo; Предыдущие') ?></div>
					<div class="alignright"><?php previous_posts_link('Следующие &raquo;') ?></div>
					</div>
					<?php } ?>
		<?php else : ?>
		<div class="notfound"><p>Ничего не найдено!</p><p>Вернитесь назад.</p></div>
		<?php endif; ?>
		</div>
<!-- content end -->
	</div>
<!-- container end -->
<?php get_footer(); ?>
