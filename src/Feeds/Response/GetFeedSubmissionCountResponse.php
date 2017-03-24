<?php

namespace SellerWorks\Amazon\Feeds\Response;

use SellerWorks\Amazon\Common\ResponseInterface;

/**
 * Returns a count of the feeds submitted in the previous 90 days.
 */
final class GetFeedSubmissionCountResponse implements ResponseInterface
{
    /**
     * @var GetFeedSubmissionCountResult
     */
    public $GetFeedSubmissionCountResult;

    /**
     * @var ResponseMetadata
     */
    public $ResponseMetadata;

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {
        return $this->GetFeedSubmissionCountResult;
    }
}
