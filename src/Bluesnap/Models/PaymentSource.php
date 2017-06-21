<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class PaymentSource
 */
class PaymentSource extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    protected $children = ['creditCardInfo' => self::COLLECTION];

    /**
     * @var CreditCardInfo[]
     */
    public $creditCardInfo;
}