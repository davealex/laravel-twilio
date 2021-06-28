<?php

namespace Davealex\LaravelTwilio;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Davealex\LaravelTwilio\Skeleton\SkeletonClass
 */
class LaravelTwilioFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-twilio';
    }
}
