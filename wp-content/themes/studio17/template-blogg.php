<?php
/*
Template Name: Alle poster i kategorien blogg
*/
$query = new WP_Query("category_name=blogg");
?>
<?php get_header(); ?>
<div id="content">
    <div id="inner-content" class="row">
        <div id="main" role="main" class="small-8 columns">
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <?php get_template_part( 'content' ); ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div> <!-- end #main -->
            <?php get_sidebar(); ?>
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>
