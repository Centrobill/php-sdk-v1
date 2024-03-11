<?php

namespace Centrobill\Sdk\Http\Request;

use stdClass;

abstract class AbstractResponse
{1
    protected stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }
}