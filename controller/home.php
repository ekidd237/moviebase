<?php
class homeController{
    function __construct() {
    }
    
    function search(){
        loadView('header.php');
        //$arrValue=loadModel('product','showProductListing');
        //loadView('product_listing.php',$arrValue);
        //loadView('footer.php');
    }

    function detail(){
        loadView('header.php');
        $id=$_GET['id'];
        $arrArgument=array('id'=>$id);
        $arrValue=loadModel('product','productDetails',$arrArgument);
        loadView('product_detail.php',$arrValue);
        loadView('footer.php');
    }

  }
  ?>
