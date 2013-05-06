<article id="post-<?php the_ID(); ?>" role="article">
    <div class="row">
        <div class="small-6 columns">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="small-6 columns">
            <header class="article-header">
                    <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                    <!--<p class="byline vcard"><time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>" pubdate><?php echo get_the_time(get_option('date_format'));?></time> av <span class="author"><?php the_author_posts_link(); ?></span></p>-->
            </header> <!-- end article header -->
            <section class="entry-content">
                <?php the_excerpt(); ?>
            </section> <!-- end article section -->
            <footer class="article-footer">
                <a href="" class="btn-tiny primary"><i class="icon-facebook"></i></a>
                <a href="" class="btn-tiny secondary"><i class="icon-twitter"></i></a>
            </footer> <!-- end article footer -->
        </div>
    </div>
</article> <!-- end article -->
