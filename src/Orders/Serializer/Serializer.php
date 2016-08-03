<?php

namespace SellerWorks\Amazon\Orders\Serializer;

use SellerWorks\Amazon\Common\RequestInterface;
use SellerWorks\Amazon\Common\Request\GetServiceStatusRequest;
use SellerWorks\Amazon\Common\SerializerInterface;
use UnexpectedValueException;

/**
 * FulfillmentInboundShipment serializer.
 *
 * Premature optimization? I think not!
 */
class Serializer implements SerializerInterface
{
    /**
     * @var Sabre\Xml\Service
     */
    protected $xmlDeserializer;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->xmlDeserializer = new XmlDeserializer;
    }

    /**
     * {@inheritDoc}
     */
    public function serialize(RequestInterface $request)
    {
        // Validate request is valid type and set action.
        switch (true) {
            case $request instanceof GetServiceStatusRequest:
                return $this->serializeGetServiceStatus($request);

            default:
                throw new UnexpectedValueException(getType($request) . ' is not supported.');
        }
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($response)
    {
        return $this->xmlDeserializer->parse($response);
    }

    /**
     * Serialize GetServiceStatus
     *
     * @param  GetServiceStatusRequest  $request
     * @return array
     */
    protected function serializeGetServiceStatus(GetServiceStatusRequest $request)
    {
        $array = ['Action' => 'GetServiceStatus'];

        return $array;
    }
}