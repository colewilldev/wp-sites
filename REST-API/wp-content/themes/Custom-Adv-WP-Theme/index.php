<?php get_header();?>

<div class="container content">
  <div class="main block">
    <!-- Check for posts -->
    <?php if(have_posts()) :?>
      <?php while(have_posts()) : the_post();?>
      <?php get_template_part('content', get_post_format());?>
    <?php endwhile;?>
    <?php else : ?>
    <?php echo wpautop('Sorry No posts were found') ;?>
    <?php endif;?>
  </div> <!-- .container.main-content -->

  <div class="side">
    <?php if(is_active_sidebar('sidebar')):?>
      <?php dynamic_sidebar('sidebar');?>
    <?php endif;?>
  </div>
</div>

<?php get_footer();?>
    


