<?php

namespace Davealex\LaravelTwilio\Tests;

use Orchestra\Testbench\TestCase;
use Davealex\LaravelTwilio\LaravelTwilioServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelTwilioServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
