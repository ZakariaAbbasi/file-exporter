<?php
ini_set('display_errors','1');
include_once __DIR__."/vendor/autoload.php";

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    
    return; //Not Submited  
}

# Form  Submit is OK;

[$title, $contecnt, $format] = [$_POST['title'], $_POST['content'], $_POST['format']];
$whiteList = ['Text', 'Pdf', 'Json', 'Csv'];
if (!in_array($format, $whiteList)) {
    echo "Invalid Format !!!";
    return ;
}

$className = "App\\Controller\\{$format}Exporter";
if (class_exists($className)) {
    $obj = new $className(['title'=>$title,'content'=>$contecnt]);
    $obj->export(); 
}