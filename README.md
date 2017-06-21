## Bluesnap PHP Library


#### Usage

```php
<?php namespace App;

include tdanielcox\Bluesnap\Bluesnap;
include tdanielcox\Bluesnap\Vendor;

class Gateway 
{
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
}


```

More coming soon...

## License
This package is licensed under the [MIT License](https://github.com/tdanielcox/bluesnap-php/blob/master/LICENSE)