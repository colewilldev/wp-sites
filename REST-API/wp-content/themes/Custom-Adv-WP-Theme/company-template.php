<?php/*
  Template Name: Company Layout
*/ ?>

<?php get_header();?>
<div class="container content">
  <div class="main block">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post();?>
        <artclie class="page">
          <h2><?php the_title();?></h2>
          <p class="phone"> Call Me: 720-883-6040</p>
          <?php the_content();?>
        </artclie>
      <?php endwhile;?>    
    <?php else :?>
      <?php echo wpautop('Sorry No posts for You!'); ?>
    <?php endif;?>
  </div>

  <div class="side">
    <?php if(is_active_sidebar('sidebar')):?>
      <?php dynamic_sidebar('sidebar');?>
    <?php endif;?>
  </div>
</div>

<?php get_footer();?>