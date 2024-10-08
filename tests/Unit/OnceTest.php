<?php

declare(strict_types=1);

use Nicklasos\LaravelOnce\Once;
use Orchestra\Testbench\Concerns\WithWorkbench;

class OnceTest extends \Orchestra\Testbench\TestCase
{
    use WithWorkbench;

    public function testHello()
    {
        $once = app(Once::class);

        $this->assertTrue($once->check());
    }
}