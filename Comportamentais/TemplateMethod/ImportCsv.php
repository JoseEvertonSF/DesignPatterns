<?php

namespace TemplateMethod;

use TemplateMethod\ImportFile;

class ImportCsv extends ImportFile
{
    public function openFile()
    {
        echo 'Abrindo arquivo CSV' . PHP_EOL;
    }

    public function parse()
    {
        echo 'Parsing do arquivo CSV' . PHP_EOL;
    }

    public function dataValidate()
    {
        echo 'Validando dados do arquivo CSV' . PHP_EOL;
    }
}