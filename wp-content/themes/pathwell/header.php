<?php
/**
 * The Header: Logo and main menu
 *
 * @package WordPress
 * @subpackage PATHWELL
 * @since PATHWELL 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js scheme_<?php
										 // Class scheme_xxx need in the <html> as context for the <body>!
										 echo esc_attr(pathwell_get_theme_option('color_scheme'));
										 ?>">
<head>
	<?php wp_head(); ?>

	<meta name="google-site-verification" content="y8yOQmJ2pkqYAMdeU1LZNtwfZQUtOfKRmxEsBYyPnm8" />
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<meta name="description" content="<?php if ( is_single() ) {  
   single_post_title('', true);  
   } else {  
      bloginfo('name'); echo " - "; bloginfo('description'); 
   }  
   ?>" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114452467-1"></script> -->
<!--<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114452467-1');
</script> -->
	
<script>   
dataLayer = [];
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&amp;l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TV5SD8V');</script>
<!-- End Google Tag Manager -->
<script type="text/javascript" src="https://www.orbyo.com/resources/widgets/orbyoIntel.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180114770-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180114770-1');
</script>

	
</head>

<body <?php	body_class(); ?>>
	
	<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TV5SD8V"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript">
//<![CDATA[
var widgetParams = {
    orbyo: 'MANASUM'
};
var orbyoUrl="https://www.orbyo.com/",iframe=document.createElement("iframe");widgetParams.version=.1,widgetParams.widgetType="oa",iframe.style.cssText="height: 0px;width: 0px;display: none;visibility: hidden",iframe.src=orbyoUrl+"resources/widgets/"+widgetParams.widgetType+".html?params="+encodeURI(JSON.stringify(widgetParams));try{"undefined"!=typeof orbyoIntel&&"function"==typeof orbyoIntel.init?iframe.onload=orbyoIntel.init(iframe):console.error("orbyoIntel.min.js missing")}catch(a){console.error(a.message)}var element=document.getElementsByTagName("script");element=element[element.length-1],element.parentNode.insertBefore(iframe,element);
//]]>
</script>

	<?php do_action( 'pathwell_action_before_body' ); ?>

	<div class="body_wrap">

		<div class="page_wrap"><?php
			
			// Desktop header
			$pathwell_header_type = pathwell_get_theme_option("header_type");
			if ($pathwell_header_type == 'custom' && !pathwell_is_layouts_available())
				$pathwell_header_type = 'default';
			get_template_part( "templates/header-{$pathwell_header_type}");

			// Side menu
			if (in_array(pathwell_get_theme_option('menu_style'), array('left', 'right'))) {
				get_template_part( 'templates/header-navi-side' );
			}
			
			// Mobile menu
			get_template_part( 'templates/header-navi-mobile');
			?>

			<div class="page_content_wrap">

				<?php if (pathwell_get_theme_option('body_style') != 'fullscreen') { ?>
				<div class="content_wrap">
				<?php } ?>

					<?php
					// Widgets area above page content
					pathwell_create_widgets_area('widgets_above_page');
					?>				

					<div class="content">
						<?php
						// Widgets area inside page content
						pathwell_create_widgets_area('widgets_above_content');
						?>				
