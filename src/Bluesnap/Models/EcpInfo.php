<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class EcpInfo
 */
class EcpInfo extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    protected $children = ['ecp' => self::ITEM, 'billingContactInfo' => self::ITEM];

    /**
     * @var string
     */
    public $pfToken;

    /**
     * @var Ecp
     */
    public $ecp;

    /**
     * @var BillingContactInfo
     */
    public $billingContactInfo;
}