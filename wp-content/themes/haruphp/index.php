<?php get_header(); ?>
<!--Index banner-->
<div class="banner-wrapper with-bg with-bg-top" id="parent-banner-wrapper" data-background="
   <?php echo check_image_isset($hk_options['index_banner'], 'img/banners/banner-index.jpg'); ?>
   ">
   <div class="banner">
      <div class="banner-header">
         <p class="size-m line-1">
            <?php echo check_text_isset($hk_options['index_banner_title_1'], 'We believe'); ?>
         </p>
         <p class="size-l line-2">
            <?php echo check_text_isset($hk_options['index_banner_title_2'], 'Eating is a Blessing'); ?>
         </p>
         <p class="size-s line-3"></p>
      </div>
   </div>
</div>
<div></div>
<div class="container">
<div class="row">
   <div class="half-box content with-bg index-box-header animate-left" data-background="
      <?php echo check_image_isset($hk_options['index_banner_about'], 'img/index/index-01.jpg'); ?>">
      <div class="text-center">
         <p class="index-header">
            <?php echo check_text_isset($hk_options['index_img_about_title'], 'Satisfying Tastes &amp; Appetites Around The World'); ?>
         </p>
         <p>
            <?php echo check_text_isset($hk_options['index_img_about_des'], 'We believe in the Power and Promise that comes from eating sumptuous food.'); ?>
         </p>
      </div>
   </div>
   <div class="half-box content index-box-content animate-right">
      <?php echo check_text_isset($hk_options['index_expert_about'], '<p>Founded in 2000, the BreadTalk Group has rapidly expanded to become a distinctive household brand owner that has established its mark on the world stage with its bakery, restaurant and food atrium footprints. Today, with close to 1000 outlets in 17 locales, the BreadTalk Group produces culinary magic for everyday recipes that you savour, uniting people with good taste around the world.</p>
         <p>With global staff strength of 7,000 employees, the Group operates more than 850 bakeries, 26 internationally acclaimed Din Tai Fung restaurants in Singapore and Thailand, as well as 60 award-winning Food Republic food atria in China, Singapore, Hong Kong, Malaysia, Taiwan and Thailand.</p>'); 
         ?>
      <a class="link-btn" href="<?php echo chuyen_den_trang('about') ?>">
      <?php echo learn_more_button(); ?>
      </a>
   </div>
</div>
<div id="index-portfolio" class="row">
   <div class="full-box content text-center">
      <!--Edit it on theme option.-->
      <h2>
         <?php echo check_text_isset($hk_options['index_portfolio_title'], 'Brand Portfolio'); ?>
      </h2>
      <p>
         <?php echo check_text_isset($hk_options['index_portfolio_des'], 'Our brand portfolio comprises BreadTalk&reg;, Toast Box, Food Republic, Din Tai Fung, The Icing Room, Bread Society, RamenPlay, Thye Moh Chan and Carl\'s Jr. in China.'); ?>
      </p>
      <!--Loop portfolio brands-->
      <div id="index-portfolio-brands">

         <?php 
                $getposts = new WP_query();
                $getposts->query('post_status=public&showposts=10&post_type=post&cat=9');
                global $wp_query;
                $wp_query->in_the_loop = true;

                $count = 0;
                while ($getposts->have_posts()) : $getposts->the_post() ?>
               
         <a href="<?php the_permalink(); ?>">
            <div class="brand-hover-wrapper" data-red="24<?php echo $count; ?>" data-blu="13<?php echo $count; ?>" data-grn="3<?php echo $count; ?>">
               <div class="brand-hover">
                  <p><?php the_title(); ?></p>
               </div>
            </div>
            <?php echo get_the_post_thumbnail( $post_id, 'post-thumbnail', array('class' => 'img-responsive')) ?>
         </a>

         <?php $count++; endwhile; wp_reset_postdata();?>

      </div>
   </div>
   <!--end loop portfolio brands-->
</div>
<div class="row">
   <div class="half-box content with-bg index-box-header animate-left" data-background="
      <?php echo check_image_isset($hk_options['index_banner_investor'], 'img/index/index-03.jpg'); ?>
      ">
      <div class="text-center">
         <p class="index-header">
            <?php echo check_text_isset($hk_options['index_investor_title'], 'Invest in Us'); ?>
         </p>
         <p>
            <?php echo check_text_isset($hk_options['index_investor_des'], 'Good Food and Great Experiences we commit to everyday.'); ?>
         </p>
      </div>
   </div>
   <div class="half-box content index-box-content animate-right">
      <?php echo check_text_isset($hk_options['index_expert_investor'], '<p>Access our financial results, the latest stock information and share prices, recent corporate presentations as well as our annual reports and circulars.</p>
         <p>We are committed to providing timely, concise and accurate financial information.</p>'); ?>
      <a class="link-btn" href="<?php echo bloginfo('url'); //chuyen_den_trang('investor') ?>/investor">
      <?php echo learn_more_button(); ?>
      </a>
   </div>
</div>
<div class="row">
   <div class="half-box content with-bg push index-box-header animate-right" data-background="
      <?php echo check_image_isset($hk_options['index_banner_partner'], 'img/index/index-02.jpg'); ?>">
      <div class="text-center">
         <p class="index-header">
            <?php echo check_text_isset($hk_options['index_partner_title'], 'Be Our Partner'); ?>
         </p>
         <p>
            <?php echo check_text_isset($hk_options['index_partner_des'], 'Find out how we are the right fit for you.'); ?>
         </p>
      </div>
   </div>
   <div class="half-box content pull index-box-content animate-left">
      <?php echo check_text_isset($hk_options['index_expert_partner'], '<p>Our franchises offer rewarding careers while making a real difference to the people in their communities.</p>
         <p>We are rapidly expanding our franchise network, and are currently seeking compatible enterprises to be part of our growth and success. We have forged partnerships in China, Hong Kong, Thailand, Malaysia, Indonesia, the Philippines, Kuwait, Oman, Vietnam, Bahrain, Saudi Arabia, Sri Lanka, Lebanon, Qatar, Cambodia and Myanmar to date.</p>
         <p>We look forward to working with passionate, like-minded partners.</p>');?>
      <a class="link-btn" href="<?php echo chuyen_den_trang('partnership'); ?>">
      <?php echo learn_more_button(); ?>
      </a>
   </div>
</div>
<div class="row">
   <div class="half-box content with-bg index-box-header animate-left" data-background="
      <?php echo check_image_isset($hk_options['index_banner_career'], 'img/index/index-04.jpg'); ?>
      ">
      <div class="text-center">
         <p class="index-header">
            <?php echo check_text_isset($hk_options['index_career_title'], 'Join Our Family'); ?>
         </p>
         <p>
            <?php echo check_text_isset($hk_options['index_career_des'], 'There\'s more to life at the BreadTalk Group'); ?>
         </p>
      </div>
   </div>
   <div class="half-box content index-box-content animate-right">
      <?php echo check_text_isset($hk_options['index_expert_career'], '<p>Our employees are inspired to be the best they can be, where our team is as diverse as the markets we serve, thriving and creating outstanding delicacies year after year.</p>
         <p>We foster an open environment where creativity thrives, and provide you with the opportunities you need to keep developing.</p>');?>
      <a class="link-btn" href="<?php echo chuyen_den_trang('career') ?>">
      <?php echo learn_more_button(); ?>
      </a>
   </div>
</div>
<div class="row">
   <div class="half-box content with-bg push index-box-header animate-right" data-background="
      <?php echo check_image_isset($hk_options['index_banner_people'], 'img/index/index-05.jpg'); ?>
      ">
      <div class="text-center">
         <p class="index-header">
            <?php echo check_text_isset($hk_options['index_people_title'], 'Live Our Values'); ?>
         </p>
         <p>
            <?php echo check_text_isset($hk_options['index_people_des'], 'We set the highest standard of corporate conduct towards everyone we work with and the communities we touch.'); ?>
         </p>
      </div>
   </div>
   <div class="half-box content pull index-box-content animate-left">
      <?php echo check_text_isset($hk_options['index_expert_people'], '<p>At the BreadTalk Group, we believe in giving back to the communities that we are a part of. We do our bit in supporting causes closest to our hearts, such as developing the local arts and culture scene, nurturing our next generation and supporting the local communities.</p>'); ?>
      <a class="link-btn" href="<?php echo chuyen_den_trang('community'); ?>">
      <?php echo learn_more_button(); ?>
      </a>
   </div>
</div>
</div>
<?php get_footer(); ?>