<?php
define('DOC_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT',DOC_ROOT.'/');
define('SITE_PATH','http://'.$_SERVER['HTTP_HOST'].'/');
define('IMAGE_PATH',SITE_PATH.'images/');
define('CSS_PATH',SITE_PATH.'css/');
define('JS_PATH',SITE_PATH.'js/');
define('VIEW_PATH',SITE_ROOT.'view/');
define('MODEL_PATH',SITE_ROOT.'model/');
define('HOME_IMAGE',IMAGE_PATH.'coverImage.jpg');

function loadView($templateName,$arrPassValue=''){
    $view_path=VIEW_PATH.$templateName;
    if(file_exists($view_path)){
        if(isset($arrPassValue)){
            $arrData=$arrPassValue;
        }
        include_once($view_path);
    }else{
        die($templateName. ' Template Not Found under View Folder');
    }
}

function loadModel($modelName,$function,$arrArgument=''){
    $model_path=MODEL_PATH.$modelName.'.php';
    if(file_exists($model_path)){
        if(isset($arr)){
            $arrData=$arrPassValue;
        }
        include_once($model_path);
        $modelClass=$modelName.'Model';
        if(!method_exists($modelClass,$function)){
            die($function .' function not found in Model '.$modelName);
        }
        $obj=new $modelClass;
        if(isset($arrArgument)){
            return $obj-> $function($arrArgument);
        }else{
            return $obj-> $function();
        }
    }else{
        die($modelName. ' Model Not Found under Model Folder');
    }
}
?>
