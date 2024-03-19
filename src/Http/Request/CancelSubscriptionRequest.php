<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\KeepActiveUntilNextRebill;
use Centrobill\Sdk\ValueObject\Reason;
use Centrobill\Sdk\ValueObject\SendEmail;
use DateTimeImmutable;

class CancelSubscriptionRequest implements RequestInterface
{
    /**
     * @var DateTimeImmutable $cancelDate
     */
    private DateTimeImmutable $cancelDate;

    /**
     * @var Reason $reason
     */
    private Reason $reason;

    /**
     * @var SendEmail $sendEmail
     */
    private SendEmail $sendEmail;

    /**
     * @var KeepActiveUntilNextRebill $keepActiveUntilNextRebill
     */
    private KeepActiveUntilNextRebill $keepActiveUntilNextRebill;

    public function __construct(
        DateTimeImmutable $cancelDate = null,
        Reason $reason = null,
        SendEmail $sendEmail = null,
        KeepActiveUntilNextRebill $keepActiveUntilNextRebill = null,
    ) {
        $this->cancelDate = $cancelDate;
        $this->reason = $reason;
        $this->sendEmail = $sendEmail;
        $this->keepActiveUntilNextRebill = $keepActiveUntilNextRebill;
    }

    public function setCancelDate(DateTimeImmutable $cancelDate)
    {
        $this->cancelDate = $cancelDate;
        return $this;
    }

    public function setReason(Reason $reason)
    {
        $this->reason = $reason;
        return $this;
    }

    public function setSendEmail(SendEmail $sendEmail)
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    public function setKeepActiveUntilNextRebill(KeepActiveUntilNextRebill $keepActiveUntilNextRebill)
    {
        $this->keepActiveUntilNextRebill = $keepActiveUntilNextRebill;
        return $this;
    }

    public function getPayload()
    {
        $data = [];

        if ($this->cancelDate !== null) {
            $data['cancelDate'] = $this->cancelDate->format('Y-m-d H:i:s');
        }

        if ($this->reason !== null) {
            $data['reason'] = (string)$this->reason;
        }

        if ($this->sendEmail !== null) {
            $data['sendEmail'] = (string)$this->sendEmail;
        }

        if ($this->keepActiveUntilNextRebill !== null) {
            $data['keepActiveUntilNextRebill'] = (string)$this->keepActiveUntilNextRebill;
        }

        return $data;
    }

    public function getUri()
    {
        return '/subscription/{id}/cancel';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_PUT;
    }
}
