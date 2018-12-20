<?php

namespace Zete7\BelTransSat\Models;

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
     * @var \Zete7\BelTransSat\Models\RoutesChangesResultCode
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
     * @var \Zete7\BelTransSat\Models\RouteModel[]
     */
    public $routes;

    /**
     * points
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: tns:UpdatedPointData
     *
     * @var \Zete7\BelTransSat\Models\UpdatedPointDataWrapper
     */
    public $points;
}
