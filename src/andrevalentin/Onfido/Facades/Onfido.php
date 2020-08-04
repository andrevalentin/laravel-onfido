<?php

namespace andrevalentin\Onfido\Facades;

use Illuminate\Support\Facades\Facade;

class Onfido extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'onfido';
    }
}
