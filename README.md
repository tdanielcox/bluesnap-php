## Bluesnap PHP Library

This (unofficial) library standardizes and simplifies working with the bluesnap api. 

All the standard api documentation is applicable to this library. 

View the bluesnap documentation here: https://developers.bluesnap.com/v8976-JSON/docs

This library currently supports:

- CardTransactions
- VaultedShoppers
- Vendors
- Subscriptions
- Plans (Subscriptions)
- Refunds
- Reports

### Installation

Install this package with composer

```shell
composer require tdanielcox/bluesnap-php
```

### Usage

Initialize the library in your class constructor 

```php
public function __construct()
{
    $environment = 'staging'; // or 'production'
    \tdanielcox\Bluesnap\Bluesnap::init($environment, 'YOUR_API_KEY', 'YOUR_API_PASSWORD');
}
```

####See examples for further details on using the library

## License
This package is licensed under the [MIT License](https://github.com/tdanielcox/bluesnap-php/blob/master/LICENSE)
