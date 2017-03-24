<?php

namespace SellerWorks\Amazon\Feeds\Result;

use SellerWorks\Amazon\Common\IterableResultInterface;
use SellerWorks\Amazon\Common\IterableResultTrait;

/**
 * SubmitFeed result object.
 */
final class SubmitFeedResult implements IterableResultInterface
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
