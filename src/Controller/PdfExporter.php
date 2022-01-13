<?php
namespace App\Controller;
use Mpdf\Mpdf;

class PdfExporter extends Exporter
{
    protected $format = 'pdf';
    private $pdf;
   
    public function export() {
        
        $this->pdf = new Mpdf();
        $file_name = $this->format."-file.".$this->format;
        $file_path = __DIR__."/files/$file_name";
        
        $this->pdf->WriteHTML("{$this->data['title']} - {$this->data['content']}\n");
        $this->pdf->SetWatermarktext('Test');
        $this->pdf->showWatermarkText=true;
        $this->pdf->Output($file_path);
        dd("$file_name successfully Created!\n");
    }
}