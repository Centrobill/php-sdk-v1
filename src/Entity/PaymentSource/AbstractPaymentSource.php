<?php

namespace Centrobill\Sdk\Entity\PaymentSource;

use Centrobill\Sdk\ValueObject\PaymentSourceType;

class AbstractPaymentSource
{
    /**
     * @var PaymentSourceType $type
     */
    protected PaymentSourceType $type;
}
