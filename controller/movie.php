<?php
class movieController{
    function __construct() {

    }

    function movie_details(){
        loadView('header.php');
        //$arrData = loadModel('tmdb','getList', $id);
        //loadView('list.php', $arrData);
        loadView('footer.php');
    }
}
