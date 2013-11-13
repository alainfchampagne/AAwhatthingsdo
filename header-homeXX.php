<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> />

<head profile="http://gmpg.org/xfn/11">



<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-homeXX.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-store.css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />





<?php wp_head(); ?>
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	
	<!-- jQuery - the core -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.7.2.min.js" type="text/javascript"></script>
	


	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.min.js"></script>

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script>



  
<meta http-equiv="expires" content="0">

</head>



<body class="">






<div id="container">


<div id="hometop">

<a href="<?php bloginfo('url'); ?>" id="home"> </a>


<div id="homerssmobile"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('subscribe'); ?>"> RSS </a><font size="2">|</font><a href="/about"> ABOUT </a></div>



</div>



<div id="homemid">
 


