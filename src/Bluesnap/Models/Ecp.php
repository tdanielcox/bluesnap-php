<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class Ecp
 */
class Ecp extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var string
     */
    public $accountNumber;

    /**
     * @var string
     */
    public $routingNumber;

    /**
     * @var string
     */
    public $accountType;
}