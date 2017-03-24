<?php

namespace SellerWorks\Amazon\Feeds\Response;

use SellerWorks\Amazon\Common\ResponseInterface;

/**
 * Returns the feed processing report and the Content-MD5 header.
 */
final class GetFeedSubmissionResultResponse implements ResponseInterface
{
    /**
     * @var GetFeedSubmissionResultResult
     */
    public $GetFeedSubmissionResultResult;

    /**
     * @var ResponseMetadata
     */
    public $ResponseMetadata;

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {
        return $this->GetFeedSubmissionResultResult;
    }
}
