<?php

function innova_customize_register($wp_customize){

    $wp_customize->add_section('innova_options_scheme', array(
        'title'    => __('Innova Options', 'themename'),
        'description' => '',
        'priority' => 50,
    ));

    //  =============================

////  = Head line         =
    //  =============================
    $wp_customize->add_setting('innova_theme_options[head_line]', array(
        'default'        => 'Head line',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('innova_about_us_headline', array(
        'label'      => __('Head Line', 'themename'),
        'section'    => 'innova_options_scheme',
        'settings'   => 'innova_theme_options[head_line]',
        'type'  => 'text'
    ));

    ////  = About Us          =
    //  =============================
    $wp_customize->add_setting('innova_theme_options[about_us]', array(
        'default'        => 'About Us here',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('innova_about_us', array(
        'label'      => __('About Us', 'themename'),
        'section'    => 'innova_options_scheme',
        'settings'   => 'innova_theme_options[about_us]',
        'type'  => 'textarea'
    ));


    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('display_header_text', array(
        'settings' => 'themename_theme_options[checkbox_test]',
        'label'    => __('Display Header Text'),
        'section'  => 'innova_options_scheme',
        'type'     => 'checkbox',
    ));



    //  =============================
    //  = Image Upload1   1           =
    //  =============================
    $wp_customize->add_setting('innova_theme_options[image_slider_1]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default'       =>  INNOVA_IMG_URL.'/slider.jpg',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'img_slider1', array(
        'label'    => __('Image Slider 1 ', 'themename'),
        'section'  => 'innova_options_scheme',
        'settings' => 'innova_theme_options[image_slider_1]',
    )));
     //  = Image Upload2              =
    //  =============================
    $wp_customize->add_setting('innova_theme_options[image_slider_2]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default'       =>  INNOVA_IMG_URL.'/slider.jpg',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'img_slider2', array(
        'label'    => __('Image Slider 2', 'themename'),
        'section'  => 'innova_options_scheme',
        'settings' => 'innova_theme_options[image_slider_2]',
    )));

      //  = Image Upload3              =
    //  =============================
    $wp_customize->add_setting('innova_theme_options[image_slider_3]', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',
        'default'       =>  INNOVA_IMG_URL.'/slider.jpg',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'img_slider3', array(
        'label'    => __('Image Slider 3', 'themename'),
        'section'  => 'innova_options_scheme',
        'settings' => 'innova_theme_options[image_slider_3]',
    )));

    //  =============================
    //  = File Upload               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[upload_test]', array(
        'default'           => 'arse',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'themename'),
        'section'  => 'innova_options_scheme',
        'settings' => 'themename_theme_options[upload_test]',
    )));

    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[link_color]', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'themename'),
        'section'  => 'innova_options_scheme',
        'settings' => 'themename_theme_options[link_color]',
    )));

       //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('innova_options_scheme', array(
        'label'      => __('Color Scheme', 'themename'),
        'section'    => 'innova_options_scheme',
        'settings'   => 'themename_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));


    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('themename_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('themename_page_test', array(
        'label'      => __('Page Test', 'themename'),
        'section'    => 'innova_options_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'themename_theme_options[page_test]',
    ));


    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('themename_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'themename_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'innova_options_scheme',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));

    // =====================
    //  = Category Dropdown =
    //  =====================
    $categories = get_categories();
    $cats = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cats[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('_s_f_slide_cat', array(
        'default'        => $default
    ));
    $wp_customize->add_control( 'cat_select_box', array(
        'settings' => '_s_f_slide_cat',
        'label'   => 'Select Category:',
        'section'  => '_s_f_home_slider',
        'type'    => 'select',
        'choices' => $cats,
    ));
}

add_action('customize_register', 'innova_customize_register', 1);

