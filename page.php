<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>


				<font id="title">
	<div id="content" class="narrowcolumn" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<div id="titleline"><?php the_title(); ?></div><font id="titlepart"
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>



<?php the_meta(); ?>



				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>



<?php get_footer(); ?>
