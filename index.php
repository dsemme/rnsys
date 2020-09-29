<?php 
    ob_start();
    session_start();
    error_reporting(0);
    include_once('incs/sys.php');
    include_once('incs/header.php');

    if(!isset($_GET["url"])):
		include_once 'home.php';
	else:
        $url = array_filter(explode('/',$_GET["url"]));

        $url0 = __DIR__ .'/incs/'. $url[0].'.php';

        if(isset($url0) && is_file($url0)):
            include_once $url0;
        else:
            include_once __DIR__ . "/pages/404.php";
        endif;
    endif;
    
    include_once('incs/footer.php');
    
    ob_end_flush(); 
 ?>
