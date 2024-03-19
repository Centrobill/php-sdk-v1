<?php

namespace Centrobill\Sdk;

use Centrobill\Sdk\Exception\ClientException;
use Centrobill\Sdk\Http\Request\BlockTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\CancelSubscriptionRequest;
use Centrobill\Sdk\Http\Request\ChangeConsumerGroupRequest;
use Centrobill\Sdk\Http\Request\ChangePaymentAccountForsubscriptionRequest;
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
use Centrobill\Sdk\Http\Request\GetCurrencyExchangeRatesRequest;
use Centrobill\Sdk\Http\Request\GetExchangeRateByIso3Request;
use Centrobill\Sdk\Http\Request\GetListOfExternalIpsRequest;
use Centrobill\Sdk\Http\Request\ListPaymentaccountIDsByConsumerIdRequest;
use Centrobill\Sdk\Http\Request\NotEmulate3DsForTestPaymentDataRequest;
use Centrobill\Sdk\Http\Request\PayRequest;
use Centrobill\Sdk\Http\Request\PayoutRequest;
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
use Centrobill\Sdk\Http\Response\ChangePaymentAccountForsubscriptionResponse;
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
use Centrobill\Sdk\Http\Response\GenerateCardDataTokenResponse;
use Centrobill\Sdk\Http\Response\GenerateCardDataTokenUsingPaymentAccountIdResponse;
use Centrobill\Sdk\Http\Response\GenerateUrlToPaymentPageResponse;
use Centrobill\Sdk\Http\Response\GetApplePaySessionResponse;
use Centrobill\Sdk\Http\Response\GetAvailableChannelsOfCodeVerificationResponse;
use Centrobill\Sdk\Http\Response\GetChargebackIdRepaidLinkResponse;
use Centrobill\Sdk\Http\Response\GetCurrencyExchangeRatesResponse;
use Centrobill\Sdk\Http\Response\GetExchangeRateByIso3Response;
use Centrobill\Sdk\Http\Response\GetListOfExternalIpsResponse;
use Centrobill\Sdk\Http\Response\ListPaymentaccountIDsByConsumerIdResponse;
use Centrobill\Sdk\Http\Response\NotEmulate3DsForTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\PayResponse;
use Centrobill\Sdk\Http\Response\PayoutResponse;
use Centrobill\Sdk\Http\Response\RecoverSubscriptionResponse;
use Centrobill\Sdk\Http\Response\SendMessageWithVerificationCodeResponse;
use Centrobill\Sdk\Http\Response\UnblockTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\UpdateAllowedIPsResponse;
use Centrobill\Sdk\Http\Response\UpdateBalanceOfTheTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\UpdateProductResponse;
use Centrobill\Sdk\Http\Response\UpdateSiteResponse;
use GuzzleHttp\ClientInterface as HttpClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use stdClass;

class Client implements ClientInterface
{
    public const USER_AGENT = 'Centrobill SDK HTTP Client';

    public const HEADER_USER_AGENT = 'User-Agent';

    private HttpClientInterface $client;

    private array $historyContainer;

    public function __construct(
        HttpClientInterface $client,
        array $historyContainer
     ) {
        $this->client = $client;
        $this->historyContainer = $historyContainer;
    }

    /**
     * @param GenerateCardDataTokenRequest $request
     * @return GenerateCardDataTokenResponse
     */
    public function generateCardDataToken(GenerateCardDataTokenRequest $request): GenerateCardDataTokenResponse
    {
        return new GenerateCardDataTokenResponse($this->request($request));
    }

    /**
     * @param GenerateCardDataTokenUsingPaymentAccountIdRequest $request
     * @return GenerateCardDataTokenUsingPaymentAccountIdResponse
     */
    public function generateCardDataTokenUsingPaymentAccountId(
        GenerateCardDataTokenUsingPaymentAccountIdRequest $request,
    ): GenerateCardDataTokenUsingPaymentAccountIdResponse
    {
        return new GenerateCardDataTokenUsingPaymentAccountIdResponse($this->request($request));
    }

    /**
     * @param PayRequest $request
     * @return PayResponse
     */
    public function pay(PayRequest $request): PayResponse
    {
        return new PayResponse($this->request($request));
    }

    /**
     * @param GenerateUrlToPaymentPageRequest $request
     * @return GenerateUrlToPaymentPageResponse
     */
    public function generateUrlToPaymentPage(
        GenerateUrlToPaymentPageRequest $request,
    ): GenerateUrlToPaymentPageResponse
    {
        return new GenerateUrlToPaymentPageResponse($this->request($request));
    }

    /**
     * @param CreditRequest $request
     * @return CreditResponse
     */
    public function credit(CreditRequest $request): CreditResponse
    {
        return new CreditResponse($this->request($request));
    }

    /**
     * @param PayoutRequest $request
     * @return PayoutResponse
     */
    public function payout(PayoutRequest $request): PayoutResponse
    {
        return new PayoutResponse($this->request($request));
    }

    /**
     * @param ChangeSubscriptionRequest $request
     * @return ChangeSubscriptionResponse
     */
    public function changeSubscription(ChangeSubscriptionRequest $request): ChangeSubscriptionResponse
    {
        return new ChangeSubscriptionResponse($this->request($request));
    }

