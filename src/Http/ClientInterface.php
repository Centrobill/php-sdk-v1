<?php

namespace Centrobill\Sdk\Http;

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
use Centrobill\Sdk\Http\Request\PayoutRequest;
use Centrobill\Sdk\Http\Request\PayRequest;
use Centrobill\Sdk\Http\Request\RecoverSubscriptionRequest;
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
use Centrobill\Sdk\Http\Response\PayoutResponse;
use Centrobill\Sdk\Http\Response\PayResponse;
use Centrobill\Sdk\Http\Response\RecoverSubscriptionResponse;
use Centrobill\Sdk\Http\Response\ResponseInterface;
use Centrobill\Sdk\Http\Response\SendMessageWithVerificationCodeResponse;
use Centrobill\Sdk\Http\Response\UnblockTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\UpdateAllowedIPsResponse;
use Centrobill\Sdk\Http\Response\UpdateBalanceOfTheTestPaymentDataResponse;
use Centrobill\Sdk\Http\Response\UpdateProductResponse;
use Centrobill\Sdk\Http\Response\UpdateSiteResponse;

interface ClientInterface
{
    /**
     * @param GenerateCardDataTokenRequest $request
     * @return GenerateCardDataTokenResponse|ErrorResponse
     */
    public function generateCardDataToken(GenerateCardDataTokenRequest $request): ResponseInterface;

    /**
     * @param GenerateCardDataTokenUsingPaymentAccountIdRequest $request
     * @return GenerateCardDataTokenUsingPaymentAccountIdResponse|ErrorResponse
     */
    public function generateCardDataTokenUsingPaymentAccountId(
        GenerateCardDataTokenUsingPaymentAccountIdRequest $request
    ): ResponseInterface;

    /**
     * @param PayRequest $request
     * @return PayResponse|ErrorResponse
     */
    public function pay(PayRequest $request): ResponseInterface;

    /**
     * @param GenerateUrlToPaymentPageRequest $request
     * @return GenerateUrlToPaymentPageResponse|ErrorResponse
     */
    public function generateUrlToPaymentPage(
        GenerateUrlToPaymentPageRequest $request
    ): ResponseInterface;

    /**
     * @param CreditRequest $request
     * @return CreditResponse|ErrorResponse
     */
    public function credit(CreditRequest $request): ResponseInterface;

    /**
     * @param PayoutRequest $request
     * @return PayoutResponse|ErrorResponse
     */
    public function payout(PayoutRequest $request): ResponseInterface;

    /**
     * @param ChangeSubscriptionRequest $request
     * @return ChangeSubscriptionResponse|ErrorResponse
     */
    public function changeSubscription(ChangeSubscriptionRequest $request): ResponseInterface;

    /**
     * @param CancelSubscriptionRequest $request
     * @return CancelSubscriptionResponse|ErrorResponse
     */
    public function cancelSubscription(CancelSubscriptionRequest $request): ResponseInterface;

    /**
     * @param RecoverSubscriptionRequest $request
     * @return RecoverSubscriptionResponse|ErrorResponse
     */
    public function recoverSubscription(RecoverSubscriptionRequest $request): ResponseInterface;

    /**
     * @param CreateSiteRequest $request
     * @return CreateSiteResponse|ErrorResponse
     */
    public function createSite(CreateSiteRequest $request): ResponseInterface;

    /**
     * @param UpdateSiteRequest $request
     * @return UpdateSiteResponse|ErrorResponse
     */
    public function updateSite(UpdateSiteRequest $request): ResponseInterface;

    /**
     * @param CreateProductRequest $request
     * @return CreateProductResponse|ErrorResponse
     */
    public function createProduct(CreateProductRequest $request): ResponseInterface;

    /**
     * @param UpdateProductRequest $request
     * @return UpdateProductResponse|ErrorResponse
     */
    public function updateProduct(UpdateProductRequest $request): ResponseInterface;

    /**
     * @param CreateConsumerRequest $request
     * @return CreateConsumerResponse|ErrorResponse
     */
    public function createConsumer(CreateConsumerRequest $request): ResponseInterface;

    /**
     * @param ChangeConsumerGroupRequest $request
     * @return ChangeConsumerGroupResponse|ErrorResponse
     */
    public function changeConsumerGroup(ChangeConsumerGroupRequest $request): ResponseInterface;

    /**
     * @param GetListOfExternalIpsRequest $request
     * @return GetListOfExternalIpsResponse|ErrorResponse
     */
    public function getListOfExternalIps(GetListOfExternalIpsRequest $request): ResponseInterface;

    /**
     * @param DeleteTestPaymentDataByIDRequest $request
     * @return DeleteTestPaymentDataByIDResponse|ErrorResponse
     */
    public function deleteTestPaymentDataByID(
        DeleteTestPaymentDataByIDRequest $request
    ): ResponseInterface;

