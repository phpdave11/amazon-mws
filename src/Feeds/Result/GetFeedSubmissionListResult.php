<?php

namespace SellerWorks\Amazon\Feeds\Result;

use SellerWorks\Amazon\Common\IterableResultInterface;
use SellerWorks\Amazon\Common\IterableResultTrait;
use SellerWorks\Amazon\Common\RecordIterator;
use SellerWorks\Amazon\Feeds\Request\GetFeedSubmissionListByNextTokenRequest;

/**
 * GetFeedSubmissionList result object.
 */
final class GetFeedSubmissionListResult implements IterableResultInterface
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
    public $NextToken;

    /**
     * @var string
     */
    public $LastUpdatedBefore;

    /**
     * @var string
     */
    public $CreatedBefore;

    /**
     * @var Array<Feed>
     */
    public $Feeds;

    /**
     * IterableResultInterface::getNextMethod
     */
    public function getNextMethod()
    {
        return 'GetFeedSubmissionListByNextToken';
    }

    /**
     * IterableResultInterface::getNextRequest
     */
    public function getNextRequest()
    {
        if (empty($this->NextToken)) {
            return null;
        }

        $request = new GetFeedSubmissionListByNextTokenRequest;
        $request->NextToken = $this->NextToken;

        return $request;
    }

    /**
     * IterableResultInterface::getRecords
     */
    public function getRecords()
    {
        return $this->Feeds?: [];
    }
}
B