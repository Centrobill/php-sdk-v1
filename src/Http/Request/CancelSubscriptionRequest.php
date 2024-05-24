<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Reason;
use DateTimeImmutable;

class CancelSubscriptionRequest implements RequestInterface
{
    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var ?DateTimeImmutable $cancelDate
     */
    private ?DateTimeImmutable $cancelDate;

    /**
     * @var ?Reason $reason
     */
    private ?Reason $reason;

    /**
     * @var bool $sendEmail
     */
    private $sendEmail;

    /**
     * @var bool $keepActiveUntilNextRebill
     */
    private $keepActiveUntilNextRebill;

    public function __construct(
        Id $id,
        ?DateTimeImmutable $cancelDate = null,
        ?Reason $reason = null,
        $sendEmail = false,
        $keepActiveUntilNextRebill = false
    ) {
        $this->id = $id;
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

    public function setSendEmail($sendEmail)
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    public function setKeepActiveUntilNextRebill($keepActiveUntilNextRebill)
    {
        $this->keepActiveUntilNextRebill = $keepActiveUntilNextRebill;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [
            'sendEmail' => $this->sendEmail,
            'keepActiveUntilNextRebill' => $this->keepActiveUntilNextRebill,
        ];

        if ($this->cancelDate !== null) {
            $data['cancelDate'] = $this->cancelDate->format('Y-m-d H:i:s');
        }

        if ($this->reason !== null) {
            $data['reason'] = (string)$this->reason;
        }

        return $data;
    }

    public function getUri(): string 
    {
        return sprintf('subscription/%s/cancel', (string)$this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
    }

    public function getHeaders(): array
    {
        return [
            'X-Requested-With' => 'XMLHttpRequest',
        ];
    }
}
