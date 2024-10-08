<?php

declare(strict_types=1);

namespace Nicklasos\LaravelOnce\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static check(): bool
 */
class Once extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Nicklasos\LaravelOnce\OnceService::class;
    }
}
