<?php

namespace TemplateMethod;

use TemplateMethod\ImportFile;

class ImportPdf extends ImportFile
{
    public function openFile()
    {
        echo 'Abrindo arquivo PDF' . PHP_EOL;
    }

    public function parse()
    {
        echo 'Parsing do arquivo PDF' . PHP_EOL;
    }

    public function dataValidate()
    {
        echo 'Validando dados do arquivo PDF' . PHP_EOL;
    }
}