<?php get_header(); ?>
<div class="container">
       <div class="main">
                <?php if(have_posts) : ?>
                    <?php while(have_posts()): the_post(); ?>
                        <article class="post">

                            <h3>
                    
                                    <?php the_title();?>
                                
                            </h3>

                            <div class="meta">
                                Created by <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
                            </div>

                            <?php if(has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <!-- Displays Content  -->
                            <?php the_content();?>
                            <br>
                            <!-- <a class="button" href="<?php the_permalink(); ?>">
                                Read More
                            </a> -->
                            
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php echo wpautop('Sorry, No posts were found'); ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                    <?php endwhile; ?>
                <?php endif; ?> 
       </div>
       <!-- div.main -->

      

<?php get_footer(); ?>
