<?php

namespace TemplateMethod;

abstract class ImportFile
{
    public function import()
    {
        $this->openFile();
        $this->parse();
        $this->dataValidate();
        $this->saveDataBase();
    }

    public function saveDataBase()
    {
        echo 'salvando no banco de dados' . PHP_EOL;
    }

    public abstract function openFile();
    public abstract function parse();
    public abstract function dataValidate();
}