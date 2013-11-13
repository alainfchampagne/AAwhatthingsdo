<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->


<!-- Comments are listed here -->

 <div id=authorboxrightnoborder>

<?php if ( have_comments() ) : ?>
	
	<!-- older/newer link at top
	
		<div class="navigation">
		<div id=authorlink><font id="botleft"><small><?php previous_comments_link() ?></font>
		<font id="botright"><?php next_comments_link() ?></font></small></div><br><br>
		</div>
	-->
	
	
	<span class="commentlist">
	<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
	</span>

	<div class="navigation">
		<div id=authorlink><font id="botleft"><small><?php previous_comments_link() ?></font>
		<font id="botright"><?php next_comments_link() ?></font></small></div><br>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<div id=authorlink><p class="nocomments">Comments are closed.</p></div>

	<?php endif; ?>
<?php endif; ?>


</div>

<!-- Comments were listed there -->



<!-- Leave a comment box goes here -->

<div id=authorboxleft>  

<span id=authorlinkline>


<?php if ( comments_open() ) : ?>





<div id="respond">

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<!-- This handles user is not LOGGED IN -->


<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>



<font id=authorlinksub>

<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
</font>

<br><br><br><br><br><br><br><br><br>


<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<!-- User not LOGGED IN handled -->



<!-- This displays the commenting user's login name, or, if UNLOGGED IN commenting is enabled, a form-->

<?php if ( is_user_logged_in() ) : ?>


<font id=authorlinksub>
<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. If this is not you, then <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">log out &raquo;</a></p> 
</font>


<?php else : ?>

<p><input type="text" name="author" id="author" value="first & last name" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> class="posttextfieldoff" onfocus="eFocus(this)" onblur="eBlur(this)" /><font id="authorlinksub"><small>  REQUIRED</small></font>
</p>

<p><input type="text" name="email" id="email" value="email (not for print)" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> class="posttextfieldoff" onfocus="eFocus(this)" onblur="eBlur(this)" /><font id="authorlinksub"><small>  REQUIRED</small></font>
</p>

<p><input type="text" name="url" id="url" value="website" size="22" tabindex="3" class="posttextfieldoff" onfocus="eFocus(this)" onblur="eBlur(this)" />
</p>

<?php endif; ?>

<!-- User LOGGED IN, or commentinig user form handled -->



<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->



<!-- COMMENT text area -->

<p><textarea name="comment" id="comment" cols="52.5" rows="5" tabindex="4" class="posttextfieldoff"
 onfocus="eFocus(this)" onblur="eBlur(this)"> write something here... </textarea></p>

<p><input type="image" class="postbutton" name="submit" id="submit" tabindex="5" value="" border="0" />


<br>




<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>


 
 
 

 <!-- Leave a comment box went there -->

</form>

<?php endif; // If registration required and not logged in ?>
</div></div>

<?php endif; // if you delete this the sky will fall on your head ?>