    /**
     * @param CancelSubscriptionRequest $request
     * @return CancelSubscriptionResponse
     */
    public function cancelSubscription(CancelSubscriptionRequest $request): CancelSubscriptionResponse
    {
        return new CancelSubscriptionResponse($this->request($request));
    }

    /**
     * @param RecoverSubscriptionRequest $request
     * @return RecoverSubscriptionResponse
     */
    public function recoverSubscription(RecoverSubscriptionRequest $request): RecoverSubscriptionResponse
    {
        return new RecoverSubscriptionResponse($this->request($request));
    }

    /**
     * @param CreateSiteRequest $request
     * @return CreateSiteResponse
     */
    public function createSite(CreateSiteRequest $request): CreateSiteResponse
    {
        return new CreateSiteResponse($this->request($request));
    }

    /**
     * @param UpdateSiteRequest $request
     * @return UpdateSiteResponse
     */
    public function updateSite(UpdateSiteRequest $request): UpdateSiteResponse
    {
        return new UpdateSiteResponse($this->request($request));
    }

    /**
     * @param CreateProductRequest $request
     * @return CreateProductResponse
     */
    public function createProduct(CreateProductRequest $request): CreateProductResponse
    {
        return new CreateProductResponse($this->request($request));
    }

    /**
     * @param UpdateProductRequest $request
     * @return UpdateProductResponse
     */
    public function updateProduct(UpdateProductRequest $request): UpdateProductResponse
    {
        return new UpdateProductResponse($this->request($request));
    }

    /**
     * @param CreateConsumerRequest $request
     * @return CreateConsumerResponse
     */
    public function createConsumer(CreateConsumerRequest $request): CreateConsumerResponse
    {
        return new CreateConsumerResponse($this->request($request));
    }

    /**
     * @param ChangeConsumerGroupRequest $request
     * @return ChangeConsumerGroupResponse
     */
    public function changeConsumerGroup(ChangeConsumerGroupRequest $request): ChangeConsumerGroupResponse
    {
        return new ChangeConsumerGroupResponse($this->request($request));
    }

    /**
     * @param GetListOfExternalIpsRequest $request
     * @return GetListOfExternalIpsResponse
     */
    public function getListOfExternalIps(GetListOfExternalIpsRequest $request): GetListOfExternalIpsResponse
    {
        return new GetListOfExternalIpsResponse($this->request($request));
    }

    /**
     * @param DeleteTestPaymentDataByIDRequest $request
     * @return DeleteTestPaymentDataByIDResponse
     */
    public function deleteTestPaymentDataByID(
        DeleteTestPaymentDataByIDRequest $request,
    ): DeleteTestPaymentDataByIDResponse
    {
        return new DeleteTestPaymentDataByIDResponse($this->request($request));
    }

    /**
     * @param UpdateBalanceOfTheTestPaymentDataRequest $request
     * @return UpdateBalanceOfTheTestPaymentDataResponse
     */
    public function updateBalanceOfTheTestPaymentData(
        UpdateBalanceOfTheTestPaymentDataRequest $request,
    ): UpdateBalanceOfTheTestPaymentDataResponse
    {
        return new UpdateBalanceOfTheTestPaymentDataResponse($this->request($request));
    }

    /**
     * @param CreateTestPaymentDataRequest $request
     * @return CreateTestPaymentDataResponse
     */
    public function createTestPaymentData(CreateTestPaymentDataRequest $request): CreateTestPaymentDataResponse
    {
        return new CreateTestPaymentDataResponse($this->request($request));
    }

    /**
     * @param BlockTestPaymentDataRequest $request
     * @return BlockTestPaymentDataResponse
     */
    public function blockTestPaymentData(BlockTestPaymentDataRequest $request): BlockTestPaymentDataResponse
    {
        return new BlockTestPaymentDataResponse($this->request($request));
    }

    /**
     * @param UnblockTestPaymentDataRequest $request
     * @return UnblockTestPaymentDataResponse
     */
    public function unblockTestPaymentData(UnblockTestPaymentDataRequest $request): UnblockTestPaymentDataResponse
    {
        return new UnblockTestPaymentDataResponse($this->request($request));
    }

    /**
     * @param Emulate3DsForTestPaymentDataRequest $request
     * @return Emulate3DsForTestPaymentDataResponse
     */
    public function emulate3DsForTestPaymentData(
        Emulate3DsForTestPaymentDataRequest $request,
    ): Emulate3DsForTestPaymentDataResponse
    {
        return new Emulate3DsForTestPaymentDataResponse($this->request($request));
    }

    /**
     * @param NotEmulate3DsForTestPaymentDataRequest $request
     * @return NotEmulate3DsForTestPaymentDataResponse
     */
    public function notEmulate3DsForTestPaymentData(
        NotEmulate3DsForTestPaymentDataRequest $request,
    ): NotEmulate3DsForTestPaymentDataResponse
    {
        return new NotEmulate3DsForTestPaymentDataResponse($this->request($request));
    }

