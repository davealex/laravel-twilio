<?php

namespace Davealex\LaravelTwilio\Services;

use Davealex\LaravelTwilio\LaravelTwilio;

/**
 * Created by PhpStorm.
 * User: daveabiola
 * Date: 4/7/21
 * Time: 12:51 AM
 */
class SmsOtpSender extends LaravelTwilio
{
    public function sendOtp($info)
    {
        $verification = $this->twilio->verifications->create($info, "sms")->sid;

        return [
            'verification_sid' => $verification
        ];
    }
}