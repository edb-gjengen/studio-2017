<?php get_header(); ?>
<div id="featured" class="row">
    <div class="highlight small-4 columns">
        <a href="#"><span><div class="number">100</div>dager igjen</span></a>
    </div>
    <div class="highlight small-4 columns text-center">
        <a href="#" class="highlight-image">Bli Frivillig</a>
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
                <?php if (is_sticky($post->ID)): ?>
                    <?php get_template_part( 'content', 'sticky' ); ?>
                <?php else:  ?>
                    <?php get_template_part( 'content' ); ?>
                <?php endif; ?>
            <?php endwhile; ?>
                <div class="row">
                    <div class="small-12 columns">
                        <a href="/nyheter/" class="button small-12">Les flere nyheter her</a>
                    </div>
                </div>
                <div class="row tweets-and-blog">
                    <div class="small-6 columns">
                        <a href="#" class="tweets-image">Tweets tagget med #studiofestivalen</a>
                        <ul class="twitter-feed"></ul>
                    </div>
                    <div class="bluebordered text-center small-6 columns">
                        <a href="#" class="blog-image">Blogg</a>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <div class="instagram-feed">
                             <ul class="small-block-grid-2 first">
                                <li><a href="http://instagram.com/studiofestivalen/" class="instagram-image">Instagram #studiofestivalen</a></li>
                            </ul>
                             <ul class="small-block-grid-4 rest">
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row social-media">
                    <div class="small-12 columns"><div class="separator tiny-margin"></div>
                    </div>
                </div>
                <div class="row social-media">
                    <div class="small-12 columns">
                        <p><span class="uppercase">Følg oss på:</span> <img src="<?php echo get_template_directory_uri(); ?>/images/vimeo.png" /> <img src="<?php echo get_template_directory_uri(); ?>/images/flickr.png" /> <i class="icon-twitter"></i> <i class="icon-facebook"></i> </p>
                    </div>
                </div>
            <?php else : ?>
                    <?php get_template_part( 'content', 'notfound' ); ?>
            <?php endif; ?>
            </div> <!-- end #main -->
            <?php get_sidebar(); ?>
    </div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>