    /**
     * @param GetAvailableChannelsOfCodeVerificationRequest $request
     * @return GetAvailableChannelsOfCodeVerificationResponse
     */
    public function getAvailableChannelsOfCodeVerification(
        GetAvailableChannelsOfCodeVerificationRequest $request,
    ): GetAvailableChannelsOfCodeVerificationResponse
    {
        return new GetAvailableChannelsOfCodeVerificationResponse($this->request($request));
    }

    /**
     * @param SendMessageWithVerificationCodeRequest $request
     * @return SendMessageWithVerificationCodeResponse
     */
    public function sendMessageWithVerificationCode(
        SendMessageWithVerificationCodeRequest $request,
    ): SendMessageWithVerificationCodeResponse
    {
        return new SendMessageWithVerificationCodeResponse($this->request($request));
    }

    /**
     * @param CheckVerificationCodeRequest $request
     * @return CheckVerificationCodeResponse
     */
    public function checkVerificationCode(CheckVerificationCodeRequest $request): CheckVerificationCodeResponse
    {
        return new CheckVerificationCodeResponse($this->request($request));
    }

    /**
     * @param GetCurrencyExchangeRatesRequest $request
     * @return GetCurrencyExchangeRatesResponse
     */
    public function getCurrencyExchangeRates(
        GetCurrencyExchangeRatesRequest $request,
    ): GetCurrencyExchangeRatesResponse
    {
        return new GetCurrencyExchangeRatesResponse($this->request($request));
    }

    /**
     * @param GetExchangeRateByIso3Request $request
     * @return GetExchangeRateByIso3Response
     */
    public function getExchangeRateByIso3(GetExchangeRateByIso3Request $request): GetExchangeRateByIso3Response
    {
        return new GetExchangeRateByIso3Response($this->request($request));
    }

    /**
     * @param GetChargebackIdRepaidLinkRequest $request
     * @return GetChargebackIdRepaidLinkResponse
     */
    public function getChargebackIdRepaidLink(
        GetChargebackIdRepaidLinkRequest $request,
    ): GetChargebackIdRepaidLinkResponse
    {
        return new GetChargebackIdRepaidLinkResponse($this->request($request));
    }

    /**
     * @param UpdateAllowedIPsRequest $request
     * @return UpdateAllowedIPsResponse
     */
    public function updateAllowedIPs(UpdateAllowedIPsRequest $request): UpdateAllowedIPsResponse
    {
        return new UpdateAllowedIPsResponse($this->request($request));
    }

    /**
     * @param ListPaymentaccountIDsByConsumerIdRequest $request
     * @return ListPaymentaccountIDsByConsumerIdResponse
     */
    public function listPaymentaccountIDsByConsumerId(
        ListPaymentaccountIDsByConsumerIdRequest $request,
    ): ListPaymentaccountIDsByConsumerIdResponse
    {
        return new ListPaymentaccountIDsByConsumerIdResponse($this->request($request));
    }

    /**
     * @param ChangePaymentAccountForsubscriptionRequest $request
     * @return ChangePaymentAccountForsubscriptionResponse
     */
    public function changePaymentAccountForsubscription(
        ChangePaymentAccountForsubscriptionRequest $request,
    ): ChangePaymentAccountForsubscriptionResponse
    {
        return new ChangePaymentAccountForsubscriptionResponse($this->request($request));
    }

    /**
     * @param DisablePaymentAccountForQuickSaleRequest $request
     * @return DisablePaymentAccountForQuickSaleResponse
     */
    public function disablePaymentAccountForQuickSale(
        DisablePaymentAccountForQuickSaleRequest $request,
    ): DisablePaymentAccountForQuickSaleResponse
    {
        return new DisablePaymentAccountForQuickSaleResponse($this->request($request));
    }

    /**
     * @param EnablePaymentAccountForQuickSaleRequest $request
     * @return EnablePaymentAccountForQuickSaleResponse
     */
    public function enablePaymentAccountForQuickSale(
        EnablePaymentAccountForQuickSaleRequest $request,
    ): EnablePaymentAccountForQuickSaleResponse
    {
        return new EnablePaymentAccountForQuickSaleResponse($this->request($request));
    }

    /**
     * @param GetApplePaySessionRequest $request
     * @return GetApplePaySessionResponse
     */
    public function getApplePaySession(GetApplePaySessionRequest $request): GetApplePaySessionResponse
    {
        return new GetApplePaySessionResponse($this->request($request));
    }

    private function request(RequestInterface $request): stdClass
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

            return json_decode($response->getBody()->getContents());
        } catch (GuzzleException $e) {
            /** @var \Exception $e */
            throw new ClientException($e->getMessage(), $e);
        }
    }

    private function getParametersKey(RequestInterface $request): string
    {
        return ($request->getHttpMethod() === RequestInterface::HTTP_METHOD_POST) 
            ? RequestOptions::JSON : RequestOptions::QUERY;
    }

    private function getHeaders(RequestInterface $request): array
    {
        return [
            self::HEADER_USER_AGENT => self::USER_AGENT,
        ] + $request->getHeaders();
    }
}
