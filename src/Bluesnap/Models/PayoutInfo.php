<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class PayoutInfo
 */
class PayoutInfo extends Model
{
    public function __construct($data)
    {
        parent::__construct($data);
    }

    protected $children = ['intermediaryBankInfo' => self::ITEM];

    /**
     * @var string
     */
    public $payoutType;

    /**
     * @var string
     */
    public $baseCurrency;

    /**
     * @var string
     */
    public $nameOnAccount;

    /**
     * @var string
     */
    public $bankAccountType;

    /**
     * @var string
     */
    public $bankAccountClass;

    /**
     * @var string
     */
    public $bankName;

    /**
     * @var integer
     */
    public $bankId;

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
    public $zip;

    /**
     * @var integer
     */
    public $bankAccountId;

    /**
     * @var IntermediaryBankInfo
     */
    public $intermediaryBankInfo;
}