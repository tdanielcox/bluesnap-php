<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class TransactionFraudInfo
 */
class TransactionFraudInfo extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var string
     */
    public $fraudSessionId;

    /**
     * @var string
     */
    public $shopperIpAddress;

    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $enterpriseSiteId;

    /**
     * @var array
     */
    public $enterpriseUdfs;

    /**
     * @var ShippingContactInfo
     */
    public $shippingContactInfo;
}