<?php

use Centrobill\Sdk\Http\Client;
use Centrobill\Sdk\Service\SignatureCalculator;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/http-client.inc.php';

try {
    $rawInput = fopen('php://input', 'r');
    $rawData = stream_get_contents($rawInput);

    if (!empty($rawData)) {
        /** @var Client $client */
        $ipn = $client->parseIpnPayload($rawData);

        $signatureService = new SignatureCalculator();
        $signature = $signatureService->calculate(
            (string)$client->getApiKey(),
            $ipn->getPayment()->getTransactionId(),
            $ipn->getPayment()->getStatus()
        );

        var_dump($ipn->getData());

        $ipnSignature = $_SERVER['HTTP_X_SIGNATURE'];

        if ($signature === $ipnSignature) {
            echo 'Signature is valid' . PHP_EOL;
        } else {
            echo 'Signature is invalid' . PHP_EOL;
        }
    }

    fclose($rawInput);
} catch (Exception $e) {
    var_dump($e->getMessage());
}
