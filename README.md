## Bluesnap PHP Library

### NOTICE: This library is under active development and not ready for production use

This (unofficial) library standardizes and simplifies working with the bluesnap api. 

All the standard api documentation is applicable to this library. 

View the bluesnap documentation here:

https://developers.bluesnap.com/v8976-JSON/docs

#### This library currently supports:

- CardTransactions
- VaultedShoppers
- Vendors
- Subscriptions
- Plans (Subscriptions)
- Refunds
- Reports

#### Installation

Install this package with composer

```shell
composer require tdanielcox/bluesnap-php
```

#### Usage

Initialize the library in your constructor using your environment, api key, and password

```php
public function __construct() 
{
    $environment = 'staging'; // or 'production'        
    \tdanielcox\Bluesnap\Bluesnap::init($environment, 'YOUR_API_KEY', 'YOUR_API_PASSWORD');
}
```

Create a new Transaction (with vendor & vaultedShopper)

```php
/**
 * @return \tdanielcox\Bluesnap\Models\CardTransaction
 */
public function createTransaction()
{        
    $response = \tdanielcox\Bluesnap\CardTransaction::create([
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

Get a Transaction

```php
/**
 * @return \tdanielcox\Bluesnap\Models\CardTransaction
 */
public function getTransaction()
{        
    $response = \tdanielcox\Bluesnap\CardTransaction::get($transaction_id);

    if ($response->failed()) {
        $error = $response->data;

        // handle error
    }

    $transaction = $response->data;

    return $transaction;
}
```

Get all Transactions

```php
/**
 * @return \tdanielcox\Bluesnap\Models\CardTransaction[]
 */
public function getAllTransactions()
{        
    $response = \tdanielcox\Bluesnap\CardTransaction::get();

    $transactions = $response->data;

    return $transactions;
}
```

Create a Vendor

```php
/**
 * @return \tdanielcox\Bluesnap\Models\Vendor
 */
public function createVendor()
{
    $response = \tdanielcox\Bluesnap\Vendor::create([
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
/**
 * @return \tdanielcox\Bluesnap\Models\Report
 */
public function getReport()
{
    // pass query parameters as array
    $response = \tdanielcox\Bluesnap\Report::get('TransactionDetail', [
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
