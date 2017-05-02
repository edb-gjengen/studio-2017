<?php get_header(); ?>
<div id="featured" class="row">
    <div class="highlight small-4 columns">
    <a href="/info" class="primary"><span><?php
        $now = time();
        $your_date = strtotime("2013-08-12");
        $datediff = $your_date - $now;
        $days = floor($datediff/(60*60*24));
        if($days <= 0) {
            echo '<div class="larger started">STUDiO har startet!</div>';
        } else {
            echo '<div class="number">'.$days.'</div> dager igjen';
        }
    ?></span></a>
    </div>
    <div class="highlight small-4 columns text-center">
        <a href="/frivillig" class="hover fri-villig" title="Bli Frivillig"><span></span></a>
    </div>
    <div class="highlight small-4 columns">
        <a href="/program" class="primary"><span class="larger">Hvem spiller?</span></a>
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
                        <a href="/nyheter/" class="button small-12">Les flere nyheter</a>
                    </div>
                </div>
                <div class="row tweets-and-blog">
                    <div class="small-6 columns">
                        <a href="http://twitter.com/studiofestival" class="hover tweets" title="Tweets tagget med #studiofestivalen"><span></span></a>
                        <!-- Twitter embed -->
                        <a class="twitter-timeline" href="https://twitter.com/studiofestival" data-widget-id="332811736338022400" data-tweet-limit="1" data-border-color="#ffffff" data-chrome="nofooter transparent noheader noscrollbar noborders" height="350">Tweets by @studiofestival</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    </div>
                    <div class="bluebordered text-center small-6 columns">
                        
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <div class="instagram-feed">
                             <ul class="small-block-grid-2 first">
                                <li><a href="http://instagram.com/studiofestivalen/" class="hover instagram" title="Instagram #studiofestivalen"><span></span></a></li>
                            </ul>
                             <ul class="small-block-grid-4 rest">
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="small-12 columns"><div class="separator"></div>
                    </div>
                </div>
                <div class="row social-media">
                    <div class="small-12 columns">
                        <span class="follow uppercase semi-bold">Følg oss på:</span> <a href="http://twitter.com/studiofestival"><i class="icon-twitter"></i></a> <a href="https://www.facebook.com/studiofestival"><i class="icon-facebook"></i></a>
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