function mcs_social($wp_customize){

    $wp_customize->add_section('mcs_social_handle', array(
        'title'    => __('Social Network Handles', 'mcs'),
        'description' => 'i.e., Acme Company\'s Facebook is https://facebook.com/acmecompany then enter "acmecompany"',
        'priority' => 70,
    ));

    //  =============================
    //  = Facebook                  =
    //  =============================
    $wp_customize->add_setting('mcs_fb_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mcs_fb', array(
        'label'      => __('Facebook Handle', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_fb_op',
    ));

        //  =============================
    //  = Twitter                  =
    //  =============================
    $wp_customize->add_setting('mcs_tw_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('mcs_tw', array(
        'label'      => __('Twitter Handle', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_tw_op',
    ));

    //  =============================
    //  = RSS                       =
    //  =============================
     $wp_customize->add_setting('mcs_rs_op', array(
        'default'        => 'rss2_url',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'mcs_rs', array(
        'settings' => 'mcs_rs_op',
        'label'   => 'RSS Feed',
        'section' => 'mcs_social_handle',
        'type'    => 'select',
                'choices'       => array(
                    'rdf_url'       => 'RDF/RSS 1.0 feed',
                    'rss2_url'  => 'RSS 2.0 feed',
                    'atom_url'  => 'Atom feed',
        ),
    ));
}

//add
// add_action( 'customize_register', 'mcs_social' );


// AVANDA
function avadanta_sections_settings( $wp_customize ){

    $selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

    $wp_customize->get_setting( 'header_textcolor' ) ;

    // Remove the core header textcolor control, as it shares the main text color.
    $wp_customize->remove_control( 'header_textcolor' );

    $wp_customize->add_setting( 'header_title_color', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

  $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'header_title_color',array(
            'label' => esc_html__('Header Text Color','avadanta'),
            'description' => esc_html__('Header Text Title Color','avadanta'),
            'section' => 'colors',
        ))
    );

    $wp_customize->add_setting( 'header_tagline_color', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

  $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'header_tagline_color',array(
            'label' => esc_html__('Header Tagline Color','avadanta'),
            'description' => esc_html__('Header Tagline  Color','avadanta'),
            'section' => 'colors',
        ))
    );

/* Sections Settings */
    $wp_customize->add_panel( 'section_settings', array(
        'priority'       => 126,
        'capability'     => 'edit_theme_options',
        'title'      => esc_html__('Innova Theme settings','avadanta'),
                'description' => __('Drag and Drop to Reorder', 'avadanta'). '<img class="avadanta-drag-spinner" src="'.admin_url('/images/spinner.gif').'">',

    ) );



    $wp_customize->add_panel( 'home_section_settings', array(
        'priority'       => 127,
        'capability'     => 'edit_theme_options',
        'title'      => esc_html__('Avadanta Front Page Sections','avadanta'),
    ) );

//Latest News Section


    // Giới thiệu công ty

     $wp_customize->add_section('avadanta_layout_sidebars',array(
            'title' => esc_html__('Blog Giối Thi','avadanta'),
            'panel' => 'section_settings',
            'priority'       => 9,
            ));
    $wp_customize->add_setting('innova_theme_options[text_test]',
        array(
            'sanitize_callback' => 'avadanta_sanitize_select',
           // 'default'   => 'CÔNG TY BẮC NAM TRUNG',
            'type'      => 'option'


        )
    );


    $wp_customize->add_control('front_block_as_headline',
        array(
            'type'        => 'text',
            'label'       => esc_html__('Tiêu Đề', 'avadanta'),
            'description' => esc_html__('Tên công ty', 'avadanta'),
            'section'     => 'avadanta_layout_sidebars',
            'settings' => 'innova_theme_options[text_test]',


        )
    );

    // test
    // $wp_customize->add_setting('innova_theme_options[text_test]', array(
    //     'default'        => 'value_xyz',
    //     'capability'     => 'edit_theme_options',
    //     'type'           => 'option',

    // ));

    // $wp_customize->add_control('themename_text_test', array(
    //     'label'      => __('Text Test', 'themename'),
    //     'section'    => 'innova_options_scheme',
    //     'settings'   => 'innova_theme_options[text_test]',
    // ));
    //end test




    $wp_customize->add_section('avadanta_layout_sidebars',array(
            'title' => esc_html__('Giới Thiệu Công Ty','avadanta'),
            'panel' => 'section_settings',
            'priority'       => 9,
            ));

         $wp_customize->add_setting('front_block_about_us',
        array(
            'sanitize_callback' => 'avadanta_sanitize_select',
            'default'           => 'Với khẩu hiệu "1 ý chí, 10 thành công", tập thể CÔNG TY CỔ PHẦN XÂY DỰNG BẮC NAM TRUNG đang nỗ lực không ngừng tìm kiếm cơ hội trong các lĩnh vực "Đầu tư xây dựng - Thi công xây lắp - Kinh doanh, thương mại - Tư vấn, khảo sát, thiết kế" khai thác mọi tiềm năng để trở thành một Công ty đi đầu trong lĩnh vực xây dựng.',
        )
    );
    $wp_customize->add_control('front_block_about_us',
        array(
            'type'        => 'textarea',
            'label'       => esc_html__('Giới Thiệu Công Ty', 'avadanta'),
            'description' => esc_html__('This will be apply for blog template layout', 'avadanta'),
            'section'     => 'avadanta_layout_sidebars',

        )
    );


    $wp_customize->add_setting('avadanta_single_blog_temp_layout',
        array(
            'sanitize_callback' => 'avadanta_sanitize_select',
            'default'           => 'rightsidebar',
        )
    );
    $wp_customize->add_control('avadanta_single_blog_temp_layout',
        array(
            'type'        => 'select',
            'label'       => esc_html__('Single Post Template Layout', 'avadanta'),
            'description' => esc_html__('This will be apply for single Post template layout', 'avadanta'),
            'section'     => 'avadanta_layout_sidebars',
            'choices'     => array(
                'rightsidebar' => esc_html__('Right sidebar', 'avadanta'),
                'leftsidebar'  => esc_html__('Left sidebar', 'avadanta'),
                'fullwidth'    => esc_html__('No sidebar', 'avadanta'),
            ),
        )
    );

    $wp_customize->add_setting('avadanta_page_temp_layout',
        array(
            'sanitize_callback' => 'avadanta_sanitize_select',
            'default'           => 'rightsidebar',
        )
    );
    $wp_customize->add_control('avadanta_page_temp_layout',
        array(
            'type'        => 'select',
            'label'       => esc_html__('Page Template Layout', 'avadanta'),
            'description' => esc_html__('This will be apply for Page template layout', 'avadanta'),
            'section'     => 'avadanta_layout_sidebars',
            'choices'     => array(
                'rightsidebar' => esc_html__('Right sidebar', 'avadanta'),
                'leftsidebar'  => esc_html__('Left sidebar', 'avadanta'),
                'fullwidth'    => esc_html__('No sidebar', 'avadanta'),
            ),
        )
    );




 $wp_customize->add_section('avadanta_footer_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Footer Options', 'avadanta'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );


$wp_customize->add_setting('avadanta_top_footer_enable',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_top_footer_enable',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Footer Top Section?', 'avadanta'),
            'section'     => 'avadanta_footer_settings',
            'description' => esc_html__('Check this box to Disable Top Footer section.', 'avadanta'),
        )
    );


