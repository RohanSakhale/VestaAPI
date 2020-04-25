<?php

namespace VestaCP\Facades;

use Illuminate\Support\Facades\Facade;
use VestaCP\VestaAPI;

class Vesta extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return VestaAPI::class;
    }
}
