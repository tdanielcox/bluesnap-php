## Bluesnap PHP Library


#### Initialize

```php
include tdanielcox\Bluesnap\Bluesnap;

Bluesnap::init($environment, $api_key, $password);
```

#### Create a Vendor

```php
include tdanielcox\Bluesnap\Vendor;

$vendor = Vendor::create([
    'email' => 'vendoremail@example.com',
    'country' => 'US'
]);
```

More coming soon...

## License
This package is licensed under the [MIT License](https://github.com/tdanielcox/bluesnap-php/blob/master/LICENSE)