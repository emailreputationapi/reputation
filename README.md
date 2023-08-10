# EmailReputationAPI Laravel Package

## Installation

You can install the package via Composer:

```bash
composer require wjgilmore/laravel-emailreputationapi
```

You can publish the config file with:

```bash
$ php artisan vendor:publish --tag="emailreputationapi-config"
```

This is the contents of the published config file (`config/emailreputationapi.php`):

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
$laravelEmailreputationapi = new WJGilmore\LaravelEmailreputationapi();
echo $laravelEmailreputationapi->echoPhrase('Hello, WJGilmore!');
```

## Security Vulnerabilities

Please email security@emailreputationapi.com
