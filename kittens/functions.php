<?php
/**
 * Our Twentythirteen child theme functions 
 */

 
/************* CPT Stuff *************/

// Load our "Kittens" custom post type
require_once 'inc/kittens.php';



/************* Custom Thumbnail Sizes *************/

// 2 custom thumnail sizes for displaying our Kitten pics
// For more info: http://codex.wordpress.org/Function_Reference/add_image_size

add_image_size( 'kittens-thumb', 200, 180, true ); 
add_image_size( 'kittens-single', 400, 400, true ); 


?>