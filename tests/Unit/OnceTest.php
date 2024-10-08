<?php

declare(strict_types=1);

use Nicklasos\LaravelOnce\Facades\Once;
use Nicklasos\LaravelOnce\OnceService;
use Orchestra\Testbench\Concerns\WithWorkbench;

class OnceTest extends \Orchestra\Testbench\TestCase
{
    use WithWorkbench;

    public function testHello()
    {
        $once = app(OnceService::class);

        $this->assertTrue($once->check());

        $this->assertTrue(Once::check());
    }
}