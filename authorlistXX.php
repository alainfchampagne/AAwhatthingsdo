<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Author List
*/

get_header();
?>





<? $pageChildren = $wpdb->get_results("SELECT *	FROM $wpdb->posts WHERE post_parent = ".$post->ID."	AND post_type = 'page' ORDER BY menu_order", 'OBJECT');	?>
<? if ( $pageChildren ) : foreach ( $pageChildren as $pageChild ) : setup_postdata( $pageChild ); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>








<div id=keyline> </div>       



<div id=keybump> </div>

<font id=authorheaders><a href="<?php echo get_permalink($pageChild->ID); ?>"><?php echo get_the_title($pageChild); ?></a></font>

<div id=keybump> </div>


<?php echo get_post_meta($pageChild->ID, 'the_title_attribute', true); ?>


<?php $comics = get_post_meta($pageChild->ID, 'comiclink', false); ?> 

<div class=shrinker>

	
	<?php foreach($comics as $comic) {
	echo ''.$comic.'';
	} ?>
	

<br class="clearboth"><div id=keyline> </div> 


<br>


	
  <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<? endforeach; endif; ?>


<?php get_footer(); ?>
