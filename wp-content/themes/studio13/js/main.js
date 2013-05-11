function format_image(img) {
    return '<li><a href="'+ img.link +'" class="colored primary"><img src="'+ img.images.low_resolution.url +'" /></a></li>';
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

    /* konami code */
    var showing = false;
    var anda_da_zee = '<div class="anda-da-zee"><div class="punsjebollen"></div></div>';
    function showKonami() {
        if (showing) { return; }
        $("#inner-footer").html(anda_da_zee);
        showing = true;
    }

    var kkeys = [];
    var konamiString = "38,38,40,40,37,39,37,39,66,65";
    // up, up, down, down, left, right, left, right, B, A

    if (window.addEventListener) {
        window.addEventListener('keydown', function(e) {
            kkeys.push(e.keyCode );
            if (kkeys.toString().indexOf(konamiString) >= 0 )
            showKonami();
        }, true)
    }
    /* IE */
    else if(document.body.attachEvent) {
        document.body.attachEvent('onkeydown', function(e){
            kkeys.push(e.keyCode);
            if (kkeys.toString().indexOf(konamiString) >= 0)		
            showKonami();
        }, true)
    }
    
});

