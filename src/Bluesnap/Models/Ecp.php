<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class Ecp
 *
 * @package tdanielcox\VendorAdapterFacade\Models
 */
class Ecp extends Model
{
    public function __construct($data)
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