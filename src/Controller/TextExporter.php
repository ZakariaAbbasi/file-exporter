<?php
namespace App\Controller;

class TextExporter extends Exporter
{
    protected $format = 'txt';

    public  function export() {

        $file_name = $this->format."-flie.".$this->format;
        $file_path = __DIR__."/files/$file_name";
         if (!file_exists($file_path)) {
            file_put_contents($file_path,"{$this->data['title']} - {$this->data['content']}\n");
            echo"$file_name successfully Created!\n";
            return;
         }
         $fh = fopen($file_path, "a");
         fwrite($fh, "{$this->data['title']} - {$this->data['content']}\n");
         echo"Write successfully in Flie!\n";
         fclose($fh);
    
    }
}

