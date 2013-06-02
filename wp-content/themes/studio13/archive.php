<?php get_header(); ?>
<div id="content">
    <div id="inner-content" class="row">
        <div id="main" role="main" class="small-8 columns">
            <?php if (is_category()) { ?>
                <h1 class="archive-title">
                    <span>Innlegg kategorisert:</span> <?php single_cat_title(); ?>
                </h1>
            <?php } elseif (is_tag()) { ?>
                <h1 class="archive-title">
                    <span>Inlegg tagget:</span> <?php single_tag_title(); ?>
                </h1>
            <?php } elseif (is_author()) {
                global $post;
                $author_id = $post->post_author;
            ?>
                <h1 class="archive-title h2">
                    <span>Innlegg av:</span> <?php the_author_meta('display_name', $author_id); ?>
                </h1>
            <?php } elseif (is_day()) { ?>
                <h1 class="archive-title h2">
                    <span>Arkivert per dag:</span> <?php the_time('l, F j, Y'); ?>
                </h1>
            <?php } elseif (is_month()) { ?>
                    <h1 class="archive-title h2">
                        <span>Arkivert per måned:</span> <?php the_time('F Y'); ?>
                    </h1>
            <?php } elseif (is_year()) { ?>
                    <h1 class="archive-title h2">
                        <span>Arkivert per år:</span> <?php the_time('Y'); ?>
                    </h1>
            <?php } ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'content' ); ?>
            <?php endwhile; ?>
                <nav class="wp-prev-next">
                    <?php posts_nav_link(); ?>
                </nav>
            <?php else : ?>

                    <article id="post-not-found" class="hentry">
                        <header class="article-header">
                            <h1>Ingenting</h1>
                        </header>
                        <section class="entry-content">
                            <p>Det mangler noe her.</p>
                        </section>
                        <footer class="article-footer">
                                <p></p>
                        </footer>
                    </article>

            <?php endif; ?>
        </div> <!-- end #main -->
        <?php get_sidebar(); ?>
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>
