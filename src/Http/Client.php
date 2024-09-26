<?php

namespace Centrobill\Sdk\Http;

use Centrobill\Sdk\Http\Request\BlockTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\CancelSubscriptionRequest;
use Centrobill\Sdk\Http\Request\ChangeConsumerGroupRequest;
use Centrobill\Sdk\Http\Request\ChangePaymentAccountForSubscriptionRequest;
use Centrobill\Sdk\Http\Request\ChangeSubscriptionRequest;
use Centrobill\Sdk\Http\Request\CheckVerificationCodeRequest;
use Centrobill\Sdk\Http\Request\CreateConsumerRequest;
use Centrobill\Sdk\Http\Request\CreateProductRequest;
use Centrobill\Sdk\Http\Request\CreateSiteRequest;
use Centrobill\Sdk\Http\Request\CreateTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\CreditRequest;
use Centrobill\Sdk\Http\Request\DeleteTestPaymentDataByIDRequest;
use Centrobill\Sdk\Http\Request\DisablePaymentAccountForQuickSaleRequest;
use Centrobill\Sdk\Http\Request\Emulate3DsForTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\EnablePaymentAccountForQuickSaleRequest;
use Centrobill\Sdk\Http\Request\GenerateCardDataTokenRequest;
use Centrobill\Sdk\Http\Request\GenerateCardDataTokenUsingPaymentAccountIdRequest;
use Centrobill\Sdk\Http\Request\GenerateUrlToPaymentPageRequest;
use Centrobill\Sdk\Http\Request\GetApplePaySessionRequest;
use Centrobill\Sdk\Http\Request\GetAvailableChannelsOfCodeVerificationRequest;
use Centrobill\Sdk\Http\Request\GetChargebackIdRepaidLinkRequest;
use Centrobill\Sdk\Http\Request\GetConsumerRequest;
use Centrobill\Sdk\Http\Request\GetCurrencyExchangeRatesRequest;
use Centrobill\Sdk\Http\Request\GetExchangeRateByIso3Request;
use Centrobill\Sdk\Http\Request\GetListOfExternalIpsRequest;
use Centrobill\Sdk\Http\Request\GetListOfTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\GetProductRequest;
use Centrobill\Sdk\Http\Request\GetSiteRequest;
use Centrobill\Sdk\Http\Request\GetSubscriptionRequest;
use Centrobill\Sdk\Http\Request\GetTestPaymentDataByIdRequest;
use Centrobill\Sdk\Http\Request\ListPaymentAccountIDsByConsumerIdRequest;
use Centrobill\Sdk\Http\Request\NotEmulate3DsForTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\PayoutRequest;
use Centrobill\Sdk\Http\Request\PayRequest;
use Centrobill\Sdk\Http\Request\RecoverSubscriptionRequest;
use Centrobill\Sdk\Http\Request\RequestInterface;
use Centrobill\Sdk\Http\Request\SendMessageWithVerificationCodeRequest;
use Centrobill\Sdk\Http\Request\UnblockTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\UpdateAllowedIPsRequest;
use Centrobill\Sdk\Http\Request\UpdateBalanceOfTheTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\UpdateProductRequest;
use Centrobill\Sdk\Http\Request\UpdateSiteRequest;
use Centrobill\Sdk\Http\Response\BlockTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\CancelSubscriptionResponse;
use Centrobill\Sdk\Http\Response\ChangeConsumerGroupResponse;
use Centrobill\Sdk\Http\Response\ChangePaymentAccountForSubscriptionResponse;
use Centrobill\Sdk\Http\Response\ChangeSubscriptionResponse;
use Centrobill\Sdk\Http\Response\CheckVerificationCodeResponse;
use Centrobill\Sdk\Http\Response\CreateConsumerResponse;
use Centrobill\Sdk\Http\Response\CreateProductResponse;
use Centrobill\Sdk\Http\Response\CreateSiteResponse;
use Centrobill\Sdk\Http\Response\CreateTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\CreditResponse;
use Centrobill\Sdk\Http\Response\DeleteTestPaymentDataByIDResponse;
use Centrobill\Sdk\Http\Response\DisablePaymentAccountForQuickSaleResponse;
use Centrobill\Sdk\Http\Response\Emulate3DsForTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\EnablePaymentAccountForQuickSaleResponse;
use Centrobill\Sdk\Http\Response\ErrorResponse;
use Centrobill\Sdk\Http\Response\GenerateCardDataTokenResponse;
use Centrobill\Sdk\Http\Response\GenerateCardDataTokenUsingPaymentAccountIdResponse;
use Centrobill\Sdk\Http\Response\GenerateUrlToPaymentPageResponse;
use Centrobill\Sdk\Http\Response\GetApplePaySessionResponse;
use Centrobill\Sdk\Http\Response\GetAvailableChannelsOfCodeVerificationResponse;
use Centrobill\Sdk\Http\Response\GetChargebackIdRepaidLinkResponse;
use Centrobill\Sdk\Http\Response\GetConsumerResponse;
use Centrobill\Sdk\Http\Response\GetCurrencyExchangeRatesResponse;
use Centrobill\Sdk\Http\Response\GetExchangeRateByIso3Response;
use Centrobill\Sdk\Http\Response\GetListOfExternalIpsResponse;
use Centrobill\Sdk\Http\Response\GetListOfTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\GetProductResponse;
use Centrobill\Sdk\Http\Response\GetSiteResponse;
use Centrobill\Sdk\Http\Response\GetSubscriptionResponse;
use Centrobill\Sdk\Http\Response\GetTestPaymentDataByIdResponse;
use Centrobill\Sdk\Http\Response\IpnResponse;
use Centrobill\Sdk\Http\Response\ListPaymentAccountIDsByConsumerIdResponse;
use Centrobill\Sdk\Http\Response\NotEmulate3DsForTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\PayoutResponse;
use Centrobill\Sdk\Http\Response\PayResponse;
use Centrobill\Sdk\Http\Response\RecoverSubscriptionResponse;
use Centrobill\Sdk\Http\Response\ResponseFactory;
use Centrobill\Sdk\Http\Response\ResponseInterface;
use Centrobill\Sdk\Http\Response\SendMessageWithVerificationCodeResponse;
use Centrobill\Sdk\Http\Response\UnblockTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\UpdateAllowedIPsResponse;
use Centrobill\Sdk\Http\Response\UpdateBalanceOfTheTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\UpdateProductResponse;
use Centrobill\Sdk\Http\Response\UpdateSiteResponse;
use Centrobill\Sdk\ValueObject\ApiKey;
use GuzzleHttp\ClientInterface as HttpClientInterface;
use GuzzleHttp\Exception\ClientException as GuzzleClientException;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;

