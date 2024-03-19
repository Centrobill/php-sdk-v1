<?php

namespace Centrobill\Sdk;

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

interface ClientInterface
{
    /**
     * @param GenerateCardDataTokenRequest $request
     * @return GenerateCardDataTokenResponse
     */
    public function generateCardDataToken(GenerateCardDataTokenRequest $request): GenerateCardDataTokenResponse;

    /**
     * @param GenerateCardDataTokenUsingPaymentAccountIdRequest $request
     * @return GenerateCardDataTokenUsingPaymentAccountIdResponse
     */
    public function generateCardDataTokenUsingPaymentAccountId(
        GenerateCardDataTokenUsingPaymentAccountIdRequest $request,
    ): GenerateCardDataTokenUsingPaymentAccountIdResponse;

    /**
     * @param PayRequest $request
     * @return PayResponse
     */
    public function pay(PayRequest $request): PayResponse;

    /**
     * @param GenerateUrlToPaymentPageRequest $request
     * @return GenerateUrlToPaymentPageResponse
     */
    public function generateUrlToPaymentPage(
        GenerateUrlToPaymentPageRequest $request,
    ): GenerateUrlToPaymentPageResponse;

    /**
     * @param CreditRequest $request
     * @return CreditResponse
     */
    public function credit(CreditRequest $request): CreditResponse;

    /**
     * @param PayoutRequest $request
     * @return PayoutResponse
     */
    public function payout(PayoutRequest $request): PayoutResponse;

    /**
     * @param ChangeSubscriptionRequest $request
     * @return ChangeSubscriptionResponse
     */
    public function changeSubscription(ChangeSubscriptionRequest $request): ChangeSubscriptionResponse;

    /**
     * @param CancelSubscriptionRequest $request
     * @return CancelSubscriptionResponse
     */
    public function cancelSubscription(CancelSubscriptionRequest $request): CancelSubscriptionResponse;

    /**
     * @param RecoverSubscriptionRequest $request
     * @return RecoverSubscriptionResponse
     */
    public function recoverSubscription(RecoverSubscriptionRequest $request): RecoverSubscriptionResponse;

    /**
     * @param CreateSiteRequest $request
     * @return CreateSiteResponse
     */
    public function createSite(CreateSiteRequest $request): CreateSiteResponse;

    /**
     * @param UpdateSiteRequest $request
     * @return UpdateSiteResponse
     */
    public function updateSite(UpdateSiteRequest $request): UpdateSiteResponse;

    /**
     * @param CreateProductRequest $request
     * @return CreateProductResponse
     */
    public function createProduct(CreateProductRequest $request): CreateProductResponse;

    /**
     * @param UpdateProductRequest $request
     * @return UpdateProductResponse
     */
    public function updateProduct(UpdateProductRequest $request): UpdateProductResponse;

    /**
     * @param CreateConsumerRequest $request
     * @return CreateConsumerResponse
     */
    public function createConsumer(CreateConsumerRequest $request): CreateConsumerResponse;

    /**
     * @param ChangeConsumerGroupRequest $request
     * @return ChangeConsumerGroupResponse
     */
    public function changeConsumerGroup(ChangeConsumerGroupRequest $request): ChangeConsumerGroupResponse;

    /**
     * @param GetListOfExternalIpsRequest $request
     * @return GetListOfExternalIpsResponse
     */
    public function getListOfExternalIps(GetListOfExternalIpsRequest $request): GetListOfExternalIpsResponse;

    /**
     * @param DeleteTestPaymentDataByIDRequest $request
     * @return DeleteTestPaymentDataByIDResponse
     */
    public function deleteTestPaymentDataByID(
        DeleteTestPaymentDataByIDRequest $request,
    ): DeleteTestPaymentDataByIDResponse;

    /**
     * @param UpdateBalanceOfTheTestPaymentDataRequest $request
     * @return UpdateBalanceOfTheTestPaymentDataResponse
     */
    public function updateBalanceOfTheTestPaymentData(
        UpdateBalanceOfTheTestPaymentDataRequest $request,
    ): UpdateBalanceOfTheTestPaymentDataResponse;

    /**
     * @param CreateTestPaymentDataRequest $request
     * @return CreateTestPaymentDataResponse
     */
    public function createTestPaymentData(CreateTestPaymentDataRequest $request): CreateTestPaymentDataResponse;

    /**
     * @param BlockTestPaymentDataRequest $request
     * @return BlockTestPaymentDataResponse
     */
    public function blockTestPaymentData(BlockTestPaymentDataRequest $request): BlockTestPaymentDataResponse;

