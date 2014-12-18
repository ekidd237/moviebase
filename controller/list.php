<?php
class listController{
    function __construct() {

    }

    function view_list(){
        $id = $_GET['id'];
        loadView('header.php');
        $arrData = loadModel('tmdb','getList', $id);
        loadView('list.php', $arrData);
        loadView('footer.php');
    }
}
?>
