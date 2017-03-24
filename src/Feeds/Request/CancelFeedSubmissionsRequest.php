<?php

namespace SellerWorks\Amazon\Feeds\Request;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Cancels one or more feed submissions and returns a count of the feed submissions that were canceled.
 */
final class CancelFeedSubmissionsRequest implements RequestInterface
{
    /**
     * @var array
     */
    public $FeedSubmissionIdList;

    /**
     * @var array
     */
    public $FeedTypeList;

    /**
     * @var DateTimeInterface|string
     */
    public $SubmittedFromDate;

    /**
     * @var DateTimeInterface|string
     */
    public $SubmittedToDate;

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [
            'FeedSubmissionIdList'      => ['type' => 'array'],
            'FeedTypeList'              => ['type' => 'array'],
            'SubmittedFromDate'         => ['type' => 'datetime'],
            'SubmittedToDate'           => ['type' => 'datetime'],
        ];
    }
}
