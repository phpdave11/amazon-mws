<?php

namespace SellerWorks\Amazon\Feeds\Response;

use SellerWorks\Amazon\Common\ResponseInterface;

/**
 * Cancels one or more feed submissions and returns a count of the feed submissions that were canceled.
 */
final class CancelFeedSubmissionsResponse implements ResponseInterface
{
    /**
     * @var CancelFeedSubmissionsResult
     */
    public $CancelFeedSubmissionsResult;

    /**
     * @var ResponseMetadata
     */
    public $ResponseMetadata;

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {
        return $this->CancelFeedSubmissionsResult;
    }
}
