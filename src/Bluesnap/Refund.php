<?php

namespace tdanielcox\Bluesnap;

/**
 * Class Refund
 */
class Refund
{
    public static function update($id, $data)
    {
        return Adapter::update('Refund', $id, $data);
    }
}