<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class VendorInfo
 */
class VendorInfo extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var integer
     */
    public $commissionPercent;

    /**
     * @var integer
     */
    public $commissionAmount;
}