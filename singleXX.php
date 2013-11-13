<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 
  /*
Template Name: SingleXX
*/




get_header('singleXX'); 
?>






<div id="pagepost">


	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				
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

<div class="anchoroffset"><h1 id="<?php echo the_ID(); ?>"> </h1></div>

<?php } ?>



<?php the_content('Read the rest of this entry &raquo;'); ?>




<?php $counter++; ?>

<?php } } } ?>


<!--  THIS checks for and puts up CONTINUED...   -->

<?php $continued = get_post_meta($post->ID, 'continued', true); ?>

<?php if ( $continued ) { echo '<font id=continued>'.$continued.'</font><br class="clearboth">'; } ?>

<!--  THAT checked for and put up a CONTINUED...   -->


<!--  THIS checks for and puts up a BUY button   -->

<?php if ( $buy ) { echo '<a href="'.$buy.'"><img class="buybutton2" src="/wp-content/themes/AAwhatthingsdo/images/BUTTONbuy.png"></a><br><br>'; } ?>

<!--  THAT checked for and puts up a BUY button   -->



<!-- Begin News Section -->


<?php if (in_category('84')) { ?>


<font id=authorheaders>new do, what?<br></font>    
<div id=keybump> </div>


<div id="<?php the_category_unlinked(''); ?>"> 



<div class='topleftbox'>


<font id="newsdatehome">
<?php echo the_time('j F Y') ?>
</font><br>

<font id="newstitlehome">
<?php echo get_the_title($my_query); ?>
</font><br>

<font id="newsauthorhome">
posted by <?php the_author_link(); ?>
</font>

<font id="newstexthome"> 
<?php echo removeImagefromContent() ?>
</font>


<?php $authoradd = get_post_meta($post->ID, 'authoradd', true); ?>



</div> 


<img src="<?php echo catch_that_image() ?>">




<?php } else { ?>
<?php } ?>


<!-- END News Section -->





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





	


	
<!--  THIS posts all the Author's comics   -->

<div id=addreading>
    
    <div id=keyline> </div> <div id=keybump> </div>  

<?php $postid = get_the_author_meta('aim'); ?>  <!-- Get Author Page ID from AIM field in User Profile -->

<?php $comics = get_post_meta($postid, 'comiclink', false); ?>  <!-- Comic links putlled from CUSTOM FIELDS on Author page -->

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



	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>



<?php endif; ?>


</div>

<!-- If there are relevant BB posts, show them here -->
<!-- 

<br class="clearboth"><div id=keyline> </div> <div id=keybump> </div>  
<div id=authorheaders>testing, excuse the mess</div><div id=keybump> </div>



<?php



global $wpdb;
$query="SELECT * FROM bb_topics WHERE topic_status=0 ORDER BY topic_time DESC LIMIT 10";
$results=$wpdb->get_results($query);




foreach ($results as $result) {
echo "<li><a href='/forums/topic.php?id=".$result->topic_id."'>".$result->topic_title."</a></li>";
}



?>



 

<br class="clearboth"><div id=keyline> <br></div>  

-->

<!-- End of relevant BB posts -->




<?php get_footer(); ?>