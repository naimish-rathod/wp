 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>my Theme</title>
 </head>
  <body>
  	<?php 
  	// wp_nav_menu(
  	// 	array(
  	// 		'theme_location'=>'main'
  	// 	)
  	// )
  	$theme_location = "main";

  	wp_nav_menu($theme_location)
  ?>