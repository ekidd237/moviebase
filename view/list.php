<div id="search_header">
    <div id="list_search_container">
        <a href='' id="movie_search"></a>
            <div id="list_search_title">
            DMDB 
                <span id="list_search_subtitle">The Dooli Movie Database</span>
                <span id="list_search_keys" class="ui-widget">
                    <input id="tags">
                    <button type="button">Search</button>
                </span>
            </div>
        </div>
    </div>
</div>
<div id="wrapper">
<div id="movie_list">
    <table id="movie_table">
    <tbody>
        <?php foreach ($arrData['results'] as $results) { ?>
        <tr>
            <td rowspan="2" id="movie_poster"><img src="<?php echo ($arrData['image_url'] . $results['poster_path']) ?> height="40" width="40" "></td>
            <td><a href="<?php echo SITE_PATH ?>index.php?controller=movie&function=movie&id=<?php echo $results['id'] ?>"><?php echo $results['original_title'] ?></td>
        </tr>
        <tr>
            <td id="movie_rating">Rated <?php echo $results['vote_average'] ?>/10</td>
        </tr>
        <tr>
            <td colspan="2">.........................................................</td>
        </tr>
        <?php } ?>
    </tbody>
    </table>
</div>
</div>
