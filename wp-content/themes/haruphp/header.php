<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--Plugin css website-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<?php 
		if(is_home()) {
			echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/custom_index.css">';
		}
		if(is_page('people')) {
			echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/custom_people.css">';	
		}

		if(is_page('career')) {
			echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/custom_career.css">';	
			echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/slick.css"/>';
			echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/slick-theme.css"/>';
		}

		if(is_page('contact')) {
			echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/custom_contact.css">';	
		}

		if(is_page('partnership')) {
			echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/custom_partnership.css">';	
		}
	?>

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<!--style only for home page.-->
	<?php 
	if(is_home()) {
		echo '
		<style>
		body { overflow-x: hidden; }
		</style>
		';
	}
	?>
	<?php wp_head(); ?>
</head>
<body <?php body_class() . ' web'; ?>>
	<nav>
		<!--Div of language
		<div id="lang-div">
			<div id="lang-toggle">
				<select id="toggle">
					<option value="en" id="toggle-en">English</option>
					<option value="zh" id="toggle-zh">中文</option>
				</select>
			</div>
		</div>
	-->
		<?php hk_menu_navigation(); ?>
	</nav>