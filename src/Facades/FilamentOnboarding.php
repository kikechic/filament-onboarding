<?php

namespace Kikechic\FilamentOnboarding\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kikechic\FilamentOnboarding\FilamentOnboarding
 */
class FilamentOnboarding extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kikechic\FilamentOnboarding\FilamentOnboarding::class;
    }
}
