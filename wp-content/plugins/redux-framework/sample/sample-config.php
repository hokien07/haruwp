<?php

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    
    // This is your option name where all the Redux data is stored.
    $opt_name = "hk_options";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }


    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => false,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
    );

    Redux::setArgs( $opt_name, $args );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    
    // -> Start trang chủ.
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Trang Chủ', 'redux-framework-demo' ),
        'id'               => 'index',
        'desc'             => __( 'Các thông tin cần thay đổi ở trang chủ', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Banner Trang Chủ', 'redux-framework-demo' ),
        'id'               => 'index_banner',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __( 'Bổ sung hình ảnh banner trên trang chủ', 'redux-framework-demo' ),
        'fields'           => array(
            array(
                'id'       => 'index_banner_about',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Banner about', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'index_banner_investor',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Banner investor', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'index_banner_partner',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Banner partner', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'index_banner_career',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Banner career', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'index_banner_people',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Banner people', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' )
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Title index Banner', 'redux-framework-demo' ),
        'id'               => 'index-title-all-banner',
        'subsection'       => true,
        'customizer_width' => '500px',
        'desc'             => __( 'Title banner trên trang chủ', 'redux-framework-demo' ),
        'fields'           => array(
            array(
                'id'       => 'index_banner_title_1',
                'type'     => 'text',
                'title'    => __( 'Banner title 1', 'redux-framework-demo' ),
                'desc'     => __( 'top index banner title 1', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'index_banner_title_2',
                'type'     => 'text',
                'title'    => __( 'Banner title 2', 'redux-framework-demo' ),
                'desc'     => __( 'Top index banner title 2', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_img_about_title',
                'type'     => 'text',
                'title'    => __( 'Index banner title about', 'redux-framework-demo' ),
                'desc'     => __( 'Banner title about', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_img_about_des',
                'type'     => 'editor',
                'title'    => __( 'Index banner des about', 'redux-framework-demo' ),
                'desc'     => __( 'Banner des about', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_expert_about',
                'type'     => 'editor',
                'title'    => __( 'Tóm tắt giới thiệu', 'redux-framework-demo' ),
                'desc'     => __( 'Tóm tắt phần giới thiệu', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_portfolio_title',
                'type'     => 'text',
                'title'    => __( 'Index banner title portfolio', 'redux-framework-demo' ),
                'desc'     => __( 'Banner title portfolio', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_portfolio_des',
                'type'     => 'editor',
                'title'    => __( 'Index banner des portfolio', 'redux-framework-demo' ),
                'desc'     => __( 'Banner des portfolio', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_investor_title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề phần investor', 'redux-framework-demo' ),
                'desc'     => __( 'Tiêu đề phần investor sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),


            array(
                'id'       => 'index_investor_des',
                'type'     => 'editor',
                'title'    => __( 'mô tả phần investor', 'redux-framework-demo' ),
                'desc'     => __( 'mô tả phần investor sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_expert_investor',
                'type'     => 'editor',
                'title'    => __( 'Tóm tắt phần investor', 'redux-framework-demo' ),
                'desc'     => __( 'Tóm tắt phần investor sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),


            array(
                'id'       => 'index_partner_title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề phần partner', 'redux-framework-demo' ),
                'desc'     => __( 'Tiêu đề phần investor sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),


            array(
                'id'       => 'index_partner_des',
                'type'     => 'editor',
                'title'    => __( 'mô tả phần patterns', 'redux-framework-demo' ),
                'desc'     => __( 'mô tả phần partner sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_expert_partner',
                'type'     => 'editor',
                'title'    => __( 'Tóm tắt phần patterns', 'redux-framework-demo' ),
                'desc'     => __( 'Tóm tắt phần patterns sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_career_title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề phần career', 'redux-framework-demo' ),
                'desc'     => __( 'Tiêu đề phần career sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),


            array(
                'id'       => 'index_career_des',
                'type'     => 'editor',
                'title'    => __( 'mô tả phần career', 'redux-framework-demo' ),
                'desc'     => __( 'mô tả phần partner sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_expert_career',
                'type'     => 'editor',
                'title'    => __( 'Tóm tắt phần career', 'redux-framework-demo' ),
                'desc'     => __( 'Tóm tắt phần career sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_people_title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề phần people', 'redux-framework-demo' ),
                'desc'     => __( 'Tiêu đề phần career sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),


            array(
                'id'       => 'index_people_des',
                'type'     => 'editor',
                'title'    => __( 'mô tả phần career', 'redux-framework-demo' ),
                'desc'     => __( 'mô tả phần partner sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'index_expert_people',
                'type'     => 'editor',
                'title'    => __( 'Tóm tắt phần career', 'redux-framework-demo' ),
                'desc'     => __( 'Tóm tắt phần career sẽ xuất hiện ở trang chủ', 'redux-framework-demo' )
            ),


        )
    ) );

    // -> START trang gưới thiệu
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Trang Giới Thiệu', 'redux-framework-demo' ),
        'id'               => 'about-page',
        'customizer_width' => '500px',
        'icon'             => 'el el-edit',
    ) );


    Redux::setSection( $opt_name, array(
        'title'      => __( 'Nội dung trang giới thiệu', 'redux-framework-demo' ),
        'id'         => 'content-about-page',
        //'icon'  => 'el el-home'
        'desc'       => __( 'Thông tin trang about cần chỉnh sửa', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(

            array(
                'id'       => 'about_banner',
                'type'     => 'media',
                'preview'   => false,
                'url'      => true,
                'title'    => __( 'Banner đầu trang giới thiệu', 'redux-framework-demo' ),
                'desc'     =>__('Hình ảnh xuất hiện đầu tiên trong trang giới thiệu', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'about_title_1',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề banner giới thiệu', 'redux-framework-demo' ),
                'desc'     =>__('Tiêu đề hình ảnh phần giới thiệu', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'about_title_2',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề 2 banner giới thiệu', 'redux-framework-demo' ),
                'desc'     =>__('Tiêu đề 2 hình ảnh phần giới thiệu', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'about_title_3',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề 3 banner giới thiệu', 'redux-framework-demo' ),
                'desc'     =>__('Tiêu đề 3 hình ảnh phần giới thiệu', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'about_title_img_1',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Hình ảnh tiêu đề 1', 'redux-framework-demo' ),
                'desc'     =>__('Hình ảnh tiêu đề phần giới thiệu 1', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'about_title_img_2',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Hình ảnh tiêu đề 2', 'redux-framework-demo' ),
                'desc'     =>__('Hình ảnh tiêu đề phần giới thiệu 2', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'about_title_img_3',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Hình ảnh tiêu đề 3', 'redux-framework-demo' ),
                'desc'     =>__('Hình ảnh tiêu đề phần giới thiệu 3', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'about_title_img_4',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Hình ảnh tiêu đề 4', 'redux-framework-demo' ),
                'desc'     =>__('Hình ảnh tiêu đề phần giới thiệu 4', 'redux-framework-demo' )
            ),
        )
    ) );

   

    // -> START Trang Đối Tác
    Redux::setSection( $opt_name, array(
        'title' => __( 'Trang Đối Tác', 'redux-framework-demo' ),
        'id'    => 'partnerns',
        'desc'  => __( 'Thay đổi thông tin trang đối tác tại đây', 'redux-framework-demo' ),
        'icon'  => 'el el-brush',
        'fields'     => array(
            array(
                'id'       => 'banner_partnership',
                'type'     => 'media',
                'preview'  => false,
                'url'      =>true,
                'title'    => __('Banner Đối Tác', 'redux-framework-demo'),
                'desc'     => __('Hình ảnh hiển thị trên cùng trang đối tác', 'redux-framework-demo')
            ),
            array(
                'id'       => 'partnership_banner_title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề hình ảnh', 'redux-framework-demo' ),
                'desc'     => __('Tiêu đề nằm trên hình ảnh trang đối tác', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'partnership_banner_des',
                'type'     => 'textarea',
                'title'    => __( 'Mô tả hình ảnh', 'redux-framework-demo' ),
                'desc'     => __('mô tả hình ảnh nằm trên hình ảnh trang đối tác', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'partnership_des',
                'type'     => 'editor',
                'title'    => __( 'Phương châm làm việc', 'redux-framework-demo' ),
                'desc'     => __('Mô tả ngắn về phương châm làm việc', 'redux-framework-demo' )
            )
        )
    ) );

    
    // -> START Trang tin tức
    Redux::setSection( $opt_name, array(
        'title' => __( 'Trang Tin Tức', 'redux-framework-demo' ),
        'id'    => 'people',
        'desc'  => __( 'Chỉnh sửa mô tả trang tin tức', 'redux-framework-demo' ),
        'icon'  => 'el el-wrench',
        'fields'     => array(
            array(
                'id'       => 'people_des',
                'type'     => 'editor',
                'title'    => __( 'Mô tả trang tin tức', 'redux-framework-demo' ),
                'desc'     =>  __( 'Thông tin mô tả nằm dưới cụm từ tin tức mới về ẩm thực', 'redux-framework-demo' )
            )
        )
    ) );

    // -> START Trang tuyển dụng
    Redux::setSection( $opt_name, array(
        'title' => __( 'Trang Tuyển Dụng', 'redux-framework-demo' ),
        'id'    => 'career',
        'desc'  => __( 'Chỉnh sửa thông tin trang tuyển dụng', 'redux-framework-demo' ),
        'icon'  => 'el el-clook',
        'fields'     => array(
            array(
                'id'       => 'career_banner',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Banner Tuyển Dụng', 'redux-framework-demo' ),
                'desc'     => __( 'Hình ảnh trên cùng trang tuyển dụng', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'career_title_1',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề banner 1', 'redux-framework-demo' ),
                'desc'     =>  __( 'Tiêu đề nằm trên cùng trang tuyển dụng', 'redux-framework-demo' )
            ),

            array(
                'id'       => 'career_title_2',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề banner 2', 'redux-framework-demo' ),
                'desc'     =>  __( 'Tiêu đề nằm trên cùng trang tuyển dụng', 'redux-framework-demo' )
            ),


            array(
                'id'       => 'career_slider_des',
                'type'     => 'editor',
                'title'    => __( 'slide nhân viên', 'redux-framework-demo' ),
                'desc'     =>  __( 'Mô tả ngắn về những nhân viên có trong slide này', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'career_slider_des_1',
                'type'     => 'editor',
                'title'    => __( 'slide quy trình', 'redux-framework-demo' ),
                'desc'     =>  __( 'Mô tả ngắn về những quy trình mà nhân viên có thể trải nghiệm', 'redux-framework-demo' )
            )


        )
    ) );

    // -> START Trang tuyển dụng
    Redux::setSection( $opt_name, array(
        'title' => __( 'Trang Liên Hệ', 'redux-framework-demo' ),
        'id'    => 'contact',
        'desc'  => __( 'Chỉnh sửa thông tin trang Liên Hệ', 'redux-framework-demo' ),
        'icon'  => 'el el-clook',
        'fields'     => array(
            array(
                'id'       => 'banner_contact',
                'type'     => 'media',
                'preview'  => false,
                'url'      => true,
                'title'    => __( 'Banner Liên Hệ', 'redux-framework-demo' ),
                'desc'     => __( 'Hình ảnh trên cùng trang Liên Hệ', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'contact_title',
                'type'     => 'text',
                'title'    => __( 'Tiêu đề banner', 'redux-framework-demo' ),
                'desc'     =>  __( 'Tiêu đề nằm trên cùng trang liên hệ', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'contact_des',
                'type'     => 'editor',
                'title'    => __( 'Mô tả hình ảnh', 'redux-framework-demo' ),
                'desc'     =>  __( 'Mô tả ngắn về hình ảnh banner', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'career_slider_des_1',
                'type'     => 'editor',
                'title'    => __( 'slide quy trình', 'redux-framework-demo' ),
                'desc'     =>  __( 'Mô tả ngắn về những quy trình mà nhân viên có thể trải nghiệm', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'contact_hotline',
                'type'     => 'text',
                'title'    => __( 'Hotline', 'redux-framework-demo' ),
                'desc'     =>  __( 'Số hotline đặt hàng hoặc yêu cầu hỗ trợ', 'redux-framework-demo' )
            )


        )
    ) );
