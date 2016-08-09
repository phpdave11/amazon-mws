<?php

namespace SellerWorks\Amazon\FulfillmentInbound\Entity;

/**
 * Postal address information.
 */
final class Address
{
    /**
     * @var string
     */
    public $Name;

    /**
     * @var string
     */
    public $AddressLine1;

    /**
     * @var string
     */
    public $AddressLine2;

    /**
     * @var string
     */
    public $City;

    /**
     * @var string
     */
    public $DistrictOrCounty;

    /**
     * @var string
     */
    public $StateOrProvinceCode;

    /**
     * @var string
     */
    public $CountryCode;

    /**
     * @var string
     */
    public $PostalCode;
}
