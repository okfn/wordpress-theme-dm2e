<?php
get_header();  
include(get_query_template('left-column'));
?>

		<!-- Column for main content area -->
		<div id="content" class="eight columns" role="main">
	
			<div class="post-box">
				<h1><?php _e('Search Results for', 'reverie'); ?> "<?php echo get_search_query(); ?>"</h1>
				<?php get_template_part('loop', 'search'); ?>
			</div>

		</div><!-- End Content Column -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>