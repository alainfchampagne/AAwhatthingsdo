<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Author
*/

get_header();
?>

	<div id="pagepost">

<div id="titleline">









<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	


<div id=keyline> </div>        
<img id=authorphoto src="<?php echo get_post_meta($post->ID, 'author_photo', true); ?>" alt="" /> 





<div id=authorname><?php echo get_post_meta($post->ID, 'author_name', true); ?></div>

<div id=authortitle><?php echo get_post_meta($post->ID, 'author_title', true); ?></div>


<div id=authorquote>&#8220;<?php echo get_post_meta($post->ID, 'author_quote', true); ?>&#8221;</div>



<br class="clearboth"><div id=keyline> </div> <br class="clearboth">
<div id=keyline> </div> <div id=keybump> </div>  



<div id=authorheaders>Biography</div><span id="authorlinkline">
<font id=regular><?php echo get_post_meta($post->ID, 'biography', true); ?></font></span>
<div id=keybump> </div> 

<div id=keyline> </div> <br class="clearboth">
<div id=keyline> </div> <div id=keybump> </div>  


<!-- Comic links using ORGAIZE SERIES

<div class=shrinker>
<div id=authorheaders>comics</div></div>


<?php wp_serieslist_display(); ?> 
	
<br class="clearboth"><div id=keyline> </div> 

<br class="clearboth">
<div id=keyline> </div> <div id=keybump> </div>  

 END OF Comic links using ORGAIZE SERIES -->





<!-- Fumbling attempts to parse the AUTHOR of a series

<?php
$genre = '';
$author = '';
foreach((wp_serieslist_display()) as $category) {
if ($category->category_parent == '10') { // author
$author = $category->name;
} elseif ($category->category_parent == '9') { // genre
$genre = $category->name;
}
}
if($genre > ' ' && $author > ' ') {
echo "<p>$author writes a $genre book.</p>";
}
?>


<?php the_author(); ?>


<?php
//displays users along with count of posts each user has belonging to category 3
$comics = wp_serieslist_display();
if ($comics) {
  foreach ($comics as $comic) {
    $user = get_userdata($comic->user_id);
    $userposts = get_posts('cat=3&showposts=-1&author='.$comic->user_id);
    $count=count($userposts);
    echo '<p>User ID ' . $user->ID . ' ' . $user->user_firstname . ' ' . $user->user_lastname . ', posts in category 3: ' . $count . '</p>';
  }
}
?>

-->
	
	
	


<!-- Comic links putlled from CUSTOM FIELDS on Author page -->

<?php $comics = get_post_meta($post->ID, 'comiclink', false); ?> 

<div class=shrinker>
<div id=authorheaders>comics</div></div><div id=keybump> </div>
	
	<?php foreach($comics as $comic) {
	echo ''.$comic.'';
	} ?>
	

<br class="clearboth"><div id=keyline> </div> 

<!-- END of Comic links putlled from CUSTOM FIELDS on Author page -->






<!-- START the LEFT & RIGHT columns -->





<br class="clearboth">


<div id=authorboxright>  <div id=keybump> </div>  

<?php $books = get_post_meta($post->ID, 'bibliography'); ?> 

<div id=authorheaders>Bibliography</div><div id=keybump> </div>
<font id="authorlinksub">	
	<?php foreach($books as $book) {
	echo '<span id="authorlinkline">'.$book.'</span>';
	} ?>
</font>	

</div>




<div id=authorboxleft>  <div id=keybump> </div>  

<?php $interviews = get_post_meta($post->ID, 'interview', false); ?>

<div id=authorheaders>Selected Interviews</div><div id=keybump> </div>

	<?php foreach($interviews as $interview) {
	echo '<span id="authorlinkline">'.$interview.'</span>';
	} ?>

</div>
















<br class="clearboth">	 </div>
</div>	
	
	
	
	
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>





<?php get_footer(); ?>
