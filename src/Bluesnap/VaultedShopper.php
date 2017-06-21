<?php

namespace tdanielcox\Bluesnap;

/**
 * Class VaultedShopper
 */
class VaultedShopper
{
    public static function get($id = null)
    {
        return Adapter::get('VaultedShopper', $id);
    }

    public static function create($data)
    {
        return Adapter::create('VaultedShopper', $data);
    }

    public static function update($id, $data)
    {
        return Adapter::update('VaultedShopper', $id, $data);
    }

    public static function delete($id)
    {
        return Adapter::delete('VaultedShopper', $id);
    }
}