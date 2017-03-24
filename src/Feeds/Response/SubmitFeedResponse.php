<?php

namespace SellerWorks\Amazon\Feeds\Response;

use SellerWorks\Amazon\Common\ResponseInterface;

/**
 * Uploads a feed for processing by Amazon MWS.
 */
final class SubmitFeedResponse implements ResponseInterface
{
    /**
     * @var SubmitFeedResult
     */
    public $SubmitFeedResult;

    /**
     * @var ResponseMetadata
     */
    public $ResponseMetadata;

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {
        return $this->SubmitFeedResult;
    }
}
