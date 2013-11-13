<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>







	<div id="pagepost">

	



<?php $my_query = new WP_Query('posts_per_page=1');
  while ($my_query->have_posts()) : $my_query->the_post();
  $title = $post->ID; ?>


<div class=shrinker2>   
<div id="titleline" <?php post_class() ?> id="post-<?php the_ID(); ?>">
<font id="title"><?php echo get_the_title($title); ?></font>
<font id="titlepart">by <?php the_author_link(); ?></font><font id="titledate"><?php the_date(); ?> </font>
</div>
 

<?php endwhile; ?>











           <?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		

				<div class="entry">
					<?php the_content(); ?>
				</div>


		<?php endwhile; ?>



		
		

<div class="newrbutton"><?php next_posts_link('<img src="http://whatthingsdo.com/wp-content/themes/AAwhatthingsdo/images/BUTTONnext.gif" alt="newer">') ?></div>
<div class="oldrbutton"><?php previous_posts_link('<img src="http://whatthingsdo.com/wp-content/themes/AAwhatthingsdo/images/BUTTONprev.gif" alt="older">') ?></div>
<div class="clearboth"> </div>		
		
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
				/*	GET Rid of Search form.. 
		
		get_search_form(); 
		
		*/


	

	endif; ?>









<!-- Finding the LAST POST

<?php $query = new WP_Query('order=asc'); ?>
  <?php if ($query->have_posts()) : ?>
      <?php while ($query->have_posts()) : $query->the_post(); ?><h3><?php the_title();?></h3>
        <?php if(($query->current_post + 1) == ($query->post_count)) {?> THE END <BR><BR> <?php };?>
              <?php endwhile; else: ?>
    <li>Sorry, NOTHING.</li>
  <?php endif; ?>


-->


<?php $my_query = new WP_Query('posts_per_page=1');
  while ($my_query->have_posts()) : $my_query->the_post();
  $title = $post->ID; ?>
  
  
<BR><BR>
  
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





<?php endwhile; ?>











	</div>


<?php get_footer(); ?>