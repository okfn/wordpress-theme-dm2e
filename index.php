<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo MAIN_CLASSES; ?>" role="main">
        <div class="row">
          <div class="span2 left-column">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Leftbar") ) : ?>
				    <?php endif; ?>
            &nbsp;
          </div>
        	<div class="span7">
            <!--<div class="page-header">
              <h1><?php _e('Latest Posts', 'roots');?></h1>
            </div> -->
           <?php get_template_part('loop', 'index'); ?>
         </div>
       </div>
    </div><!-- /#main -->
    <?php roots_main_after(); ?>
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo SIDEBAR_CLASSES; ?>" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <?php get_sidebar(); ?>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>