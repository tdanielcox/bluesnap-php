<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class VendorPrincipal
 */
class VendorPrincipal extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

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
     * @var string
     */
    public $zip;

    /**
     * @var string
     */
    public $dob;

    /**
     * @var string
     */
    public $personalIdentificationNumber;

    /**
     * @var string
     */
    public $passportNumber;

    /**
     * @var string
     */
    public $email;
}