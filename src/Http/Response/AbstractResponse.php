<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Utils\Utils;
use stdClass;

abstract class AbstractResponse implements ResponseInterface
{
    protected stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    abstract public function isSuccessful();

    public function getData()
    {
        return Utils::convertObjectToArray($this->data);
    }
}