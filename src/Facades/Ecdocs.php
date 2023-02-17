<?php

namespace ECDoc\Ecdocs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ECDoc\Ecdocs\Ecdocs
 */
class Ecdocs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ECDoc\Ecdocs\Ecdocs::class;
    }
}