$wp_customize->add_setting( 'avadanta_footer_widgets_column',
            array(
                'capability'        => 'edit_theme_options',
                'default'           => 'mt-column-3',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control( 'avadanta_footer_widgets_column',
                array(
                    'label'         => esc_html__( 'Footer Widget Column', 'avadanta' ),
                    'section'       => 'avadanta_footer_settings',
                    'type'           => 'select',
                    'settings'      => 'avadanta_footer_widgets_column',
                    'priority'      => 10,
                    'choices'     => array(
                        'mt-column-1'  => esc_html__( 'Col 1', 'avadanta' ),
                        'mt-column-2'  => esc_html__( 'Col 2', 'avadanta' ),
                        'mt-column-3'  => esc_html__( 'Col 3', 'avadanta' ),
                        'mt-column-4'  => esc_html__( 'Col 4', 'avadanta' ),
                    ),
                )

        );

        $wp_customize->add_setting('avadanta_footer_opacity_section',
            array(
                'default'           => '0.0',
                'sanitize_callback' => 'avadanta_sanitize_float_theme'
            )
        );
        $wp_customize->add_control('avadanta_footer_opacity_section',
            array(
                'label'    => __('Footer Overlay Opacity', 'avadanta'),
                'section'  => 'avadanta_footer_settings',
                'type'     => 'number',
                'input_attrs' => array(
                    'min' => '0.01', 'step' => '0.01', 'max' => '1',
                  ),
                'priority' => 10,

            )
        );

        $wp_customize->add_setting('avadanta_color_scheme',array(
        'default' => esc_html__('#1b1b1b','avadanta'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'avadanta_color_scheme',array(
            'label' => esc_html__('Background Color','avadanta'),
            'description' => esc_html__('Change Footer Background Color','avadanta'),
            'section' => 'avadanta_footer_settings',
            'settings' => 'avadanta_color_scheme'
        ))
    );

    $wp_customize->add_setting('avadanta_footer_widgets_title_color',
        array(
            'default' => esc_html__('#fff','avadanta'),
            'sanitize_callback' => 'sanitize_hex_color'

        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'avadanta_footer_widgets_title_color',
        array(
            'label'   => esc_html__('Widget Title Color', 'avadanta'),
            'section' => 'avadanta_footer_settings',
        )
    )
    );


        $wp_customize->add_setting('avadanta_footer_widgets_text_color',
        array(
            'default' => esc_html__('#fff','avadanta'),
            'sanitize_callback' => 'sanitize_hex_color'

        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'avadanta_footer_widgets_text_color',
        array(
            'label'   => esc_html__('Widget Text Color', 'avadanta'),
            'section' => 'avadanta_footer_settings',
        )
    )
    );

        $wp_customize->add_setting( 'footer_background_image', array(
            'default' => '',
              'sanitize_callback' => 'esc_url_raw',
            ) );

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_background_image', array(
              'label'    => __( 'Footer Background Image', 'avadanta' ),
              'section'  => 'avadanta_footer_settings',
              'settings' => 'footer_background_image',
            ) ) );

