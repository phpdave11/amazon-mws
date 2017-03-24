<?php

namespace SellerWorks\Amazon\Feeds\Request;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Returns a list of all feed submissions submitted in the previous 90 days.
 */
final class GetFeedSubmissionListRequest implements RequestInterface
{
    /**
     * @var array
     */
    public $FeedSubmissionIdList;

    /**
     * @var int
     */
    public $MaxCount;

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
            'FeedSubmissionIdList'      => ['type' => 'datetime'],
            'MaxCount'                  => ['type' => 'scalar'],
            'FeedTypeList'              => ['type' => 'array'],
            'FeedProcessingStatusList'  => ['type' => 'array'],
            'SubmittedFromDate'         => ['type' => 'datetime'],
            'SubmittedToDate'           => ['type' => 'datetime'],
        ];
    }
}
