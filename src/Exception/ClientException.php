<?php

namespace Centrobill\Sdk\Exception;

use Error;
use Centrobill\Sdk\Exception\SDKExceptionInterface;
use Exception;
use GuzzleHttp\Exception\BadResponseException;

class ClientException extends Exception implements SDKExceptionInterface
{
    /**
     * @var Error|null
     */
    private $error;

    /**
     * @param string         $message
     * @param Exception|null $previous
     */
    public function __construct($message = "", Exception $previous = null)
    {
        parent::__construct($message, 0, $previous);

        if ($previous instanceof BadResponseException) {
            if (null !== $previous->getResponse()) {
                $this->error = new Error($previous->getResponse()->getBody()->getContents());
            }
        }
    }

    /**
     * @return Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return bool
     */
    public function hasError()
    {
        return $this->error !== null;
    }

    /**
     * @param string $name
     *
     * @return ClientException
     */
    public static function requireOption($name)
    {
        return new self(sprintf('Missed mandatory option "%s".', $name));
    }
}