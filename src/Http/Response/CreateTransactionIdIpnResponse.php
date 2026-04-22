<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Http\Response;

use Centrobill\Sdk\Http\Response\Entity\Ipn;

class CreateTransactionIdIpnResponse extends AbstractResponse implements ResponseInterface
{
    public function getIpn(): Ipn
    {
        return new Ipn($this->data);
    }
}
