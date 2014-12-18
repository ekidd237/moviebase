$(function() {
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Rudy",
        "Scheme"
    ];
    $( "#tags" ).autocomplete({
        source: function(request, response) {
            var term = request.term;
            $.post("../model/movie_search.php", term,
                function(data) {
                var response = jQuery.parseJSON(data);
                });
            }
        response(results);
    );
    }
});
