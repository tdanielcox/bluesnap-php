<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class VaultedShopper
 */
class VaultedShopper extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data, 'vaultedShopperId');
    }

    protected $children = ['transactionFraudInfo' => self::ITEM, 'shippingContactInfo' => self::ITEM, 'paymentSources' => self::ITEM];

    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $softDescriptor;

    /**
     * @var string
     */
    public $merchantShopperId;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $address2;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $zip;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $shopperCurrency;

    /**
     * @var integer
     */
    public $walletId;

    /**
     * @var PaymentSources
     */
    public $paymentSources;

    /**
     * @var ShippingContactInfo
     */
    public $shippingContactInfo;

    /**
     * @var TransactionFraudInfo
     */
    public $transactionFraudInfo;

}
