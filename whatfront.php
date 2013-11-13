<?php
/**
 * @package WordPress
 * @subpackage WhatThingsDo_Theme
 */
 /*
Template Name: WhatFront
*/

get_header('home'); 
?>
     
<div id=keybump> </div>     
<div id=keybump> </div>

  
 




 
 
 <!-- STORE - - - - - - - - - - - - - - - - - - - - - - - - -->


<div class="pageboxR">
 <?php
  
      global $post;
 
      $the_newer = get_posts('numberposts=18&category=130');
  	?>
    
     <?php $counter = 0; ?>   
      <?php foreach($the_newer as $post) : setup_postdata($post); ?>
      
     
     <?php if ( $counter == 18 ) { echo  "<br class='clearboth'><br>" ; } ?>
     	 
<div class="halfsizebox" <?php post_class() ?> id="post-<?php the_ID(); ?>">
   



<?php
// Get the all post content in a variable
$posttext = $post->post_content;
$posttext1 = $post->post_content;
 
// We will search for the src="" in the post content
$regular_expression = '~src="[^"]*"~';
$regular_expression1 = '~<img [^\>]*\ />~';
 
// WE will grab all the images from the post in an array $allpics using preg_match_all
preg_match_all( $regular_expression, $posttext, $allpics );
 
// Count the number of images found.
$NumberOfPics = count($allpics[0]);
 
// This time we replace/remove the images from the content
$only_post_text = preg_replace( $regular_expression1, '' , $posttext1);
/*Only text will be printed*/





// Check to see if we have at least 1 image
if ( $NumberOfPics > 1 )
{
/* Here we put up the second image */
 
for ( $i=1; $i < $NumberOfPics ; $i++ )
{           $str1=$allpics[0][$i];
$str1=trim($str1);
$len=strlen($str1);
$imgpath=substr_replace(substr($str1,5,$len),"",-1);
?>

 



<img src='<?php echo $imgpath;?>' alt=""/>


<font id='prodtitle'><?php echo get_the_title($post); ?></font><br>



<font id='prodauthor'>by <?php the_author_link(); ?></font><br>


<font id='prodtext'><?php echo $only_post_text; ?></font><br><br><br clear=all>

<font id='prodprice'>
<?php
 $id = $post->ID;
 $eshop_product=maybe_unserialize(get_post_meta($id, '_eshop_product','true'));
 $price=$eshop_product['products'][1]['price'];
 echo '$'.$price.'';
 ?>
</font>

<div id='prodAddToCart'><?php echo (do_shortcode("[eshop_addtocart]")); ?></div>



<?php }; }; ?>


 <br clear=all>
<div id=homekeyline></div>
 

    
      </div> 
  <?php $counter++; ?>
      <?php endforeach; ?>
      
</div>







 <!-- COMICS - - - - - - - - - - - - - - - - - - - - - - - - -->
 
  
  
<div class="pageboxR">





 <?php
  
      global $post;
 
      $the_newer = get_posts('numberposts=13&category=3,22');
  	?>
    
     <?php $counter = 0; ?>   
      <?php foreach($the_newer as $post) : setup_postdata($post); ?>
      
     
     <?php if ( $counter == 13 ) { echo  "<br class='clearboth'><br>" ; } ?>
     	 
<div class="halfsizebox" <?php post_class() ?> id="post-<?php the_ID(); ?>">
   







 
<div id="Cyellowtint">
<?php if (in_category('New Work')) { echo " <div id='NEWnewwork'> </div>"; } ?>
<div class="Cclipout"><div class="Cclipin">

<a href="<?php echo get_permalink($post->post_parent); ?>#<?php echo the_ID(); ?>">
<?php the_content('image here'); ?>
</a>

</div></div></div>




 <br class="clearleft">
 
 <br>

<?php $authoradd = get_post_meta($post->ID, 'authoradd', true); ?>
<a href="<?php echo get_permalink($post->post_parent); ?>#<?php echo the_ID(); ?>">
<font id="comictitlehome"><?php echo get_the_title($post); ?></font></a><br><br>
 

<font id='titleauthorhome'>by <?php the_author_link(); ?><br>

<?php  if($authoradd){ 
	 echo "$authoradd</font><br>";
	} else {
     echo "</font><br>";
   } ?>
   

<div id=homekeyline></div><br>
  
      </div> 
  <?php $counter++; ?>
      <?php endforeach; ?>
      
      
      
      
      
      
      	<?php require_once (ABSPATH . WPINC . '/feed.php');
	$rss = @fetch_feed('http://feeds.feedburner.com/tieduptight');
 
	if (!is_wp_error( $rss ) ) :
		$maxitems = $rss->get_item_quantity(19);
		$rss_items = $rss->get_items(0, $maxitems);
	endif;
 
	if ($maxitems == 0) echo '<div class="tumblr-post">Nothing here, folks.</div>';
	else
	foreach ( $rss_items as $item ) : ?>
		<a href='<?php echo wp_filter_kses($item->get_link()); ?>'><div class="tumblr-post">
			<font id="comictitlehomexx"><?php echo string_limit_words($item->get_description(), 5); ?>
		</a><br></font><div id=homekeyline></div>
		</div>
	<?php endforeach; ?>
 
   
 
</div></div>














  

    
  
<br class="clearboth">
 
 









  

<?php get_footer(); ?>