$wp_customize->add_section('avadanta_site_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Site Layout & Color', 'avadanta'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );


  $wp_customize->add_setting('avadanta_site_layout',
        array(
            'sanitize_callback' => 'avadanta_sanitize_select',
            'default'           => '',
        )
    );
    $wp_customize->add_control('avadanta_site_layout',
        array(
            'type'    => 'select',
            'label'   => esc_html__('Site Layout', 'avadanta'),
            'section' => 'avadanta_site_settings',
            'choices' => array(
                ''      => esc_html__('Full', 'avadanta'),
                'boxed' => esc_html__('Boxed', 'avadanta'),
            ),
        )
    );


        $wp_customize->add_setting('avadanta_theme_color_scheme',array(
        'default' => esc_html__('#ff7029','avadanta'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'avadanta_theme_color_scheme',array(
            'label' => esc_html__('Theme Color','avadanta'),
            'description' => esc_html__('Change Theme Color','avadanta'),
            'section' => 'avadanta_site_settings',
            'settings' => 'avadanta_theme_color_scheme'
        ))
    );


$wp_customize->add_section('avadanta_navigation_settings',
        array(
            'priority'    => 8,
            'title'       => esc_html__('Navigation Options', 'avadanta'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );





    // Navigation Button
    $wp_customize->add_setting('avadanta_navigation_url',
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           => '',
            ));

    $wp_customize->add_control('avadanta_navigation_url',
        array(
            'label'       => esc_html__('Top Navigation Button url', 'avadanta'),
            'section'     => 'avadanta_navigation_settings',
            'type'        => 'text',
        )
    );



    // Navigation Button
    $wp_customize->add_setting('avadanta_navigation_text',
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           => __('Get A Quote', 'avadanta'),
            ));

    $wp_customize->add_control('avadanta_navigation_text',
        array(
            'label'       => esc_html__('Top Navigation Button Text', 'avadanta'),
            'section'     => 'avadanta_navigation_settings',
            'type'        => 'text',
        )
    );

    // Footer BG Color
    $wp_customize->add_setting('avadanta_menubar_bg_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#fff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avadanta_menubar_bg_color',
        array(
            'label'       => esc_html__('Menu Bar Background Color', 'avadanta'),
            'section'     => 'avadanta_navigation_settings',
            'description' => '',
        )
    ));
    $wp_customize->add_setting('avadanta_menu_item_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#131313',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avadanta_menu_item_color',
        array(
            'label'       => esc_html__('Menu Link Color', 'avadanta'),
            'section'     => 'avadanta_navigation_settings',
            'description' => '',
        )
    ));
    // Header Menu Hover Color
    $wp_customize->add_setting('avadanta_menu_item_hover_color',
        array(
            'sanitize_callback'    => 'sanitize_hex_color',
            'default'              => '#ff7029',
        ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avadanta_menu_item_hover_color',
        array(
            'label'       => esc_html__('Menu Link Hover/Active Color', 'avadanta'),
            'section'     => 'avadanta_navigation_settings',
            'description' => '',
        )
    ));

    $wp_customize->add_setting('avadanta_submenu_item_hover_color',
        array(
            'sanitize_callback'    => 'sanitize_hex_color',
            'default'              => '#ff7029',
        ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avadanta_submenu_item_hover_color',
        array(
            'label'       => esc_html__('Sub Menu Hover Color', 'avadanta'),
            'section'     => 'avadanta_navigation_settings',
            'description' => '',
        )
    ));




