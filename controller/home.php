<?php
class homeController{
    function __construct() {
    }
    
    function init(){
        loadView('header.php');
        //$arrValue=loadModel('tmdb','showProductListing');
        loadView('home.php');
        //loadView('product_listing.php',$arrValue);
        loadView('footer.php');
    }
  }
  ?>
