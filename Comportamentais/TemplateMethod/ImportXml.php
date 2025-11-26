<?php

namespace TemplateMethod;

use TemplateMethod\ImportFile;

class ImportXml extends ImportFile
{
    public function openFile()
    {
        echo 'Abrindo arquivo XML' . PHP_EOL;
    }

    public function parse()
    {
        echo 'Parsing do arquivo XML' . PHP_EOL;
    }

    public function dataValidate()
    {
        echo 'Validando dados do arquivo XML' . PHP_EOL;
    }
}