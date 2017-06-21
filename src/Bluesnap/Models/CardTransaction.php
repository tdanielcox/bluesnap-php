<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class CardTransaction
 */
class CardTransaction extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data, 'transactionId');
    }

    protected $children = ['transactionMetaData' => self::ITEM, 'creditCard' => self::ITEM, 'vendorInfo' => self::ITEM];

    /**
     * The type of transaction [AUTH_CAPTURE, AUTH_ONLY, CAPTURE_ONLY]
     * @var string
     */
    public $cardTransactionType;

    /**
     * Amount to be charged in the transaction, including decimal points.
     * @var string
     */
    public $amount;

    /**
     * Enter ECOMMERCE for a one-time transaction or RECURRING for a recurring transaction.
     * @var string
     */
    public $recurringTransaction;

    /**
     * Merchant's unique ID for a new transaction. Length: 1..50
     * @var string
     */
    public $merchantTransactionId;

    /**
     * Description of the transaction, which appears on the shopper's credit card statement.
     * @var string $softDescriptor
     */
    public $softDescriptor;

    /**
     * ID of an existing vaulted shopper.
     * @var string
     */
    public $vaultedShopperId;

    /**
     * Currency code (ISO 4217) of the amount to be charged.
     * @var string
     */
    public $currency;

    /**
     * @var TransactionMetaData
     */
    public $transactionMetaData;

    /**
     * @var CreditCard
     */
    public $creditCard;

    /**
     * @var TransactionFraudInfo
     */
    public $transactionFraudInfo;
}