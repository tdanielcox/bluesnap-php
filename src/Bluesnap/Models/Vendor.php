<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class Vendor
 */
class Vendor extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data, 'vendorId');
    }

    protected $children = ['vendorAgreement' => self::ITEM, 'vendorPrincipal' => self::ITEM, 'payoutInfo' => self::COLLECTION];

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $name;

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
    public $phone;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * State Code (US and CA only)
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $zip;

    /**
     * @var integer
     */
    public $taxId;

    /**
     * @var integer
     */
    public $vatId;

    /**
     * @var VendorPrincipal
     */
    public $vendorPrincipal;

    /**
     * @var VendorAgreement
     */
    public $vendorAgreement;

    /**
     * @var PayoutInfo[]
     */
    public $payoutInfo;

}