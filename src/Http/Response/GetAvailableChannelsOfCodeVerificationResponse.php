<?php

namespace Centrobill\Sdk\Http\Response;

class GetAvailableChannelsOfCodeVerificationResponse extends AbstractResponse implements ResponseInterface
{
    public function isSuccessful()
    {
        return true;
    }
}
