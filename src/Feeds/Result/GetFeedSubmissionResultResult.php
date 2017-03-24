<?php

namespace SellerWorks\Amazon\Feeds\Result;

use SellerWorks\Amazon\Common\IterableResultInterface;
use SellerWorks\Amazon\Common\IterableResultTrait;

/**
 * GetFeedSubmissionResult result object.
 */
final class GetFeedSubmissionResultResult implements IterableResultInterface
{
    /**
     * @property  $client
     * @method  setClient
     * @method  getIterator
     */
    use IterableResultTrait;

    /**
     * @var string
     */
    public $LastUpdatedBefore;

    /**
     * @var string
     */
    public $CreatedBefore;

    /**
     * @var Collection<Feed>
     */
    public $Feeds;

    /**
     * IterableResultInterface::getNextMethod
     */
    public function getNextMethod()
    {
        return 'none';
    }

    /**
     * IterableResultInterface::getNextRequest
     */
    public function getNextRequest()
    {
        return null;
    }

    /**
     * IterableResultInterface::getRecords
     */
    public function getRecords()
    {
        return $this->Feeds?: [];
    }
}
