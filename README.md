# The Onfido Laravel Package

The Laravel wrapper for the Onfido PHP API Client.

## Installation

Install using composer:
```
composer require andrevalentin/laravel-onfido
```

In app.php in your Laravel application add the Service Provider under the providers array:
```
'providers' => [
    ...,
    andrevalentin\Onfido\OnfidoServiceProvider::class,
],
```
Also add the Class Alias under the aliases array:
```
'aliases' => [
    ...,
    'Onfido'    => andrevalentin\Onfido\Facades\Onfido::class,
],
```
Add a onfido.php config file in your config directory with the following content:
```
<?php

return [
    "api_key" => env("ONFIDO_API_KEY", "api_testing.default"),
];
```

## Configuration

Remember to add your Onfido API key to your `.env` file.

```
ONFIDO_API_KEY=api_sandbox.ABC...
```

## Usage

I would always encourage anyone to use the official PHP package as reference, and this is simply a Laravel wrapper.
However, I will provide an example on how to create an applicant.

Remeber to import the Onfido Facade, by adding `use Onfido;` at the top of your file.

To create an applicant and send a check:
```
$applicant = Onfido::createApplicant([
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'johndoe@example.org',
]);

$onfido_check = Onfido::createCheck([
    'applicant_id' => $applicant['id'],
    'report_names' => ['right_to_work'],
    'applicant_provides_data' => true,
]);
```

The above is all that is required to create an applicant and send the applicant a right to work check via Onfido.

You can then consult the results of the check as an array:

```
$applicant['id']
$onfido_check['id']
$onfido_check['status']
$onfido_check['form_uri']
```

To see all possible return data check the official PHP package documentation over at https://github.com/onfido/api-php-client
