<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: tester
*/
get_header();
?>

<div id="pagepost">







	<div id="content" class="widecolumn" role="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				
<!--
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
-->









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


<font id='titlepart'>by <?php the_author_link(); ?></font><font id='titledate'><?php the_date(); ?> </font></div>

<?php } ?>

<div class="anchoroffset"><h1 id="<?php the_title(); ?>"> </h1></div>
<?php the_content('Read the rest of this entry &raquo;'); ?>

<?php $counter++; ?>

<?php } } } ?>


      <div id="sociallinks">
        
          <a href="http://twitter.com/home/?status=I+love+this+comic%3A+<?php the_title(); ?>+%E2%96%B6+<?php the_permalink() ?>" onclick="window.open(this.href);return false;"><img alt="Icon_twitter_small" src="/wp-content/themes/AAwhatthingsdo/images/icon_twitter_small.png?1237886734" />&nbsp;&nbsp;&nbsp;</a>
        
          
          <a href="http://www.facebook.com/share.php?u=<?php the_permalink() ?>" onclick="return TA.FBConnect.shareThisPage()" target="_blank">
            <img src="/wp-content/themes/AAwhatthingsdo/images/icon_facebook_share.gif" alt="" />&nbsp;&nbsp;&nbsp; </a>
       
          <a href="http://del.icio.us/post?url=<?php the_permalink() ?>" onclick="window.open(this.href);return false;"><img alt="Icon_delicious_small" src="/wp-content/themes/AAwhatthingsdo/images/icon_delicious_small.gif?1233885441" />&nbsp;&nbsp;&nbsp;</a>
       
          <a href="http://www.digg.com/submit?phase=2&amp;url=<?php the_permalink() ?>" onclick="window.open(this.href);return false;"><img alt="Icon_digg_small" src="/wp-content/themes/AAwhatthingsdo/images/icon_digg_small.gif?1233885441" />&nbsp;&nbsp;&nbsp;</a>
       
          <a href="http://www.stumbleupon.com/submit?url=<?php the_permalink() ?>" onclick="window.open(this.href);return false;"><img alt="Icon_stumbleupon_small" src="/wp-content/themes/AAwhatthingsdo/images/icon_stumbleupon_small.gif?1233885441" />&nbsp;&nbsp;&nbsp;</a>
       
       </div>





<!-- COMMENTS box /**

<div id=authorboxleft>  

<span id=authorlinkline>
	
	<?php // comments_template(); ?>
	
</div>	

**/ That was COMMENTS box  -->


	
	
<!--  THIS posts all the Author's comics   -->

<div id=addreading>
    
    <div id=keyline> </div> <div id=keybump> </div>  

<?php $postid = get_the_author_meta('aim'); ?>  <!-- Get Author Page ID from AIM field in User Profile -->

<?php $comics = get_post_meta($postid, 'comiclink', false); ?>  <!-- Comic links putlled from CUSTOM FIELDS on Author page -->

<div class=shrinker>
<div id=authorheaders>additional reading</div></div><div id=keybump> </div>

<?php $comics = get_post_meta($postid, 'comiclink', false); ?> 

	
	<?php foreach($comics as $comic) {
	echo ''.$comic.'';
	} ?>
	
<br class="clearboth"><div id=keyline> </div> 

</div>

<!--  THAT posted all the Author's comics   -->



	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>



<?php endif; ?>







</div>


<?php get_footer(); ?>
