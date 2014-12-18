<?PHP
require_once "tmdb_v3.php";

class tmdbModel extends TMDBv3{
    public $api_key = "18f9a2fc297cf2858ff9714e4e4c5b0a";

    function __construct() {
       parent::__construct($this->api_key);
    }

    function getList($key) {
        $image_url = $this->getImageURL();
        $title = $this->searchMovie($key);
        $title['image_url'] = $image_url;
        return $title;
    }
}
?>