    /**
     * @param UnblockTestPaymentDataRequest $request
     * @return UnblockTestPaymentDataResponse
     */
    public function unblockTestPaymentData(UnblockTestPaymentDataRequest $request): UnblockTestPaymentDataResponse;

    /**
     * @param Emulate3DsForTestPaymentDataRequest $request
     * @return Emulate3DsForTestPaymentDataResponse
     */
    public function emulate3DsForTestPaymentData(
        Emulate3DsForTestPaymentDataRequest $request,
    ): Emulate3DsForTestPaymentDataResponse;

    /**
     * @param NotEmulate3DsForTestPaymentDataRequest $request
     * @return NotEmulate3DsForTestPaymentDataResponse
     */
    public function notEmulate3DsForTestPaymentData(
        NotEmulate3DsForTestPaymentDataRequest $request,
    ): NotEmulate3DsForTestPaymentDataResponse;

    /**
     * @param GetAvailableChannelsOfCodeVerificationRequest $request
     * @return GetAvailableChannelsOfCodeVerificationResponse
     */
    public function getAvailableChannelsOfCodeVerification(
        GetAvailableChannelsOfCodeVerificationRequest $request,
    ): GetAvailableChannelsOfCodeVerificationResponse;

    /**
     * @param SendMessageWithVerificationCodeRequest $request
     * @return SendMessageWithVerificationCodeResponse
     */
    public function sendMessageWithVerificationCode(
        SendMessageWithVerificationCodeRequest $request,
    ): SendMessageWithVerificationCodeResponse;

    /**
     * @param CheckVerificationCodeRequest $request
     * @return CheckVerificationCodeResponse
     */
    public function checkVerificationCode(CheckVerificationCodeRequest $request): CheckVerificationCodeResponse;

    /**
     * @param GetCurrencyExchangeRatesRequest $request
     * @return GetCurrencyExchangeRatesResponse
     */
    public function getCurrencyExchangeRates(
        GetCurrencyExchangeRatesRequest $request,
    ): GetCurrencyExchangeRatesResponse;

    /**
     * @param GetExchangeRateByIso3Request $request
     * @return GetExchangeRateByIso3Response
     */
    public function getExchangeRateByIso3(GetExchangeRateByIso3Request $request): GetExchangeRateByIso3Response;

    /**
     * @param GetChargebackIdRepaidLinkRequest $request
     * @return GetChargebackIdRepaidLinkResponse
     */
    public function getChargebackIdRepaidLink(
        GetChargebackIdRepaidLinkRequest $request,
    ): GetChargebackIdRepaidLinkResponse;

    /**
     * @param UpdateAllowedIPsRequest $request
     * @return UpdateAllowedIPsResponse
     */
    public function updateAllowedIPs(UpdateAllowedIPsRequest $request): UpdateAllowedIPsResponse;

    /**
     * @param ListPaymentaccountIDsByConsumerIdRequest $request
     * @return ListPaymentaccountIDsByConsumerIdResponse
     */
    public function listPaymentaccountIDsByConsumerId(
        ListPaymentaccountIDsByConsumerIdRequest $request,
    ): ListPaymentaccountIDsByConsumerIdResponse;

    /**
     * @param ChangePaymentAccountForsubscriptionRequest $request
     * @return ChangePaymentAccountForsubscriptionResponse
     */
    public function changePaymentAccountForsubscription(
        ChangePaymentAccountForsubscriptionRequest $request,
    ): ChangePaymentAccountForsubscriptionResponse;

    /**
     * @param DisablePaymentAccountForQuickSaleRequest $request
     * @return DisablePaymentAccountForQuickSaleResponse
     */
    public function disablePaymentAccountForQuickSale(
        DisablePaymentAccountForQuickSaleRequest $request,
    ): DisablePaymentAccountForQuickSaleResponse;

    /**
     * @param EnablePaymentAccountForQuickSaleRequest $request
     * @return EnablePaymentAccountForQuickSaleResponse
     */
    public function enablePaymentAccountForQuickSale(
        EnablePaymentAccountForQuickSaleRequest $request,
    ): EnablePaymentAccountForQuickSaleResponse;

    /**
     * @param GetApplePaySessionRequest $request
     * @return GetApplePaySessionResponse
     */
    public function getApplePaySession(GetApplePaySessionRequest $request): GetApplePaySessionResponse;
}
