<?php

namespace Boatrace\Venture\Project\LaravelPrefecture\Facades;

use Boatrace\Venture\Project\Prefecture as LaravelPrefecture;
use Illuminate\Support\Facades\Facade;

/**
 * @author shimomo
 */
class Prefecture extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return LaravelPrefecture::class;
    }
}
