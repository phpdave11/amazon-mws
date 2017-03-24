<?php

namespace SellerWorks\Amazon\Feeds;

/**
 * Amazon MWS Feeds
 *
 * The Amazon MWS Feeds API section of the Amazon Marketplace Web Service (Amazon MWS) API lets you upload inventory
 * and order data to Amazon. You can also use the Amazon MWS Feeds API section to get information about the processing
 * of feeds.
 *
 * @url http://docs.developer.amazonservices.com/en_US/feeds/Feeds_Overview.html
 * @version 2009-01-01
 */
interface FeedsInterface
{
    /**
     * Uploads a feed for processing by Amazon MWS.
     *
     * @see http://docs.developer.amazonservices.com/en_US/feeds/Feeds_SubmitFeed.html
     *
     * @param  SubmitFeedRequest $request
     * @return SubmitFeedResult
     */
    function SubmitFeed(Request\SubmitFeedRequest $request);

    /**
     * @param  SubmitFeedRequest $request
     * @return PromiseInterface
     */
    function SubmitFeedAsync(Request\SubmitFeedRequest $request);

    /**
     * Returns a list of all feed submissions submitted in the previous 90 days.
     *
     * @see http://docs.developer.amazonservices.com/en_US/feeds/Feeds_GetFeedSubmissionList.html
     *
     * @param  GetFeedSubmissionListRequest $request
     * @return GetFeedSubmissionListResult
     */
    function GetFeedSubmissionList(Request\GetFeedSubmissionListRequest $request);

    /**
     * @param  GetFeedSubmissionListRequest $request
     * @return PromiseInterface
     */
    function GetFeedSubmissionListAsync(Request\GetFeedSubmissionListRequest $request);

    /**
     * Returns a list of feed submissions using the NextToken parameter.
     *
     * @see http://docs.developer.amazonservices.com/en_US/feeds/Feeds_GetFeedSubmissionListByNextToken.html
     *
     * @param  GetFeedSubmissionListByNextTokenRequest $request
     * @return GetFeedSubmissionListByNextTokenResult
     */
    function GetFeedSubmissionListByNextToken(Request\GetFeedSubmissionListByNextTokenRequest $request);

    /**
     * @param  GetFeedSubmissionListByNextTokenRequest $request
     * @return PromiseInterface
     */
    function GetFeedSubmissionListByNextTokenAsync(Request\GetFeedSubmissionListByNextTokenRequest $request);

    /**
     * Returns a count of the feeds submitted in the previous 90 days.
     *
     * @see http://docs.developer.amazonservices.com/en_US/feeds/Feeds_GetFeedSubmissionCount.html
     *
     * @param  GetFeedSubmissionCountRequest $request
     * @return GetFeedSubmissionCountResult
     */
    function GetFeedSubmissionCount(Request\GetFeedSubmissionCountRequest $request);

    /**
     * @param  GetFeedSubmissionCountRequest $request
     * @return GetFeedSubmissionCountResult
     */
    function GetFeedSubmissionCountAsync(Request\GetFeedSubmissionCountRequest $request);

    /**
     * Cancels one or more feed submissions and returnsPromiseInterface
     *
     * @see http://docs.developer.amazonservices.com/en_US/feeds/Feeds_CancelFeedSubmissions.html
     *
     * @param  CancelFeedSubmissionsRequest $request
     * @return CancelFeedSubmissionsResult
     */
    function CancelFeedSubmissions(Request\CancelFeedSubmissionsRequest $request);

    /**
     * @param  CancelFeedSubmissionsRequest $request
     * @return PromiseInterface
     */
    function CancelFeedSubmissionsAsync(Request\CancelFeedSubmissionsRequest $request);

    /**
     * Returns the feed processing report and the Content-MD5 header.
     *
     * @see http://docs.developer.amazonservices.com/en_US/feeds/Feeds_GetFeedSubmissionResult.html
     *
     * @param  GetFeedSubmissionResultRequest $request
     * @return GetFeedSubmissionResultResult
     */
    function GetFeedSubmissionResult(Request\GetFeedSubmissionResultRequest $request);

    /**
     * @param  GetFeedSubmissionResultRequest $request
     * @return PromiseInterface
     */
    function GetFeedSubmissionResultAsync(Request\GetFeedSubmissionResultRequest $request);
}
