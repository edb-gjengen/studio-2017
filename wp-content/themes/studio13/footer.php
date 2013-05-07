        <div class="wave"><div class="wavetop"></div></div>
        <div class="flying-megawhale"></div>
        <footer class="footer" role="contentinfo">
            <div class="wavetop"></div>
            <div id="inner-footer">
                <a href="http://studentersamfundet.no/"><img src="<?php echo get_template_directory_uri(); ?>/images/streamer.png" /></a>
                <!--<nav role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' ) ); ?>
                </nav>-->
            </div> <!-- end #inner-footer -->
        </footer> <!-- end footer -->
    </div> <!-- end #container -->
    <?php wp_footer(); ?>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-52914-3']);
      _gaq.push(['_setDomainName', 'studiofestivalen.no']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    </body>
</html>
