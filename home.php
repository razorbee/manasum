<?php
$device = '';
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
$device = isMobile()?'_mobile':'';

if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== false
 || strpos($_SERVER['HTTP_USER_AGENT'], 'CriOS') !== false) {
    // User agent is Google Chrome
}

?>

    <!DOCTYPE html>
    <html lang="en-US" class="no-js scheme_default">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <title>Manasum &#8211; Premium Retirement Home</title>

        <link property="stylesheet" rel='stylesheet' id='wp-block-library-css' href='css/style.min.css?ver=5.1.1' type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='essential-grid-plugin-settings-css' href='css/settings.css?ver=2.3.2' type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='rs-plugin-settings-css' href='css/settings1.css?ver=5.4.8.1' type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
            #rs-demo-id {}
        </style>
        <link property="stylesheet" rel='stylesheet' id='trx_addons-css' href='css/trx_addons.css' type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-animation-css' href='css/trx_addons.animation.min.css' type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='sticky_popup-style-css' href='css/sticky-popup.css?ver=1.2' type='text/css' media='all' />
        <style id='wpgdprc.css-inline-css' type='text/css'>
            div.wpgdprc .wpgdprc-switch .wpgdprc-switch-inner:before {
                content: 'Yes';
            }
            
            div.wpgdprc .wpgdprc-switch .wpgdprc-switch-inner:after {
                content: 'No';
            }
        </style>
        <link property="stylesheet" rel='stylesheet' id='pathwell-main-css' href='css/style.css' type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='trx_addons-responsive-css' href='css/trx_addons.responsive.css' type='text/css' media='all' />
        <link property="stylesheet" rel='stylesheet' id='pathwell-responsive-css' href='css/responsive.css' type='text/css' media='all' />
        <script type='text/javascript' src='js/jquery.js?ver=1.12.4'></script>

        <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://manasum.com/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
        <style type="text/css" id="custom-background-css">
            body.custom-background {
                background-color: #111111;
            }
        </style>
        <style type="text/css">
            .sticky-popup .popup-header {
                background-color: #dd3333;
                border-color: #dd3333;
            }
            
            .popup-title {
                color: #ffffff;
            }
            
            .sticky-popup-right,
            .sticky-popup-left {
                top: 20%;
            }
        </style>
        <link rel="icon" href="http://manasum.com/wp-content/uploads/2019/03/icon.png" sizes="32x32" />
        <link rel="icon" href="http://manasum.com/wp-content/uploads/2019/03/icon.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="http://manasum.com/wp-content/uploads/2019/03/icon.png" />
        <meta name="msapplication-TileImage" content="http://manasum.com/wp-content/uploads/2019/03/icon.png" />
        <script async type="text/javascript">
            function setREVStartSize(e) {
                try {
                    e.c = jQuery(e.c);
                    var i = jQuery(window).width(),
                        t = 9999,
                        r = 0,
                        n = 0,
                        l = 0,
                        f = 0,
                        s = 0,
                        h = 0;
                    if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                            f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                        }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                        var u = (e.c.width(), jQuery(window).height());
                        if (void 0 != e.fullScreenOffsetContainer) {
                            var c = e.fullScreenOffsetContainer.split(",");
                            if (c) jQuery.each(c, function(e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                        }
                        f = u
                    } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                    e.c.closest(".rev_slider_wrapper").css({
                        height: f
                    })
                } catch (d) {
                    console.log("Failure at Presize of Slider:" + d)
                }
            };
        </script>
        <style type="text/css" id="wp-custom-css">
            @media (max-width: 1023px) {
                .menu_mobile .socials_mobile {
                    display: none;
                }
            }
            
            @media (max-width: 1023px) {
                .scheme_dark .search_form_wrap input[type='text'] {
                    display: none;
                }
            }
            
            @media (max-width: 1023px) {
                .scheme_dark .menu_mobile_inner .search_mobile .search_submit {
                    display: none;
                }
            }
            
            .center-text {
                color: white !important;
                font-size: 13px;
                margin-left: 222px;
            }
            
            .scheme_default.footer_wrap a,
            .footer_wrap .scheme_default.vc_row a {
                color: white;
            }
            
            .animated {
                -webkit-animation-duration: 0s;
                animation-duration: 0s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }
            
            .vc_custom_1552907081925 {
                margin-top: -101px;
            }
            
            .floor-class {
                margin-top: 51px;
            }
            
            .features_class {
                margin-top: -24px;
            }
            
            .services_page_header {
                margin-bottom: 2em;
                display: none;
            }
            
            #post-1209 {
                margin-bottom: -102px !important;
            }
            
            .menu-item i._mi {
                width: auto;
                height: auto;
                margin-top: -.265em;
                font-size: 2.2em;
                line-height: 1;
            }
            
            .banner-image {
                padding-top: 100px !important;
                height: 350px;
                box-shadow: inset 0 0 0 2027px rgba(0, 0, 0, 0.4);
            }
            
            @media (max-width: 1023px) {
                .banner-image {
                    height: 173px;
                    box-shadow: inset 0 0 0 2027px rgba(0, 0, 0, 0.4);
                }
            }
            
            .banner-image1 {
                height: 350px !important;
                box-shadow: inset 0 0 0 2027px rgba(0, 0, 0, 0.4);
            }
            
            #sc_title_165671943 > h5 {
                margin-top: 70px !important;
            }
            
            @media (max-width: 1023px) {
                .banner-image1 {
                    height: 189px !important;
                    box-shadow: inset 0 0 0 2027px rgba(0, 0, 0, 0.4);
                    padding-top: 45px;
                }
            }
            
            .services-banner-image {
                height: 250px;
                box-shadow: inset 0 0 0 2027px rgba(0, 0, 0, 0.4);
                margin-top: -99px;
            }
            
            .tp-rightarrow {
                transform: matrix(1, 0, 0, 1, -113, -30) !important;
                ;
                left: 100% !important;
                top: 67% !important;
            }
            
            .tp-leftarrow {
                transform: matrix(1, 0, 0, 1, 54, -30)!important;
                top: 67% !important;
            }
            
            @media (max-width: 1023px) {
                .footer-class {
                    margin-top: 10px !important;
                    font-size: 12px !important;
                    margin-left: 5px !important
                }
            }
            
            @media (max-width: 1023px) {
                .footer-class1 {
                    margin-top: -9px !important;
                }
            }
            
            @media (max-width: 1023px) {
                .center-text {
                    margin-left: -3px !important;
                }
            }
            
            @media (max-width: 1023px) {
                .fotter-class3 {
                    margin-left: 78px !important;
                }
            }
            
            #menu-item-110> a:before {
                display: none;
            }
            
            #menu-item-107> a:before {
                display: none;
            }
            
            #menu-item-1213> a:before {
                display: none;
            }
            
            #menu-item-1398> a:before {
                display: none;
            }
            
            #menu-item-112> a:before {
                display: none;
            }
            
            #menu-item-109> a:before {
                display: none;
            }
            
            @media (max-width: 1023px) {
                .tp-caption {
                    font-size: 20px !important;
                }
            }
            
            @media (max-width: 1023px) {
                .tp-mask-wrap {
                    margin-top: 150px !important;
                }
            }
            
            @media (max-width: 1023px) {
                .top_panel {
                    background-color: white !important;
                }
            }
            
            .home .vc_custom_1516635804456 {
                background-color: transparent !important;
            }
            
            .home header {
                box-shadow: inset 0 0 0 2027px rgba(255, 255, 255, .8);
                position: fixed;
                width: 100%;
            }
            
            header {
                position: fixed !important;
                width: 100%;
            }
            
            .current-menu-item span {
                border-bottom: 5px solid #ff6347;
                padding: 5px;
            }
            
            .scheme_default .sc_item_subtitle {
                color: #ff6347 !important;
            }
            
            #rev_slider_2_1_wrapper {
                height: 800px !important;
            }
            
            #rev_slider_2_1_wrapper,
            #rev_slider_2_1 {
                height: 722px !important;
            }
            
            .sc_services_item_content p {
                color: #ff6347 !important;
            }
            
            @media (max-width: 1023px) {
                #rev_slider_2_1_wrapper {
                    height: 550px !important;
                }
                #rev_slider_2_1_wrapper,
                #rev_slider_2_1 {
                    height: 550px !important;
                }
            }
            
            @media (max-width: 1023px) {
                .menu_mobile .menu_mobile_nav_area li {
                    margin-bottom: 0;
                    width: auto;
                    padding: 10px !important;
                }
            }
            
            body.custom-background {
                background-color: white;
            }
            
            @media (max-width: 1023px) {
                .icons-move {
                    margin-left: 72px !important;
                }
            }
            
            .tp-caption {
                text-align: center !important;
            }
            
            @media (max-width: 1023px) {
                .tp-caption {
                    font-size: 17px !important;
                }
            }
            
            .sticky-popup-right .popup-title {
                -webkit-transform: rotate(0deg);
                margin-top: 17px;
            }
            
            .enquiry-send {
                margin-right: 29px!important;
            }
            
            .trx_addons_scroll_to_top {
                display: none !important;
            }
            
            #ic_bubble {
                display: none;
            }
            
            .sc_services_item_button .sc_button {
                color: transparent!important;
            }
            
            .scheme_default .sc_services.sc_services_modern .trx_addons_columns_wrap .trx_addons_column-1_3 .sc_services_item_button a:not(.sc_services_item_icon):hover {
                color: transparent!important;
            }
            
            .sc_services.sc_services_modern .sc_services_item_button a.sc_button {
                padding: 1.5em 1.5em !important;
            }
            
            .sc_action_default .sc_action_item_title {
                font-size: 40px !important;
                line-height: 1.175em !important;
                font-weight: 600 !important;
            }
            
            #wpcf7-f842-p104-o1 {
                margin-right: 15px !important;
            }
            
            body {
                height: 0px !important;
            }
            
            .wpcf7-form {
                margin-top: 37px !important;
            }
            
            .gvv_galleryWrap {
                margin-top: 172px !important;
            }
            
            .chatBox_footer textarea {
                padding: 10px !important;
            }
            
            @media (max-width: 1023px) {
                .chatBox_footer textarea {
                    padding: 10px !important;
                }
            }
            
            .mobile-icons {
                display: none;
            }
            
            @media all and (min-width: 300px) {
                .mobile-icons {
                    display: none;
                }
            }
            
            @media (max-width: 1023px) {
                .mobile-icons {
                    background: #ff6347;
                    width: 100%;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-around;
                    flex-flow: wrap;
                    text-align: center;
                    color: #fff;
                    position: fixed;
                    bottom: 0;
                    z-index: 1;
                    font-size: 15px;
                }
            }
            
            @media (max-width: 1023px) {
                .mobile-icons div:nth-child(1) i {
                    font-size: 29px !important;
                    font-weight: bold;
                    color: white;
                    margin-top: 11px;
                }
                .mobile-icons div:nth-child(2) i {
                    font-size: 29px !important;
                    font-weight: bold;
                    color: white;
                    margin-top: 11px;
                }
            }
            
            @media (max-width: 1023px) {
                .sy-text-Suggested {
                    bottom: 85px !important;
                }
            }
            
            @media (max-width: 1023px) {
                .sy-firsttext-right {
                    right: 95px !important;
                    bottom: 88px !important;
                    left: 10px !important;
                }
            }
            
            @media (max-width: 1023px) {
                .sy-circle-right {
                    bottom: 85px !important;
                }
            }
        </style>
        <style type="text/css" data-type="vc_shortcodes-custom-css">
            .vc_custom_1518108480701 {
                background-color: #ffffff !important;
            }
            
            .vc_custom_1553239870972 {
                background: #f5efec url(h1-blog-bg.png) !important;
                background-position: top left !important;
            }
            
            .vc_custom_1555141262405 {
                background: #131313 url(Talk-Us.png) !important;
                background-position: top left !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
            
            .vc_custom_1553239958182 {
                background: #f5efec url(h1-blog-bg.png) !important;
                background-position: top left !important;
            }
            
            .vc_custom_1553240267888 {
                background: #f5efec url(h1-blog-bg.png) !important;
                background-position: top left !important;
            }
            
            .vc_custom_1553239912569 {
                background: #f5efec url(h1-blog-bg.png) !important;
                background-position: top left !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
            
            .vc_custom_1553239984145 {
                background: #f5efec url(h1-blog-bg.png) !important;
                background-position: top left !important;
            }
            
            .vc_custom_1552898218233 {
                background: #f5efec url(h1-blog-bg.png) !important;
                background-position: top left !important;
            }
            
            .vc_custom_1553325143790 {
                padding-right: 0px !important;
                padding-left: 0px !important;
            }
            
            .vc_custom_1517941244737 {
                padding-right: 0px !important;
                padding-left: 0px !important;
            }
            
            .vc_custom_1555325783521 {
                margin-top: -155px !important;
                padding-right: 0px !important;
                padding-left: 0px !important;
                background-size: cover !important;
            }
        </style>
        <noscript>
            <style type="text/css">
                .wpb_animate_when_almost_visible {
                    opacity: 1;
                }
            </style>
        </noscript>
        <style type="text/css" id="trx_addons-inline-styles-inline-css">
            .vc_custom_1516635804456 {
                background-color: #ffffff !important;
            }
            
            .vc_custom_1553863885011 {
                background-image: url(11.webp) !important;
                background-position: top left !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
            
            .vc_custom_1525708688930 {
                background: #131313 url(bg-10-copyright.webp) !important;
                background-position: top center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
            
            .vc_custom_1518084840707 {
                padding-right: 10% !important;
                padding-left: 10% !important;
            }
            
            .vc_custom_1556179679936 {
                background: #232220 url(testimonial_banner.webp) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
            }
            
            .vc_custom_1553843222563 {
                background-color: #000111 !important;
            }
            
            .vc_custom_1553844371152 {
                background-color: #000111 !important;
            }
        </style>
        <style>
            " + htmlDivCss + "
        </style>
        <style>
            body {
                margin: 0;
                height: 2000px;
            }
            
            .icon-bar {
                position: fixed;
                top: 365px;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
                margin-left: -153px;
            }
            
            .icon-bar a {
                display: block;
                text-align: center;
                padding: 16px;
                transition: all 0.3s ease;
                color: white;
                font-size: 20px;
            }
            
            .scheme_default i {
                color: white;
            }
            
            .fa:hover {
                opacity: 0.7;
            }
            
            .facebook {
                background: #3B5998;
                color: white;
            }
            
            .twitter {
                background: #55ACEE;
                color: white;
            }
            
            .linkedin {
                background: #007bb5;
                color: white;
            }
        </style>
        <style>
        .icons-move {
                margin-left: 107px;
                margin-top: 16px;
            }
        }
        .fa:hover {
            opacity: 0.7;
        }
        </style>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114452467-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-114452467-1');
        </script>
    </head>

    <body class="home page-template-default page page-id-94 custom-background wp-custom-logo frontpage body_tag scheme_default blog_mode_front body_style_wide  is_stream blog_style_excerpt sidebar_hide expand_content remove_margins trx_addons_present header_type_custom header_style_header-custom-410 header_position_default menu_style_top no_layout wpb-js-composer js-comp-ver-5.7 vc_responsive">

        <div class="body_wrap">

            <div class="page_wrap">
                <header class="top_panel top_panel_custom top_panel_custom_410 top_panel_custom_header without_bg_image">
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1516635804456 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div id="sc_content_1589851540" class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center">
                                        <div class="sc_content_container">
                                            <div class="vc_empty_space  hide_on_desktop hide_on_notebook hide_on_tablet" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                                <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-6 sc_layouts_column_icons_position_left">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="sc_layouts_item">
                                                                <a href="/" id="sc_layouts_logo_1799283179" class="sc_layouts_logo sc_layouts_logo_default"><img class="logo_image" src="//manasum.com/wp-content/uploads/2019/03/manasum-logo-1.png" alt=""></a>
                                                                <!-- /.sc_layouts_logo -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-9 vc_col-xs-6 sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_right">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="sc_layouts_item">
                                                                <nav class="sc_layouts_menu sc_layouts_menu_default sc_layouts_menu_dir_horizontal menu_hover_fade hide_on_mobile" id="sc_layouts_menu_1294018623">
                                                                    <ul id="menu_main" class="sc_layouts_menu_nav menu_main_nav">
                                                                        <li id="menu-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-94 current_page_item menu-item-110"><a href="http://manasum.com/" aria-current="page"><span>Home</span></a></li>
                                                                        <li id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107"><a href="http://manasum.com/about-us/"><span>About Us</span></a></li>
                                                                        <li id="menu-item-1213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1213"><a href="http://manasum.com/project-details/"><span>Project Details</span></a></li>
                                                                        <li id="menu-item-112" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112"><a href="http://manasum.com/services-page/"><span>Services</span></a></li>
                                                                        <li id="menu-item-1398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1398"><a href="http://manasum.com/gallery/"><span>Gallery</span></a></li>
                                                                        <li id="menu-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="http://manasum.com/contact-us/"><span>Contact Us</span></a></li>
                                                                    </ul>
                                                                </nav>
                                                                <!-- /.sc_layouts_menu -->
                                                                <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                                                                    <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                                                        <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_empty_space  hide_on_desktop hide_on_notebook hide_on_tablet" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                    <!-- /.sc_content -->
                                </div>
                            </div>
                        </div>
                    </div>

                </header>
                <div class="menu_mobile_overlay"></div>
                <div class="menu_mobile menu_mobile_fullscreen scheme_dark">
                    <div class="menu_mobile_inner">
                        <a class="menu_mobile_close icon-cancel"></a>
                        <a class="sc_layouts_logo" href="/"><img src="//www.project.razorbee.com/manasum/wp-content/uploads/2019/03/manasum-logo.png" alt="image"></a>
                        <nav class="menu_mobile_nav_area">
                            <ul id="menu_mobile_1124190980">
                                <li id="menu_mobile-item-110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-94 current_page_item menu-item-110"><a href="http://manasum.com/" aria-current="page"><span>Home</span></a></li>
                                <li id="menu_mobile-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-107"><a href="http://manasum.com/about-us/"><span>About Us</span></a></li>
                                <li id="menu_mobile-item-1213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1213"><a href="http://manasum.com/project-details/"><span>Project Details</span></a></li>
                                <li id="menu_mobile-item-112" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-112"><a href="http://manasum.com/services-page/"><span>Services</span></a></li>
                                <li id="menu_mobile-item-1398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1398"><a href="http://manasum.com/gallery/"><span>Gallery</span></a></li>
                                <li id="menu_mobile-item-109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109"><a href="http://manasum.com/contact-us/"><span>Contact Us</span></a></li>
                            </ul>
                        </nav>
                        <div class="search_wrap search_style_normal search_mobile">
                            <div class="search_form_wrap">
                                <form role="search" method="get" class="search_form" action="http://manasum.com/">
                                    <input type="text" class="search_field" placeholder="Search" value="" name="s">
                                    <button type="submit" class="search_submit trx_addons_icon-search"></button>
                                </form>
                            </div>
                        </div>
                        <div class="socials_mobile"><a target="_blank" href="https://www.instagram.com/axiom_themes/" class="social_item social_item_style_icons social_item_type_icons"><span class="social_icon social_icon_instagramm"><span class="icon-instagramm"></span></span></a><a target="_blank" href="https://twitter.com/axiom_themes" class="social_item social_item_style_icons social_item_type_icons"><span class="social_icon social_icon_twitter"><span class="icon-twitter"></span></span></a><a target="_blank" href="https://www.facebook.com/AxiomThemes-505060569826537/" class="social_item social_item_style_icons social_item_type_icons"><span class="social_icon social_icon_facebook"><span class="icon-facebook"></span></span></a><a target="_blank" href="https://www.instagram.com/axiom_themes/" class="social_item social_item_style_icons social_item_type_icons"><span class="social_icon social_icon_linkedin"><span class="icon-linkedin"></span></span></a></div>
                    </div>
                </div>

                <div class="page_content_wrap">

                    <div class="content_wrap">

                        <div class="content">

                            <article id="post-94" class="post_item_single post_type_page post-94 page type-page status-publish hentry">

                                <div class="post_content entry-content">
                                    <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1518108480701 vc_row-has-fill vc_row-no-padding">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div id="widget_slider_295570869" class="widget_area sc_widget_slider vc_widget_slider wpb_content_element">
                                                        <aside id="widget_slider_295570869_widget" class="widget widget_slider">
                                                            <div class="slider_wrap slider_engine_revo slider_alias_sliderhome2">
                                                                <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                                    <!-- START REVOLUTION SLIDER 5.4.8.1 auto mode -->
                                                                    <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8.1">
                                                                        <ul>
                                                                            <!-- SLIDE  -->
                                                                            <li data-index="rs-18" data-transition="curtain-1" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-thumb="<?php  echo $device;?>.webp" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                                <!-- MAIN IMAGE -->
                                                                                <img src="<?php  echo $device;?>.webp" alt="" title="slider-2" width="2000" height="1125" data-bgposition="center top" data-kenburns="on" data-duration="5000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="0 0" data-offsetend="0 0" class="rev-slidebg" data-no-retina>
                                                                                <!-- LAYERS -->

                                                                                <!-- LAYER NR. 1 -->
                                                                                <div class="tp-caption FatRounded   tp-resizeme" id="slide-18-layer-1" data-x="['center','center','center','center']" data-hoffset="['-293','-293','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['96','96','-30','-70']" data-fontsize="['45','45','40','40']" data-lineheight="['45','45','50','50']" data-fontweight="['400','400','700','400']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(0,0,0);"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[20,20,20,20]" data-paddingright="[22,22,22,22]" data-paddingbottom="[20,20,20,20]" data-paddingleft="[25,25,25,25]" style="z-index: 5; white-space: nowrap; font-size: 45px; line-height: 45px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Libre Baskerville;cursor:pointer;">Facilities Designed To Provide
                                                                                    <br> You an Active and Independent Living </div>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                                                    </div>
                                                                    <script async>
                                                                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                                                        var htmlDivCss = ".tp-caption.FatRounded,.FatRounded{color:rgba(255,255,255,1.00);font-size:30px;line-height:30px;font-weight:900;font-style:normal;font-family:Raleway;text-decoration:none;background-color:rgba(0,0,0,0.50);border-color:rgba(211,211,211,1.00);border-style:none;border-width:0px;border-radius:50px 50px 50px 50px;text-shadow:none}.tp-caption.FatRounded:hover,.FatRounded:hover{color:rgba(255,255,255,1.00);text-decoration:none;background-color:rgba(0,0,0,1.00);border-color:rgba(211,211,211,1.00);border-style:none;border-width:0px;border-radius:50px 50px 50px 50px;cursor:pointer}";
                                                                        if (htmlDiv) {
                                                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                        } else {
                                                                            var htmlDiv = document.createElement("div");
                                                                            htmlDiv.innerHTML = "";
                                                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                                        }
                                                                    </script>
                                                                    <script type="text/javascript">
                                                                        if (setREVStartSize !== undefined) setREVStartSize({
                                                                            c: '#rev_slider_2_1',
                                                                            responsiveLevels: [1240, 1024, 778, 480],
                                                                            gridwidth: [1200, 1024, 768, 480],
                                                                            gridheight: [650, 600, 500, 500],
                                                                            sliderLayout: 'auto'
                                                                        });

                                                                        var revapi2,
                                                                            tpj;
                                                                        (function() {
                                                                            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
                                                                            else onLoad();

                                                                            function onLoad() {
                                                                                if (tpj === undefined) {
                                                                                    tpj = jQuery;
                                                                                    if ("off" == "on") tpj.noConflict();
                                                                                }
                                                                                if (tpj("#rev_slider_2_1").revolution == undefined) {
                                                                                    revslider_showDoubleJqueryError("#rev_slider_2_1");
                                                                                } else {
                                                                                    revapi2 = tpj("#rev_slider_2_1").show().revolution({
                                                                                        sliderType: "standard",
                                                                                        jsFileLocation: "wp-content/plugins/revslider/public/assets/js/",
                                                                                        sliderLayout: "auto",
                                                                                        dottedOverlay: "none",
                                                                                        delay: 9000,
                                                                                        navigation: {
                                                                                            keyboardNavigation: "off",
                                                                                            keyboard_direction: "horizontal",
                                                                                            mouseScrollNavigation: "off",
                                                                                            mouseScrollReverse: "default",
                                                                                            onHoverStop: "off",
                                                                                            touch: {
                                                                                                touchenabled: "on",
                                                                                                touchOnDesktop: "on",
                                                                                                swipe_threshold: 75,
                                                                                                swipe_min_touches: 1,
                                                                                                swipe_direction: "horizontal",
                                                                                                drag_block_vertical: false
                                                                                            }
                                                                                        },
                                                                                        responsiveLevels: [1240, 1024, 778, 480],
                                                                                        visibilityLevels: [1240, 1024, 778, 480],
                                                                                        gridwidth: [1200, 1024, 768, 480],
                                                                                        gridheight: [650, 600, 500, 500],
                                                                                        lazyType: "none",
                                                                                        shadow: 0,
                                                                                        spinner: "off",
                                                                                        stopLoop: "off",
                                                                                        stopAfterLoops: -1,
                                                                                        stopAtSlide: -1,
                                                                                        shuffle: "off",
                                                                                        autoHeight: "off",
                                                                                        disableProgressBar: "on",
                                                                                        hideThumbsOnMobile: "off",
                                                                                        hideSliderAtLimit: 0,
                                                                                        hideCaptionAtLimit: 0,
                                                                                        hideAllCaptionAtLilmit: 0,
                                                                                        debugMode: false,
                                                                                        fallbacks: {
                                                                                            simplifyAll: "off",
                                                                                            nextSlideOnWindowFocus: "off",
                                                                                            disableFocusListener: false,
                                                                                        }
                                                                                    });
                                                                                }; /* END OF revapi call */

                                                                            }; /* END OF ON LOAD FUNCTION */
                                                                        }()); /* END OF WRAPPING FUNCTION */
                                                                    </script>
                                                                </div>
                                                                <!-- END REVOLUTION SLIDER -->
                                                            </div>
                                                        </aside>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="vc_row-full-width vc_clearfix"></div>

                                    <div id="lazyloading" style="min-height:500px"></div>

                                </div>
                                <!-- .entry-content -->

                            </article>

                        </div>
                        <!-- </.content> -->

                    </div>
                    <!-- </.content_wrap> -->
                </div>
                <!-- </.page_content_wrap> -->

                <footer class="footer_wrap footer_custom footer_custom_1469 footer_custom_footer1">
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1553843222563 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space  hide_on_desktop hide_on_mobile" style="height: 100px"><span class="vc_empty_space_inner"></span></div>
                                    <div id="sc_content_214509207" class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center">
                                        <div class="sc_content_container">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="footer-class" style="color: #fd8202; text-align: left; font-size: 19px; margin-top: -44px; margin-bottom: 8px;">MANASUM BUILTECH LLP</h6>
                                                                    <p style="text-align: justify; color: white;">Our humble dream of creating safe, comfortable, cosy spaces for flourishing companionship has become a reality with intelligently designed easy to maintain homes.</p>

                                                                </div>
                                                            </div>

                                                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                <div class="wpb_wrapper">

                                                                    <div class="icons-move">

                                                                        <a href="https://www.facebook.com/manasumretirementhomes"><i class="fa fa-facebook-square" style="font-size:48px;color:#3B5998;margin-right: 9px"></i></a>

                                                                        <a href="https://twitter.com/login"><i class="fa fa-twitter-square" style="font-size:48px;color:#55ACEE;margin-right: 9px"></i></a>

                                                                        <a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin-square" style="font-size:48px;color:#007bb5;margin-right: 9px"></i></a>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="footer-class" style="color: #fd8202; margin-left: 60px; text-align: left; font-size: 19px; margin-top: -44px; margin-bottom: 8px;">MANASUM OFFICE ADDRESS</h6>
                                                                    <address style="color: white; margin-left: 60px;">#326/14, 10th D<br />
MainNear Girias Ashoka Pillar<br />
Jayanagar 1st Block<br />
Bengaluru 560011<br />
Mobile : +91-9686001000</address>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wpb_column vc_column_container vc_col-sm-4 sc_layouts_column_icons_position_left">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <h6 class="footer-class" style="color: #fd8202; margin-left: 60px; text-align: left; font-size: 19px; margin-top: -44px; margin-bottom: 8px;">MANASUM SITE ADDRESS</h6>
                                                                    <address style="color: white; margin-left: 60px;">59/5,<br />
Soppahalli Village,Jigani<br />
Anekal Road, Near Electronic City<br />
Bengaluru 562106<br />
Mobile : +91-9686001000</address>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vc_empty_space  hide_on_desktop" style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                        </div>
                                    </div>
                                    <!-- /.sc_content -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1553844371152 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div class="center-text">© 2019 MANASUM BUILTECH LLP - All Rights Reserved</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div class="center-text"><a class="fotter-class3" style="color: white;" href="http://razorbee.com/">Design &amp; Developed by RazorBee</a></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                        <div class="wpb_wrapper">
                                            <div class="mobile-icons ">
                                                <div>
                                                    <a href="tel:+91 95138 15815"><i class="fa fa-phone"></i><p style="color:white;">CALL NOW</p></a>
                                                </div>
                                                <div>
                                                    <a href="https://wa.me/+91  99000 00095"><i class="fa fa-whatsapp" aria-hidden="true"></i> <p style="color:white;">WHAT'S APP</p></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /.footer_wrap -->

            </div>
            <!-- /.page_wrap -->

        </div>
        <!-- /.body_wrap -->

        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
        <div class="sticky-popup">
            <div class="popup-wrap">
                <div class="popup-header"><span class="popup-title">Enquire Now<div class="popup-image"></div></span></div>
                <div class="popup-content">
                    <div class="popup-content-pad">
                        <div role="form" class="wpcf7" id="wpcf7-f1824-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="/#wpcf7-f1824-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="1824" />
                                    <input type="hidden" name="_wpcf7_version" value="5.1.1" />
                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1824-o1" />
                                    <input type="hidden" name="_wpcf7_container_post" value="0" />
                                    <input type="hidden" name="g-recaptcha-response" value="" />
                                </div>
                                <div class="heading">
                                    <h6 style="text-align:center;">Enquire Now<br />
<h6>
</div>
<div class="contact-form">
<div class="col-md-12">
<div class="row">
<div class="form-group">
                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Name" /></span><br />
                <span class="alert-error"></span>
            </div></div></div>
<p><br></p>
<div class="col-md-12">
<div class="row">
<div class="form-group">
               <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email *" /></span><br />
                <span class="alert-error"></span>
            </div></div></div>
<p><br></p>
<div class="col-md-12">
<div class="row">
<div class="form-group">
                <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Phone" /></span><br />
                <span class="alert-error"></span>
            </div></div></div>
<p><br></p>
<div class="col-md-12">
<div class="row">
<div class="form-group comments">
                <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Your Message *"></textarea></span>
            </div></div></div>
<p><br></p>
<div class="col-md-12">
<div class="row enquiry-send">
            <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
        </div></div>
<p>    <!-- Alert Message --></p>
<div class="col-md-12 alert-notification">
<div id="message" class="alert-msg"></div></div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
</div></div></div></div>		

<script async type="text/javascript">
				jQuery( document ).ready(function() {	
					if (/*@cc_on!@*/true) { 						
						var ieclass = 'ie' + document.documentMode; 
						jQuery( ".popup-wrap" ).addClass(ieclass);
					} 
					jQuery( ".sticky-popup" ).addClass('sticky-popup-right');

					var contwidth = jQuery( ".popup-content" ).outerWidth()+2;      	
			      	jQuery( ".sticky-popup" ).css( "right", "-"+contwidth+"px" );

			      	jQuery( ".sticky-popup" ).css( "visibility", "visible" );

			      	jQuery('.sticky-popup').addClass("open_sticky_popup_right");
			      	jQuery('.sticky-popup').addClass("popup-content-bounce-in-right");

			        jQuery( ".popup-header" ).click(function() {
			        	if(jQuery('.sticky-popup').hasClass("open"))
			        	{
			        		jQuery('.sticky-popup').removeClass("open");
			        		jQuery( ".sticky-popup" ).css( "right", "-"+contwidth+"px" );
			        	}
			        	else
			        	{
			        		jQuery('.sticky-popup').addClass("open");
			          		jQuery( ".sticky-popup" ).css( "right", 0 );		
			        	}

			        });		    
				});
			</script>
					<script async type="text/javascript">
				function revslider_showDoubleJqueryError(sliderID) {

						jQuery(sliderID).show().html("");
				}
			</script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/manasum.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script async type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.1'></script>
<script  type='text/javascript' src='wp-content/plugins/essential-grid/public/assets/js/jquery.themepunch.tools.min.js?ver=2.3.2'></script>
<script   type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.4.8.1'></script>
<script async type='text/javascript' src='wp-content/plugins/trx_addons/js/swiper/swiper.jquery.min.js'></script>
<!---imp--><script  async  type='text/javascript' src='wp-content/plugins/trx_addons/js/magnific/jquery.magnific-popup.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var TRX_ADDONS_STORAGE = {"ajax_url":"http:\/\/manasum.com\/wp-admin\/admin-ajax.php","ajax_nonce":"aeae5c7cb0","site_url":"http:\/\/manasum.com","post_id":"94","vc_edit_mode":"0","popup_engine":"magnific","animate_inner_links":"0","menu_collapse":"1","menu_collapse_icon":"","user_logged_in":"0","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","msg_ajax_error":"Invalid server answer!","msg_magnific_loading":"Loading image","msg_magnific_error":"Error loading image","msg_error_like":"Error saving your like! Please, try again later.","msg_field_name_empty":"The name can't be empty","msg_field_email_empty":"Too short (or empty) email address","msg_field_email_not_valid":"Invalid email address","msg_field_text_empty":"The message text can't be empty","msg_search_error":"Search error! Try again later.","msg_send_complete":"Send message complete!","msg_send_error":"Transmit failed!","ajax_views":"","menu_cache":[".menu_mobile_inner > nav > ul"],"login_via_ajax":"1","msg_login_empty":"The Login field can't be empty","msg_login_long":"The Login field is too long","msg_password_empty":"The password can't be empty and shorter then 4 characters","msg_password_long":"The password is too long","msg_login_success":"Login success! The page should be reloaded in 3 sec.","msg_login_error":"Login failed!","msg_not_agree":"Please, read and check 'Terms and Conditions'","msg_email_long":"E-mail address is too long","msg_email_not_valid":"E-mail address is invalid","msg_password_not_equal":"The passwords in both fields are not equal","msg_registration_success":"Registration success! Please log in!","msg_registration_error":"Registration failed!","scroll_to_anchor":"1","update_location_from_anchor":"0","msg_sc_googlemap_not_avail":"Googlemap service is not available","msg_sc_googlemap_geocoder_error":"Error while geocode address"};
/* ]]> */
</script>
<script async type='text/javascript' src='http://manasum.com/wp-content/plugins/trx_addons/js/trx_addons.js'></script>
<script  async type='text/javascript' src='http://manasum.com/wp-content/plugins/trx_addons/components/cpt/layouts/shortcodes/menu/superfish.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpgdprcData = {"ajaxURL":"http:\/\/manasum.com\/wp-admin\/admin-ajax.php","ajaxSecurity":"17d29a84ff","consentVersion":"1","consentStatus":"0","isMultisite":"","path":"\/","blogId":""};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var PATHWELL_STORAGE = {"ajax_url":"http:\/\/manasum.com\/wp-admin\/admin-ajax.php","ajax_nonce":"aeae5c7cb0","site_url":"http:\/\/manasum.com","theme_url":"http:\/\/manasum.com\/wp-content\/themes\/pathwell","site_scheme":"scheme_default","user_logged_in":"","mobile_layout_width":"767","mobile_device":"","menu_side_stretch":"","menu_side_icons":"1","background_video":"","use_mediaelements":"1","comment_maxlength":"1000","admin_mode":"","email_mask":"^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$","strings":{"ajax_error":"Invalid server answer!","error_global":"Error data validation!","name_empty":"The name can&#039;t be empty","name_long":"Too long name","email_empty":"Too short (or empty) email address","email_long":"Too long email address","email_not_valid":"Invalid email address","text_empty":"The message text can&#039;t be empty","text_long":"Too long message text"},"alter_link_color":"#e6b59e","button_hover":"default"};
/* ]]> */
</script>
<script  async  type='text/javascript' src='http://manasum.com/wp-content/themes/pathwell/js/__scripts.js'></script>
<script type='text/javascript'>
var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpmejsSettings = {"pluginPath":"\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
/* ]]> */
</script>
<script async type='text/javascript' src='http://manasum.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=5.7'></script>
<script  async type='text/javascript' src='http://manasum.com/wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min.js?ver=5.7'></script>

    <script async  type="text/javascript">
       var  __loaded = false

       window.onmousemove=function(){
          lazyloading();
       }

       function lazyloading(){

                                                if (!__loaded){
                                                    __loaded = true;

                                                        var fileref=document.createElement('script')
                                                        fileref.setAttribute("type","text/javascript")
                                                        fileref.setAttribute("src", "https://app.syrow.com/script/chatter-rfB1GPonHXz3r4eyyLOtikXtQ2WYKnrjuW6lNrb0BK4=.js")
                                                        document.getElementsByTagName("head")[0].appendChild(fileref)
                                                        jQuery( "#lazyloading" ).load( "index5.php", function() {});

                                                   
                                                }
                                            }

                                            window.onscroll = function() {
                                                lazyloading()
                                            };

                                            function headerscroll() {
                                               
                                                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                                                    document.getElementsByTagName('header')[0].style.boxShadow = 'inset 0 0 0 2027px rgba(255,255,255,1)';

                                                } else {

                                                    document.getElementsByTagName('header')[0].style.boxShadow = 'inset 0 0 0 2027px rgba(255,255,255,0.7)';

                                                }
                                            }

    </script>
        <link property="stylesheet" rel='stylesheet' id='js_composer_front-css' href='css/js_composer.min.css?ver=5.7' type='text/css' media='all' />

        <link property="stylesheet" rel='stylesheet' id='contact-form-7-css' href='http://manasum.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.1' type='text/css' media='all' />
            <link property="stylesheet" rel='stylesheet' id='pathwell-colors-css' href='http://manasum.com/wp-content/themes/pathwell/css/__colors.css' type='text/css' media='all' />

</body>
</html>