<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class Subscription
 */
class Subscription extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    protected $children = ['payerInfo' => self::ITEM, 'paymentSource' => self::ITEM];

    /**
     * @var integer
     */
    public $planId;

    /**
     * @var VendorInfo
     */
    public $vendorInfo;

    /**
     * @var integer
     */
    public $vaultedShopperId;

    /**
     * @var PayerInfo
     */
    public $payerInfo;

    /**
     * @var PaymentSource
     */
    public $paymentSource;

    /**
     * @var integer
     */
    public $quantity;

    /**
     * @var string
     */
    public $softDescriptor;

    /**
     * @var integer
     */
    public $overrideTrialPeriodDays;

    /**
     * @var double
     */
    public $overrideRecurringChargeAmount;

    /**
     * @var double
     */
    public $overrideInitialChargeAmount;

    /**
     * @var TransactionFraudInfo
     */
    public $transactionFraudInfo;
}