# EmailReputationAPI Laravel Package

[EmailReputationAPI.com](https://emailreputationapi.com) is a service that helps sales teams more effectively filter and segment leads by identifying personal and disposable email addresses and domains. You can use this Laravel package to easily plug into the EmailReputation API validation service and database.

## Installation

You can install the package via Composer:

```bash
composer require emailreputationapi/reputation
```

You can publish the config file with:

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

Open your `.env` file and add the following section:

```bash
# EmailReputationAPI.com
EMAIL_REPUTATION_API_SECRET='YOUR_EMAIL_REPUTATION_API_SECRET_KEY'
EMAIL_REPUTATION_API_URL='https://emailreputationapi.com/api/v1/validate'
```

## Usage

```php
$era = new EmailReputationAPI\Reputation\Email;
$valid = $era->validate('jason@hotmail.com');
= {#6227
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

Please email security@emailreputationapi.com
