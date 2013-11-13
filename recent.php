<?php
/**
 * @package WordPress
 * @subpackage WhatThingsDo_Theme
 */
/*
Template Name: Recent
*/

get_header(); 
?>



<?php $my_query = new WP_Query('posts_per_page=10'.'&paged='.$paged);
  while ($my_query->have_posts()) : $my_query->the_post();
  $do_not_duplicate[] = $post->ID ?>





<div id="pagepost">



<!-- 

Thumbnail:  <img src="<?php echo get_post_meta($post->ID, "Thumbnail", true);?>" />

 -->




<div id="titleline" <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
<!--
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
-->

<font id="title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post); ?></a></font>


<font id="titlepart"><?php echo wp_seriesmeta_write(); ?>by <?php the_author_link(); ?></font><font id="titledate"><?php the_date(); ?> </font>

</div>
 
 
 
				
				<div id="<?php the_category_unlinked(''); ?>"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
<br class="clearboth"><font id="subtext">
<?php the_tags('', ', ', ''); ?>, <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></font>

</div>
		<?php endwhile; ?>

		
<div class="oldrbutton"><?php next_posts_link('<img src="http://whatthingsdo.com/wp-content/themes/AAwhatthingsdo/images/BUTTONoldr.gif" alt="older">') ?></div>

<div class="newrbutton"><?php previous_posts_link('<img src="http://whatthingsdo.com/wp-content/themes/AAwhatthingsdo/images/BUTTONnewr.gif" alt="newer">') ?></div>
		
<div class="clearboth"> </div>  <div id=keybump> </div>  

	




		



<?php get_footer(); ?>
