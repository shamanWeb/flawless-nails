<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/wp-load.php");
$post = get_post(79); 
setup_postdata($post); 
$tel = get_field('tel', $post);

$href=telToHref ($tel);
echo '<a href="tel:'.$href.'">'.$tel.'</a>';

// function isBot() {
//      if ( !(isset($_COOKIE['wordpress_test_cookie']) && isset($_SERVER['HTTP_USER_AGENT'])) ) return true;
//      return preg_match("/(bot|slurp|mail\.ru)/i", $_SERVER['HTTP_USER_AGENT']);
//  }
//  $href=telToHref ($tel);
 
//  echo isBot()? '': '<a href="tel:'.$href.'">'.$tel.'</a>';

?>

