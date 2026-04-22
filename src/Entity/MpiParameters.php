<?php

declare(strict_types=1);

namespace Centrobill\Sdk\Entity;

use Centrobill\Sdk\ValueObject\AuthStatus;
use Centrobill\Sdk\ValueObject\Cavv;
use Centrobill\Sdk\ValueObject\DirectoryServerTransactionId;
use Centrobill\Sdk\ValueObject\Eci;
use Centrobill\Sdk\ValueObject\ProtocolVersion;
use Centrobill\Sdk\ValueObject\ScaExemption;

class MpiParameters
{
    /**
     * @var AuthStatus|null $authStatus
     */
    private ?AuthStatus $authStatus;

    /**
     * @var Cavv|null $cavv
     */
    private ?Cavv $cavv;

    /**
     * @var Eci|null $eci
     */
    private ?Eci $eci;

    /**
     * @var ProtocolVersion|null $protocolVersion
     */
    private ?ProtocolVersion $protocolVersion;

    /**
     * @var DirectoryServerTransactionId|null $directoryServerTransactionId
     */
    private ?DirectoryServerTransactionId $directoryServerTransactionId;

    /**
     * @var ScaExemption|null $scaExemption
     */
    private ?ScaExemption $scaExemption;

    public function __construct(
        ?AuthStatus $authStatus = null,
        ?Cavv $cavv = null,
        ?Eci $eci = null,
        ?ProtocolVersion $protocolVersion = null,
        ?DirectoryServerTransactionId $directoryServerTransactionId = null,
        ?ScaExemption $scaExemption = null
    ) {
        $this->authStatus = $authStatus;
        $this->cavv = $cavv;
        $this->eci = $eci;
        $this->protocolVersion = $protocolVersion;
        $this->directoryServerTransactionId = $directoryServerTransactionId;
        $this->scaExemption = $scaExemption;
    }

    public function setAuthStatus(?AuthStatus $authStatus): MpiParameters
    {
        $this->authStatus = $authStatus;
        return $this;
    }

    public function setCavv(?Cavv $cavv): MpiParameters
    {
        $this->cavv = $cavv;
        return $this;
    }

    public function setEci(?Eci $eci): MpiParameters
    {
        $this->eci = $eci;
        return $this;
    }

    public function setProtocolVersion(?ProtocolVersion $protocolVersion): MpiParameters
    {
        $this->protocolVersion = $protocolVersion;
        return $this;
    }

    public function setDirectoryServerTransactionId(?DirectoryServerTransactionId $directoryServerTransactionId): MpiParameters
    {
        $this->directoryServerTransactionId = $directoryServerTransactionId;
        return $this;
    }

    public function setScaExemption(?ScaExemption $scaExemption): MpiParameters
    {
        $this->scaExemption = $scaExemption;
        return $this;
    }

    public function toArray(): array
    {
        $data = [];

        if ($this->authStatus !== null) {
            $data['authStatus'] = (string)$this->authStatus;
        }

        if ($this->cavv !== null) {
            $data['cavv'] = (string)$this->cavv;
        }

        if ($this->eci !== null) {
            $data['eci'] = (string)$this->eci;
        }

        if ($this->protocolVersion !== null) {
            $data['protocolVersion'] = (string)$this->protocolVersion;
        }

        if ($this->directoryServerTransactionId !== null) {
            $data['directoryServerTransactionId'] = (string)$this->directoryServerTransactionId;
        }

        if ($this->scaExemption !== null) {
            $data['scaExemption'] = (string)$this->scaExemption;
        }

        return $data;
    }

}
