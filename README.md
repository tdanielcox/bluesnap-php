## Bluesnap PHP Library

### NOTICE: This library is under active development and not ready for production use

This (unofficial) library is meant to unify and simplify working with the bluesnap api. 

All the standard api documentation is applicable to this library. 

View the bluesnap documentation here:

https://developers.bluesnap.com/v8976-JSON/docs

#### This library currently supports:

CardTransactions
VaultedShoppers
Vendors
Subscriptions
Plans (Subscriptions)
Refunds

#### Installation

Install this package with composer

```shell
composer require tdanielcox/bluesnap-php
```

#### Usage

Initialize the library in your constructor using your environment, api key, and password

```php
<?php namespace App;

use tdanielcox\Bluesnap\Bluesnap;
use tdanielcox\Bluesnap\Vendor;
use tdanielcox\Bluesnap\CardTransaction;

class Gateway 
{
    //  Initialize Bluesnap
    public function __construct() 
    {
        $environment = 'staging'; // or 'production'        
        Bluesnap::init($environment, 'YOUR_API_KEY', 'YOUR_API_PASSWORD');
    }
}
```

Create a new transaction (with vendor & vaultedShopper)

```php    
public function createTransaction()
{        
    $response = CardTransaction::create([
       'creditCard' => [
           'securityCode' => $securityCode,
           'cardLastFourDigits' => $cardLastFourDigits,
           'cardType' => $cardType,
       ],
       'vendorInfo' => [
           'vendorId' => $vendorId,
           'commissionAmount' => $commissionAmount,
       ],
       'vaultedShopperId' => $vaultedShopperId,
       'amount' => $amount,
       'currency' => $currency,
       'recurringTransaction' => 'ECOMMERCE',
       'cardTransactionType' => 'AUTH_ONLY',
       'softDescriptor' => $softDescriptor,
   ]);

    if ($response->failed()) {
        $error = $response->data;

        // handle error
    }

    $transaction = $response->data;

    return $transaction;
}
```

Get a transaction

```php    
public function getTransaction()
{        
    $response = CardTransaction::get($transaction_id);

    if ($response->failed()) {
        $error = $response->data;

        // handle error
    }

    $transaction = $response->data;

    return $transaction;
}
```

Create a Vendor

```php
public function createVendor()
{
    $response = Vendor::create([
        'email' => 'vendoremail@example.com',
        'country' => 'US'
    ]);
    
    if ($response->failed()) {
        $error = $response->data;

        // handle error
    }

    $transaction = $response->data;

    return $transaction;
}
```

Get a Report

```php
public function getReport()
{
    // pass query parameters as array
    $response = Report::get('TransactionDetail', [
        'period' => 'THIS_MONTH'
    ]);
    
    if ($response->failed()) {
        $error = $response->data;

        // handle error
    }

    $report = $response->data;

    return $report;
}
```

More coming soon...

## License
This package is licensed under the [MIT License](https://github.com/tdanielcox/bluesnap-php/blob/master/LICENSE)
