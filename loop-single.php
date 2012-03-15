<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <?php roots_post_inside_before(); ?>
      <header class="page-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php //roots_entry_meta(); ?>
      </header>
      <div class="row">
        <div class="span2">
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
        <div class="span7 entry-content">
          <?php the_content(); ?>
        </div>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
        <?php $tags = get_the_tags(); if ($tags) { ?><p><?php the_tags(); ?></p><?php } ?>
      </footer>
      <?php comments_template(); ?>
      <?php roots_post_inside_after(); ?>
    </article>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>