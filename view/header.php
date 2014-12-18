<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style.css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
</head>
<body>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="<?php echo JS_PATH;?>view_scripts.js"></script>
    <script>
        $(document).ready(function () {
        $('#tags').on('autocompletechange change', function () {
            if(this.value !== '') {
                page_link = "<?php echo SITE_PATH?>index.php?controller=list&function=view_list&id=" + this.value;
                $("#movie_search").attr("href", page_link);
                $("#movie_search")[0].click();      
                $('#tags').autocomplete('close').val('');
            }
            }).change();
        });
    </script>
    
<div id="container">
