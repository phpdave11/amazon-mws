<?php

namespace SellerWorks\Amazon\Feeds\Request;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Uploads a feed for processing by Amazon MWS.
 */
final class SubmitFeedRequest implements RequestInterface
{
    /**
     * @var string
     */
    public $FeedContent;

    /**
     * @var string
     */
    public $FeedType;

    /**
     * @var array
     */
    public $MarketplaceIdList;

    /**
     * @var boolean
     */
    public $PurgeAndReplace;

    /**
     * @var string
     */
    public $ContentMD5Value;

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [
            'FeedContent'           => ['type' => 'object'],
            'FeedType'              => ['type' => 'string'],
            'MarketplaceIdList'     => ['type' => 'array'],
            'PurgeAndRaplce'        => ['type' => 'boolean'],
            'ContentMD5Value'       => ['type' => 'string'],
        ];
    }
}
