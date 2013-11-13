<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();

?>






<div id="pagepost">


	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<!-- Begin Product Display Section -->





<div id=keybump> </div>


<?php if ( in_category(131) ) { ?>





<img src="<?php echo catch_that_image() ?>">


<font id="newsdatehome">
<?php echo the_time('j F Y') ?>
</font><br>

<font id="newstitlehome">
<?php echo get_the_title($post); ?>
</font><br>

<font id="newsauthorhome">
posted by <?php the_author_link(); ?>
</font>

<font id="newstexthome"> 
<?php echo removeImagefromContent() ?>
</font>


<?php $authoradd = get_post_meta($post->ID, 'authoradd', true); ?>



</div> 




<div id=keyline> </div>



   
   
   
<?php } else { ?>











 <br class="clearboth">


<!-- END Product Display Section -->





				
<!--
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
-->



<!-- This is for post PREVIEW -->

<?php if ( $preview ) { ?>

<div id="titleline" <?php post_class() ?> id="post-<?php the_ID(); ?>">
				

<font id="title"><?php echo get_the_title($post); ?></font>


<font id="titlepart">by <?php the_author_link(); ?>

<?php $authoradd = get_post_meta($post->ID, 'authoradd', true); ?>


<?php  if($authoradd){ 
	 echo "<font id='titleauthorhome'>&nbsp;&nbsp;$authoradd</font>";
	} else {
     echo "";
   } ?></font>
   
   <font id="titledate"><?php the_date(); ?> </font>

</div>
 
<div id="<?php the_category_unlinked(''); ?>"><?php the_content('Read the rest of this entry &raquo;'); ?></div>

<table cellpadding="20px"><tr><td>
<font id="authorquote"> NOTE:<br>The following pages will be included in the final post, displayed <em>before</em> the page above, 
in order to preserve the story continuity.  <br><br>
<small>If you see no pages below it is for one of the following reasons:<br>
1. This is the first post in your series.<br> 
2. Your tags do not match from post to post.  If it is your tags, just pull up a previous post, make a note of your tags, and
duplicate them for your current post.<br> 
</small> </font>
</td></tr></table><BR>

<?php } ?>

<!-- That was for post PREVIEW -->







<?php $counter = 0; ?>   



<?php
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

$args=array(
'tag__and' => $tag_ids,
'post__and' => array($post->ID),
'showposts'=>0, // Number of related posts that will be shown.
'caller_get_posts'=>1,
'order' => (asc)
);
$my_query = new wp_query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) {
$my_query->the_post();
?>

<?php if ( $counter == 0 ) { ?>

<div id='titleline' <?php post_class() ?> id='post-<?php the_ID(); ?>'>

<font id='title'><?php echo get_the_title($post); ?></font>

<font id='titlepart'>by <?php the_author_link(); ?>

<?php $authoradd = get_post_meta($post->ID, 'authoradd', true); ?>


<?php  if($authoradd){ 
	 echo "<font id='titleauthorhome'>&nbsp;&nbsp;$authoradd</font>";
	} else {
     echo "";
   } ?></font>




<!--  THIS checks for and puts up a BUY button   -->

<?php $postid = get_the_author_meta('aim'); ?>  <!-- Get Author Page ID from AIM field in User Profile -->



<?php $buy = get_post_meta($post->ID, 'buylink', true); ?>  <!-- Comic links pulled from CUSTOM FIELDS on Author page -->

<?php if ( $buy ) { echo '<a href="'.$buy.'" target="new"><img class="buybutton" src="/wp-content/themes/AAwhatthingsdo/images/BUTTONbuy.png"></a>'; } ?>

<!--  THAT checked for and puts up a BUY button   -->



</font><font id='titledate'><?php the_date(); ?> </font></div>



<!--  THIS checks for and puts up a BREIF DESCRIPTION   -->

<?php $postid = get_the_author_meta('aim'); ?>  <!-- Get Author Page ID from AIM field in User Profile -->



<?php $describe = get_post_meta($post->ID, 'descriptive_text', true); ?>  <!-- Comic links pulled from CUSTOM FIELDS on Author page -->

<?php if ( $describe ) { echo '<div id="describe_columns"><font id=describe_text>'.$describe.'</font></div>'; } ?>

<!--  THAT checked for and puts up a BREIF DESCRIPTION   -->



<?php } ?>


<?php if ( $counter != 0 ) { ?>

<span class="anchoroffset"><h1 id="<?php echo the_ID(); ?>"> </h1></span>

<?php } ?>

<?php the_content('Read the rest of this entry &raquo;'); ?>

<?php $counter++; ?>




<!--  THIS checks for and puts up CONTINUED...   -->

<?php $continued = get_post_meta($post->ID, 'continued', true); ?>

<?php if ( $continued ) { echo '<font id=continued>'.$continued.'</font><br class="clearboth">'; } ?>


<!--  THAT checked for and put up a CONTINUED...   -->









<!--  THIS checks for STORE ITEMS and puts up items according to tag relevance   -->


<?php if ( $counter == 1 ) { ?>



 



<?php
  
      global $post;
 
      $the_newer = get_posts('numberposts=2&category=130');
  	?>
    
     <?php $STcounter = 1; ?>  
     
   
      
      <?php foreach($the_newer as $post) : setup_postdata($post); ?>
      
     
<?php if ( $STcounter == 1 ) { echo  "<div class='pageboxR'>" ; } ?>

 
<?php if ( $STcounter == 2 ) { echo  "<div class='pageboxL'>" ; } ?>
 
<?php echo ""; ?>        
     	 
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

 



<img src='<?php echo $imgpath;?>' alt=""/><br>


<font id='prodtitleF'><?php echo get_the_title($post); ?></font><br>



<font id='prodauthorF'>by <?php the_author_link(); ?></font><br>


<font id='prodtextF'><?php echo $only_post_text; ?></font><br><br><br>

<font class='prodpriceF'>
<?php
 $STid = $post->ID;
 $eshop_product=maybe_unserialize(get_post_meta($STid, '_eshop_product','true'));
 $price=$eshop_product['products'][1]['price'];
 echo '$'.$price.'';
 ?>
</font>

<div class='prodbuttonF'><?php echo (do_shortcode("[eshop_addtocart]")); ?></div>

<br>

<?php }; }; ?>


    
      </div> <br clear=all>
  <?php $STcounter++; ?></div>
  
  
      <?php endforeach; ?>
      
      </div>








