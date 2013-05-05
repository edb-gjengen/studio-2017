<?php get_header(); ?>
<div id="content">
    <div id="inner-content">
        <div id="main" role="main">
            <h1 class="archive-title"><span>Søkeresultat for </span> <?php echo esc_attr(get_search_query()); ?></h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" role="article">
                    <header class="article-header">
                        <h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <p class="byline vcard"><time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>" pubdate><?php get_the_time(get_option('date_format'));?></time> av <span class="author"><?php the_author_posts_link(); ?></span></p>
                    </header> <!-- end article header -->
                    <section class="entry-content">
                            <?php the_excerpt('<span class="read-more">Les mer </span>'); ?>
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
                            <h1>Sorry, ingen treff.</h1>
                        </header>
                        <section class="entry-content">
                            <p>Prøv å søke på noe annet <?php get_search_form(); ?></p>
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
