<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class Refund
 */
class Refund extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var float
     */
    public $amount;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var boolean
     */
    public $cancelsubscription;

    /**
     * @var float
     */
    public $vendoramount;
}