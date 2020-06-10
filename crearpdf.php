<?php
    require 'pdf/vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;
    ob_start();
    require_once 'plantilla_factura.php';
    $plantilla=ob_get_clean();
    $pdf=new Html2Pdf();
    $pdf->writeHTML($plantilla);
    $pdf->output();
?>