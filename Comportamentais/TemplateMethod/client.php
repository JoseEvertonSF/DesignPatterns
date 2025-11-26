<?php

require __DIR__.'/../../vendor/autoload.php';

use TemplateMethod\ImportCsv;
use TemplateMethod\ImportPdf;
use TemplateMethod\ImportXml;

$csv = new ImportCsv();
$pdf = new ImportPdf();
$xml = new ImportXml();

echo '----CSV----' . PHP_EOL;
$csv->import();

echo '----PDF----' . PHP_EOL;
$pdf->import();

echo '----XML----' . PHP_EOL;
$xml->import();
