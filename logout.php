<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Logout
*/

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> />

<head profile="http://gmpg.org/xfn/11">



<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-site.css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<meta http-equiv="refresh" content="4;url=http://whatthingsdo.com">





<body>






<div id="container">


<div id="top">

<a href="<?php bloginfo('url'); ?>" id="home"> </a>


<div id="rssmobile"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('subscribe'); ?>"> RSS </a><font size="2">|</font><a href="/about"> ABOUT </a></div>

<!-- 
<a href="" class="thestacks" title="the complete archives"></a> 
-->
</div>





<div id="mid">
 




   

<div id=basicbox >

	<div id="authorquote" >
	
		You are now logged out.<br>


Thank you.


	</div></div>

<br class="clearboth"><BR><BR>

<?php get_footer(); ?>