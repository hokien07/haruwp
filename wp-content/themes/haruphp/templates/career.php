<?php 
/*
*Template Name: Trang Tuyển Dụng
*/
get_header();
?>

<div class="banner-wrapper with-bg with-bg-mid" id="child-banner-wrapper" data-background="
    <?php echo check_image_isset($hk_options['career_banner'], 'img/banners/banner-career.jpg'); ?>">
    <div class="banner">
    <div class="banner-header">
        <p class="size-l line-1">
            <?php echo check_text_isset($hk_options['career_title_1'], 'There\'s More to Life'); ?>
        </p>
        <p class="size-m line-2">
        <?php echo check_text_isset($hk_options['career_title_2'], 'at the BreadTalk Group'); ?>
        </p>
        <p class="size-s line-3"></p>
    </div>
</div>
</div>
<div></div>
<div class="container">
    <div id="career-cta">
    <span>
        <h3>Là nhân viên của chúng tôi từ hôm nay!</h3>
    </span>
    <div class="text-center">
        <a role="button" class="link-btn" id="btn-explore">Nạp hồ sơ ngay</a>
    </div>
</div>

<div id="career-meet">
    <h2 class="text-center">
        Gặp gỡ nhân viên của chúng tôi
    </h2>
    <div id="career-preamble" class="text-center">
        <p>
        <?php echo check_text_isset($hk_options['career_slider_des'], 'Our employees are inspired to be the best they can be, where our team is as diverse as the markets we serve.'); ?>
        </p>
    </div>
    <div id="career-staff">

        <?php
            //loop lấy dữ liệu slide từ post theo category
            $getposts = new WP_query(); 
            $getposts->query('
                post_status = publish,
                showposts = 10,
                post_type = post,
                cat = 3
                ');
            global $wp_query; 
            $wp_query->in_the_loop = true; 
            while ($getposts->have_posts()) : $getposts->the_post(); 
        ?>
            <div class="career-staff-slide">
                <div class="career-staff-img with-bg" data-background="<?php the_post_thumbnail(); ?>"></div>
                <div class="career-staff-txt">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
        <!-- Get post News Query -->
    </div>
</div>


<div id="career-grow">
    <div class="inner-fixed-width content text-center">
        <h2>Phát triển cùng chúng tôi</h2>
        <?php echo check_text_isset($hk_options['career_slider_des_1'], 'Our employees are inspired to be the best they can be, where our team is as diverse as the markets we serve.'); ?>
        </p>
    </div>

    <?php
            //loop lấy dữ liệu slide từ post theo category
            $getposts = new WP_query(); 
            $getposts->query('
                post_status = publish,
                showposts = 10,
                post_type = post,
                cat=4
                ');
            global $wp_query; 
            $wp_query->in_the_loop = true; 
            while ($getposts->have_posts()) : $getposts->the_post(); 
        ?>

            <div class="career-grow-slide">
                <div class="slide-title">
                    <h3><strong><?php the_title(); ?></strong></h3>
                    <div class="slide-btn"></div>
                </div>
                <div class="slide-content">
                    <div class="row">
                        <div class="half-box">
                            <img class="img-responsive" src="<?php the_post_thumbnail(); ?>">
                        </div>
                        <div class="half-box">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
                <!-- Get post News Query -->
</div>

<div id="career-explore">
    <h2 class="text-center">Nạp Hồ Sơ Của Bạn Ngay Hôm Nay</h2>
    
    <p class="explore-link text-center"><a href="http://www.jobstreet.com.sg/career/breadtalkgroup.htm" target="_blank">Click Here to View All Job Listings</a></p>
    <h3>Available Positions in Singapore</h3>
    <iframe id="jobPortal" src="http://www.jobstreet.com.sg/career/breadtalkgroup.htm" scrolling="no"></iframe>
</div>
</div>



<?php get_footer(); ?>