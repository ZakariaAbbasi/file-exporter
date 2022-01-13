<?php
namespace App\Controller;

use App\Contract\Exportable;
use App\Validations\ExportValidation;

abstract class Exporter implements Exportable
{
    protected $data;
    protected $format;

    public  function __construct($data) {
        
        $this->data = $data;
        ExportValidation::isValid($this->data);

    }

}