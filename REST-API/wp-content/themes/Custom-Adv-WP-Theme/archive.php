<?php get_header();?> 
<div class="archive-page">
  <div class="container content">
      <div class="main block">
        <!-- Check for posts and render if existing -->
        <h1 class="black-text">
          <?php 
            if(is_category()){
              single_cat_title();
            } else if(is_author()){
              the_post();
              echo 'Archives by Author: '. get_the_author();
              rewind_posts();
            } else if(is_tag()){
              single_tag_title();
            } else if(is_day()){
              echo 'Archives By Day: '. get_the_date();
            } else if(is_month()){
              echo 'Archives By Month: '. get_the_date('F Y');
            } else if(is_year()){
              echo 'Archives By Year: '. get_the_date('Y');
            } else{
              echo 'Archives';
            }
          ?>
        </h1>
       <?php if(have_posts()):?>
        <?php while(have_posts()) : the_post(); ?>
          <?php get_template_part('content', get_post_format());?>
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
</div>
    

<?php get_footer();?>
    


