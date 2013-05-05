<?php get_header(); ?>
<div id="content">
    <div id="inner-content">
        <div id="main" role="main">
            <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
                <header class="article-header">
                    <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
                </header> <!-- end article header -->
                <section class="entry-content" itemprop="articleBody">
                    innhold:"<?php the_content(); ?>"
                </section> <!-- end article section -->
                <footer class="article-footer">
                    nederst på siden
                </footer> <!-- end article footer -->
            </article> <!-- end article -->
            <?php endwhile; ?>
        </div> <!-- end #main -->
        <?php get_sidebar(); ?>
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>
