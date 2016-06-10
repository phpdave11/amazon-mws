<?php

declare(strict_types=1);

namespace SellerWorks\Amazon\MWS\FulfillmentInbound;

use Closure;
use ReflectionProperty;
use Sabre\Xml\Reader;
use SellerWorks\Amazon\MWS\Common\Responses\ErrorResponse;
use SellerWorks\Amazon\MWS\Common\Results\Error;
use SellerWorks\Amazon\MWS\FulfillmentInbound\Responses;
use SellerWorks\Amazon\MWS\FulfillmentInbound\Results;
use SellerWorks\Amazon\MWS\FulfillmentInbound\Types;

/**
 * Defines how to deserialize xml using Sabre\Xml
 */
class XmlService extends \Sabre\Xml\Service
{
    /**
     * @const string
     */
    const NS = 'http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/';

    /**
     * Add all objects to the service.
     */
    public function __construct()
    {
        $namespace = sprintf('{%s}', static::NS);

        $this->elementMap = [
            // Response objects.
            "{$namespace}CreateInboundShipmentPlanResponse" => $this->mapObject(Responses\CreateInboundShipmentPlanResponse::class),
            "{$namespace}CreateInboundShipmentResponse" => $this->mapObject(Responses\CreateInboundShipmentResponse::class),
            "{$namespace}GetPrepInstructionsForASINResponse" => $this->mapObject(Responses\GetPrepInstructionsForASINResponse::class),
            "{$namespace}GetPrepInstructionsForSKUResponse" => $this->mapObject(Responses\GetPrepInstructionsForSKUResponse::class),
            "{$namespace}GetServiceStatusResponse" => $this->mapObject(Responses\GetServiceStatusResponse::class),
            "{$namespace}ListInboundShipmentItemsResponse" => $this->mapObject(Responses\ListInboundShipmentItemsResponse::class),
            "{$namespace}ListInboundShipmentsResponse" => $this->mapObject(Responses\ListInboundShipmentsResponse::class),
            "{$namespace}ListInboundShipmentsByNextTokenResponse" => $this->mapObject(Responses\ListInboundShipmentsByNextTokenResponse::class),
            "{$namespace}UpdateInboundShipmentResponse" => $this->mapObject(Responses\UpdateInboundShipmentResponse::class),
            "{$namespace}ErrorResponse" => $this->mapObject(ErrorResponse::class),


            // Result objects.
            "{$namespace}CreateInboundShipmentPlanResult" => $this->mapObject(Results\CreateInboundShipmentPlanResult::class),
//            "{$namespace}CreateInboundShipmentResult" => $this->mapObject(Results\CreateInboundShipmentResult::class),
            "{$namespace}GetServiceStatusResult" => $this->mapObject(Results\GetServiceStatusResult::class),
//            "{$namespace}GetPrepInstructionsForASINResult" => $this->mapObject(Results\GetPrepInstructionsForASINResult::class),
//            "{$namespace}GetPrepInstructionsForSKUResult" => $this->mapObject(Results\GetPrepInstructionsForSKUResult::class),
//            "{$namespace}ListInboundShipmentItemsResult" => $this->mapObject(Results\ListInboundShipmentItemsResult::class),
            "{$namespace}ListInboundShipmentsResult" => $this->mapObject(Results\ListInboundShipmentsResult::class),
            "{$namespace}ListInboundShipmentsByNextTokenResult" => $this->mapObject(Results\ListInboundShipmentsResult::class),
//           "{$namespace}UpdateInboundShipmentResult" => $this->mapObject(Results\UpdateInboundShipmentResult::class),
            "{$namespace}Error" => $this->mapObject(Error::class),


            // Collection objects.
            "{$namespace}ASINPrepInstructionsList" => $this->mapCollectionObject("{$namespace}ASINPrepInstructions", Entities\ASINPrepInstructions::class),
//            "{$namespace}AmazonPrepFeesDetailsList" => $this->mapCollectionObject("{$namespace}AmazonPrepFeesDetails", Entities\AmazonPrepFeesDetails::class),
            "{$namespace}ItemData" => $this->mapCollectionObject("{$namespace}member", Entities\InboundShipmentItem::class),
            "{$namespace}InboundShipmentPlans" => $this->mapCollectionObject("{$namespace}member", Entities\InboundShipmentPlan::class),
            "{$namespace}InvalidASINList" => $this->mapCollectionObject("{$namespace}InvalidASIN", Entities\InvalidASIN::class),
            "{$namespace}InvalidSKUList" => $this->mapCollectionObject("{$namespace}InvalidSKU", Entities\InvalidSKU::class),
            "{$namespace}Items" => $this->mapCollectionObject("{$namespace}member", Entities\InboundShipmentPlanItem::class),
            "{$namespace}PrepDetailsList" => $this->mapCollectionObject("{$namespace}PrepDetails", Entities\PrepDetails::class),
            "{$namespace}ShipmentData" => $this->mapCollectionObject("{$namespace}member", Entities\InboundShipmentInfo::class),
            "{$namespace}SKUPrepInstructionsList" => $this->mapCollectionObject("{$namespace}SKUPrepInstructions", Entities\SKUPrepInstructions::class),


            // Type objects.
            "{$namespace}Amount" => $this->mapObject(Entities\Amount::class),
            "{$namespace}ResponseMetadata" => $this->mapObject(Entities\ResponseMetadata::class),
            "{$namespace}ShipFromAddress" => $this->mapObject(Entities\Address::class),
            "{$namespace}ShipToAddress" => $this->mapObject(Entities\Address::class),


            // Lists.
            "{$namespace}PrepInstructionList" => function(Reader $reader) use ($namespace) {
                return \Sabre\Xml\Deserializer\repeatingElements($reader, "{$namespace}PrepInstruction");
            },
        ];
    }

    /**
     * Return new object by closure.
     *
     * @param  string $className
     * @return Closure
     */
    protected function mapObject(string $className): Closure
    {
        $namespace = static::NS;

        return function(Reader $reader) use ($namespace, $className) {
            $object = new $className;
            $values = \Sabre\Xml\Deserializer\keyValue($reader, $namespace);

            foreach ($values as $property => $value) {
                if (property_exists($object, $property)) {
                    $reflection = new ReflectionProperty($object, $property);
                    $reflection->setAccessible(true);
                    $reflection->setValue($object, $value);
                }
            }

            return $object;
        };
    }

    /**
     * Return new collection by closure.
     *
     * @param  string $childElementName
     * @param  string $className
     * @return Closure
     */
    protected function mapCollectionObject(string $childElementName, string $className): Closure
    {
        $namespace = static::NS;

        return function(Reader $reader) use ($childElementName, $className, $namespace) {
            $elementMap = $reader->elementMap;
            $elementMap[$childElementName] = $this->mapObject($className);
            $result = [];

            foreach ($reader->parseGetElements($elementMap) as $element) {
                if ($element['name'] === $childElementName) {
                    $result[] = $element['value'];
                }
            }

            return $result;
        };
    }
}