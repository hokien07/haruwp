<?php
/*
*Template Name: Trang Tin Tức
*/

get_header();
?>
<div class="banner-wrapper with-bg with-bg-mid" id="child-banner-wrapper" data-background="
<?php echo check_image_isset($hk_options['banner_people']['url'], 'img/banners/banner-community.jpg'); ?>">
<div class="banner">
	<div class="banner-header">
		<p class="size-l line-1">
			<?php echo check_text_isset($hk_options['people_title'], 'Giving Back To Our Communities'); ?>
		</p>

		<p class="size-s line-2">
			<?php echo check_text_isset($hk_options['people_banner_des'], 'We set the highest standards of corporate conduct towards everyone we work with and the communities we touch'); ?>
		</p>
		<p class="size-s line-3"></p>
	</div>
</div>
</div>
<div></div>
<div class="container">

	<div id="community-summary" class="full-box content silver-box">
		<div class="text-center inner-fixed-width">
			<h2>Tin tức mới về ẩm thực</h2>
			<?php echo check_text_isset($hk_options['people_des'], '<p>At the BreadTalk Group, we believe in giving back to the communities that we are a part of. We do our bit in supporting causes closest to our hearts, such as developing the local arts and culture scene, nurturing our next generation and supporting the local communities.</p>'); ?>
		</div>
	</div>

	<div id="community-posts" class="grid">
	    <?php
            //loop tin tức từ catgegory tin tức
            $getposts = new WP_query();
            $getposts->query('post_status=publish&showposts=10&post_type=post&cat=2');
            global $wp_query;
            $wp_query->in_the_loop = true;
            while ($getposts->have_posts()) : $getposts->the_post();

        ?>

		<a class="commpost" href="<?php the_permalink(); ?>">
			<div class="grid-item Youth Staff">
				<?php the_post_thumbnail(); ?>
				<h4><?php the_title(); ?></h4>
				<p><?php the_excerpt(); ?></p>
			</div>
		</a>

		<?php endwhile; wp_reset_postdata(); ?>
        <!-- Get post News Query -->
	</div>
</div>
<?php get_footer(); ?>
