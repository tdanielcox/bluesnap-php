<?php

namespace tdanielcox\Bluesnap\Models;

/**
 * Class Plan
 */
class Plan extends Model
{
    public function __construct($data = null)
    {
        parent::__construct($data);
    }

    /**
     * @var string
     */
    public $name;

    /**
     * @var double
     */
    public $recurringChargeAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $chargeFrequency;

    /**
     * @var integer
     */
    public $trialPeriodDays;

    /**
     * @var double
     */
    public $initialChargeAmount;

    /**
     * @var boolean
     */
    public $chargeOnPlanSwitch;

    /**
     * @var integer
     */
    public $maxNumberOfCharges;

    /**
     * @var integer
     */
    public $gracePeriodDays;
}