    /**
     * @param UpdateBalanceOfTheTestPaymentDataRequest $request
     * @return UpdateBalanceOfTheTestPaymentDataResponse|ErrorResponse
     */
    public function updateBalanceOfTheTestPaymentData(
        UpdateBalanceOfTheTestPaymentDataRequest $request
    ): ResponseInterface;

    /**
     * @param CreateTestPaymentDataRequest $request
     * @return CreateTestPaymentDataResponse|ErrorResponse
     */
    public function createTestPaymentData(CreateTestPaymentDataRequest $request): ResponseInterface;

    /**
     * @param BlockTestPaymentDataRequest $request
     * @return BlockTestPaymentDataResponse|ErrorResponse
     */
    public function blockTestPaymentData(BlockTestPaymentDataRequest $request): ResponseInterface;

    /**
     * @param UnblockTestPaymentDataRequest $request
     * @return UnblockTestPaymentDataResponse|ErrorResponse
     */
    public function unblockTestPaymentData(UnblockTestPaymentDataRequest $request): ResponseInterface;

    /**
     * @param Emulate3DsForTestPaymentDataRequest $request
     * @return Emulate3DsForTestPaymentDataResponse|ErrorResponse
     */
    public function emulate3DsForTestPaymentData(
        Emulate3DsForTestPaymentDataRequest $request
    ): ResponseInterface;

    /**
     * @param NotEmulate3DsForTestPaymentDataRequest $request
     * @return NotEmulate3DsForTestPaymentDataResponse|ErrorResponse
     */
    public function notEmulate3DsForTestPaymentData(
        NotEmulate3DsForTestPaymentDataRequest $request
    ): ResponseInterface;

    /**
     * @param GetAvailableChannelsOfCodeVerificationRequest $request
     * @return GetAvailableChannelsOfCodeVerificationResponse|ErrorResponse
     */
    public function getAvailableChannelsOfCodeVerification(
        GetAvailableChannelsOfCodeVerificationRequest $request
    ): ResponseInterface;

    /**
     * @param SendMessageWithVerificationCodeRequest $request
     * @return SendMessageWithVerificationCodeResponse|ErrorResponse
     */
    public function sendMessageWithVerificationCode(
        SendMessageWithVerificationCodeRequest $request
    ): ResponseInterface;

    /**
     * @param CheckVerificationCodeRequest $request
     * @return CheckVerificationCodeResponse|ErrorResponse
     */
    public function checkVerificationCode(CheckVerificationCodeRequest $request): ResponseInterface;

    /**
     * @param GetCurrencyExchangeRatesRequest $request
     * @return GetCurrencyExchangeRatesResponse|ErrorResponse
     */
    public function getCurrencyExchangeRates(
        GetCurrencyExchangeRatesRequest $request
    ): ResponseInterface;

    /**
     * @param GetExchangeRateByIso3Request $request
     * @return GetExchangeRateByIso3Response|ErrorResponse
     */
    public function getExchangeRateByIso3(GetExchangeRateByIso3Request $request): ResponseInterface;

    /**
     * @param GetChargebackIdRepaidLinkRequest $request
     * @return GetChargebackIdRepaidLinkResponse|ErrorResponse
     */
    public function getChargebackIdRepaidLink(
        GetChargebackIdRepaidLinkRequest $request
    ): ResponseInterface;

    /**
     * @param UpdateAllowedIPsRequest $request
     * @return UpdateAllowedIPsResponse|ErrorResponse
     */
    public function updateAllowedIPs(UpdateAllowedIPsRequest $request): ResponseInterface;

    /**
     * @param ListPaymentaccountIDsByConsumerIdRequest $request
     * @return ListPaymentaccountIDsByConsumerIdResponse|ErrorResponse
     */
    public function listPaymentaccountIDsByConsumerId(
        ListPaymentaccountIDsByConsumerIdRequest $request
    ): ResponseInterface;

    /**
     * @param ChangePaymentAccountForsubscriptionRequest $request
     * @return ChangePaymentAccountForsubscriptionResponse|ErrorResponse
     */
    public function changePaymentAccountForsubscription(
        ChangePaymentAccountForsubscriptionRequest $request
    ): ResponseInterface;

    /**
     * @param DisablePaymentAccountForQuickSaleRequest $request
     * @return DisablePaymentAccountForQuickSaleResponse|ErrorResponse
     */
    public function disablePaymentAccountForQuickSale(
        DisablePaymentAccountForQuickSaleRequest $request
    ): ResponseInterface;

    /**
     * @param EnablePaymentAccountForQuickSaleRequest $request
     * @return EnablePaymentAccountForQuickSaleResponse|ErrorResponse
     */
    public function enablePaymentAccountForQuickSale(
        EnablePaymentAccountForQuickSaleRequest $request
    ): ResponseInterface;

    /**
     * @param GetApplePaySessionRequest $request
     * @return GetApplePaySessionResponse|ErrorResponse
     */
    public function getApplePaySession(GetApplePaySessionRequest $request): ResponseInterface;
}
