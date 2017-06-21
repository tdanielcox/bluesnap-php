<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class CreditCard
 */
class CreditCard extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var string
     */
    public $cardNumber;

    /**
     * @var string
     */
    public $encryptedCardNumber;

    /**
     * @var string
     */
    public $cardLastFourDigits;

    /**
     * @var string
     */
    public $cardType;

    /**
     * @var string
     */
    public $expirationMonth;

    /**
     * @var string
     */
    public $expirationYear;

    /**
     * @var string
     */
    public $securityCode;

    /**
     * @var string
     */
    public $encryptedSecurityCode;
}