<?php
/*
Template Name: Custom Template
*/
get_header(); 
include(get_query_template('left-column'));
?>

		<!-- Column for main content area -->
		<div id="content" class="eight columns" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'page'); ?>
			</div>

		</div><!-- End Content Column -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>