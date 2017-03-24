<?php

namespace SellerWorks\Amazon\Feeds\Serializer;

use SellerWorks\Amazon\Common\Serializer\XmlDeserializer as BaseXmlDeserializer;
use SellerWorks\Amazon\Feeds\Entity;
use SellerWorks\Amazon\Feeds\Response;
use SellerWorks\Amazon\Feeds\Result;

/**
 * Sabre\Xml\Service element map.
 */
final class XmlDeserializer extends BaseXmlDeserializer
{
    /**
     * @const string
     */
    const NS = 'https://mws.amazonservices.com/Feeds/2009-01-01';

    /**
     * Local element map.
     *
     * @return array
     */
    public function getElementMap()
    {
        $ns = sprintf('{%s}', static::NS);

        return [
            // Response objects.
            "{$ns}CancelFeedSubmissionsResponse"             => $this->mapObject(Response\CancelFeedSubmissionsResponse::class),
            "{$ns}GetFeedSubmissionCountResponse"            => $this->mapObject(Response\GetFeedSubmissionCountResponse::class),
            "{$ns}GetFeedSubmissionListByNextTokenResponse"  => $this->mapObject(Response\GetFeedSubmissionListByNextTokenResponse::class),
            "{$ns}GetFeedSubmissionListResponse"             => $this->mapObject(Response\GetFeedSubmissionListResponse::class),
            "{$ns}GetFeedSubmissionResultResponse"           => $this->mapObject(Response\GetFeedSubmissionResultResponse::class),
            "{$ns}SubmitFeedResponse"                        => $this->mapObject(Response\SubmitFeedResponse::class),

            "{$ns}ErrorResponse"                             => $this->mapObject(Response\ErrorResponse::class),

            // Result objects.
            "{$ns}CancelFeedSubmissionsResult"               => $this->mapObject(Result\CancelFeedSubmissionsResult::class),
            "{$ns}GetFeedSubmissionCountResult"              => $this->mapObject(Result\GetFeedSubmissionCountResult::class),
            "{$ns}GetFeedSubmissionListResult"               => $this->mapObject(Result\GetFeedSubmissionListResult::class),
            "{$ns}GetFeedSubmissionResultResult"             => $this->mapObject(Result\GetFeedSubmissionResultResult::class),
            "{$ns}SubmitFeedResult"                          => $this->mapObject(Result\SubmitFeedResult::class),

            "{$ns}Error"                                     => $this->mapObject(Result\Error::class),

/*
            // Collection objects.
            "{$ns}Orders"                            => $this->mapCollection("{$ns}Order", Entity\Order::class),
            "{$ns}OrderItems"                        => $this->mapCollection("{$ns}OrderItem", Entity\OrderItem::class),
            "{$ns}PaymentExecutionDetail"            => $this->mapList("{$ns}PaymentExecutionDetailItem"),
            "{$ns}PromotionIds"                      => $this->mapList("{$ns}PromotionId"),

            // Entity objects.
            "{$ns}BuyerCustomizedInfo"               => $this->mapObject(Entity\BuyerCustomizedInfo::class),
            "{$ns}InvoiceData"                       => $this->mapObject(Entity\InvoiceData::class),
            "{$ns}Order"                             => $this->mapObject(Entity\Order::class),
            "{$ns}OrderItem"                         => $this->mapObject(Entity\OrderItem::class),
            "{$ns}PaymentExecutionDetailItem"        => $this->mapObject(Entity\PaymentExecutionDetailItem::class),
            "{$ns}PointsGranted"                     => $this->mapObject(Entity\PointsGranted::class),
            "{$ns}ResponseMetadata"                  => $this->mapObject(Entity\ResponseMetadata::class),
            "{$ns}ShippingAddress"                   => $this->mapObject(Entity\Address::class),

            "{$ns}CODFee"                            => $this->mapObject(Entity\Money::class),
            "{$ns}CODFeeDiscount"                    => $this->mapObject(Entity\Money::class),
            "{$ns}GiftWrapPrice"                     => $this->mapObject(Entity\Money::class),
            "{$ns}GiftWrapTax"                       => $this->mapObject(Entity\Money::class),
            "{$ns}ItemPrice"                         => $this->mapObject(Entity\Money::class),
            "{$ns}ItemTax"                           => $this->mapObject(Entity\Money::class),
            "{$ns}OrderTotal"                        => $this->mapObject(Entity\Money::class),
            "{$ns}Payment"                           => $this->mapObject(Entity\Money::class),
            "{$ns}PointsMonetaryValue"               => $this->mapObject(Entity\Money::class),
            "{$ns}PromotionDiscount"                 => $this->mapObject(Entity\Money::class),
            "{$ns}ShippingDiscount"                  => $this->mapObject(Entity\Money::class),
            "{$ns}ShippingPrice"                     => $this->mapObject(Entity\Money::class),
            "{$ns}ShippingTax"                       => $this->mapObject(Entity\Money::class),
*/
        ];
    }
}
