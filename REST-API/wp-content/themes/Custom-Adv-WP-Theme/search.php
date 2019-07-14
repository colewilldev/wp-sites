<?php get_header();?> 
<div class="archive-page">
  <div class="container content">
      <div class="main block">
        <!-- Check for posts and render if existing -->
        <h1 class="black-text">
         Search Results
        </h1>
       <?php if(have_posts()):?>
        <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile;?>
       <?php else : ?>
        <?php echo wpautop('Sorry, We aint got NO Posts For You!'); ?>
       <?php endif;?>
      </div> <!-- .container.main-content -->

      <div class="side">
    <?php if(is_active_sidebar('sidebar')):?>
      <?php dynamic_sidebar('sidebar');?>
    <?php endif;?>
  </div>
    </div>
</div>
    

<?php get_footer();?>
    


