<?php

namespace tdanielcox\Bluesnap;

/**
 * Class Refund
 */
class Refund
{
    public static function update($id, $query_params)
    {
        return Adapter::update('Refund', $id, [
            'query_params' => $query_params
        ]);
    }
}