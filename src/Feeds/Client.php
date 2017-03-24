<?php

namespace SellerWorks\Amazon\Feeds;

use SellerWorks\Amazon\Common\AbstractClient;
use SellerWorks\Amazon\Credentials\CredentialsInterface;

/**
 * Feeds API
 *
 * The Amazon MWS Feeds API section of the Amazon Marketplace Web Service (Amazon MWS) API lets you upload inventory
 * and order data to Amazon. You can also use the Amazon MWS Feeds API section to get information about the processing
 * of feeds.
 *
 * The process for submitting feeds is as follows:
 *
 * 1. Submit an XML or flat file using the SubmitFeed operation along with an encrypted header and all required metadata,
 * including a value from the FeedType. As with all submissions to Amazon MWS, you must also include authentication
 * information. The SubmitFeed operation returns a FeedSubmissionId, which you can use to periodically check the status
 * of the feed using the GetFeedSubmissionList operation.
 *
 * 2. If Amazon MWS is still processing a request, the FeedProcessingStatus element of the GetFeedSubmissionList operation
 * returns a status of _IN_PROGRESS_. If the processing is complete, a status of _DONE_ is returned.
 *
 * 3. When the feed processing is complete, you can use the GetFeedSubmissionResult operation to receive a processing
 * report that describes which records in the feed were successful and which records generated errors. Note that you
 * have to set up a stream that Amazon MWS uses to write out the report when you submit the GetFeedSubmissionResult
 * operation. Use the Amazon MWS Feeds API section client library code for the GetFeedSubmissionResult operation to
 * create the stream.
 *
 * 4. Analyze the processing report, correct any errors in the file or transmission, and resubmit the feed using the
 * SubmitFeed operation. Repeat the process until there are no errors in the processing report. When the processing
 * report is error free, the transmission is complete.
 *
 * @method  SubmitFeed                        Uploads a feed for processing by Amazon MWS.
 * @method  GetFeedSubmissionList             Returns a list of all feed submissions submitted in the previous 90 days.
 * @method  GetFeedSubmissionListByNextToken  Returns a list of feed submissions using the NextToken parameter.
 * @method  GetFeedSubmissionCount            Returns a count of the feeds submitted in the previous 90 days.
 * @method  CancelFeedSubmissions             Cancels one or more feed submissions and returns a count of the feed submissions that were canceled.
 * @method  GetFeedSubmissionResult           Returns the feed processing report and the Content-MD5 header.
 *
 * @url http://docs.developer.amazonservices.com/en_US/feeds/Feeds_Overview.html
 * @version 2009-01-01
 */
class Client extends AbstractClient implements FeedsInterface
{
    /**
     * Import the Feeds API plumbing methods.
     *
     * @method  SubmitFeed                        Uploads a feed for processing by Amazon MWS.
     * @method  GetFeedSubmissionList             Returns a list of all feed submissions submitted in the previous 90 days.
     * @method  GetFeedSubmissionListByNextToken  Returns a list of feed submissions using the NextToken parameter.
     * @method  GetFeedSubmissionCount            Returns a count of the feeds submitted in the previous 90 days.
     * @method  CancelFeedSubmissions             Cancels one or more feed submissions and returns a count of the feed submissions that were canceled.
     * @method  GetFeedSubmissionResult           Returns the feed processing report and the Content-MD5 header.
     * 
     * @method  SubmitFeedAsync
     * @method  GetFeedSubmissionListAsync
     * @method  GetFeedSubmissionListByNextTokenAsync
     * @method  GetFeedSubmissionCountAsync
     * @method  CancelFeedSubmissionsAsync
     * @method  GetFeedSubmissionResultAsync
     */
    use FeedsTrait;

    /**
     * MWS Service definitions.
     */
    const MWS_PATH    = '/Feeds/2009-01-01/';
    const MWS_VERSION = '2009-01-01';

    /**
     * {@inheritDoc}
     */
    public function __construct(CredentialsInterface $credentials)
    {
        parent::__construct($credentials);

        $this->serializer = new Serializer\Serializer;
    }
}
