<?php

namespace SellerWorks\Amazon\Feeds;

use SellerWorks\Amazon\Common\RecordIterator;

/**
 * Implements the plumbing methods of FeedsInterface.
 */
trait FeedsTrait
{
    /**
     * @param  SubmitFeedRequest $request
     * @return SubmitFeedResult
     */
    public function SubmitFeed(Request\SubmitFeedRequest $request)
    {
        return $this->SubmitFeedAsync($request)->wait();
    }

    /**
     * @param  SubmitFeedRequest $request
     * @return PromiseInterface
     */
    public function SubmitFeedAsync(Request\SubmitFeedRequest $request)
    {
        return $this->send($request, 10);
    }

    /**
     * @param  GetFeedSubmissionListRequest $request
     * @return GetFeedSubmissionListResult
     */
    public function GetFeedSubmissionList(Request\GetFeedSubmissionListRequest $request)
    {
        return $this->GetFeedSubmissionListAsync($request)->wait();
    }

    /**
     * @param  GetFeedSubmissionListRequest $request
     * @return PromiseInterface
     */
    public function GetFeedSubmissionListAsync(Request\GetFeedSubmissionListRequest $request)
    {
        return $this->send($request, 10);
    }

    /**
     * @param  GetFeedSubmissionListByNextTokenRequest $request
     * @return GetFeedSubmissionListByNextTokenResult
     */
    public function GetFeedSubmissionListByNextToken(Request\GetFeedSubmissionListByNextTokenRequest $request)
    {
        return $this->GetFeedSubmissionListByNextTokenAsync($request)->wait();
    }

    /**
     * @param  GetFeedSubmissionListByNextTokenRequest $request
     * @return PromiseInterface
     */
    public function GetFeedSubmissionListByNextTokenAsync(Request\GetFeedSubmissionListByNextTokenRequest $request)
    {
        return $this->send($request, 10);
    }

    /**
     * @param  GetFeedSubmissionCountRequest $request
     * @return GetFeedSubmissionCountResult
     */
    public function GetFeedSubmissionCount(Request\GetFeedSubmissionCountRequest $request)
    {
        return $this->GetFeedSubmissionCountAsync($request)->wait();
    }

    /**
     * @param  GetFeedSubmissionCountRequest $request
     * @return PromiseInterface
     */
    public function GetFeedSubmissionCountAsync(Request\GetFeedSubmissionCountRequest $request)
    {
        return $this->send($request, 10);
    }

    /**
     * @param  CancelFeedSubmissionsRequest $request
     * @return CancelFeedSubmissionsResult
     */
    public function CancelFeedSubmissions(Request\CancelFeedSubmissionsRequest $request)
    {
        return $this->CancelFeedSubmissionsAsync($request)->wait();
    }

    /**
     * @param  CancelFeedSubmissionsRequest $request
     * @return PromiseInterface
     */
    public function CancelFeedSubmissionsAsync(Request\CancelFeedSubmissionsRequest $request)
    {
        return $this->send($request, 10);
    }

    /**
     * @param  GetFeedSubmissionResultRequest $request
     * @return GetFeedSubmissionResultResult
     */
    public function GetFeedSubmissionResult(Request\GetFeedSubmissionResultRequest $request)
    {
        return $this->GetFeedSubmissionResultAsync($request)->wait();
    }

    /**
     * @param  GetFeedSubmissionResultRequest $request
     * @return PromiseInterface
     */
    public function GetFeedSubmissionResultAsync(Request\GetFeedSubmissionResultRequest $request)
    {
        return $this->send($request, 10);
    }
}
