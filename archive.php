<?php 
get_header();  
//include(get_query_template('left-column'));
?>

		<!-- Column for main content area -->
		<div id="content" class="nine columns" role="main">
	
			<div class="post-box">
				<h1>
					<?php if (is_day()) : ?>
						<?php printf(__('Daily Archives: %s', 'reverie'), get_the_date()); ?>
					<?php elseif (is_month()) : ?>
						<?php printf(__('Monthly Archives: %s', 'reverie'), get_the_date('F Y')); ?>
					<?php elseif (is_year()) : ?>
						<?php printf(__('Yearly Archives: %s', 'reverie'), get_the_date('Y')); ?>
					<?php else : ?>
						<?php single_cat_title(); ?>
					<?php endif; ?>
				</h1>
				<hr>
				<?php get_template_part('loop', 'category'); ?>
			</div>

		</div><!-- End Content Column -->
		
		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>