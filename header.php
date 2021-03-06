<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="ie ie9" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">

    <!-- Mobile Specific Metas
   ================================================== -->
    <?php if (gt3_get_theme_option("responsive")=="on") { ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php } ?>

    <!-- Favicon && Apple touch -->
    <link rel="shortcut icon" href="<?php echo gt3_get_theme_option('favicon'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo gt3_get_theme_option('apple_touch_57'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo gt3_get_theme_option('apple_touch_72'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo gt3_get_theme_option('apple_touch_114'); ?>">

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php echo gt3_get_if_strlen(gt3_get_theme_option("custom_css"), "<style>", "</style>"); ?>
    <?php gt3_the_theme_option("code_before_head"); ?>
    <script>
        mixajaxurl = "<?php echo get_option("siteurl") ?>/wp-admin/admin-ajax.php";
        themerooturl = "<?php echo THEMEROOTURL; ?>";
    </script>
    <!--[if IE 8 ]><script>
        var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
        for (var i = 0; i < e.length; i++) {
            document.createElement(e[i]);
        }
    </script><![endif]-->
    <?php wp_head(); ?>
    <link rel='stylesheet' href="<?php bloginfo( 'template_directory' );?>/custom-styles.css" type='text/css' media='all' />
    <!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' );?>/custom-styles-ie7.css">
    <![endif]-->
    <!--[if gte IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' );?>/custom-styles-ie8.css">
    <![endif]-->
    <!--<link rel='stylesheet' href="<?php bloginfo( 'template_directory' );?>/css/proxima-nova-font/proxima-nova-font.css" type='text/css' media='all' />-->
    <!--[if lt IE 8]>
        <link rel='stylesheet' href="<?php bloginfo( 'template_directory' );?>/custom-styles-ie.css" type='text/css' media='all' />
    <![endif]-->


</head>

<body class="antibody_content_body" <?php body_class("op0"); ?>>
	<div class="<?php gt3_the_theme_option("header_type"); ?>" id="main_header">
        <div id="header_tagline" class="<?php gt3_the_theme_option("tag_line_type"); ?>">
            <div class="container">
                <div class="call_us"><?php _e('Call us toll free: ','theme_localization'); ?> <?php gt3_the_theme_option("phone"); ?></div>
                <div class="slogan"><?php _e('Top notch Multipurpose WordPress Theme!','theme_localization'); ?></div>
            </div>
            <div class="clear"></div>    	
        </div>
        <div class="header_wrapper container">
        	<a class="logo" ><!--<img src="<?php gt3_the_theme_option("logo"); ?>" alt=""  width="<?php gt3_the_theme_option("header_logo_standart_width"); ?>" height="<?php gt3_the_theme_option("header_logo_standart_height"); ?>" class="logo_def">-->
                <img src="<?php bloginfo( 'template_directory' );?>/img/bioCSL_logo_retina.jpg" /></a>
            <div class="search_box">
            	<div class="searchbox_wrapper">
					<?php get_search_form( true ); ?>
                </div>
            	<a href="javascript:void(0)" class="searchbox_toggle"><span></span></a>
            </div>            
			<div>
				<?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'menu', 'depth' => '3')); ?>
                <div class="clear"></div>
            </div>            
        </div>        
	</div>

	<div class="main_wrapper">