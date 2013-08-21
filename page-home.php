<?php
/*
Template Name: Home
*/
get_header();
?>

		<!-- Column for main content area -->
		<div id="content" class="twelve columns" role="main">
	
			<div class="post-box">
				<?php /* Start loop */ ?>
				<?php while (have_posts()) : the_post(); ?>
        <div class="home-image">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php the_content(); ?>
        <?php endwhile; // End the loop ?>
			</div>

		</div><!-- End Content Column -->
    
    <div class="twelve columns home-posts">
      <?php
      $postnumber = '4';
      $postcolumn = 12 / $postnumber;
      if ($postcolumn == 4) {
        $postcolumnclass = 'four columns';
      }
			else {
				$postcolumnclass = 'three columns';
			}
      $poststoshow = 'numberposts='.$postnumber;
      
      $postslist = get_posts($poststoshow);
      foreach ($postslist as $post) :
        setup_postdata($post);
      ?>
       
      <?php 
      if (wp_get_attachment_url( get_post_thumbnail_id($post->ID) )) {
        $imgurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      }
      else {
        $imgurl = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAFUlEQVQImWNgQAIPHjz4TyqHgYEBAOwRDn3kWbUIAAAAAElFTkSuQmCC';
      }
      ?>
      
        <div class="<? echo $postcolumnclass ?>">
          <a class="post" href="<?php the_permalink(); ?>">
            <span class="image" style="background-image:url(<?php echo $imgurl ?>)">
            </span>
            <span class="text">
              <h5><?php the_title(); ?></h5>
              <?php the_excerpt() ?>
            </span>
          </a>
        </div>
      
      <?php endforeach ?>
    </div>
		
<?php get_footer(); ?>
