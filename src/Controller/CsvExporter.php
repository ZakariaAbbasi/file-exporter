<?php
namespace App\Controller;

class CsvExporter extends Exporter
{
    protected $format = 'csv';

    public  function export() {
        $file_name = $this->format."file.".$this->format;
        $file_path = __DIR__."/files/$file_name";

        file_put_contents($file_path,"{$this->data['title']},{$this->data['content']}"."\n",FILE_APPEND);
        echo "$file_name successfully Created!\n";
    }
}