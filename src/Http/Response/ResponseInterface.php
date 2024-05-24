<?php

namespace Centrobill\Sdk\Http\Response;

interface ResponseInterface
{
    public function isSuccessful();

    public function getData();
}