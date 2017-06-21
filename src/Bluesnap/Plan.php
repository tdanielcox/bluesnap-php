<?php

namespace tdanielcox\Bluesnap;

/**
 * Class Plan
 */
class Plan
{
    public static function get($id = null, $query_params = null)
    {
        return Adapter::get('Plan', $id, [
            'query_params' => $query_params
        ]);
    }

    public static function create($data)
    {
        return Adapter::create('Plan', $data);
    }

    public static function update($id, $data)
    {
        return Adapter::update('Plan', $id, $data);
    }

    public static function delete($id)
    {
        return Adapter::delete('Plan', $id);
    }
}