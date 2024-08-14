<?php

namespace Centrobill\Sdk\Exception;

use Error;
use Exception;
use GuzzleHttp\Exception\BadResponseException;

class ClientException extends Exception implements SDKExceptionInterface
{
    private ?Error $error;

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
    public function getError(): ?Error
    {
        return $this->error;
    }

    /**
     * @return bool
     */
    public function hasError(): bool
    {
        return $this->error !== null;
    }

    /**
     * @param string $name
     *
     * @return ClientException
     */
    public static function requireOption(string $name): ClientException
    {
        return new self(sprintf('Missed mandatory option "%s".', $name));
    }
}
