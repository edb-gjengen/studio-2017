<div id="sidebar1" class="sidebar small-4 columns" role="complementary">
        <div class="lineup">
            <a href="/artister/" class="hover artists" title="Artister"><span></span></a>
            <?php 
                $query = new WP_Query( array ( 'post_type' => 'artist', 'tag' => 'headliner' ) );
                if( !$query->have_posts() ) { ?>
                    <small>Artistene vil snart bli lansert.</small>
                <?php } ?>
            <ul class="artists headliners">
                <?php
                /* Print our custom post type */
                while ( $query->have_posts() ):
                    $query->the_post();
                    echo '<li><a href="'.get_permalink().'">' . get_the_title() . '</a></li>';
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
            <ul class="artists">
                <?php
                /* exclude all the headliners */
                $headline_tag_id = get_term_by( 'slug', 'headliner', 'post_tag')->term_id;
                $query = new WP_Query(array(
                    'post_type' => 'artist',
                    'tag__not_in' => array($headline_tag_id)));
                while ( $query->have_posts() ):
                    $query->the_post();
                    echo '<li><a href="'.get_permalink().'">' . get_the_title() . '</a></li>';
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
</div>
