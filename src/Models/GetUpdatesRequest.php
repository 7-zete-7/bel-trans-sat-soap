<?php

namespace Zete7\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class GetUpdatesRequest
{
    /**
     * routesDeliveryDate
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $routesDeliveryDate = null;

    /**
     * routesLastTimestamp
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $routesLastTimestamp = null;

    /**
     * pointsLastTimestamp
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:dateTime
     *
     * @var string
     */
    public $pointsLastTimestamp = null;

    /**
     * routeId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $routeId = null;
}
