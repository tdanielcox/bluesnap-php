<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class Report
 */
class Report extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var array
     */
    public $data;
}