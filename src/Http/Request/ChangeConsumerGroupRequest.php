<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\GroupId;
use Centrobill\Sdk\ValueObject\Id;

class ChangeConsumerGroupRequest implements RequestInterface
{
    use HasRequestId;

    /**
     * @var Id $id
     */
    private Id $id;

    /**
     * @var ?GroupId $groupId
     */
    private ?GroupId $groupId;

    public function __construct(Id $id, GroupId $groupId = null)
    {
        $this->id = $id;
        $this->groupId = $groupId;
    }

    public function setGroupId(GroupId $groupId): ChangeConsumerGroupRequest
    {
        $this->groupId = $groupId;
        return $this;
    }

    public function getPayload(): array
    {
        $data = [];

        if ($this->groupId !== null) {
            $data['groupId'] = (string)$this->groupId;
        }

        return $data;
    }

    public function getUri(): string
    {
        return sprintf('consumer/%s', $this->id);
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
