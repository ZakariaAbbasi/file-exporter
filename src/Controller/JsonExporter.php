<?php
namespace App\Controller;


class JsonExporter extends Exporter
{
    protected $format = 'json';

    public  function export() {
        $file_name = $this->format."-flie.".$this->format;
        $file_path = __DIR__."/files/$file_name";
        if (!file_exists($file_path)) {
            file_put_contents($file_path,json_encode($this->data)."\n");
            echo "$file_name successfully Created!\n";
            return;
        }
        $fh = fopen($file_path, "a");
         fwrite($fh, json_encode($this->data)."\n");
         echo"Write successfully in Flie!\n";
         fclose($fh);

    }
   
}