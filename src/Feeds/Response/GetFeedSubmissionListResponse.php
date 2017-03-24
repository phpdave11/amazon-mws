<?php

namespace SellerWorks\Amazon\Feeds\Response;

use SellerWorks\Amazon\Common\ResponseInterface;

/**
 * Returns a list of all feed submissions submitted in the previous 90 days.
 */
final class GetFeedSubmissionListResponse implements ResponseInterface
{
    /**
     * @var GetFeedSubmissionListResult
     */
    public $GetFeedSubmissionListResult;

    /**
     * @var ResponseMetadata
     */
    public $ResponseMetadata;

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {
        return $this->GetFeedSubmissionListResult;
    }
}
