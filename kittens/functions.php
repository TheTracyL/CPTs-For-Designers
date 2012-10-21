<?php
/**
 * This is not a complete functions file!
 * It just has the line of code to load the CPT 
 * and 2 custom thumbnail sizes.
 * You can add it to your theme's functions.php file
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