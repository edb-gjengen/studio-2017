<?php
/*
Template Name: Events page
*/
?>
<?php get_header(); ?>
<div id="content" class="template-artists events">
    <div id="inner-content" class="row">
        <div id="main" role="main" class="small-12 columns">
            <?php while ( have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" role="article">
                <header class="article-header row">
                    <div class="small-12 columns">
                        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    </div>
                </header> <!-- end article header -->
                <section class="entry-content">
                        <?php the_content(); ?>
                        <ul class="artists headliners small-block-grid-4">
                            <?php
                            /* Print our artists */
                            $query = new WP_Query( array(
                                'post_type' => 'event',
                                'orderby' => 'title',
                                'order' => 'asc') );
                            while ( $query->have_posts() ):
                                $query->the_post(); 
                                $artist_thumb = get_the_post_thumbnail($post->ID, 'artist-thumb');
                                if($artist_thumb == "") {
                                    $artist_thumb = '<img src="http://placehold.it/228x191" />';
                                }
                                ?><li class="artist-box"><a href="<?php the_permalink();?>" class="colored primary"><?php echo $artist_thumb;?><span><?php the_title(); ?></span></a></li><?php endwhile;
                            wp_reset_postdata();?>
                        </ul>
                </section> <!-- end article section -->
                <footer class="article-footer">
                </footer> <!-- end article footer -->
            </article> <!-- end article -->
            <?php endwhile; ?>
        </div> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer();?>
