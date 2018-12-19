<?php

namespace ItCenter\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class PointStatus
{
    /**
     * status
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $status;

    /**
     * deliveryStatus
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $deliveryStatus;

    /**
     * zoneIds
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:string
     *
     * @var string
     */
    public $zoneIds;

    /**
     * route
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:route
     *
     * @var \ItCenter\BelTransSat\Models\RouteModel
     */
    public $route;
}
