<?php

namespace SellerWorks\Amazon\Feeds\Serializer;

use UnexpectedValueException;

use SellerWorks\Amazon\Common\RequestInterface;
use SellerWorks\Amazon\Common\SerializerInterface;
use SellerWorks\Amazon\Common\Serializer\Serializer as BaseSerializer;
use SellerWorks\Amazon\Feeds\Request;

/**
 * Request Serializer / Response Deserializer.
 */
final class Serializer extends BaseSerializer implements SerializerInterface
{
    /**
     * @var Sabre\Xml\Service
     */
    private $xmlDeserializer;

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
            case $request instanceof Request\SubmitFeedRequest:
                $action = 'SubmitFeed';
                break;

            case $request instanceof Request\GetFeedSubmissionListRequest:
                $action = 'GetFeedSubmissionList';
                break;

            case $request instanceof Request\GetFeedSubmissionListByNextTokenRequest:
                $action = 'GetFeedSubmissionListByNextToken';
                break;

            case $request instanceof Request\GetFeedSubmissionCountRequest:
                $action = 'GetFeedSubmissionCount';
                break;

            case $request instanceof Request\CancelFeedSubmissionsRequest:
                $action = 'CancelFeedSubmissions';
                break;

            case $request instanceof Request\GetFeedSubmissionResultRequest:
                $action = 'GetFeedSubmissionResult';
                break;

            default:
                throw new UnexpectedValueException(get_class($request) . ' is not supported.');
        }

        return $this->serializeProperties($action, $request);
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($response)
    {
        return $this->xmlDeserializer->parse($response);
    }
}
