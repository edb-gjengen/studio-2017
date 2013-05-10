function format_image(img) {
    return '<li><a href="'+ img.link +'" class="filter primary"><img src="'+ img.images.low_resolution.url +'" /></a></li>';
}
jQuery(document).foundation();

jQuery(function($) {

    /* Instagram feed
     * Ref: http://instafeedjs.com/ */
    var feed = new Instafeed({
        get: 'tagged',
        tagName: 'studiofestivalen',
        clientId: 'e82ee5c6c85a4057a3545442e6cc5162',
        limit: 5,
        mock: true,
        success: function(result) {
            //allso: result.pagination
            var first = format_image(result.data[0]);
            $(".instagram-feed .first").append(first);

            var html = "";
            for(var i=1; i < result.data.length; i++) {
                html += format_image(result.data[i]);
            }
            $(".instagram-feed .rest").append(html);
        }
    });
    feed.run();
});
