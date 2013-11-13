<?php
/*
Template Name: StoreBooks
*/
?>



<?php get_header('store'); ?>


<div id=storebump> </div>

<!-- Begin Product Display Section -->



  <?php
  
      global $post;
 		$args = array( 'numberposts' => 800, 'category' => 130,131,136 );
      $myposts = get_posts($args);
  	?>

<div class="pageboxX">

<?php
$i=1;
foreach($myposts as $post) :
if($i%2 != 0) :
setup_postdata($post);
//output odd post in the usual way 
?>



<div class="halfsizebox" <?php post_class() ?> id="post-<?php the_ID(); ?>">
   

<?php
// Get the all post content in a variable
$posttext = $post->post_content; $posttext1 = $post->post_content;
 
// We will search for the src="" in the post content
$regular_expression = '~src="[^"]*"~'; $regular_expression1 = '~<img [^\>]*\ />~';
 
// WE will grab all the images from the post in an array $allpics using preg_match_all
preg_match_all( $regular_expression, $posttext, $allpics );
 
// Count the number of images found.
$NumberOfPics = count($allpics[0]);
 
// This time we replace/remove the images from the content
$only_post_text = preg_replace( $regular_expression1, '' , $posttext1);
/*Only text will be printed*/
?>

<img src="<?php echo catch_that_image() ?>">

<font id='prodtitle'><?php echo get_the_title($post); ?></font><br>



<font id='prodauthor'>by <?php the_author_link(); ?></font><br>


<font id='prodtext'><?php echo $only_post_text; ?></font><br><br><br clear=all>

<font id='prodprice'>
<?php
 $id = $post->ID;
 $eshop_product=maybe_unserialize(get_post_meta($id, '_eshop_product','true'));
 $price=$eshop_product['products'][1]['price'];
 echo '$'.$price.'';
 ?>
</font>

<div id='prodAddToCart'><?php echo (do_shortcode("[eshop_addtocart]")); ?></div>




</div>


 <br clear=all>
<div id=homekeyline></div>





<?php 
endif;
$i++;
endforeach;
?>

</div>
<div class="pageboxX">

<?php
$i=1;
foreach($myposts as $post) :
if($i%2 == 0) :
setup_postdata($post);

//output even post in the usual way    ?>




     	 
<div class="halfsizebox" <?php post_class() ?> id="post-<?php the_ID(); ?>">
   



<?php
// THIS TAKEAS THE 2nd IMAGE and uses it

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


<font id='prodtitle'><?php echo get_the_title($post); ?></font><br>



<font id='prodauthor'>by <?php the_author_link(); ?></font><br>


<font id='prodtext'><?php echo $only_post_text; ?></font><br><br><br clear=all>

<font id='prodprice'>
<?php
 $id = $post->ID;
 $eshop_product=maybe_unserialize(get_post_meta($id, '_eshop_product','true'));
 $price=$eshop_product['products'][1]['price'];
 echo '$'.$price.'';
 ?>
</font>

<div id='prodAddToCart'><?php echo (do_shortcode("[eshop_addtocart]")); ?></div>



</div>
 <br clear=all>
<div id=homekeyline></div>






<?php }; }; 
endif;
$i++;
endforeach;
?>

</div>









 <br clear=all>
 

    




 




<!-- END Product Display Section -->


 
    


  
<div id=storebump> </div>

  

<?php get_footer(); ?>






