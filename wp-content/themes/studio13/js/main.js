function format_image(img) {
    return '<li><a href="'+ img.link +'" class="filter primary"><img src="'+ img.images.low_resolution.url +'" /></a></li>';
}
jQuery(document).foundation();

jQuery(function($) {
     /* Twitter feed */
    //var feed = "http://search.twitter.com/search.json?q=studiofestivalen&result_type=recent&callback=?";
    var feed = "http://search.twitter.com/search.json?q=studio2012&result_type=recent&callback=?";
    $.getJSON(feed, function(results) {
        $.each(results, function(i) {
            console.log(results[i]);
            var id = results[i].id_str;

            /* relative tweet time */
            var time = time_str.slice(4); // without weekday
            moment.lang('en'); // parse english month name
            var when = moment(time, "DD MMM YYYY HH:mm:ss Z");
            moment.lang('nb'); // format in norwegian locale
            var rel_when = when.fromNow();

            /* Format tweet */
            $('.twitter-feed').append('<li><a href="" class="tweet">' + results[i].text + '</a></li>');
        });
    });

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
