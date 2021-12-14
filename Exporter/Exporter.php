<?php

interface Exportable
{
    public  static function export();
}

interface Importable
{
    public  static function import();
}

abstract class Exporter implements Exportable
{
    protected $data;
    protected $format = 'txt';

    public  function __construct($data) {
        $this->data = $data;
    }

    public static function isValid() {
        foreach(self::$data as $field) {
            if (!empty($field)) {
                return true;
            }
        }
        return false;

    }

}