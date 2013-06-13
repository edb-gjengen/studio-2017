<article id="post-<?php the_ID(); ?>" role="article">
    <header class="article-header row">
        <div class="small-12 columns">
            <a href="<?php the_permalink() ?>" class="colored" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('eight-columns'); ?></a>
            <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        </div>
    </header> <!-- end article header -->
    <section class="entry-content">
        <?php the_content(); ?>
    </section> <!-- end article section -->
    <footer class="article-footer">
        <?php if(!is_page()) { ?>
            <a target="_blank" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" class="btn-tiny primary"><i class="icon-facebook"></i></a>
            <a target="_blank" onclick="return !window.open(this.href, 'Twitter', 'width=640,height=300')" href="https://twitter.com/share?url=<?php the_permalink() ?>&text=<?php the_title(); ?>" class="btn-tiny secondary"><i class="icon-twitter"></i></a>
        <?php } ?>
    </footer> <!-- end article footer -->
</article> <!-- end article -->
