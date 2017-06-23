## Bluesnap PHP Library

### NOTICE: This library is under active development and not ready for production use

This (unofficial) library is meant to unify and simplify working with the bluesnap api. 
All the standard api documentation is applicable to this library. View the documentation here:

https://developers.bluesnap.com/v8976-JSON/docs

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
        $api_key = 'YOUR_API_KEY';
        $password = 'YOUR_API_PASSWORD';
        
        Bluesnap::init($environment, $api_key, $password);
    }
}
```

This library is


Create a new transaction 

```php    
    //  Create a vendor
    public function createVendor()
    {
        $vendor = Vendor::create([
            'email' => 'vendoremail@example.com',
            'country' => 'US'
        ]);
    }
    
    //  Post a card transaction with vendor & vaultedShopper
    public function postTransaction()
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
}


```

More coming soon...

## License
This package is licensed under the [MIT License](https://github.com/tdanielcox/bluesnap-php/blob/master/LICENSE)
