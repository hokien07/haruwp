<?php
/*
*Template Name: Partnership Page
*/

get_header();
?>

<div class="banner-wrapper with-bg with-bg-mid" id="child-banner-wrapper" data-background="
	<?php echo check_image_isset($hk_options['banner_partnership'], 'img/banners/banner-index.jpg'); ?>" style="background: none !important;">
    <div class="banner">
    <div class="banner-header">
        <p class="size-m line-1"></p>
        <p class="size-l line-2">
		<?php echo check_text_isset($hk_options['partnership_banner_title'], 'BE OUR PARTNER') ?>
        </p>
        <p class="size-s line-3">
		<?php echo check_text_isset($hk_options['partnership_banner_des'], 'Join our global network today') ?>
        </p>
    </div>
</div>
</div>
<div></div>
<div class="container">
    <div id="franchise-info" class="full-box content text-center">
    <div class="inner-fixed-width">
			<h2>Phương Châm</h2>
        <?php echo check_text_isset($hk_options['partnership_des'], '<p>Our franchises offer rewarding careers while making a real difference to the people in their communities.</p>
        <p>We are rapidly expanding our franchise network, and are currently seeking compatible enterprises to be part of our growth and success. We have forged partnerships in China, Hong Kong, Malaysia, Indonesia, Thailand, Vietnam, the Philippines, Taiwan, Sri Lanka, Qatar, Saudi Arabia, Oman, Kuwait, Bahrain and Cambodia to date.</p>
        <p>We look forward to working with passionate, like-minded partners.</p>') ?>


        <!--Loop về thông tin đối tác và phương châm làm việc-->
        <?php
            //loop tin tức từ catgegory tin tức
            $getposts = new WP_query();
            $getposts->query('post_status=publish&showposts=10&post_type=post&cat=8');
            global $wp_query;
            $wp_query->in_the_loop = true;
            while ($getposts->have_posts()) : $getposts->the_post();

        ?>


        <div class="franchise-terms">
            <h3><?php the_title(); ?></h3>
            <?php the_content() ?>
        </div>

         <?php endwhile; wp_reset_postdata(); ?>
        <!-- Get post News Query -->
    </div>
</div>
</div>

<?php get_footer(); ?>
