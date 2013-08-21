<?php 
get_header();  
include(get_query_template('left-column'));
?>

		<!-- Column for main content area -->
		<div id="content" class="six columns" role="main">
	
			<div class="post-box">
				<?php get_template_part('loop', 'index'); ?>
			</div>

		</div><!-- End Content Column -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>