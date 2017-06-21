<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class VendorAgreement
 */
class VendorAgreement extends Model
{
    public function __construct($data)
    {
        parent::__construct($data);
    }

    /**
     * @var integer
     */
    public $commissionPercent;
}