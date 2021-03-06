<?php
/**
 * The template for displaying homepage.
 *
Template name: Homepage
 *
 * @package fabthemes
 */

get_header(); ?>

<!-- Latest recipes -->

<div class="home-section">
	<div class="container"> <div class="row">

		<div class="col-md-12">
			<div class="section-title">
				<h2> <?php echo _e( 'Последние рецепты', 'fabthemes' );?> </h2>
				<span> <?php echo _e( 'Наши новые рецепты', 'fabthemes' );?></span>
			</div>
		</div>
		
		<div class="grid-cover">
			<?php 
			$count=6;	 
			$args = array(
		        'posts_per_page' => $count,  // Limit count
		        'post_type' => 'recipe',  // Query for the default Post type
		    );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-sm-4">
				<div class="grid-box">
					<div class="grid-pic">
						<div class="gp-overlay">
							<?php 
							$thumb = get_post_thumbnail_id();
							$img_url = wp_get_attachment_url( $thumb,'full' ); 
							?>
							<span class="light"> <a rel="prettyPhoto[pp_gal]"  href='<?php echo $img_url?>'> <i class="fa fa-arrows-alt"></i> </a> </span>
							<span class="hyper"> <a href="<?php the_permalink(); ?>"> <i class="fa fa-cutlery"></i> </a> </span>
						</div>
						<?php 
							$thumb = get_post_thumbnail_id();
							$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
							$image = aq_resize( $img_url, 720, 480, true,true,true ); //resize & crop the image
							?>
						<?php if($image) : ?>
								 <a href="<?php the_permalink(); ?>"> <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
					</div>
					<div class="grid-entry">
						<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
						<div class="grid-meta">
							<span> <?php echo get_the_term_list( $post->ID, 'type', 'Рубрика: ', ', ' ); ?> </span>
							<span> <?php echo get_the_term_list( $post->ID, 'cuisine', 'Кухня: ', ', ' ); ?></span>
						</div>

					</div>
				</div>	
				</div>

		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
		</div>

	</div></div>
</div>

<!-- Latest recipes end-->

<!-- Latest posts -->
<div class="home-section">
	<div class="container"> <div class="row">

		<div class="col-md-12">
			<div class="section-title">
				<h2> <?php echo _e( 'Последние записи', 'fabthemes' );?> </h2>
				<span> <?php echo _e( 'Последние записи из нашего блога', 'fabthemes' );?></span>
			</div>
		</div>

		<div class="grid-cover">
			<?php 
			$count=3;	 
			$args = array(
		        'posts_per_page' => $count,  // Limit count
		    );
			$query = new WP_Query( $args );
			while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-sm-4">
				<div class="grid-box">
					<div class="grid-pic">
						<?php 
							$thumb = get_post_thumbnail_id();
							$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
							$image = aq_resize( $img_url, 720, 480, true,true,true ); //resize & crop the image
							?>
						<?php if($image) : ?>
								<a href="<?php the_permalink(); ?>"> <img src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
						<?php endif; ?>
					</div>
					<div class="grid-entry">
						<div class="grid_title">
							<h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
							<div class="grid-meta">
								<span> <?php echo _e( 'Posted in', 'fabthemes' );?> <?php the_category(', '); ?></span>
							</div>
						</div>
						<div class="entry-content">
							<p>
								<?php
								  $excerpt = get_the_excerpt();
								  echo string_limit_words($excerpt,25);
								?>
							</p>
						</div>
					</div>
				</div>	
				</div>

		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
		</div>



	</div> </div>
</div>
<!-- Latest Posts end -->
<?php get_footer(); ?>
