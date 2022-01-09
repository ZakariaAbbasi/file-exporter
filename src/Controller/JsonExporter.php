<?php
namespace App\Controller;


class JsonExporter extends Exporter
{
    protected $format = 'json';

    public  function export() {
        $file_name = $this->format."-file.".$this->format;
        $file_path = __DIR__."/files/$file_name";
        
            file_put_contents($file_path,json_encode($this->data)."\n", FILE_APPEND);
            echo"$file_name successfully Created!\n";
            return;
        
    }
   
}