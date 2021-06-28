<?php

namespace Davealex\LaravelTwilio;

use Twilio\Rest\Client;

abstract class LaravelTwilio
{
    // Build your next great package.
    protected $twilio;

    public function __construct()
    {
        $token = config('laravel-twilio.auth_token');
        $sid = config('laravel-twilio.sid');

        $this->twilio = (new Client($sid, $token));
    }

    public function setService($name, $version)
    {
        $serviceSid = config("laravel-twilio.services.{$name}.sid");
        $serviceVersion = "v{$version}";

        throw_unless(isset($serviceSid) && isset($serviceVersion), 'Service name or version not properly defined.');

        $this->twilio = $this->twilio
            ->$name
            ->$serviceVersion
            ->services($serviceSid);

        return $this;
    }

    public abstract function sendOtp($info);

    public function confirmSentOtp($code, $info)
    {
        $status = $this->twilio->verificationChecks
            ->create($code,
                ['to' => $info]
            )->status;

        return [
            'status' => $status
        ];
    }
}