class Client implements ClientInterface
{
    public const USER_AGENT = 'Centrobill SDK HTTP Client';

    public const HEADER_USER_AGENT = 'User-Agent';

    private HttpClientInterface $client;

    private ApiKey $apiKey;

    public function __construct(
        HttpClientInterface $client,
        ApiKey $apiKey
    ) {
        $this->client = $client;
        $this->apiKey = $apiKey;
    }

    public function getApiKey(): ApiKey
    {
        return $this->apiKey;
    }

    /**
     * @param GenerateCardDataTokenRequest $request
     * @return GenerateCardDataTokenResponse|ErrorResponse
     */
    public function generateCardDataToken(GenerateCardDataTokenRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GenerateCardDataTokenUsingPaymentAccountIdRequest $request
     * @return GenerateCardDataTokenUsingPaymentAccountIdResponse|ErrorResponse
     */
    public function generateCardDataTokenUsingPaymentAccountId(
        GenerateCardDataTokenUsingPaymentAccountIdRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param PayRequest $request
     * @return PayResponse|ErrorResponse
     */
    public function pay(PayRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GenerateUrlToPaymentPageRequest $request
     * @return GenerateUrlToPaymentPageResponse|ErrorResponse
     */
    public function generateUrlToPaymentPage(
        GenerateUrlToPaymentPageRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param CreditRequest $request
     * @return CreditResponse|ErrorResponse
     */
    public function credit(CreditRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param PayoutRequest $request
     * @return PayoutResponse|ErrorResponse
     */
    public function payout(PayoutRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GetSubscriptionRequest $request
     * @return GetSubscriptionResponse|ErrorResponse
     */
    public function getSubscription(GetSubscriptionRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param ChangeSubscriptionRequest $request
     * @return ChangeSubscriptionResponse|ErrorResponse
     */
    public function changeSubscription(ChangeSubscriptionRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param CancelSubscriptionRequest $request
     * @return CancelSubscriptionResponse|ErrorResponse
     */
    public function cancelSubscription(CancelSubscriptionRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param RecoverSubscriptionRequest $request
     * @return RecoverSubscriptionResponse|ErrorResponse
     */
    public function recoverSubscription(RecoverSubscriptionRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param CreateSiteRequest $request
     * @return CreateSiteResponse|ErrorResponse
     */
    public function createSite(CreateSiteRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GetSiteRequest $request
     * @return GetSiteResponse|ErrorResponse
     */
    public function getSite(GetSiteRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param UpdateSiteRequest $request
     * @return UpdateSiteResponse|ErrorResponse
     */
    public function updateSite(UpdateSiteRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param CreateProductRequest $request
     * @return CreateProductResponse|ErrorResponse
     */
    public function createProduct(CreateProductRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GetProductRequest $request
     * @return GetProductResponse|ErrorResponse
     */
    public function getProduct(GetProductRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param UpdateProductRequest $request
     * @return UpdateProductResponse|ErrorResponse
     */
    public function updateProduct(UpdateProductRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param CreateConsumerRequest $request
     * @return CreateConsumerResponse|ErrorResponse
     */
    public function createConsumer(CreateConsumerRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GetConsumerRequest $request
     * @return GetConsumerResponse|ErrorResponse
     */
    public function getConsumer(GetConsumerRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param ChangeConsumerGroupRequest $request
     * @return ChangeConsumerGroupResponse|ErrorResponse
     */
    public function changeConsumerGroup(ChangeConsumerGroupRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GetListOfExternalIpsRequest $request
     * @return GetListOfExternalIpsResponse|ErrorResponse
     */
    public function getListOfExternalIps(GetListOfExternalIpsRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GetTestPaymentDataByIdRequest $request
     * @return GetTestPaymentDataByIdResponse|ErrorResponse
     */
    public function getTestPaymentDataById(
        GetTestPaymentDataByIdRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param DeleteTestPaymentDataByIDRequest $request
     * @return DeleteTestPaymentDataByIDResponse|ErrorResponse
     */
    public function deleteTestPaymentDataByID(
        DeleteTestPaymentDataByIDRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param UpdateBalanceOfTheTestPaymentDataRequest $request
     * @return UpdateBalanceOfTheTestPaymentDataResponse|ErrorResponse
     */
    public function updateBalanceOfTheTestPaymentData(
        UpdateBalanceOfTheTestPaymentDataRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param CreateTestPaymentDataRequest $request
     * @return CreateTestPaymentDataResponse|ErrorResponse
     */
    public function createTestPaymentData(CreateTestPaymentDataRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    // getlistoftestpaymentdata
    /**
     * @param GetListOfTestPaymentDataRequest $request
     * @return GetListOfTestPaymentDataResponse|ErrorResponse
     */
    public function getListOfTestPaymentData(GetListOfTestPaymentDataRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param BlockTestPaymentDataRequest $request
     * @return BlockTestPaymentDataResponse|ErrorResponse
     */
    public function blockTestPaymentData(BlockTestPaymentDataRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param UnblockTestPaymentDataRequest $request
     * @return UnblockTestPaymentDataResponse|ErrorResponse
     */
    public function unblockTestPaymentData(UnblockTestPaymentDataRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param Emulate3DsForTestPaymentDataRequest $request
     * @return Emulate3DsForTestPaymentDataResponse|ErrorResponse
     */
    public function emulate3DsForTestPaymentData(
        Emulate3DsForTestPaymentDataRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param NotEmulate3DsForTestPaymentDataRequest $request
     * @return NotEmulate3DsForTestPaymentDataResponse|ErrorResponse
     */
    public function notEmulate3DsForTestPaymentData(
        NotEmulate3DsForTestPaymentDataRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param GetAvailableChannelsOfCodeVerificationRequest $request
     * @return GetAvailableChannelsOfCodeVerificationResponse|ErrorResponse
     */
    public function getAvailableChannelsOfCodeVerification(
        GetAvailableChannelsOfCodeVerificationRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param SendMessageWithVerificationCodeRequest $request
     * @return SendMessageWithVerificationCodeResponse|ErrorResponse
     */
    public function sendMessageWithVerificationCode(
        SendMessageWithVerificationCodeRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param CheckVerificationCodeRequest $request
     * @return CheckVerificationCodeResponse|ErrorResponse
     */
    public function checkVerificationCode(CheckVerificationCodeRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GetCurrencyExchangeRatesRequest $request
     * @return GetCurrencyExchangeRatesResponse|ErrorResponse
     */
    public function getCurrencyExchangeRates(
        GetCurrencyExchangeRatesRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param GetExchangeRateByIso3Request $request
     * @return GetExchangeRateByIso3Response|ErrorResponse
     */
    public function getExchangeRateByIso3(GetExchangeRateByIso3Request $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param GetChargebackIdRepaidLinkRequest $request
     * @return GetChargebackIdRepaidLinkResponse|ErrorResponse
     */
    public function getChargebackIdRepaidLink(
        GetChargebackIdRepaidLinkRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param UpdateAllowedIPsRequest $request
     * @return UpdateAllowedIPsResponse|ErrorResponse
     */
    public function updateAllowedIPs(UpdateAllowedIPsRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    /**
     * @param ListPaymentAccountIDsByConsumerIdRequest $request
     * @return ListPaymentAccountIDsByConsumerIdResponse|ErrorResponse
     */
    public function listPaymentAccountIdsByConsumerId(
        ListPaymentAccountIDsByConsumerIdRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param ChangePaymentAccountForSubscriptionRequest $request
     * @return ChangePaymentAccountForSubscriptionResponse|ErrorResponse
     */
    public function changePaymentAccountForSubscription(
        ChangePaymentAccountForSubscriptionRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param DisablePaymentAccountForQuickSaleRequest $request
     * @return DisablePaymentAccountForQuickSaleResponse|ErrorResponse
     */
    public function disablePaymentAccountForQuickSale(
        DisablePaymentAccountForQuickSaleRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param EnablePaymentAccountForQuickSaleRequest $request
     * @return EnablePaymentAccountForQuickSaleResponse|ErrorResponse
     */
    public function enablePaymentAccountForQuickSale(
        EnablePaymentAccountForQuickSaleRequest $request
    ): ResponseInterface {
        return $this->request($request);
    }

    /**
     * @param GetApplePaySessionRequest $request
     * @return GetApplePaySessionResponse|ErrorResponse
     */
    public function getApplePaySession(GetApplePaySessionRequest $request): ResponseInterface
    {
        return $this->request($request);
    }

    public function parseIpnPayload(string $payload): IpnResponse
    {
        return new IpnResponse(Utils::jsonDecode($payload));
    }

    private function request(RequestInterface $request): ResponseInterface
    {
        try {
            $response = $this->client->request(
                $request->getHttpMethod(),
                $request->getUri(),
                [
                    RequestOptions::HEADERS => $this->getHeaders($request),
                    $this->getParametersKey($request) => $request->getPayload()
                ]
            );

            return ResponseFactory::createResponse($request, $response);
        } catch (GuzzleClientException $e) {
            return ResponseFactory::createResponse($request, $e->getResponse());
        }
    }

    private function getParametersKey(RequestInterface $request): string
    {
        if (
            in_array(
                $request->getHttpMethod(),
                [
                RequestInterface::HTTP_METHOD_GET,
                RequestInterface::HTTP_METHOD_DELETE
                ]
            )
        ) {
            return RequestOptions::QUERY;
        } elseif (
            in_array(
                $request->getHttpMethod(),
                [
                RequestInterface::HTTP_METHOD_POST,
                RequestInterface::HTTP_METHOD_PUT
                ]
            )
        ) {
            return RequestOptions::JSON;
        }

        return RequestOptions::JSON;
    }

    private function getHeaders(RequestInterface $request): array
    {
        return [
            'Accept' => 'application/json',
            'Authorization' => (string)$this->apiKey,
            self::HEADER_USER_AGENT => self::USER_AGENT,
        ] + $request->getHeaders();
    }
}
