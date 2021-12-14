<?php
include 'Exporter.php';
class TextExporter extends Exporter
{
    protected $format = 'txt';

    public static function export() {
        echo "Export Text";
    }
}

//  new TextExporter(['zakaria','CEO at coffeecoder']);
 TextExporter::export();