$wp_customize->add_section('avadanta_breadcrumb_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Header/Breadcrumb Options', 'avadanta'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );

    $wp_customize->add_setting('avadanta_header_bg_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#000',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avadanta_header_bg_color',
        array(
            'label'       => esc_html__('Header Background Color', 'avadanta'),
            'section'     => 'avadanta_breadcrumb_settings',
            'description' => esc_html__('Select To Change Header Background Color', 'avadanta'),
        )
    ));


        $wp_customize->add_setting('braedcrumb_height',
            array(
                'default'           => '62',
                'sanitize_callback' => 'avadanta_sanitize_float_theme'
            )
        );
        $wp_customize->add_control('braedcrumb_height',
            array(
                'label'    => __('Breadcrumb Header Height', 'avadanta'),
                'section'  => 'avadanta_breadcrumb_settings',
                'type'     => 'number',
                'input_attrs' => array(
                    'min' => '20', 'step' => '', 'max' => '100',
                  ),
                'priority' => 10,

            )
        );

     $wp_customize->add_setting('avadanta_breadcrumb_title_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#fff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avadanta_breadcrumb_title_color',
        array(
            'label'       => esc_html__('Breadcrumb Title Color', 'avadanta'),
            'section'     => 'avadanta_breadcrumb_settings',
            'description' => esc_html__('Select To Change Breadcrumb Title Color', 'avadanta'),
        )
    ));


    $wp_customize->add_setting('avadanta_header_show_blog',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_header_show_blog',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Blog Page Header', 'avadanta'),
            'section'     => 'avadanta_breadcrumb_settings',
            'description' => esc_html__('Check this box to Disable Page Header on Blog Page', 'avadanta'),
        )
    );

    $wp_customize->add_setting('avadanta_header_show_single_blog',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_header_show_single_blog',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Single Post Header', 'avadanta'),
            'section'     => 'avadanta_breadcrumb_settings',
            'description' => esc_html__('Check this box to Disable Page Header on Single Post', 'avadanta'),
        )
    );

 $wp_customize->add_setting('avadanta_header_show_single_page',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_header_show_single_page',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Single Page Header', 'avadanta'),
            'section'     => 'avadanta_breadcrumb_settings',
            'description' => esc_html__('Check this box to Disable Page Header on Single Page', 'avadanta'),
        )
    );

 $wp_customize->add_setting('avadanta_header_show_breadcrumb',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_header_show_breadcrumb',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Breadcrumbs', 'avadanta'),
            'section'     => 'avadanta_breadcrumb_settings',
            'description' => esc_html__('Check this box to Disable Breadcrumbs on all pages and posts', 'avadanta'),
        )
    );


        $wp_customize->add_section('avadanta_fonts_style',array(
            'title' => esc_html__('Theme Typography','avadanta'),
            'panel' => 'section_settings',

            ));

    $wp_customize->add_setting('avadanta_show_typography',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_show_typography',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Enable Typography', 'avadanta'),
            'section'     => 'avadanta_fonts_style',
            'description' => esc_html__('Check this box to Enable Custom Typography', 'avadanta'),
        )
    );




    $wp_customize->add_section('avadanta_sticky_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Sticky Menu/Scroll Up Option', 'avadanta'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );


    $wp_customize->add_setting('avadanta_sticky_thumb',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_sticky_thumb',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Sticky Menu', 'avadanta'),
            'section'     => 'avadanta_sticky_settings',
            'description' => esc_html__('Check this box to Disable Sticky Menu.', 'avadanta'),
        )
    );


    $wp_customize->add_setting('avadanta_scroll_thumb',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_scroll_thumb',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Scroll To Top', 'avadanta'),
            'section'     => 'avadanta_sticky_settings',
            'description' => esc_html__('Check this box to Disable Scroll To Top.', 'avadanta'),
        )
    );


    $wp_customize->add_setting('avadanta_preloader_option',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_preloader_option',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Preloader Option', 'avadanta'),
            'section'     => 'avadanta_sticky_settings',
            'description' => esc_html__('Check this box to Disable Preloader', 'avadanta'),
        )
    );

     $wp_customize->add_section('avadanta_bottom_footer_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Bottom Footer Options', 'avadanta'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );


