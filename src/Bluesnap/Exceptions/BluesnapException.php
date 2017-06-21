<?php

namespace tdanielcox\Bluesnap\Exceptions;

use Exception;
use tdanielcox\Bluesnap\Contracts\ExceptionInterface;

abstract class BluesnapException extends Exception implements ExceptionInterface
{
    private $string;
    private $trace;

    protected $message = '';
    protected $code = 0;
    protected $file;
    protected $line;

    public function __construct($message = null, $code = 0)
    {
        if (!$message)
        {
            throw new $this('Unknown '. get_class($this));
        }

        parent::__construct($message, $code);
    }

    public function __toString()
    {
        return get_class($this) . " '{$this->message}' in {$this->file}({$this->line})\n {$this->getTraceAsString()}";
    }
}