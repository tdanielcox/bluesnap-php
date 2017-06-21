<?php

namespace tdanielcox\Bluesnap;

/**
 * Class Report
 */
class Report
{
    public static function get($report, $query_params = null)
    {
        return Adapter::get('Report', $report, [
            'query_params' => $query_params
        ]);
    }
}