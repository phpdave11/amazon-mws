<?php

declare(strict_types=1);

namespace SellerWorks\Amazon\MWS\FulfillmentInbound\Requests;

use SellerWorks\Amazon\MWS\Common\RequestInterface;

/**
 * Returns the next page of inbound shipments using the NextToken parameter.
 *
 * @see http://docs.developer.amazonservices.com/en_US/fba_inbound/FBAInbound_ListInboundShipmentsByNextToken.html
 */
final class ListInboundShipmentsByNextTokenRequest implements RequestInterface
{
    /**
     * @var Array<string>
     */
    public $NextToken;
}