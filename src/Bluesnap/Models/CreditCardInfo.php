<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class CreditCardInfo
 */
class CreditCardInfo extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    protected $children = ['creditCard' => self::ITEM, 'billingContactInfo' => self::ITEM];

    /**
     * @var string
     */
    public $pfToken;

    /**
     * @var CreditCard
     */
    public $creditCard;

    /**
     * @var BillingContactInfo
     */
    public $billingContactInfo;
}