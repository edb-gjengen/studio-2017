<?php get_header(); ?>
<div id="content">
    <div id="inner-content">
        <div id="main" role="main">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" role="article">
                    <header class="article-header">
                        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                        <p class="byline vcard"><time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>" pubdate><?php get_the_time(get_option('date_format'));?></time> av <span class="author"><?php the_author_posts_link(); ?></span></p>
                    </header> <!-- end article header -->
                    <section class="entry-content ">
                        <?php the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                    </section> <!-- end article section -->
                    <footer class="article-footer">
                        FB-knapp, twitter-knapp
                    </footer> <!-- end article footer -->
                </article> <!-- end article -->
                <?php endwhile; ?>
            <?php else : ?>
                <article id="post-not-found" class="hentry ">
                    <header class="article-header">
                        <h1>Ai ai ai</h1>
                    </header>
                    <section class="entry-content">
                        <p>index.php: .post-not-found .entry-content</p>
                    </section>
                    <footer class="article-footer">
                        <p>index.php: .post-not-found .article-footer</p>
                    </footer>
                </article>
                <?php endif; ?>
            </div> <!-- end #main -->
            <?php get_sidebar(); ?>
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>
