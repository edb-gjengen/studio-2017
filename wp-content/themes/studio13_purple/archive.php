<?php get_header(); ?>
<div id="content">
    <div id="inner-content">
        <div id="main" role="main">
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
            <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
                <header class="article-header">
                    <h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <p class="byline vcard"><time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>" pubdate><?php get_the_time(get_option('date_format'));?></time> av <span class="author"><?php the_author_posts_link(); ?></span></p>
                </header> <!-- end article header -->
                <section class="entry-content">
                    <?php the_post_thumbnail(; ?>
                    <?php the_excerpt(); ?>
                </section> <!-- end article section -->
                <footer class="article-footer">
                </footer> <!-- end article footer -->
            </article> <!-- end article -->

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
