<?php

function view($path, $data = []) {

    extract($data);
    $path = str_replace('.', '/', $path);
    $full_path = BASE_PATH."views/{$path}.php";
   include_once $full_path;
   
}

function dd($string)
{
    echo "<div style='background-color:#f3ecec; margin:50px auto;width: 50%; padding: 25px; border-radius: 10px; border: 1px solid red; color: #000; text-align: center; font-size: 20px;'>$string</div>";
   return; 

}