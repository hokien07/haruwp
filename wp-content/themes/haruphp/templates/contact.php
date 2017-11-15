<?php 
/*
*Template Name: Trang Liên Hệ
*/

get_header();
?>
<div class="banner-wrapper with-bg with-bg-mid" id="child-banner-wrapper" data-background="
<?php echo check_image_isset($hk_options['banner_contact'], 'img/banners/banner-contact.jpg'); ?>">
<div class="banner">
    <div class="banner-header">
        <p class="size-m line-1"></p>
        <p class="size-l line-2">
          <?php echo check_text_isset($hk_options['contact_title'], 'Contact Us'); ?>
      </p>
      <p class="size-m line-3">
          <?php echo check_text_isset($hk_options['contact_des'], 'We would love to hear from you'); ?>
      </p>
  </div>
</div>
</div>
<div></div>
<div class="container">
    <div id="contact">
        <div class="contact-section">
            <h2 id="offices-title">Văn Phòng Của Chúng Tôi</h2>
            <div class="offices-container">
                <!--Loop văn phòng,  địa điểm làm việc-->
                 <?php 
                $getposts = new WP_query();
                $getposts->query('post_status=public&showposts=10&post_type=post&cat=5');
                global $wp_query;
                $wp_query->in_the_loop = true;

                while ($getposts->have_posts()) : $getposts->the_post() ?>

                <div>
                    <h5><?php the_title(); ?></h5>
                    <?php the_content(); ?>
                </div>
                
                <?php endwhile; wp_reset_postdata();?>
                <!--end loop-->
            </div>
        </div>

        <div class="contact-section">
            <h2>Số Hotline và Email?</h2>
            <div class="back-to-top"><span class="fa fa-4x fa-angle-up"></span></div>

            <h3 style="margin-top: 30px;">Số Holine(Hồ Chí Minh)</h3>
            <h4 style="font-size:2rem !important;margin-top: 30px;margin-bottom: 60px;">
                Vui lòng gọi 
                <a href="tel:<?php echo check_text_isset($hk_options['contact_hotline'], '+84868.098591'); ?>" style="text-decoration: none;"<i class="fa fa-phone" aria-hidden="true"></i>
                    <span style="font-family: 'Open Sans', sans-serif;"><?php echo check_text_isset($hk_options['contact_hotline'], '+84.868.098.591'); ?></span>
                </a>
            </h4>

            <div class="feedback-container">

                <?php 
                $getposts = new WP_query();
                $getposts->query('post_status=public&showposts=10&post_type=post&cat=6');
                global $wp_query;
                $wp_query->in_the_loop = true;

                while ($getposts->have_posts()) : $getposts->the_post() ?>
                <div>
                    <?php the_post_thumbnail(); ?>
                    <span>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </span>
                </div>
                <?php endwhile; wp_reset_postdata();?>

            </div>
        </div>

    </div>
</div>



<?php get_footer(); ?>