<?php } ?> 






<!--  THAT checked for STORE ITEMS -->












<?php } } } ?>






<!--  THIS checks for and puts up a BUY button   -->

<?php if ( $buy ) { echo '<a href="'.$buy.'"><img class="buybutton2" src="/wp-content/themes/AAwhatthingsdo/images/BUTTONbuy.png"></a><br><br>'; } ?>

<!--  THAT checked for and puts up a BUY button   -->








<br class="clearboth">
 <div id=keyline> </div> <div id=keybump> </div>  <div class=shrinker>
<div id=authorheaders>link</div></div>
  <div id="sociallinks">
        
          <a href="http://twitter.com/home/?status=So+this+is+a+good+comic%3A+%E2%96%B6+<?php the_permalink() ?>" onclick="window.open(this.href);return false;"><img alt="Icon_twitter_small" src="/wp-content/themes/AAwhatthingsdo/images/icon_twitter_small.png?1237886734" />&nbsp;&nbsp;&nbsp;</a>
        
          
          <a href="http://www.facebook.com/share.php?u=<?php the_permalink() ?>" onclick="return TA.FBConnect.shareThisPage()" target="_blank">
            <img src="/wp-content/themes/AAwhatthingsdo/images/icon_facebook_share.gif" alt="" />&nbsp;&nbsp;&nbsp; </a>
       
          <a href="http://del.icio.us/post?url=<?php the_permalink() ?>" onclick="window.open(this.href);return false;"><img alt="Icon_delicious_small" src="/wp-content/themes/AAwhatthingsdo/images/icon_delicious_small.gif?1233885441" />&nbsp;&nbsp;&nbsp;</a>
       
          <a href="http://digg.com/submit?url=<?php the_permalink() ?>&amp;title=This is good on WTD" onclick="window.open(this.href);return false;"><img alt="Icon_digg_small" src="/wp-content/themes/AAwhatthingsdo/images/icon_digg_small.gif?1233885441" />&nbsp;&nbsp;&nbsp;</a>
       
          <a href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>" onclick="window.open(this.href);return false;"><img alt="Icon_stumbleupon_small" src="/wp-content/themes/AAwhatthingsdo/images/icon_stumbleupon_small.gif?1233885441" />&nbsp;&nbsp;&nbsp;</a>
       
       </div>

<span class="clearboth">  </span><div id=keybump> </div>





	


	


<div class=shrinker>
<div id=authorheaders>additional reading</div></div><div id=keybump> </div>

<?php $comics = get_post_meta($postid, 'comiclink', false); ?> 
	
<?php if ( $comics )
	foreach($comics as $comic) {
	echo ''.$comic.'';
	} ?>
	
<br class="clearboth"><div id=keyline> </div> 

</div>

<!--  THAT posted all the Author's comics   -->

    <?php } ?>  <!-- This line Closes else loop for Product Display -->

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>



<?php endif; ?>


</div>





 

<br class="clearboth"><div id=keyline> <br>


<!-- End of relevant BB posts -->




<?php get_footer(); ?>