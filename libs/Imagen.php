<?php

/**
 * 
 */
class Imagen
{
    function __construct()
    {
    }
    public static function leerDirectorio()
    {
        $arhivo = new RecursiveDirectoryIterator("img");
        $arhivo -> setFlags(FilesystemIterator::SKIP_DOTS 
        | FilesystemIterator::UNIX_PATHS);
        $arhivo = new RecursiveIteratorIterator($arhivo, 
        RecursiveIteratorIterator::SELF_FIRST);
        return $arhivo;
    }
}
