<?php get_header(); ?>
<div id="content">
    <div id="inner-content" class="row">
        <div id="main" role="main" class="small-8 columns">
            <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'content', 'full' ); ?>
            <?php endwhile; ?>
        </div> <!-- end #main -->
        <?php get_sidebar(); ?>
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>
