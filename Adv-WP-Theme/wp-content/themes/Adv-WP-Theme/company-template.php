<?php 
/*
    Template Name: Company Layout
*/
?>

<?php get_header(); ?>

	<div class="container content">
		<div class="main block">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
                    <article class="page">
                        
                        <?php wp_list_pages();?></php>
                        <h2><?php the_title();?></h2>
                        <p class="phone">Call Us At: 1-800-555-5555</p>
                        <?php the_content();?>
                    </article>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wp_autop('Sorry No Posts Found')?>
			<?php endif; ?>
		</div>
		<!-- div.main block -->

		<div class="side">
			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif ;?>
		</div>
	</div>

<?php get_footer(); ?>