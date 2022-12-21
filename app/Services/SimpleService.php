<?php
namespace App\Services;

class SimpleController
{
    public function log($string)
    {
        logger($string);
    }
}
