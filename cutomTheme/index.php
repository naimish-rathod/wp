<?php 
 get_header();
?>

<?php  

if(have_posts())
{
	 while (have_posts()) {
	 	the_post(); 
	 	echo "<a href='".get_the_permalink()."'>";
		 	echo "<h1>";
		 		the_title();
		 	echo "</h1>";
	 	echo "</a>";

	 	the_excerpt();
	 	//
	 	the_content();
	 }
	
}

echo do_shortcode('[myform]');
 
?>
<?php
 
  get_footer(); 
 ?>


 
 