$wp_customize->add_setting('avadanta_copyright_enable',
        array(
            'sanitize_callback' => 'avadanta_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('avadanta_copyright_enable',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Copyright Section?', 'avadanta'),
            'section'     => 'avadanta_bottom_footer_settings',
            'description' => esc_html__('Check this box to Disable copyright section.', 'avadanta'),
        )
    );
    $wp_customize->add_setting('avadanta_copyright_text',
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            /* translators: %s: Copyright Text */
            'default'           => sprintf(__('Proudly powered by %1$s WordPress %3$s', "avadanta"),
                '<a href="https://wordpress.org/" target="_blank">',
                '<a href="" target="_blank">',
                '</a>'
            ),
        )
    );
    $wp_customize->add_control('avadanta_copyright_text',
        array(
            'label'       => esc_html__('Copyright Content Here', 'avadanta'),
            'section'     => 'avadanta_bottom_footer_settings',
            'type'        => 'textarea',
        )
    );

    $wp_customize->add_setting('avadanta_bottom_social_url',
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           => __('#', 'avadanta'),
            ));

    $wp_customize->add_control('avadanta_bottom_social_url',
        array(
            'label'       => esc_html__('Facebook url', 'avadanta'),
            'section'     => 'avadanta_bottom_footer_settings',
            'type'        => 'url',
        )
    );

        $wp_customize->add_setting('avadanta_bottom_twitter_social_url',
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           => __('#', 'avadanta'),
            ));

    $wp_customize->add_control('avadanta_bottom_twitter_social_url',
        array(
            'label'       => esc_html__('Twitter url', 'avadanta'),
            'section'     => 'avadanta_bottom_footer_settings',
            'type'        => 'url',
        )
    );

       $wp_customize->add_setting('avadanta_bottom_insta_social_url',
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           => __('#', 'avadanta'),
            ));

    $wp_customize->add_control('avadanta_bottom_insta_social_url',
        array(
            'label'       => esc_html__('Instagram url', 'avadanta'),
            'section'     => 'avadanta_bottom_footer_settings',
            'type'        => 'url',
        )
    );

       $wp_customize->add_setting('avadanta_bottom_linkedin_social_url',
        array(
            'sanitize_callback' => 'avadanta_sanitize_text',
            'default'           => __('#', 'avadanta'),
            ));

    $wp_customize->add_control('avadanta_bottom_linkedin_social_url',
        array(
            'label'       => esc_html__('Linkedin url', 'avadanta'),
            'section'     => 'avadanta_bottom_footer_settings',
            'type'        => 'url',
        )
    );


          /**
         * Section Reorder
        */
        $wp_customize->add_section( 'avadanta_homepage_section_reorder', array(
            'title'     => esc_html__( 'Homepage Section Re Order', 'avadanta' ),
            'priority'  => 5,
            'panel'       => 'home_section_settings',

        ) );


}
add_action( 'customize_register', 'avadanta_sections_settings' );

// /**
//  * Add selective refresh for Front page section section controls.
//  */
// function avadanta_register_home_section_partials( $wp_customize ){
//     //News
//     $wp_customize->selective_refresh->add_partial( 'home_news_section_title', array(
//         'selector'            => '.section-module.blog .section-subtitle',
//         'settings'            => 'home_news_section_title',
//         'render_callback'  => 'avadanta_home_news_section_title_render_callback',

//     ) );

//     $wp_customize->selective_refresh->add_partial( 'home_news_section_discription', array(
//         'selector'            => '.section-module.blog .section-title',
//         'settings'            => 'home_news_section_discription',
//         'render_callback'  => 'avadanta_home_news_section_discription_render_callback',

//     ) );
// }
// add_action( 'customize_register', 'avadanta_register_home_section_partials' );