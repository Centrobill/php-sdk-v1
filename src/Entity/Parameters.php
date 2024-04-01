<?php

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\Entity\Payout\AbstractPayout;

class Parameters
{
    /**
     * @var AbstractPayout $payout
     */
    private AbstractPayout $payout;

    public function __construct(
        AbstractPayout $payout
    ) {
        $this->payout = $payout;
    }

    public function toArray()
    {
        return $this->payout->toArray();
    }
}
