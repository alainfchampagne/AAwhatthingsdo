<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */



//Tumblr grabber

function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}


if ( function_exists('register_sidebar') ) {
register_sidebar(array(
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>',
));
}

  


// eshop Return the total amount of items in the shopping cart
function get_myeshop_cart_itemcount(){
	global $blog_id;
	$total_items_in_cart = 0;
	if(isset($_SESSION['eshopcart'.$blog_id])) {
		$item_array = $_SESSION['eshopcart'.$blog_id];
		foreach($item_array as $item) {
			$total_items_in_cart = $total_items_in_cart + $item['qty'];
		}
	}
	return $total_items_in_cart;
}
// eshop Display number of items in shopping cart
function display_my_cart_items() {
	$cart_item_count = get_myeshop_cart_itemcount();
	if ( $cart_item_count == 1 ) printf('%d %s', $cart_item_count, __('thing', 'theme'));
	elseif ( $cart_item_count > 1 ) printf('%d %s', $cart_item_count, __('things', 'theme'));
	else echo __('no things','theme');
	}




add_theme_support('post-thumbnails'); 

function removeImagefromContent() {

    $content = get_the_content('');
    $content = apply_filters('the_content', $content);
    $pattern = '/(<img.+?>)/';
    $replacements='';
    $removed = preg_replace($pattern, $replacements, $content);
    echo $removed;

}



function catch_that_image() {

  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/default.jpg";
  }
  return $first_img;
}




automatic_feed_links();

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));



function the_category_unlinked($separator = ' ') {
    $categories = (array) get_the_category();

    $thelist = '';
    foreach($categories as $category) {    // concate
        $thelist .= $separator . $category->category_nicename;
    }

    echo $thelist;
}


function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <div id=commentblock>
   
   <span <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>"></span>
     <div id="comment-<?php comment_ID(); ?>">
      <div id=avatar>
      
  
  <?php $authoremail = get_the_author_meta('email'); ?>
      
  <?php echo get_avatar( $comment, $size = '55', $default = '/images/invisible.gif' ); ?>

         
        </div>
        
        
		<div id=commenttextblock>
		
        <font id=commentauthorlink><?php printf(__('%s'), get_comment_author_link()) ?></font><br>
	    <font id=commentdatelink><?php printf(__('%1$s'), get_comment_date()) ?></font>
      	
      
      <?php if ($comment->comment_approved == '0') : ?>
         <br><font id="commenttext"><em><?php _e('comment pending') ?></em></font>
         <br />
      <?php endif; ?>
      
     
       <div id=commentblock2><font id=commenttext><?php comment_text() ?></font></div>
      
    


      
         <font id="commenttext"><small>
         <?php edit_comment_link(__('Edit &nbsp; &nbsp; '),'  ','') ?><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
         </small></font>  </div>
	 </div><span class="clearboth"></span></div>
<?php
        }

?>
