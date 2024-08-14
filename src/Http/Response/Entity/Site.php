<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class Site
{
    /**
     * @var stdClass $data
     */
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getId(): string
    {
        return $this->data->id;
    }

    public function getName(): string
    {
        return $this->data->name;
    }

    public function getExternalId(): string
    {
        return $this->data->externalId;
    }

    public function getIpnUrl(): string
    {
        return $this->data->ipnUrl;
    }

    public function getRedirectUrl(): string
    {
        return $this->data->redirectUrl;
    }

    public function isCorsEnabled(): bool
    {
        return $this->data->corsEnabled ?? false;
    }

    public function getStatus(): bool
    {
        return $this->data->status ?? false;
    }

    public function isAutoRedirect(): bool
    {
        return $this->data->autoRedirect ?? false;
    }

    public function getTrackingCode(): ?string
    {
        return $this->data->trackingCode ?? null;
    }

    public function getRebillRetryPolicy(): ?string
    {
        return $this->data->rebillRetryPolicy ?? null;
    }

    public function getMemberExpirationDatePadding(): ?string
    {
        return $this->data->memberExpirationDatePadding ?? null;
    }

    public function getDeclineUrl(): ?string
    {
        return $this->data->declineUrl ?? null;
    }

    public function getBgBodyColor(): ?string
    {
        return $this->data->bgBodyColor ?? null;
    }

    public function getLinkColor(): ?string
    {
        return $this->data->linkColor ?? null;
    }

    public function getTextColor(): ?string
    {
        return $this->data->textColor ?? null;
    }

    public function getBgColor1(): ?string
    {
        return $this->data->bgColor1 ?? null;
    }

    public function getBgColor2(): ?string
    {
        return $this->data->bgColor2 ?? null;
    }

    public function getBgColor3(): ?string
    {
        return $this->data->bgColor3 ?? null;
    }

    public function getTextColor1(): ?string
    {
        return $this->data->textColor1 ?? null;
    }

    public function getTextColor2(): ?string
    {
        return $this->data->textColor2 ?? null;
    }

    public function getTextColor3(): ?string
    {
        return $this->data->textColor3 ?? null;
    }

    public function getLogoBase64(): ?string
    {
        return $this->data->logoBase64 ?? null;
    }

    public function getCreatedAt(): string
    {
        return $this->data->createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->data->updatedAt;
    }
}
