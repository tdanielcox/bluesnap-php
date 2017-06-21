<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class PaymentSources
 *
 * @package tdanielcox\VendorAdapterFacade\Models
 */
class PaymentSources extends Model
{
    public function __construct($data)
    {
        parent::__construct($data);
    }

    protected $children = ['creditCardInfo' => self::COLLECTION, 'ecpInfo' => self::COLLECTION];

    /**
     * @var CreditCardInfo[]
     */
    public $creditCardInfo;

    /**
     * @var EcpInfo[]
     */
    public $ecpInfo;
}