<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      
      <div class="row">
        <div class="span2 left-column">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Leftbar") ) : ?>
					<?php endif; ?>
          &nbsp;
        </div>
        <div class="span7">
          <div class="page-header">
            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
          </div>
         <?php the_content(); ?>
        </div>
      </div>
      
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>