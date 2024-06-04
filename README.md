# EmailReputationAPI Laravel Package

[EmailReputationAPI.com](https://emailreputationapi.com) is a service that helps organizations more effectively manage leads by identifying personal and disposable email addresses and domains. You can use this Laravel package to easily plug into the EmailReputation API validation service and database.

To use this package you'll first need create an EmailReputationAPI.com account. Doing so is free, and you can validate up to 100 email addresses per month. No credit card is required to get started, and you can email the service creator Jason Gilmore (wj@wjgilmore.com) anytime with questions.

## Installation

You can install the package via Composer:

```bash
composer require emailreputationapi/reputation
```

Next, publish the config file:

```bash
$ php artisan vendor:publish --tag="reputation-config"
```

This is the contents of the published config file (`config/reputation.php`):

```php
return [
    'api_key' => env('EMAIL_REPUTATION_API_SECRET'),
    'api_url' => env('EMAIL_REPUTATION_API_URL'),
];
```

Finally, open your `.env` file and add the following section:

```bash
# EmailReputationAPI.com
EMAIL_REPUTATION_API_SECRET='YOUR_EMAIL_REPUTATION_API_SECRET_KEY'
EMAIL_REPUTATION_API_URL='https://emailreputationapi.com/api/v1/validate'
```

## Usage

```php
$era = new EmailReputationAPI\Reputation\Email;
$valid = $era->validate('jason@hotmail.com');
= {
    +"email": "jason@hotmail.com",
    +"syntax": "valid",
    +"tld": "true",
    +"personal": "false",
    +"disposable": "false",
    +"business": "false",
    +"government": "false",
    +"unknown": "true",
  }
```

## Security Vulnerabilities

Did I do something stupid? Please email me at wj@wjgilmore.com.
