<?php

define('enigma', True);

include_once 'components.php';
include_once '../../configurations.php';

$component = function_exists(array_key_first) ? array_key_first($_REQUEST) : array_keys($_REQUEST)[0];

if($component){
    if(isset($_GET['css'])){
        header("Pragma: public");
        header("Cache-Control: maxage=".$cache_expire_time);
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $cache_expire_time) . ' GMT');
        header("Content-type: text/css");
        readfile($components[$component]['css']);
    }

    if(isset($_GET['js'])){
        header("Pragma: public");
        header("Cache-Control: maxage=".$cache_expire_time);
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $cache_expire_time) . ' GMT');
        header("Content-type: text/javascript");
        readfile($components[$component]['js']);
    }

    if(isset($_GET['html'])){
        readfile($components[$component]['template']);
    }
}