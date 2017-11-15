<?php 

//kiểm tra tồn tại hình ảnh trước khi thay hihh.
function check_image_isset($tontai, $link_image) {
	if(isset($tontai) && !empty($tontai))
		return $tontai;
	return get_template_directory_uri() . '/' . $link_image;
	
}

//kiemt ra text ton tai trươc khi thay.
function check_text_isset($tontai, $text) {
	if(isset($tontai) && !empty($tontai))
		return $tontai;
	return $text;	
}


//change learn more button
function learn_more_button() { 
	if(isset($hk_options['learn_more_button_text']))
		return $hk_options['learn_more_button_text'];
	return 'learn more';
 }

//chuyển trang
function chuyen_den_trang($page_name) {
	return get_template_directory_uri() . '/'. $page_name;
}

//page menu navigation
function hk_menu_navigation() {?>
	<ul>
		<li class="Home first active">
			<a href="<?php echo bloginfo('url'); ?>" title="Home" >Home</a>
		</li>
		<li class="About">
			<a href="<?php echo bloginfo('url'); ?>/about" title="Giới Thiệu" >Giới Thiệu</a>
		</li>
		<li class="Investor">
			<a href="<?php echo bloginfo('url'); ?>/investor" title="Thư viện">Thư Viện</a>
		</li>
		<li class="Partnership">
			<a href="<?php echo bloginfo('url'); ?>/partnership" title="Đối Tác">Đối Tác</a>
		</li>
		<li class="People">
			<a href="<?php echo bloginfo('url'); ?>/people" title="Tin Tức" >Tin Tức</a>
		</li>
		<li class="Career">
			<a href="<?php echo bloginfo('url'); ?>/career" title="Tuyển Dụng" >Tuyển Dụng</a>
		</li>
		<li class="Contact last">
			<a href="<?php echo bloginfo('url'); ?>/contact" title="Liên hệ" >Liên Hệ</a>
		</li>
	</ul>
 <?php }



//query function
 function hk_query($show_post, $post_type = 'post', $cat_id) {
 	$getposts = new WP_query(); 
	$getposts->query(
		'post_status=publish,
		showposts={$show_post},
		post_type={$post_type},
		cat={$cat_id}'
	);
	global $wp_query; 
	$wp_query->in_the_loop = true; 
 }

