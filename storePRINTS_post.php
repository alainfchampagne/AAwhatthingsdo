<?php
/*
Template Name Posts: StorePrints
*/
?>



<?php get_header('storeproduct'); ?>



<br clear="all">




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


 <br class="clearboth">

<div id="printwhite">



<!-- Begin Product Display Section -->







<div class="pageboxX">





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


<img src="<?php echo $imgpath;?>" alt=""/>


</div><div class="pageboxX"><div class="halfsizebox">

<br><br>
<font id="prodtitleF"'><?php echo get_the_title($post); ?></font><br>



<font id="prodauthorF">by <?php the_author_link(); ?></font><br>


<font id="prodtextF"><?php echo $only_post_text; ?></font><br><br><br clear=all>

<font class="prodpriceF">
<?php
 $id = $post->ID;
 $eshop_product=maybe_unserialize(get_post_meta($id, '_eshop_product','true'));
 $price=$eshop_product['products'][1]['price'];
 echo '$'.$price.'';
 ?>
</font>

<div class="prodAddToCart"><?php echo (do_shortcode("[eshop_addtocart]")); ?></div>

</div>


 <br clear=all>

</div>

<?php }; }; ?>




   
   
   











    


     

     	 












 <br class="clearboth"><br><br>

<!-- END Product Display Section -->


 
 </div>


<!-- additional, similar products go here -->

 <div id=keyline> </div>
 
    
	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>



<?php endif; ?>



  

<?php get_footer(); ?>






