<?php
namespace App\Validations;

class ExportValidation
{


    public static function isValid($data) 
    {

        foreach($data as $field) {
            if (!empty($field)) 
                return true;
        }
        view('errors.404');
        die;

    }
}