<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 /*
Template Name: About Page
*/

get_header();

?>




	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




<div id='titleline' <?php post_class() ?> id='post-<?php the_ID(); ?>'>

<font id='title'>A few things to do</font>



<font id='titledate'><?php the_date(); ?> </font></div>



<div id="describe_columns"><font id=describe_text>


We want to read comics, good comics, alot of them, and all the time.  We want to see the work that our favorite artists are doing, frequently.  Every month.  Every week?  That's what we want, and that's what we're going to do with this site.  There will be decades-old work, and there will be brand-new, never before seen comics, shown here before they appear in print.  Our reach shall exceed our grasp, and in that our grasp shall grow, so will our reach.  We welcome your comments, criticisms, and notes on how we can improve our site.  Please send a note to <b>jordan at whatthingsdo.com</b>
<br>
&nbsp;&nbsp;We are in need of the assistance of skilled programmers with php & css skills, as well as skilled graphic production.  If you fit the bill and have the time to help us out, please write to jordan at whatthingsdo.com
<br>
&nbsp;&nbsp;Thank you.

<br><br>
<small>
All copyrights belong to the artists.<br>
Comics Production assistance, Gary Musgrave.<br>
Est. September 2009 by Jordan Crane.
</small>




</font></div>

<br><br>

<div id="titleline"><font id='describe_text'>

<?php the_content(); ?>

</font>
</div>




<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>



<?php get_footer(); ?>