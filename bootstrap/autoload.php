<?php 

namespace bootstrap;

class Autoload 
{
    public function __construct()
    {
        spl_autoload_register([$this, 'Autoload']);
        //spl_autoload_register("Autoload");
    }

    private function Autoload($files)
    {
        $files = str_replace("\\", "/", trim($files, '\\')).'.php';
        if(file_exists($files)){
            require_once $files;
        }
    }
}