<?php

$tabs_admin_theme = new Tabs_admin_theme();

$tabs_admin_theme->add(new Tab_admin_theme(array(
    'name' => 'General',
    'desc' => '',
    'icon' => 'general.png',
    'icon_active' => 'general_active.png',
    'icon_hover' => 'general_hover.png'
), array(
    new UploadOption_admin_theme(array(
        'name' => 'Header logo',
        'id' => 'logo',
        'desc' => 'Default: 85px x 35px',
        'default' => THEMEROOTURL . '/img/logo.png'
    )),
    new UploadOption_admin_theme(array(
        'name' => 'Logo (Retina)',
        'id' => 'logo_retina',
        'desc' => 'Default: 170px x 70px',
        'default' => THEMEROOTURL . '/img/retina/logo.png'
    )),
    new textOption_admin_theme(array(
        'name' => 'Header logo width',
        'id' => 'header_logo_standart_width',
        'not_empty' => true,
        'width' => '100px',
        'textalign' => 'center',
        'default' => '85'
    )),
    new textOption_admin_theme(array(
        'name' => 'Header logo height',
        'id' => 'header_logo_standart_height',
        'not_empty' => true,
        'width' => '100px',
        'textalign' => 'center',
        'default' => '35'
    )),
    new UploadOption_admin_theme(array(
        'type' => 'upload',
        'name' => 'Favicon',
        'id' => 'favicon',
        'desc' => 'Icon must be 16x16px or 32x32px',
        'default' => THEMEROOTURL . '/img/favicon.ico'
    )),
    new UploadOption_admin_theme(array(
        'type' => 'upload',
        'name' => 'Apple touch icon (57px)',
        'id' => 'apple_touch_57',
        'desc' => 'Icon must be 57x57px',
        'default' => THEMEROOTURL . '/img/apple_icons_57x57.png'
    )),
    new UploadOption_admin_theme(array(
        'type' => 'upload',
        'name' => 'Apple touch icon (72px)',
        'id' => 'apple_touch_72',
        'desc' => 'Icon must be 72x72px',
        'default' => THEMEROOTURL . '/img/apple_icons_72x72.png'
    )),
    new UploadOption_admin_theme(array(
        'type' => 'upload',
        'name' => 'Apple touch icon (114px)',
        'id' => 'apple_touch_114',
        'desc' => 'Icon must be 114x114px',
        'default' => THEMEROOTURL . '/img/apple_icons_114x114.png'
    )),
    new textOption_admin_theme(array(
        'name' => 'Top slider',
        'id' => 'theme_top_slider',
        'not_empty' => true,
        'default' => '',
        'width' => '100%',
        'textalign' => 'left',
        'desc' => ''
    )),

    new TextareaOption_admin_theme(array(
        'name' => 'Google analytics or any other code<br>(before &lt;/head&gt;)',
        'id' => 'code_before_head',
        'default' => ''
    )),
    new TextareaOption_admin_theme(array(
        'name' => 'Any code <br>(before &lt;/body&gt;)',
        'id' => 'code_before_body',
        'default' => ''
    )),
    new TextareaOption_admin_theme(array(
        'name' => 'Copyright',
        'id' => 'copyright',
        'default' => '&copy; 2020 Business Theme. All Rights Reserved.'
    )),
    new AjaxButtonOption_admin_theme(array(
        'title' => 'Import Sample Data',
        'id' => 'action_import',
        'name' => 'Import demo content',
        'confirm' => TRUE,
        'data' => array(
            'action' => 'ajax_import_dump'
        )
    ))
)));


$tabs_admin_theme->add(new Tab_admin_theme(array(
    'name' => 'Sidebars',
    'desc' => '',
    'icon' => 'sidebars.png',
    'icon_active' => 'sidebars_active.png',
    'icon_hover' => 'sidebars_hover.png'
), array(
    new SelectOption_admin_theme(array(
        'name' => 'Default sidebar layout',
        'id' => 'default_sidebar_layout',
        'desc' => '',
        'default' => 'no-sidebar',
        'options' => array(
            'left-sidebar' => 'Left sidebar',
            'right-sidebar' => 'Right sidebar',
            'no-sidebar' => 'Without sidebar'
        )
    )),
    new SidebarManager_admin_theme(array(
        'name' => 'Sidebar manager',
        'id' => 'sidebar_manager',
        'desc' => ''
    ))
)));


