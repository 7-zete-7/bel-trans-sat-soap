<?php

namespace Zete7\BelTransSat\Models;

/**
 * This class is generated from the following WSDL:
 * http://server-01.beltranssat.by:22899/ws/vrp?xsd=1
 */
class GetRoutePointsRequest
{
    /**
     * routeId
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:int
     *
     * @var int
     */
    public $routeId = null;

    /**
     * addDetailedData
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $addDetailedData = null;

    /**
     * addToken
     *
     * The property has the following characteristics/restrictions:
     * - SchemaType: xs:boolean
     *
     * @var boolean
     */
    public $addToken = null;
}
