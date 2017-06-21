<?php

/*
 * Create a vendor
 */

use tdanielcox\Bluesnap\Vendor;

class YourClass
{
    public function postVendor()
    {
        $vendor = Vendor::create([
            'email' => 'vendoremail@example.com',
            'country' => 'US'
        ]);

        return $vendor;
    }

    public function getVendor($id)
    {
        $vendor = Vendor::get($id);

        return $vendor;
    }
}