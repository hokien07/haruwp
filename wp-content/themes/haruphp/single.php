<?php

get_header();

?>

<div class="banner-wrapper with-bg " id="child-banner-wrapper" data-background="
<?php echo check_image_isset($hk_options['banner_people']['url'], 'img/banners/banner-community.jpg'); ?>">
<div class="banner">
    <div class="banner-header">
    	<p class="size-l line-1">
    		<?php echo check_text_isset($hk_options['people_title'], 'Our Community'); ?>
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
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class() ?> id="post-<?php the_ID(); ?> post-wrapper">
    <?php $featured_img_url = get_the_post_thumbnail_url($post_id,'full'); ?>
		<div id="post-bg-image" style="background-image: url('<?php echo esc_url($featured_img_url); ?>');"></div>
		<div id="post-inner" style="margin: 0px auto; width: 60%; text-align: justify">
			<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'id' =>'post-image') ); ?>
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
			<a style=" cusor: pointer" class="link-btn" onclick="history.go(-1);">Về Trang Tin Tức</a>
		</div>
	</div>
  <?php endwhile; endif; ?>
</div>

<?php

get_footer();

?>
