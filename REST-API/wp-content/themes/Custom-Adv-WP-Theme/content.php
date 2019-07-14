<!-- Check to see if search or archive page -->
<!-- If it is deliver first block -->
<!-- Else: delvier Article Block -->
<?php if(is_search() || is_archive()) : ?>
  
  <div class="archive-post black-text">
    <h4> 
      <a href="<?php the_permalink();?>"><?php the_title();?></a>
    </h4>
    <p>Posted on: <?php the_time('F j, Y g:i a ');?></p>
  </div>

<?php else : ?>
<!-- Render POSTS -->
  <article class="post">
    
        <h2><?php the_title();?> </h2>
          <p class="meta">Posted at 
            <?php the_time('F j, Y g:i a');?>
          By
            <a class="author" href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
              <?php the_author();?>
            </a> |
            Posted In
            <?php 
              $categories = get_the_category();
              $separator = ', ';
              $output='';

             if($categories){
               foreach($categories as $category){
                 $output .='<a class="category" href="'.get_category_link($category->term_id).'">'
                  .$category->cat_name.'</a>'.$separator;
               }
             }
              echo trim($output, $separator);
            ?>
            </p>
            <div class="post-thumbnail">
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail();?>
            <?php endif; ?>
            </div>
        <?php if(is_single()):?>
          <?php the_content(); ?>
        <?php else:?>
          <?php the_excerpt();?>
            <a href="<?php the_permalink();?>" class="button">Read More</a>
        <?php endif;?>
        <p>
          <?php the_excerpt();?> 
        </p>
      </article>
<?php endif; ?>

