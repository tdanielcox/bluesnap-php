<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class CreditCardInfo
 *
 * @package tdanielcox\VendorAdapterFacade\Models
 */
class CreditCardInfo extends Model
{
    public function __construct($data)
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