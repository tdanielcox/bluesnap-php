<?php

namespace tdanielcox\Bluesnap;

/**
 * Class CardTransaction
 */
class CardTransaction
{
    public static function get($id = null)
    {
        return Adapter::get('CardTransaction', $id);
    }

    public static function create($data)
    {
        return Adapter::create('CardTransaction', $data, [
            'id_in_header' => false
        ]);
    }

    public static function update($id, $data)
    {
        return Adapter::update('CardTransaction', $id, $data, [
            'id_in_url' => false
        ]);
    }
}