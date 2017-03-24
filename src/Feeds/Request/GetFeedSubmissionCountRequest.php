<?php

namespace SellerWorks\Amazon\Feeds\Request;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Returns a count of the feeds submitted in the previous 90 days.
 */
final class GetFeedSubmissionCountRequest implements RequestInterface
{
    /**
     * @var array
     */
    public $FeedTypeList;

    /**
     * @var array
     */
    public $FeedProcessingStatusList;

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
            'FeedTypeList'              => ['type' => 'array'],
            'FeedProcessingStatusList'  => ['type' => 'array'],
            'SubmittedFromDate'         => ['type' => 'datetime'],
            'SubmittedToDate'           => ['type' => 'datetime'],
        ];
    }
}
