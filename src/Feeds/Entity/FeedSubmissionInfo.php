<?php

namespace SellerWorks\Amazon\Feeds\Entity;

/**
 * Feed submission information.
 */
final class FeedSubmissionInfo
{
    /**
     * @var string
     */
    public $FeedSubmissionId;

    /**
     * @var string
     */
    public $FeedType;

    /**
     * @var string
     */
    public $SubmittedDate;

    /**
     * @var string
     */
    public $FeedProcessingStatus;

    /**
     * @var string
     */
    public $StartedProcessingDate;

    /**
     * @var string
     */
    public $CompletedProcessingDate;
}
