<?php

namespace tdanielcox\Bluesnap;

/**
 * Class Response
 */
class Response
{
    private $_status;
    public $data;

    public function __construct($status, $data)
    {
        $this->_status = $status;
        $this->data = $data;
    }

    public function succeeded()
    {
        return $this->_status === 'success';
    }

    public function failed()
    {
        return $this->_status !== 'success';
    }
}