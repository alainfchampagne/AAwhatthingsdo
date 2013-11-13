<!-- For Single Panels -->


<?php if (in_category('22')) { ?>





<div id="<?php the_category_unlinked(''); ?>"> 



<div id='titleline' <?php post_class() ?> id='post-<?php the_ID(); ?>'>

<font id='title'><?php echo get_the_title($post); ?></font>

<font id='titlepart'>by <?php the_author_link(); ?>

<?php $authoradd = get_post_meta($post->ID, 'authoradd', true); ?>


<?php  if($authoradd){ 
	 echo "<font id='titleauthorhome'>&nbsp;&nbsp;$authoradd</font>";
	} else {
     echo "";
   } ?></font>



<!--  THIS checks for and puts up a BUY button   -->

<?php $postid = get_the_author_meta('aim'); ?>  <!-- Get Author Page ID from AIM field in User Profile -->



<?php $buy = get_post_meta($post->ID, 'buylink', true); ?>  <!-- Comic links pulled from CUSTOM FIELDS on Author page -->

<?php if ( $buy ) { echo '<a href="'.$buy.'" target="new"><img class="buybutton" src="/wp-content/themes/AAwhatthingsdo/images/BUTTONbuy.png"></a>'; } ?>

<!--  THAT checked for and puts up a BUY button   -->



</font><font id='titledate'><?php the_date(); ?> </font></div>



<!--  THIS checks for and puts up a BREIF DESCRIPTION   -->

<?php $postid = get_the_author_meta('aim'); ?>  <!-- Get Author Page ID from AIM field in User Profile -->



<?php $describe = get_post_meta($post->ID, 'descriptive_text', true); ?>  <!-- Comic links pulled from CUSTOM FIELDS on Author page -->

<?php if ( $describe ) { echo '<div id="describe_columns"><font id=describe_text>'.$describe.'</font></div>'; } ?>

<!--  THAT checked for and puts up a BREIF DESCRIPTION   -->




</div> 


<?php the_content('Read the rest of this entry &raquo;'); ?>


<!-- NEED PREVIOUS & NEXT POST LINKS HERE, based on tags within this category-->


<?php } else { ?>





<!-- END Single Panels -->


INSERT THIS HERE ON LINE 244 of Single.php