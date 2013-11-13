<?php
/*
Template Name: StorePrints
*/
?>



<?php get_header('store'); ?>

<a href="http://www.whatthingsdo.com/store/prints/"><div id="topPrints"></div></a>

<div id=storebump> </div>

<!-- Begin Product Display Section -->




<?php $counter = 1; ?>

  <?php
  
      global $post;
 		$args = array( 'numberposts' => 800, 'category' => 131 );
      $the_newer = get_posts($args);
  	?>
    
     
<?php foreach($the_newer as $post) : setup_postdata($post); ?>
      
  


<div class="productblock">






<?php
        $div = '<font id="crookedtext';
        
         if ($counter % 3)
            $div .= '3';
        else if ($counter & 2)
            $div .= '2';
        else 
        	$div .= '1';
        echo $div . '">';
?>
   
     







by <?php the_author_link(); ?>
</font> 


<a href="<?php echo get_permalink($post->post_parent); ?>#<?php echo the_ID(); ?>">  


<img src="<?php echo catch_that_image() ?>">
  
</a>



<?php $authoradd = get_post_meta($post->ID, 'authoradd', true); ?>


<?php
        $div = '<font id="crookedprice';
        
         if ($counter % 3)
            $div .= '3';
        else if ($counter & 2)
            $div .= '2';
        else 
        	$div .= '1';
        echo $div . '">';
?>

<?php $counter++; ?>

<?php
 $id = $post->ID;
 $eshop_product=maybe_unserialize(get_post_meta($id, '_eshop_product','true'));
 $price=$eshop_product['products'][1]['price'];
 echo '$ '.$price.'';
 ?>
</font><br clear=right>



 <?php 

$button = do_shortcode("[eshop_addtocart]");

	if ($button)  
	echo do_shortcode("[eshop_addtocart]"); 
	else
	echo '<div id="crookedtext4">Out of print</div>';
 
?>
 

   

   

     	 

</div>

<?php if ( $counter&1 )  
		{ echo "<br clear=all>" ; } ?>

<?php endforeach; ?>




<div id=keybump> </div>











 <br class="clearboth">
 
<!-- END Product Display Section -->

 
    


  
<div id=storebump> </div>

  

<?php get_footer(); ?>






