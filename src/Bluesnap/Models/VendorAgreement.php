<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class VendorAgreement
 */
class VendorAgreement extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var integer
     */
    public $commissionPercent;
}