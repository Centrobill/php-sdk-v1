<?php

namespace Centrobill\Sdk\Http\Response\Entity;

use stdClass;

final class Timestamp
{
    /**
     * @var stdClass $data
     */
    private stdClass $data;

    public function __construct(stdClass $data)
    {
        $this->data = $data;
    }

    public function getDateTime()
    {
        return $this->data->dateTime;
    }

    public function getTimezone()
    {
        return $this->data->timezone;
    }

    public function getUnixTime()
    {
        return $this->data->unixTime;
    }
}
