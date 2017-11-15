<?php
/*
*Template Name: Investor Page
*/

get_header();
?>

<div class="banner-wrapper with-bg with-bg-mid" id="child-banner-wrapper" data-background="
            <?php echo check_image_isset($hk_options['banner_investor']['url'], 'img/banners/banner-investor.jpg'); ?>">
    <div class="banner">

    <div class="banner-header">
        <p class="size-s line-1"></p>
        <p class="size-s line-2"></p>
        <p class="size-s line-3"></p>
    </div>

</div>
</div>
<div id="sub-menu">
    <h3 style="text-align: center; color: #CDA62E; background-color: #EBEBEB; padding: 20px; font-weight: bold; font-size: 40px;">
        Hình ảnh về hoạt động của chúng tôi
    </h3>
</div>
<div class="container">
    <div id="community-posts" class="grid">
        <?php
            //loop tin tức từ catgegory tin tức
            $getposts = new WP_query();
            $getposts->query('post_status=publish&showposts=10&post_type=post&cat=7');
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