$tabs_admin_theme->add(new Tab_admin_theme(array(
    'name' => 'Fonts',
    'desc' => '',
    'icon' => 'fonts.png',
    'icon_active' => 'fonts_active.png',
    'icon_hover' => 'fonts_hover.png'
), array(
    new FontSelector_admin_theme(array(
        'name' => 'Main menu font',
        'id' => 'additional_font',
        'desc' => '',
        'default' => 'Open Sans',
        'options' => get_fonts_array_only_key_name()
    )),
    new textOption_admin_theme(array(
        'name' => 'Main font parameters',
        'id' => 'google_font_parameters_main_font',
        'not_empty' => true,
        'default' => ':300,400,600,700',
        'width' => '100%',
        'textalign' => 'left',
        'desc' => 'Google font. Click <a href="https://developers.google.com/webfonts/docs/getting_started" target="_blank">here</a> for help.'
    )),
    new FontSelector_admin_theme(array(
        'name' => 'Headers',
        'id' => 'text_headers_font',
        'desc' => '',
        'default' => 'Open Sans',
        'options' => get_fonts_array_only_key_name()
    )),
    new textOption_admin_theme(array(
        'name' => 'Headers font parameters',
        'id' => 'google_font_parameters_headers_font',
        'not_empty' => true,
        'default' => ':300,400,600,700',
        'width' => '100%',
        'textalign' => 'left',
        'desc' => 'Google font. Click <a href="https://developers.google.com/webfonts/docs/getting_started" target="_blank">here</a> for help.'
    )),
    new FontSelector_admin_theme(array(
        'name' => 'Content',
        'id' => 'main_content_font',
        'desc' => '',
        'default' => 'Open Sans',
        'options' => get_fonts_array_only_key_name()
    )),
    new textOption_admin_theme(array(
        'name' => 'Content font parameters',
        'id' => 'google_font_parameters_main_content_font',
        'not_empty' => true,
        'default' => ':300,400,600,700',
        'width' => '100%',
        'textalign' => 'left',
        'desc' => 'Google font. Click <a href="https://developers.google.com/webfonts/docs/getting_started" target="_blank">here</a> for help.'
    )),
    new textOption_admin_theme(array(
        'name' => 'H1 font size',
        'id' => 'h1_font_size',
        'not_empty' => true,
        'default' => '36px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption_admin_theme(array(
        'name' => 'H2 font size',
        'id' => 'h2_font_size',
        'not_empty' => true,
        'default' => '30px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption_admin_theme(array(
        'name' => 'H3 font size',
        'id' => 'h3_font_size',
        'not_empty' => true,
        'default' => '25px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption_admin_theme(array(
        'name' => 'H4 font size',
        'id' => 'h4_font_size',
        'not_empty' => true,
        'default' => '20px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption_admin_theme(array(
        'name' => 'H5 font size',
        'id' => 'h5_font_size',
        'not_empty' => true,
        'default' => '18px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption_admin_theme(array(
        'name' => 'H6 font size',
        'id' => 'h6_font_size',
        'not_empty' => true,
        'default' => '15px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption_admin_theme(array(
        'name' => 'Content font size',
        'id' => 'main_content_font_size',
        'not_empty' => true,
        'default' => '13px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
    new textOption_admin_theme(array(
        'name' => 'Content line height',
        'id' => 'main_content_line_height',
        'not_empty' => true,
        'default' => '20px',
        'width' => '100px',
        'textalign' => 'center',
        'desc' => ''
    )),
)));


$tabs_admin_theme->add(new Tab_admin_theme(array(
    'name' => 'Socials',
    'icon' => 'social.png',
    'icon_active' => 'social_active.png',
    'icon_hover' => 'social_hover.png'
), array(
    new TextOption_admin_theme(array(
        'name' => 'Facebook',
        'id' => 'social_facebook',
        'default' => 'http://facebook.com',
        'desc' => 'Please specify http:// to the URL'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Flickr',
        'id' => 'social_flickr',
        'default' => 'http://flickr.com',
        'desc' => 'Please specify http:// to the URL'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Vimeo',
        'id' => 'social_vimeo',
        'default' => 'http://vimeo.com',
        'desc' => 'Please specify http:// to the URL'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Pinterest',
        'id' => 'social_pinterest',
        'default' => 'http://pinterest.com',
        'desc' => 'Please specify http:// to the URL'
    )),
    /*new TextOption_admin_theme(array(
        'name' => 'Dribbble',
        'id' => 'social_dribbble',
        'default' => '',
        'desc' => 'Please specify http:// to the URL'
    )),*/
    new TextOption_admin_theme(array(
        'name' => 'LinkedIn',
        'id' => 'social_linked_in',
        'default' => 'http://linkedin.com',
        'desc' => 'Please specify http:// to the URL'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Tumblr',
        'id' => 'social_tumblr',
        'default' => 'http://tumblr.com',
        'desc' => 'Please specify http:// to the URL'
    )),
    /*new TextOption_admin_theme(array(
        'name' => 'YouTube',
        'id' => 'social_youtube',
        'default' => '',
        'desc' => 'Please specify http:// to the URL'
    )),*/
    new TextOption_admin_theme(array(
        'name' => 'Delicious',
        'id' => 'social_delicious',
        'default' => 'http://delicious.com',
        'desc' => 'Please specify http:// to the URL'
    )),
    /*new TextOption_admin_theme(array(
        'name' => 'Google Plus',
        'id' => 'social_gplus',
        'default' => '',
        'desc' => 'Please specify http:// to the URL'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Instagram',
        'id' => 'social_instagram',
        'default' => '',
        'desc' => 'Please specify http:// to the URL'
    )),*/
    new TextOption_admin_theme(array(
        'name' => 'Twitter',
        'id' => 'social_twitter',
        'default' => 'http://twitter.com',
        'desc' => 'Please specify http:// to the URL'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Twitter Consumer key',
        'id' => 'consumer_key',
        'default' => '',
        'desc' => 'For Twitter widget. Get it <a target="_blank" href="https://dev.twitter.com/apps">here</a>.'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Twitter Consumer secret',
        'id' => 'consumer_secret',
        'default' => '',
        'desc' => 'For Twitter widget. Get it <a target="_blank" href="https://dev.twitter.com/apps">here</a>.'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Twitter User token',
        'id' => 'user_token',
        'default' => '',
        'desc' => 'For Twitter widget. Get it <a target="_blank" href="https://dev.twitter.com/apps">here</a>.'
    )),
    new TextOption_admin_theme(array(
        'name' => 'Twitter User secret',
        'id' => 'user_secret',
        'default' => '',
        'desc' => 'For Twitter widget. Get it <a target="_blank" href="https://dev.twitter.com/apps">here</a>.'
    )),
)));


$tabs_admin_theme->add(new Tab_admin_theme(array(
    'name' => 'Contacts',
    'icon' => 'contacts.png',
    'icon_active' => 'contacts_active.png',
    'icon_hover' => 'contacts_hover.png'
), array(
    new TextOption_admin_theme(array(
        'name' => 'Send mails to',
        'id' => 'contacts_to',
        'default' => get_option("admin_email")
    )),
    new TextOption_admin_theme(array(
        'name' => 'Phone number',
        'id' => 'phone',
        'default' => '+1 800 789 50 12'
    )),
)));


$tabs_admin_theme->add(new Tab_admin_theme(array(
    'name' => 'View Options',
    'icon' => 'layout.png',
    'icon_active' => 'layout_active.png',
    'icon_hover' => 'layout_hover.png'
), array(
    new SelectOption_admin_theme(array(
        'name' => 'Site width',
        'id' => 'site_width',
        'desc' => '',
        'default' => '1170px',
        'options' => array(
            '1170px' => '1170px',
            '960px' => '960px'
        )
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Responsive',
        'id' => 'responsive',
        'desc' => '',
        'default' => 'on',
        'options' => array(
            'on' => 'On',
            'off' => 'Off'
        )
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Header type',
        'id' => 'header_type',
        'desc' => '',
        'default' => '',
        'options' => array(
            '' => 'Type 1',
            'type1' => 'Type 2',
            'type2' => 'Type 3',
            'type3' => 'Type 4'
        )
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Tagline type',
        'id' => 'tag_line_type',
        'desc' => '',
        'default' => '',
        'options' => array(
            '' => 'Without tagline',
            'type1' => 'Type 1',
            'type2' => 'Type 2',
            'type3' => 'Type 3',
            'type4' => 'Type 4'
        )
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Default theme layout',
        'id' => 'default_theme_layout',
        'desc' => '',
        'default' => 'clean',
        'options' => array(
            'clean' => 'Clean',
            'boxed' => 'Boxed',
            'bgimage' => 'Fullscreen bg image'
        )
    )),
    new UploadOption_admin_theme(array(
        'type' => 'upload',
        'name' => 'Default background image',
        'id' => 'bg_img',
        'desc' => '',
        'default' => THEMEROOTURL . '/img/bg_user.png'
    )),
    new ColorOption_admin_theme(array(
        'name' => 'Default background color',
        'id' => 'default_bg_color',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'ffffff'
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Breadcrumb area',
        'id' => 'show_breadcrumb_area',
        'desc' => '',
        'default' => 'yes',
        'options' => array(
            'yes' => 'Show',
            'no' => 'Hide'
        )
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Footer Widget Area',
        'id' => 'footer_widgets_area',
        'desc' => '',
        'default' => 'on',
        'options' => array(
            'on' => 'On',
            'off' => 'Off'
        )
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Related Posts',
        'id' => 'related_posts',
        'desc' => '',
        'default' => 'on',
        'options' => array(
            'on' => 'On',
            'off' => 'Off'
        )
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Portfolio comments',
        'id' => 'portfolio_comments',
        'desc' => '',
        'default' => 'disabled',
        'options' => array(
            'disabled' => 'Disabled',
            'enabled' => 'Enabled'
        )
    )),
    new SelectOption_admin_theme(array(
        'name' => 'Page comments',
        'id' => 'page_comments',
        'desc' => '',
        'default' => 'disabled',
        'options' => array(
            'disabled' => 'Disabled',
            'enabled' => 'Enabled'
        )
    )),
    new TextareaOption_admin_theme(array(
        'name' => 'Custom CSS',
        'id' => 'custom_css',
        'default' => ''
    )),
)));


$tabs_admin_theme->add(new Tab_admin_theme(array(
    'name' => 'Color Options',
    'icon' => 'colors.png',
    'icon_active' => 'colors_active.png',
    'icon_hover' => 'colors_hover.png'
), array(
    new ColorOption_admin_theme(array(
        'name' => 'Theme color',
        'id' => 'theme_color1',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'f16262'
    )),
    new ColorOption_admin_theme(array(
        'name' => 'Background Color',
        'id' => 'clean_bg_color',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'eeefef'
    )),
    new ColorOption_admin_theme(array(
        'name' => 'Heading color',
        'id' => 'header_text_color',
        'desc' => '',
        'not_empty' => 'true',
        'default' => '464a4f'
    )),
    new ColorOption_admin_theme(array(
        'name' => 'Page title heading color',
        'id' => 'pagetitle_header_text_color',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'ffffff'
    )),
    /*new ColorOption_admin_theme(array(
        'name' => 'Footer widget area background',
        'id' => 'footer_widget_area',
        'desc' => '',
        'not_empty' => 'true',
        'default' => '111820'
    )),*/
    new ColorOption_admin_theme(array(
        'name' => 'Footer text',
        'id' => 'footer_text',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'a9acac'
    )),
    new ColorOption_admin_theme(array(
        'name' => 'Submenu text color',
        'id' => 'main_menu_submenu_text_color',
        'desc' => '',
        'not_empty' => 'true',
        'default' => '616367'
    )),
    /*new ColorOption_admin_theme(array(
        'name' => 'Submenu text color (hover and active)',
        'id' => 'main_menu_submenu_text_color_color',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'FFFFFF'
    )),*/
    new ColorOption_admin_theme(array(
        'name' => '2nd level menu border',
        'id' => 'border_in_2nd_level_menu',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'e1e2e3'
    )),
    new ColorOption_admin_theme(array(
        'name' => '3rd level menu border',
        'id' => 'border_in_3rd_level_menu',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'e1e2e3'
    )),
    new ColorOption_admin_theme(array(
        'name' => '2nd level menu background',
        'id' => 'bg_in_2nd_level_menu',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'ffffff'
    )),
    new ColorOption_admin_theme(array(
        'name' => '3rd level menu background',
        'id' => 'bg_in_3rd_level_menu',
        'desc' => '',
        'not_empty' => 'true',
        'default' => 'ffffff'
    )),
)));

?>