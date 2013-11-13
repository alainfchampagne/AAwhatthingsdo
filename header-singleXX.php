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
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style-site.css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/css3-multi-column.js"></script>




<?php
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-tabs');
	wp_head();
 ?>








<!-- focus COMMMENT for POST text boxes -->


<script type="text/javascript">
  function eFocus(field){
if (field.value == field.defaultValue)  {
field.value ='';     
}
field.className="posttextfieldon"   
}
function eBlur(field)
{
if (field.value == '')   {
field.value = field.defaultValue;  field.className="posttextfieldoff";     
}
else{
field.className="posttextfieldon";      
}
} 
 </script>
 
 
 


<?php wp_head(); ?>
  	<!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/pngfix/supersleight-min.js"></script>
	<![endif]-->
	<!-- jQuery - the core -->
	<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.3.2.min.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="<?php bloginfo('template_url'); ?>/js/slide.js" type="text/javascript"></script>
</head>





<body>





<div id="container">


<div id="top">


<a href="<?php bloginfo('url'); ?>" id="home"> </a>

<div id="rssmobile"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('subscribe'); ?>"> RSS </a><font size="2">|</font><a href="/about"> ABOUT </a></div>



</div>

<div id="intNAVstripes"> 




<!-- THE STACKS Sliding Panel -->

<div id="STACKStoppanel">


	<div id="STACKSpanel">
	
		<div class="STACKScontent"> 
		
		<font id=authorheaders>comics by:</font><br>
				
				



<!-- Get All Authors -->

<div id="stacks_columns"><font id="stacks_authors">
<? $pageChildren = $wpdb->get_results("SELECT *	FROM $wpdb->posts WHERE post_parent = 314	AND post_type = 'page' ORDER BY menu_order", 'OBJECT');	?>
<? if ( $pageChildren ) : foreach ( $pageChildren as $pageChild ) : setup_postdata( $pageChild ); ?>


<a href="/authors/#<?php echo get_the_title($pageChild); ?>"><?php echo get_the_title($pageChild); ?>
</a><br>

<? endforeach; endif; ?>
</font></div>


<!-- All Authors Gotten -->
		
		</div>
	</div> 
	
	
	<!-- /login -->
	<!-- The tab on top -->
	<div class="tabSTACKS">
		<ul class="STACKSlogin">
			<li class="STACKSleft"> </li>
			<!-- Logout -->
			
			<li id="STACKStoggle">
				<a id="STACKSopen" class="STACKSopen" href="http://whatthingsdo.com/authors/">THE STACKS</a>
				<a id="STACKSclose" style="display: none;" class="STACKSclose" href="http://whatthingsdo.com/authors/">THE STACKS</a>
			</li>
			<li class="STACKSright"> </li>
		</ul>
	</div> <!-- / top -->
</div> 


<!--END STACKS panel -->



<!-- THE MOREBY Sliding Panel -->

<div id="MOREBYtoppanel">


	<div id="MOREBYpanel">
	
		<div class="MOREBYcontent"> 
		
		<font id=authorheaders>More Comics by...</font><br>
				
				<div id="MOREBY_columns">

<!-- Get MOREBY INFO -->



<font id="authorlist" style="margin-left: 20px; margin-bottom: 20px;">

<a href="/authors/">Programming in process</a>

</font><br><br><br><br>



				</div>			
		</div>
	</div> 
	

	<!-- The MOREBY tab on top -->
	<div class="tabMOREBY">
		<ul class="MOREBYlogin">
			<li class="MOREBYleft"> </li>
			<!-- Logout -->
			
			<li id="MOREBYtoggle">
				<a id="MOREBYopen" class="MOREBYopen" href="http://whatthingsdo.com/authors/">MORE BY...</a>
				<a id="MOREBYclose" style="display: none;" class="MOREBYclose" href="/authors/#<?php echo get_the_title($pageChild); ?>">MORE BY...</a>
			</li>
			<li class="MOREBYright"> </li>
		</ul>
	</div> <!-- The STORE tab on top -->
	
	
</div> 


<!--END MOREBY panel -->




<!-- THE STORE Sliding Panel -->

<div id="STOREtoppanel">


	<div id="STOREpanel">
	
		<div class="STOREcontent"> 
		
		<font id=authorheaders>COMING SOON</font><br>
				
				<div id="STORE_columns">

<!-- Get STORE INFO -->



<font id="authorlist" style="margin-left: 20px; margin-bottom: 20px;">
There will be paper.</font><br><br><br><br>



				</div>			
		</div>
	</div> 
	

	<!-- The STORE tab on top -->
	<div class="tabSTORE">
		<ul class="STORElogin">
			<li class="STOREleft"> </li>
			<!-- Logout -->
			
			<li id="STOREtoggle">
				<a id="STOREopen" class="STOREopen" href="http://whatthingsdo.com/authors/">THE STORE</a>
				<a id="STOREclose" style="display: none;" class="STOREclose" href="http://whatthingsdo.com/authors/">THE STORE</a>
			</li>
			<li class="STOREright"> </li>
		</ul>
	</div> <!-- The STORE tab on top -->
	
	
</div> 


<!--END STORE panel -->






</div>

<div id="mid">
 


