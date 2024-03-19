<?php

namespace Centrobill\Sdk\Http\Request;

use Centrobill\Sdk\ValueObject\GroupId;

class ChangeConsumerGroupRequest implements RequestInterface
{
    /**
     * @var GroupId $groupId
     */
    private GroupId $groupId;

    public function __construct(GroupId $groupId = null)
    {
        $this->groupId = $groupId;
    }

    public function setGroupId(GroupId $groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    public function getPayload()
    {
        $data = [];

        if ($this->groupId !== null) {
            $data['groupId'] = (string)$this->groupId;
        }

        return $data;
    }

    public function getUri()
    {
        return '/consumer/{id}';
    }

    public function getHttpMethod()
    {
        return self::HTTP_METHOD_PUT;
    }
}
