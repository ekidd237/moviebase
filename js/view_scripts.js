$(function() {
    $( "#tags" ).autocomplete({
        source: function(request, response) {
            var term = request.term;
            $.post("../model/movie_search.php", { key:term } , function(data) {
                var results = jQuery.parseJSON(data);
                response(results);
            });
        }
    });
});


$(function() {
    $('#movie_table').mouseover(function () {
        var movie_poster = $('#movie_poster').attr('src');
        $('#list_wrapper').css("background-image", "url('http://www.teamkidd.com/images/coverImage.jpg')");
        $('#movie_table').css("opacity", "0.7");
    });
});

$(function() {
    $('#movie_table').mouseout(function () {
        $('#list_wrapper').css("background-color", "white");
        $('#movie_table').css("opacity","1.0");
    });
});
