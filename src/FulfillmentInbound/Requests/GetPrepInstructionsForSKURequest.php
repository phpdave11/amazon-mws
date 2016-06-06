<?php

declare(strict_types=1);

namespace SellerWorks\Amazon\MWS\FulfillmentInbound\Requests;

use SellerWorks\Amazon\MWS\Common\RequestInterface;

/**
 * Returns labeling requirements and item preparation instructions to help you prepare items for an inbound shipment.
 *
 * @see http://docs.developer.amazonservices.com/en_US/fba_inbound/FBAInbound_GetPrepInstructionsForSKU.html
 */
final class GetPrepInstructionsForSKURequest implements RequestInterface
{
	/**
	 * @var string
	 */
	public $SellerSKUList;

	/**
	 * @var string
	 */
	public $ShipToCountryCode;
}