<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class PayerInfo
 */
class PayerInfo extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var string
     */
    public $companyName;

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
    public $email;

    /**
     * @var string
     */
    public $phone;

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
    public $zip;

}
