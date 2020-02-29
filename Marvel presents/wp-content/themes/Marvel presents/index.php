<?php get_header(); ?>

<br>

<div class="site-content clearfix">


	
	<div class="main-column">
		<?php
		if( have_posts() ){
			while( have_posts() ){
				the_post();		

				get_template_part("content");
			
			}
		}
		else{
			echo "No content found";
		}
		?>
	</div>

	

</div>

<?php 
get_footer(); 
	// global $post;
	// echo "<pre>";
	// 	print_r($post);
	// echo "</pre>";	

?>