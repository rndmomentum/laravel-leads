<?php

namespace Momentumplanet\LaravelLeads\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelLeads extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-leads';
    }
}
