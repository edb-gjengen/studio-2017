<!-- Sticky post with large picture -->
<article id="post-<?php the_ID(); ?>" role="article" class="sticky">
    <header class="article-header row">
        <div class="small-12 columns">
            <a href="<?php the_permalink() ?>" class="colored primary" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('eight-columns'); ?></a>
            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
            <p class="byline vcard"><time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>" pubdate><?php echo get_the_time(get_option('date_format'));?></time> av <span class="author"><?php the_author(); ?></span></p>
        </div>
    </header> <!-- end article header -->
    <section class="entry-content">
        <?php the_excerpt(); ?>
    </section> <!-- end article section -->
    <footer class="article-footer">
        <a href="" class="btn-tiny primary"><i class="icon-facebook"></i></a>
        <a href="" class="btn-tiny secondary"><i class="icon-twitter"></i></a>
    </footer> <!-- end article footer -->
</article> <!-- end article -->
