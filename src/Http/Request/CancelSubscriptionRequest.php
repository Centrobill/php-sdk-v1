<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\Id;
use Centrobill\Sdk\ValueObject\Reason;
use DateTimeImmutable;

class CancelSubscriptionRequest implements RequestInterface
{
    use HasRequestId;

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
     * @var bool|null $sendEmail
     */
    private $sendEmail;

    /**
     * @var bool|null $keepActiveUntilNextRebill
     */
    private $keepActiveUntilNextRebill;

    public function __construct(
        Id $id,
        ?DateTimeImmutable $cancelDate = null,
        ?Reason $reason = null,
        $sendEmail = null,
        $keepActiveUntilNextRebill = null
    ) {
        $this->id = $id;
        $this->cancelDate = $cancelDate;
        $this->reason = $reason;
        $this->sendEmail = $sendEmail;
        $this->keepActiveUntilNextRebill = $keepActiveUntilNextRebill;
    }

    public function setCancelDate(DateTimeImmutable $cancelDate): CancelSubscriptionRequest
    {
        $this->cancelDate = $cancelDate;
        return $this;
    }

    public function setReason(Reason $reason): CancelSubscriptionRequest
    {
        $this->reason = $reason;
        return $this;
    }

    public function setSendEmail($sendEmail): CancelSubscriptionRequest
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    public function setKeepActiveUntilNextRebill($keepActiveUntilNextRebill): CancelSubscriptionRequest
    {
        $this->keepActiveUntilNextRebill = $keepActiveUntilNextRebill;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [];

        if ($this->sendEmail !== null) {
            $data['sendEmail'] = $this->sendEmail;
        }

        if ($this->keepActiveUntilNextRebill !== null) {
            $data['keepActiveUntilNextRebill'] = $this->keepActiveUntilNextRebill;
        }

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
        return sprintf('subscription/%s/cancel', $this->id);
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD_PUT;
    }

    public function getHeaders(): array
    {
        if ($this->getRequestId() !== null) {
            return [
                'X-Request-Id' => $this->getRequestId(),
            ];
        }

        return [];
    }
}
