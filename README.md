# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/davealex/laravel-twilio-verify.svg?style=flat-square)](https://packagist.org/packages/davealex/laravel-twilio-verify)
[![Build Status](https://img.shields.io/travis/davealex/laravel-twilio-verify/master.svg?style=flat-square)](https://travis-ci.org/davealex/laravel-twilio-verify)
[![Quality Score](https://img.shields.io/scrutinizer/g/davealex/laravel-twilio-verify.svg?style=flat-square)](https://scrutinizer-ci.com/g/davealex/laravel-twilio-verify)
[![Total Downloads](https://img.shields.io/packagist/dt/davealex/laravel-twilio-verify.svg?style=flat-square)](https://packagist.org/packages/davealex/laravel-twilio-verify)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

## Installation

You can install the package via composer:

```bash
composer require davealex/laravel-twilio-verify
```

## Usage

``` php
// send OTP by specifying Twilio service type and service version (eg. 'verify' service, and  version '2', respectively)
// use a query string to specify the medium for sending the OTP
eg. https://app.test/test-url?type=sms

LaravelTwilioFacade::setService('verify', 2)->sendOtp('+2348064072331');
```

``` php
// confirm OTP by specifying Twilio service type and service version (eg. 'verify' service, and  version '2', respectively)
// use a query string to specify the medium for sending the OTP
eg. https://app.test/confirmation-test-url?type=sms

// confirmSentOtp method recieves the OTP and the info. Info can be an email or a phone number

LaravelTwilioFacade::setService('verify', 2)->confirmSentOtp('417713', '+2348064072331');
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email daveabiola@gmail.com instead of using the issue tracker.

## Credits

- [David Abiola](https://github.com/davealex)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).