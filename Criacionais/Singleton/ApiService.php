<?php

namespace Singleton;

class ApiService
{
    private static ?self $instance = null;

    private function __construct()
    {
        
    }

    public static function getInstance(): self
    {
        if(self::$instance == null)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }
    
}