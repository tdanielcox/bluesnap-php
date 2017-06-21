## Bluesnap PHP Library


#### Usage

```php
<?php namespace App;

include tdanielcox\Bluesnap\Bluesnap;
include tdanielcox\Bluesnap\Vendor;
include tdanielcox\Bluesnap\CardTransaction;

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