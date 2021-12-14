<?php
namespace App\Controller;

interface Exportable
{
    public function export();
}

interface Importable
{
    public function import();
}

abstract class Exporter implements Exportable
{
    protected $data;
    protected $format;

    public  function __construct($data) {
        $this->data = $data;
        if(!$this->isvalid()){
            die("Invalid Data!");
        }
    }

    public  function isValid() {
        foreach($this->data as $field) {
            if (!empty($field)) {
                return true;
            }
        }
        return false;

    }

}