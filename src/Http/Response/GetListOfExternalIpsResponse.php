<?php

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Utils\Utils;
use stdClass;

class GetListOfExternalIpsResponse implements ResponseInterface
{
    private array $data;
    
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function isSuccessful()
    {
        return true;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
