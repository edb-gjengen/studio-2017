<?php get_header(); ?>
<div id="featured" class="row">
    <div class="highlight small-4 columns">
        <a href="#"><span><div class="number">100</div>dager igjen</span></a>
    </div>
    <div class="small-4 columns text-center">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fri_villig.png" class="highlight higlight-image" alt="Frivillig Studio 2013" /></a>
    </div>
    <div class="highlight small-4 columns">
        <a href="#"><span class="larger">Kjøp billett</span></a>
    </div>
</div>
<div class="row">
    <div class="small-12 columns"><div class="separator"></div></div>
</div>
<div id="content">
    <div id="inner-content" class="row">
        <div id="main" role="main" class="small-8 columns">
            <div class="news-header">
                <h3>Nyheter</h3>
            </div>
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
