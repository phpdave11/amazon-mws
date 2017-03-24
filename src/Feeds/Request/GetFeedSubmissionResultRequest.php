<?php

namespace SellerWorks\Amazon\Feeds\Request;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Returns the feed processing report and the Content-MD5 header.
 */
final class GetFeedSubmissionResultRequest implements RequestInterface
{
    /**
     * @var string
     */
    public $FeedSubmissionId;

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [
            'FeedSubmissionId' => ['type' => 'scalar'],
        ];
    }
}
