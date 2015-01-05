<?php
require_once "../model/tmdb.php";

if(isset($_POST['key'])) {
    $key = $_POST['key'];
}

$tmdb = new tmdbModel();
$response = array();

$search_list = $tmdb->getList($key);

foreach ($search_list['results']as $movie) {
   $response[] = $movie['title'];
}

echo json_encode($response);
?>
