<!-- sidebar -->
<div class="sidebar">
            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        
       </div>
       <div class="clr"></div>
</div>
<!-- div.container -->

<!-- footer -->
<footer>
           <div class="container">
            <p>&copy; <?php the_date('Y'); ?> - <?php bloginfo();?></p>
           </div>
       </footer>
        
        <script src="" async defer></script>
    </body>
</html>