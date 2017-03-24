<?php

namespace SellerWorks\Amazon\Feeds\Response;

use SellerWorks\Amazon\Common\ResponseInterface;

/**
 * Returns a list of feed submissions using the NextToken parameter.
 */
final class GetFeedSubmissionListByNextTokenResponse implements ResponseInterface
{
    /**
     * @var GetFeedSubmissionListByNextTokenResult
     */
    public $GetFeedSubmissionListByNextTokenResult;

    /**
     * @var ResponseMetadata
     */
    public $ResponseMetadata;

    /**
     * {@inheritDoc}
     */
    public function getResult()
    {
        return $this->GetFeedSubmissionListByNextTokenResult;
    }
}
