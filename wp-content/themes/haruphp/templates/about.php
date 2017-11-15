<?php 
/*
*Template Name: About
*/
get_header();
?>

<div class="banner-wrapper with-bg with-bg-mid" id="child-banner-wrapper" data-background="
<?php echo check_image_isset($hk_options['about_banner'], 'img/banners/banner-strategy.jpg'); ?>">
<div class="banner">
	<div class="banner-header">
		<p class="size-m line-1">
			<?php echo check_text_isset($hk_options['about_title_1'],'Satisfying Tastes &amp; Appetites'); ?>
		</p>
		<p class="size-l line-2">
			<?php echo check_text_isset($hk_options['about_title_2'],'Around the World'); ?>
		</p>
		<p class="size-s line-3">
			<?php echo check_text_isset($hk_options['about_title_3'],'We believe in the power and promise that comes from eating sumptuous food.'); ?>
		</p>
	</div>
</div>
</div>

<div class="container">
	  <?php

	  	$temp = $wp_query;
	    $wp_query= null;
	    $args = array(
	      'post_type'     =>  'post',
	      'post_status'   =>  'publish',
	      'posts_per_page'  =>  4,
	      'orderby' => 'id',
	      'order' => 'desc',
	      'paged' => $paged,
	      'cat' => 1
	    );  
                        
    $wp_query = new WP_Query($args);
    while ( $wp_query->have_posts() ) : $wp_query->the_post(); 

    	$count = 1;
			$class = 'half-box with-bg fixed-height';
			if($count == 2 || $count == 4) {
				$class = 'half-box with-bg fixed-height pull';
			}
			//get title img on theme options.
			$id_title_img = 'about_title_img_' . $count;
			$link_title_default = 'img/about/title-strategy-0' . $count .'.png';
    	?>
		<div class="row">
		<div class="half-box content">
			<p>
				<?php
					echo check_text_isset($hk_options['about_title_img'], the_title());
				 ?>
			</p>

			<?php the_excerpt(); ?>
		</div>
		
		<div class="<?php echo $class; ?>" data-background="<?php the_post_thumbnail(); ?>">&nbsp;</div>
	</div>
      
    <?php endwhile;
    $wp_query = null; $wp_query = $temp;
    wp_reset_query(); ?>

</div>


<?php get_footer(); ?>