<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
      
      <div class="row">
        <div class="span2 left-column">
          <!--<strong>Published:</strong> -->
					<!-- Display the date (November 16th, 2009 format) -->
          <!--<p><?php the_time('F jS, Y') ?></p> -->
          
          <!--<strong>Author:</strong> -->
          <!-- link to other posts by this posts author. -->
          <!--<p><?php the_author_posts_link() ?></p> -->
          
          <!--<strong>Categories:</strong> -->
          <!-- Display a comma separated list of the Post's Categories. -->
          <!--<p class="postmetadata"><?php the_category(', '); ?></p> -->
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