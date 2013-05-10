<?php
/*
Template Name: Artists page
*/
?>
<?php get_header(); ?>
<div id="content" class="template-artists">
    <div id="inner-content" class="row">
        <div id="main" role="main" class="small-12 columns">

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
                            /* Print our custom post type */
$query = new WP_Query( array ( 'post_type' => 'artist', 'orderby' => 'title', 'order' => 'asc') );
                            while ( $query->have_posts() ):
                                $query->the_post();
                            echo '<li><a href="'.get_permalink().'">'.get_the_post_thumbnail('four-columns') . get_the_title() . '</a></li>';
                            endwhile;
                            wp_reset_postdata();?>
                        </ul>
                </section> <!-- end article section -->
                <footer class="article-footer">
                    <a href="" class="btn-tiny primary"><i class="icon-facebook"></i></a>
                    <a href="" class="btn-tiny secondary"><i class="icon-twitter"></i></a>
                </footer> <!-- end article footer -->
            </article> <!-- end article -->
        </div> <!-- end #main -->
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer();?>
