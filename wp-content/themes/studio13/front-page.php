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
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/studiotweets.png" alt="Tweets om STUDiO" /></a>
                        <div class="twitter-feed"></div>
                    </div>
                    <div class="bluebordered text-center small-6 columns">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/follow_bloggers.png" class="highlight higlight-image" alt="Frivillig Studio 2013" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <div class="instagram-feed">
                             <ul class="small-block-grid-2">
                                <li><h1>Instagram</h1><h4>#Studiofestivalen</h4></li>
                                <li><img src="http://placekitten.com/330/330/"></li>
                            </ul> 
                             <ul class="small-block-grid-4">
                                <li><img src="http://placekitten.com/200/200/"></li>
                                <li><img src="http://placekitten.com/200/200/"></li>
                                <li><img src="http://placekitten.com/200/200/"></li>
                                <li><img src="http://placekitten.com/200/200/"></li>
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
