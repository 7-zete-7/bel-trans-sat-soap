<?php

namespace ItCenter\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class DataUpdatesModel
{
    /**
     * code
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:routesChangesResultCode
     *
     * @var \ItCenter\BelTransSat\Models\RoutesChangesResultCode
     */
    public $code;

    /**
     * timestamp
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:long
     *
     * @var int
     */
    public $timestamp;

    /**
     * routes
     *
     * The property has the following characteristics/restrictions:
     *
     * @var \ItCenter\BelTransSat\Models\RouteWrapper[]
     */
    public $routes;

    /**
     * points
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:UpdatedPointData
     *
     * @var \ItCenter\BelTransSat\Models\UpdatedPointDataWrapper
     */
    public $points;
}
