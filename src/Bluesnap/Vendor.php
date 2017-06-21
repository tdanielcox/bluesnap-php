<?php

namespace tdanielcox\Bluesnap;

/**
 * Class Vendor
 */
class Vendor
{
    public static function get($id = null)
    {
        return Adapter::get('Vendor', $id, [ 'target_parameter' => 'vendor' ]);
    }

    public static function create($data)
    {
        return Adapter::create('Vendor', $data);
    }

    public static function update($id, $data)
    {
        return Adapter::update('Vendor', $id, $data);
    }

    public static function delete($id)
    {
        return Adapter::delete('Vendor', $id);
    }
}