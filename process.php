<?php
ini_set('display_errors','1');

include_once "vendor/autoload.php";

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    
    return; //Not Submited  
}

# Form  Submit is OK;

[$title, $contecnt, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];

$className = "App\\Controller\\{$format}Exporter";
if (class_exists($className)) {
    $obj = new $className(['title'=>$title,'content'=>$contecnt]);
    $obj->export(); 
}