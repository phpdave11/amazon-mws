<?php

namespace SellerWorks\Amazon\Feeds\Request;

use SellerWorks\Amazon\Common\RequestInterface;

/**
 * Returns a list of feed submissions using the NextToken parameter.
 */
final class GetFeedSubmissionListByNextTokenRequest implements RequestInterface
{
    /**
     * @var string
     */
    public $NextToken;

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {
        return [
            'NextToken' => ['type' => 'scalar'],
        ];
    }
}
